<?php

namespace App\Admin\Controllers;

use App\Admin\Tools\OdStatus;
use App\Model\ChinaAreaAdmin;
use App\Model\Orders;

use App\Model\Service;
use Encore\Admin\Form;
use App\Admin\ExcelExpoter;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class OrderController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('订单管理');
            $content->description('列表');
            $content->body('<div class="modal fade" id="goudan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');
            $content->body('<div class="modal fade" id="mmda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');
            $content->body('<div class="modal fade" id="ymd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Orders::class, function (Grid $grid) {
//            $grid->exporter(new ExcelExpoter());
            Admin::script('
                var url = window.location.search;
                if (url=="" || url.indexOf("status=all") > 0 || url.indexOf("status=0") == -1)
                {
                    $("#lalala0").removeClass("active");
                }
                ');
            $grid->paginate(10);
            $grid->model()->status(\Request::get('status'));

            $grid->tools(function ($tools) {

                $tools->append(new OdStatus());

            });
            $grid->disableCreation();
            $grid->number('订单编号')->sortable();
            $grid->orthodontics_id('正畸病例编号')->sortable();
            $grid->Orthodontics()->service_id('服务内容')->display(function ($content) {
                if (strlen($content)>1)
                {
                    $service = explode(',',$content);
                }else{
                    $service[0] = $content;
                }
                $data = Service::select('service_name')->whereIn('id',$service)->get()->toArray();
                $name='';
                for ($i=0;$i<sizeof($data);$i++)
                {
                    $name.=$data[$i]['service_name'].'&ensp;&ensp;';
                }
                return $name;
            });
            $grid->status('订单状态')->display(function ($status) {
                if ($status == '0')
                {
                    return '待支付';
                }elseif($status=='1'){
                    return '已支付';
                }elseif($status=='2'){
                    return '已接单';
                }elseif($status=='3'){
                    return '已提交设计';
                }else{
                    return '已完成';
                }
            });
            $grid->amount('金额')->sortable();
            $grid->Doctors()->province('所属地区');
            $grid->create_time('创建时间')->display(function ($time) {
                return date('Y-m-d H:i:s',$time);
            })->sortable();
            $grid->pay_time('支付时间')->display(function ($time) {
                return date('Y-m-d H:i:s',$time);
            })->sortable();
            $grid->actions(function ($actions) {

                $actions->disableEdit();

                $actions->disableDelete();

                $actions->append('&ensp;<a class="<a href="javascript:void(0);" order-id="'.$actions->row->number.'" case-id="'.$actions->row->orthodontics_id.'" onclick="order(this.getAttribute('."'order-id'".','."'case-id'".'))" ><i class="fa fa-eye"></i></a>');

                $actions->append('&ensp;');

                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->orthodontics_id.'" onclick="del(this.getAttribute('."'data-id'".'))" class="grid-row-delete"><i class="fa fa-trash"></i></a>');
            });

            $grid->filter(function ($filter) {
                $filter->where(function ($query) {
                    $query->where('number', 'like', "%{$this->input}%")
                        ->orWhere('orthodontics_id', 'like', "%{$this->input}%");
                },'')->placeholder('请输入订单号或病历编号');

                $filter->equal('Doctors.province','省/市')->select(ChinaAreaAdmin::Prp()->pluck('name','name'));
            });

//            $grid->created_at();
//            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Orders::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}

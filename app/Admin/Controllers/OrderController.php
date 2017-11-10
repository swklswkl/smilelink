<?php

namespace App\Admin\Controllers;

use App\Model\Orders;

use Encore\Admin\Form;
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

            $content->header('header');
            $content->description('description');

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
            $grid->disableCreation();
            $grid->number('订单编号');
            $grid->orthodontics_id('正畸病例编号');
            $grid->column('CaseHistory.name','患者姓名');
            $grid->service_content('服务内容')->display(function ($content) {
                if($content=='0') return '3D模型测量分析'; elseif ($content=='1') return 'X光片测量分析'; elseif ($content=='2') return '矫治方案设计';else return '3D模拟治疗方案';
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
            $grid->create_time('创建时间')->display(function ($time) {
                return date('Y-m-d H:i:s',$time);
            });
            $grid->pay_time('支付时间')->display(function ($time) {
                return date('Y-m-d H:i:s',$time);
            });
            $grid->actions(function ($actions) {

                $actions->disableEdit();

                $actions->disableDelete();

                $actions->append('&ensp;<a class="<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="cx(this.getAttribute('."'data-id'".'))" ><i class="fa fa-eye"></i></a>');

                $actions->append('&ensp;');

                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="del(this.getAttribute('."'data-id'".'))" class="grid-row-delete"><i class="fa fa-trash"></i></a>');
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

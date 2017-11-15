<?php

namespace App\Admin\Controllers;

use App\Admin\Tools\OcStatus;
use App\Model\Orthodontics;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Request;

class OrthodonicCaseController extends Controller
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
            $content->header('正畸病历');
            $content->description('列表');
            $content->body('<div class="modal fade" id="goudan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');
            $content->body('<div class="modal fade" id="mmda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');
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
        return Admin::grid(Orthodontics::class, function (Grid $grid) {

            $grid->paginate(10);

            $grid->disableCreation();

            $grid->model()->status(Request::get('status'));

            $grid->tools(function ($tools) {

                $tools->append(new OcStatus());

            });

            $grid->actions(function ($actions) {

                $actions->disableEdit();

                $actions->disableDelete();

                $actions->append('&ensp;<a class="<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="cx(this.getAttribute('."'data-id'".'))" ><i class="fa fa-eye"></i></a>');

                $actions->append('&ensp;');

                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="del(this.getAttribute('."'data-id'".'))" class="grid-row-delete"><i class="fa fa-trash"></i></a>');
            });

            $grid->id('编号')->sortable();

            $grid->name('患者姓名');

            $grid->status('病历状态')->display(function ($status) {

                if ($status == '1')
                {
                    return '档案已建立';
                }elseif($status=='2'){
                    return '治疗中';
                }else{
                    return '已完成';
                }

            });

            $grid->create_time('创建时间')->display(function ($create_time) {

                return date('Y-m-d H:i:s',$create_time);

            })->sortable();

            $grid->filter(function ($filter) {

//                $filter->disableIdFilter();

                $filter->where(function ($query) {

                    $query->where('id', 'like', "%{$this->input}%")
                        ->orWhere('name', 'like', "%{$this->input}%");

                },'')->placeholder('请输入档案编号或患者姓名搜索');

            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Orthodontics::class, function (Form $form) {

            $form->display('id', 'ID');

//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');
        });
    }
}

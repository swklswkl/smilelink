<?php

namespace App\Admin\Controllers;

use App\Model\Orthodontics;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

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
            $content->header('header');
            $content->description('description');
            $content->body('<div class="modal fade" id="goudan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>');

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
            Admin::js('js/odel.js');
            Admin::js("js/holder.min.js");
            $grid->disableCreation();
            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $actions->disableDelete();
                $actions->append('&ensp;<a class="<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="cx(this.getAttribute('."'data-id'".'))" ><i class="fa fa-eye"></i></a>');
                $actions->append('&ensp;<a class="<a href=""><i class="fa fa-edit"></i></a>');
                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="del(this.getAttribute('."'data-id'".'))" class="grid-row-delete"><i class="fa fa-trash"></i></a>');
//                $actions->append('<a class="btn btn-danger" href="#" role="button">删除</a>');
            });
            $grid->id('编号')->sortable();
            $grid->name('患者姓名');
            $grid->create_time('创建时间')->display(function ($create_time) {
                return date('Y-m-d H:i:s',$create_time);
            })->sortable();
            $grid->status('病历状态')->display(function ($status) {
                return $status == '1' ? '档案已建立' : '治疗中';
            });
            $grid->service_id('治疗方式');
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
        return Admin::form(Orthodontics::class, function (Form $form) {

            $form->display('id', 'ID');

//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');
        });
    }
}

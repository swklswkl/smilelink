<?php

namespace App\Admin\Controllers;

use App\Model\Experts;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ExpertController extends Controller
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

            $content->header('专家管理');
            $content->description('');

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
        return Admin::grid(Experts::class, function (Grid $grid) {

            $grid->avatar('头像')->image(env('APP_URL').'/uploads/',40,40);
            $grid->name('姓名');
            $grid->mobilephone('手机号码');
            $grid->sex('性别')->display(function ($sex) {
                return $sex ? '女' : '男';
            });
            $grid->province('省份/直辖市');
            $grid->amount('余额')->sortable();
            $grid->create_time('注册时间')->display(function ($create_time) {
                return date('Y-m-d H:i:s',$create_time);
            })->sortable();
            $grid->last_ip('IP地址');
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->where(function ($query) {
                    $query->where('name', 'like', "%{$this->input}%")
                        ->orWhere('mobilephone', 'like', "%{$this->input}%");
                },'')->placeholder('请输入姓名或手机号搜索');
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
        return Admin::form(Experts::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}

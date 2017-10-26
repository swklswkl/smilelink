<?php

namespace App\Admin\Controllers;

use App\Model\Doctors;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class DoctorController extends Controller
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

        $content->header('医生管理');
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

            $content->header('医生编辑');
            $content->description('');
//            $content->name();
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
        return Admin::grid(Doctors::class, function (Grid $grid) {

//            $grid->id('ID')->sortable();
            $grid->avatar('头像')->image(env('APP_URL').'/uploads/',40,40);
            $grid->name('姓名');
            $grid->mobilephone('手机号码');
            $grid->sex('性别')->display(function ($sex) {
                return $sex ? '女' : '男';
            });
            $grid->province('省份/直辖市');
            $grid->amount('金额')->sortable();
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
        return Admin::form(Doctors::class, function (Form $form) {
            $form->image('avatar','头像');
            $form->text('name','姓名');
            $form->mobile('mobilephone','手机号码')->options(['mask' => '99999999999']);
            $form->select('province','省份')->options(['上海' => '上海', '北京' => '北京','dd' => 'dd']);
            $form->currency('amount','金额')->symbol('￥');
            $form->radio('sex','性别')->options(['0' => '男', '1'=> '女'])->default('0');
            $form->display('create_time','注册时间')->with(function ($create_time) {
                if ($create_time) {return date('Y-m-d H:i:s',$create_time);}
                return date('Y-m-d H:i:s',time());
            });
        });
    }
}

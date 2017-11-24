<?php

namespace App\Admin\Controllers;

use App\Model\Experts;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use App\Model\ChinaAreaAdmin;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Input;

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
        return Admin::grid(Experts::class, function (Grid $grid) {
            $grid->paginate(10);
//            $grid->avatar('头像')->image(env('APP_URL').'/uploads/',40,40);
//            $grid->name('姓名');
//            $grid->mobilephone('手机号码');
//            $grid->sex('性别')->display(function ($sex) {
//                return $sex ? '女' : '男';
//            });
//            $grid->province('省份/直辖市');
//            $grid->amount('余额')->sortable();
//            $grid->create_time('注册时间')->display(function ($create_time) {
//                return date('Y-m-d H:i:s',$create_time);
//            })->sortable();
//            $grid->last_ip('IP地址');
//            $grid->filter(function ($filter) {
//                $filter->disableIdFilter();
//                $filter->where(function ($query) {
//                    $query->where('name', 'like', "%{$this->input}%")
//                        ->orWhere('mobilephone', 'like', "%{$this->input}%");
//                },'')->placeholder('请输入姓名或手机号搜索');
//            });

            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $actions->disableDelete();
                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="zjcx(this.getAttribute('."'data-id'".'))" ><i class="fa fa-eye"></i></a>');
                $actions->append('&ensp;');
//                $actions->append('&ensp;<a href="javascript:void(0);" data-id="'.$actions->row->id.'" onclick="ysdel(this.getAttribute('."'data-id'".'))"><i class="fa fa-trash"></i></a>');
            });
//            $grid->avatar('头像')->image(env('APP_URL').'/uploads/',40,40);
            $grid->name('姓名');
            $grid->mobilephone('手机号码');
            $grid->sex('性别')->display(function ($sex) {
                return $sex ? '女' : '男';
            });
            $grid->province('省份');
            $grid->city('城市');
//            $grid->amount('余额')->sortable();
            $grid->create_time('注册时间')->display(function ($create_time) {
                return date('Y-m-d H:i:s',$create_time);
            })->sortable();
            $grid->last_ip('IP地址');

            $grid->filter(function ($filter) {
                $filter->where(function ($query) {
                    $query->where('name', 'like', "%{$this->input}%")
                        ->orWhere('mobilephone', 'like', "%{$this->input}%");
                },'')->placeholder('请输入姓名或手机号搜索');

                $filter->equal('province','省/市')->select(ChinaAreaAdmin::Prp()->pluck('name','name'));
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

            $form->text('name','姓名')->rules('required', [
                'required'=>'姓名不能为空'
            ]);

            $form->text('mobilephone','手机号码')->rules('required|unique:sl_doctors|regex:/^1[34578]\d{9}$/', [
                'required'=>'手机号码不能为空',
                'unique'=>'手机号码已存在',
                'regex'=>'请输入正确的手机号码'
            ]);

            $form->password('password','密码')->rules('required|min:6', [
                'required'=>'密码不能为空',
                'min'=>'密码不能小于6位'
            ]);

            $form->select('province','省份')->options(ChinaAreaAdmin::province()->pluck('name','id'))
                ->load('city', '/admin/api/china/city')
                ->load('test', '/api/china/city');

            $form->select('city','市/区')->options(function ($id) {
                $data = ChinaAreaAdmin::options($id);
                return $data;
            });
            $form->image('certificate','医师资格证');
            $form->text('work_unit','现工作单位');
            $form->text('working_years','工作年限');
            $form->saving(function (Form $form)
            {
                $form->password = md5($form->password);
                if ($_SERVER['REDIRECT_URL'] == '/admin/experts')
                {
                    $arr = ['0'=>'',"1"=>'', "2"=>"北京","3"=>"安徽","4"=>"福建","5"=>"甘肃","6"=>"广东","7"=>"广西","8"=>"贵州","9"=>"海南","10"=>"河北","11"=>"河南","12"=>"黑龙江","13"=>"湖北","14"=>"湖南","15"=>"吉林","16"=>"江苏","17"=>"江西","18"=>"辽宁","19"=>"内蒙古","20"=>"宁夏","21"=>"青海","22"=>"山东","23"=>"山西","24"=>"陕西","25"=>"上海","26"=>"四川","27"=>"天津","28"=>"西藏","29"=>"新疆","30"=>"云南","31"=>"浙江","32"=>"重庆","33"=>"香港","34"=>"澳门","35"=>"台湾"];
                    $data = intval($form->province);
                    $form->province = $arr[$data];
                    $num = intval($form->city);
                    $city = ChinaAreaAdmin::cxsf($num);
                    $form->city = $city;
                }
            });

            $form->currency('amount','价格')->symbol('￥');

            $form->radio('sex','性别')->options(['0' => '男', '1'=> '女'])->default('0');

            $form->hidden('create_time')->value(time());
        });
    }

    public function upzgz(Request $request)
    {
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $photo = $request->file('file');
            $store_result = \Storage::disk('public')->put('uploads',$photo);
            $output = [
                'image_url' => env('APP_URL').'/'.$store_result
            ];
            Experts::where(['id'=>Input::get('id')])->update(['certificate' => $output['image_url']]);
        }
        return $this->errorResponse('未获取到上传文件或上传过程出错');
    }
}

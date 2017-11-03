<?php

namespace App\Admin\Controllers;

use App\Admin\Tools\UserGender;
use App\Model\CaseHistory;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Request;

class CaseHistoryController extends Controller
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

            $content->header('病历管理');
            $content->description('全部病历');

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

            $content->header('病历管理');
            $content->description('病历编辑');
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

            $content->header('病历管理');
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
        return Admin::grid(CaseHistory::class, function (Grid $grid) {
            $grid->model()->status(Request::get('status'));
            $grid->tools(function ($tools) {
                $tools->append(new UserGender());
            });
            $grid->disableCreation();
            $grid->archives_number('病历编号')->sortable();
            $grid->name('患者姓名');
            $grid->create_time('创建时间')->display(function ($create_time) {
                return date('Y-m-d H:i:s',$create_time);
            })->sortable();
            $grid->status('病历状态')->display(function ($status) {
                return $status=='1' ? '档案已建立' : '治疗中';
            });
            $grid->zhiliao_status('治疗方式');
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
        return Admin::form(CaseHistory::class, function (Form $form) {
            Admin::script("
                var all = document.getElementsByClassName('dywe');
                for (var i =0;i<all.length;i++)
                {
                    (function (i) {
                        var f = all[i].parentElement;
                        var a = f.firstElementChild;
                        for (var j=0;j< f.children.length;j++)
                        {
                            f.children[j].style.display = 'none';
                            a.innerHTML = '+';
                            f.children[0].style.display = 'block';
                            f.children[1].style.display = 'block';
                        }
                    })(i);
                }
        ");
            $form->tab('基本信息',function (Form $form) {
                $form->display('id', '病历编号');
                $form->text('name', '患者姓名');
                $form->radio('sex', '性别')->options(['0' => '男', '1' => '女']);
                $form->date('birthday', '出生日期');
                $form->text('id_number','身份证号');
                $form->mobile('mobilephone','手机号码')->options(['mask'=>'99999999999']);
                $form->textarea('address','现居住地');
            })->tab('主诉和病史',function (Form $form) {
                $form->html('<div style="width: 173px;margin: 0 auto"><h4>主诉(就诊原因及目的)</h4></div>');
                $form->divider();
                $form->checkbox('complaint_options','选项')->options(['1'=>'牙齿排列不齐(拥挤)','2'=>'牙齿稀疏(间隙)','3'=>'牙齿龅牙(前突)','4'=>'前牙地包天(前牙反牙合)','5'=>'前牙咬合不上(开牙合)','6'=>'前牙咬合过深(深覆合)','7'=>'深覆盖','8'=>'颞下颌关节症状'])->setWidth(6,3)->stacked();
                $form->textarea('other_options','其它主诉')->setWidth(6,3);
                $form->divide();
                $form->html('<div style="width: 173px;margin: 0 auto"><h4>病史(健康信息)</h4></div>');
                $form->text('height','身高(cm)')->setWidth(6,3);
                $form->text('body_weight','体重(kg)')->setWidth(6,3);
                $form->text('age','年龄')->setWidth(6,3);
                $form->textarea('remark','备注')->setWidth(6,3);
                $form->textarea('other','其它')->setWidth(6,3);
            })->tab('图片资料',function (Form $form) {
                $form->image('CaseHistoryImages.middle_bite_photo','正中咬合照图框');
                $form->image('CaseHistoryImages.right_bite_photo','右咬合照');
                $form->image('CaseHistoryImages.left_bite_photo','左咬合照');
                $form->image('CaseHistoryImages.upper_dental_arch_photo','上牙弓照');
                $form->image('CaseHistoryImages.under_dental_arch_photo','下牙弓照');
                $form->image('CaseHistoryImages.front_opening_photo','正面开口照');
                $form->image('CaseHistoryImages.front_closed_photo','正面闭口照');
                $form->image('CaseHistoryImages.panoramic_photo','X光全景片');
                $form->image('CaseHistoryImages.side_cranium_photo','X光头颅侧位片');
                $form->image('CaseHistoryImages.front_cranium_photo','X光头颅正位片');
                $form->image('CaseHistoryImages.denticle_photo','X光小牙片');
            })->tab('临床检查',function (Form $form) {
                $form->html('<div style="width: 173px;margin: 0 auto;text-align: center"><h4>面部分析</h4></div>');
                $form->divider();
                $form->radio('symmetry','对称性&ensp;&ensp;')->options(['0'=>'对称&ensp;&ensp;','1'=>'不对称&ensp;&ensp;'])->setWidth(5,5);
                $form->radio('chin','颏部&ensp;&ensp;')->options(['0'=>'居中&ensp;&ensp;','1'=>'偏左&ensp;&ensp;&ensp;&ensp;','2'=>'偏右&ensp;&ensp;'])->setWidth(5,5);
                $form->radio('open_lips','开唇露齿&ensp;&ensp;')->options(['0'=>'否&ensp;&ensp;&ensp;&ensp;','1'=>'是'])->setWidth(5,5);
                $form->radio('exposed_gums','微笑露龈&ensp;&ensp;')->options(['0'=>'否&ensp;&ensp;&ensp;&ensp;','1'=>'是'])->setWidth(5,5);
                $form->radio('side_shape','侧面形态&ensp;&ensp;')->options(['0'=>'直面型','1'=>'凹面型&ensp;&ensp;','2'=>'凸面型'])->setWidth(5,5);
                $form->radio('nasolabial_angle','鼻唇角&ensp;&ensp;')->options(['0'=>'正常&ensp;&ensp;','1'=>'偏大&ensp;&ensp;&ensp;&ensp;','2'=>'偏小'])->setWidth(5,5);
                $form->radio('chin_angle','颏部凸度&ensp;&ensp;')->options(['0'=>'正常&ensp;&ensp;','1'=>'后缩&ensp;&ensp;&ensp;&ensp;','2'=>'前突'])->setWidth(5,5);
                $form->radio('periodontal_tissue','牙周组织&ensp;&ensp;')->options(['0'=>'正常&ensp;&ensp;','1'=>'牙龈红肿','2'=>'牙龈出血'])->setWidth(5,5);
            })->tab('X光片分析',function (Form $form) {
                $form->radio('Analysis.surface_fault_slice','曲面断层片')->options(['0'=>'乳牙列','1'=>'恒牙列','2'=>'混合牙列']);
                $form->textarea('Analysis.other','其它');
            })->tab('诊断设计',function (Form $form) {
                $form->html('<div style="width: 173px;margin: 0 auto;text-align: center"><h4>问题列表</h4></div>');
                $form->divider();
                $form->radio('DiagnosticDesign.face','面型')->options(['0'=>'直面型','1'=>'凹面型','2'=>'凸面型']);
                $form->radio('DiagnosticDesign.skeleton','骨性')->options(['0'=>'I类','1'=>'II类','2'=>'III类']);
                $form->radio('DiagnosticDesign.grow','生长型')->options(['0'=>'均角','1'=>'高角','2'=>'低角']);
                $form->radio('DiagnosticDesign.tooth','牙性(安氏)')->options(['0'=>'I类','1'=>'II类I分类','2'=>'II类I分类亚类','3'=>'II类II分类','4'=>'II类II分类亚类','5'=>'III类','6'=>'III类亚类']);
                $form->textarea('DiagnosticDesign.plan','治疗计划');
            })->tab('治疗过程',function (Form $form) {
                $form->hasMany('TreatmentProcess','',function (Form\NestedForm $form) {
                    $form->select('frequency','治疗期数')->options(['1'=>'第一期','2'=>'第二期','3'=>'第三期','4'=>'第四期','5'=>'第五期'])->default('1');
                    $form->text('name','名称');
                    $form->textarea('content','内容')->attribute('onkeyup','console.log(this.value.length)');
                    $form->image('middle_bite_photo','正中咬合照图框');
                    $form->image('right_bite_photo','右咬合照');
                    $form->image('left_bite_photo','左咬合照');
                    $form->image('upper_dental_arch_photo','上牙弓照');
                    $form->image('under_dental_arch_photo','下牙弓照');
                    $form->image('front_opening_photo','正面开口照');
                    $form->image('front_closed_photo','正面闭口照');
                    $form->image('panoramic_photo','X光全景片');
                    $form->image('side_cranium_photo','X光头颅侧位片');
                    $form->image('front_cranium_photo','X光头颅正位片');
                    $form->image('denticle_photo','X光小牙片');
                });
            });
        });
    }
}
// 三级联动地址
//                $form->select('address.province_id')->options(
//                    ChinaAreaAdmin::province()->pluck('name', 'id')
//                )
//                    ->load('address.city_id', '/admin/api/china/city')
//                    ->load('test', 'api/china/city');
//
//                $form->select('address.city_id')->options(function ($id) {
//                    return ChinaAreaAdmin::options($id);
//                })->load('address.district_id', '/admin/api/china/district');
//
//                $form->select('address.district_id')->options(function ($id) {
//                    return ChinaAreaAdmin::options($id);
//                });


//                    $form->display('create_time','时间')->with(function ($create_time) {
//                        if ($create_time)
//                        {
//                            return date('Y-m-d H:i:s',$create_time);
//                        }
//                        return date('Y-m-d H:i:s',time());
//                    });
//                    $form->datetime('create_time');
//                    $form->display('create_time','时间')->with(function ($create_time)
//                    {
//                        if ($create_time)
//                        {
//                            return date('Y-m-d H:i:s',$create_time);
//                        }
//                    });
<style>
    #bs .form-horizontal .form-group {margin-right: 0px;margin-left: 0px}
    #bs .form-horizontal .control-label {text-align: left}
    #yachizhuangtai .form-horizontal .control-label {text-align: left}
    #guanjiejiancha .form-horizontal .control-label {text-align: left}
    #yaliejiancha .form-horizontal .control-label {text-align: left}
    #xguangfenxi .form-horizontal .control-label {text-align: left}
    #wentiliebiao .form-horizontal .control-label {text-align: left}
    #zhenduan .form-horizontal .control-label {text-align: left}
    #zhiliaomubiao .form-horizontal .control-label {text-align: left}
    #zhiliaojihua .form-horizontal .control-label {text-align: left}
    #zhiliaoguocheng .form-horizontal .control-label {text-align: left}
    #yaliejiancha .form-horizontal .form-group {margin-right: 0px;margin-left: 0px}
</style>

    <div class="modal-dialog" id="gdta" style="min-width: 1150px">
        <div class="modal-content" id="neirong">
            <div class="modal-body">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="jbxx" class="active">
                        <a href="#home" data-toggle="tab" onclick="bb($('#home').height())">
                            基本信息
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="zshbs" class="dropdown-toggle"
                           data-toggle="dropdown">主诉和病史
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="zshbs">
                            <li><a href="#zs" tabindex="-1" data-toggle="tab" onclick="bb($('#zs').height())">主诉(就诊原因及目的)</a></li>
                            <li><a href="#bs" tabindex="-1" data-toggle="tab" onclick="bb($('#bs').height())">病史(健康信息)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle"
                           data-toggle="dropdown">图像资料
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                            <li><a href="#mianxiang" tabindex="-1" data-toggle="tab" onclick="bb($('#mianxiang').height())">面像照</a></li>
                            <li><a href="#kounei" tabindex="-1" data-toggle="tab" onclick="bb($('#kounei').height())">口内照</a></li>
                            <li><a href="#xguang" tabindex="-1" data-toggle="tab" onclick="bb($('#xguang').height())">X光片</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="myTabDrop2" class="dropdown-toggle"
                           data-toggle="dropdown">临床检查
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                            <li><a href="#mianbufenxi" tabindex="-1" data-toggle="tab" onclick="bb($('#mianbufenxi').height())">面部分析</a></li>
                            <li><a href="#yazhouzuzhi" tabindex="-1" data-toggle="tab" onclick="bb($('#yazhouzuzhi').height())">牙周组织</a></li>
                            <li><a href="#yachizhuangtai" tabindex="-1" data-toggle="tab" onclick="bb($('#yachizhuangtai').height())">牙齿状态</a></li>
                            <li><a href="#guanjiejiancha" tabindex="-1" data-toggle="tab" onclick="bb($('#guanjiejiancha').height())">关节检查</a></li>
                            <li><a href="#yaliejiancha" tabindex="-1" data-toggle="tab" onclick="bb($('#yaliejiancha').height())">牙列检查</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#xguangfenxi" data-toggle="tab" onclick="bb($('#xguangfenxi').height())">
                            X光分析
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="myTabDropx" class="dropdown-toggle"
                           data-toggle="dropdown">诊断设计
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDropx">
                            <li><a href="#wentiliebiao" tabindex="-1" data-toggle="tab" onclick="bb($('#wentiliebiao').height())">问题列表</a></li>
                            <li><a href="#zhenduan" tabindex="-1" data-toggle="tab" onclick="bb($('#zhenduan').height())">诊断</a></li>
                            <li><a href="#zhiliaomubiao" tabindex="-1" data-toggle="tab" onclick="bb($('#zhiliaomubiao').height())">治疗目标</a></li>
                            <li><a href="#zhiliaojihua" tabindex="-1" data-toggle="tab" onclick="bb($('#zhiliaojihua').height())">治疗计划</a></li>
                        </ul>
                    </li>
                    <li id="zlgc">
                        <a href="#zhiliaojinzhan" data-toggle="tab" onclick="bb($('#zhiliaojinzhan').height())">
                            治疗过程
                        </a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="container bs-docs-container" style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>基本信息&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">档案编号</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" value="{{$data[0]['id']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">患者姓名</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" value="{{$data[0]['name']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="inlineRadio1" value="0" {{$data[0]['sex'] == '0' ? 'checked' : ''}} readonly> 男
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="inlineRadio2" value="1" {{$data[0]['sex'] == '1' ? 'checked' : ''}} readonly> 女
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">出生年月日</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" value="{{$data[0]['birthday']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">身份证号码</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" value="{{$data[0]['id_number']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">手机号码</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" value="{{$data[0]['mobilephone']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">现居住地</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" value="{{$data[0]['province'].$data[0]['city'].$data[0]['address']}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="zs">
                        <div class="container bs-docs-container" style="max-width: 700px;">
                            <div class="row">

                                <div class="form-group">
                                    <h3>主诉&ensp;<small>就诊原因及目的</small></h3>
                                    <hr>
                                    <?php $a = $data[0]['orthodontics_chief_complaint']['complained']; $a = explode(',',$a)?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="1" <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> readonly> 牙齿排列不齐
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="2" <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> readonly> 牙齿稀疏
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="3" <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> readonly> 牙齿龅牙
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="4" <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> readonly> 牙齿地包天
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="5" <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> readonly> 前牙咬合不上
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="6" <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> readonly> 前牙咬合过深
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="7" <?php if(in_array('7',$a) ){ ?>checked="checked"<?php } ?> readonly> 深覆盖
                                    </label>
                                    <label class="checkbox-inline" style="margin-left: 0">
                                        <input type="checkbox" id="inlineCheckbox2" value="8" <?php if(in_array('8',$a) ){ ?>checked="checked"<?php } ?> readonly> 颞下颌关节症状
                                    </label>
                                </div>
                                <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它主诉</label>
                                <div class="form-group">

                                        <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['other_complained']}}</textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bs">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>病史&ensp;<small>健康信息</small></h3>
                                    <hr>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">身高</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount" value="{{$data[0]['orthodontics_chief_complaint']['height']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">cm</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">体重</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount"  value="{{$data[0]['orthodontics_chief_complaint']['weight']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">kg</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">年龄</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount"  value="{{$data[0]['orthodontics_chief_complaint']['age']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">岁</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">月经初潮年龄</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount"  value="{{$data[0]['orthodontics_chief_complaint']['menarche_age']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">岁</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">是否患有以下疾病</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="suffering_from_disease"  value="0" {{$data[0]['orthodontics_chief_complaint']['suffering_from_disease'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="suffering_from_disease"  value="1" {{$data[0]['orthodontics_chief_complaint']['suffering_from_disease'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px" >
                                    {{--疾病选项 1:心脏病 2:高血压 3:糖尿病 4:精神病 5:癫痫 6:肝炎 7:艾滋病 8:肺结核 9:哮喘 10:血液系统疾病 11:慢性鼻炎  12:鼻甲肥大 13:扁桃体肥大  14:腺样体肥大 15:打鼾--}}
                                    <?php $a = $data[0]['orthodontics_chief_complaint']['disease_options']; $a = explode(',',$a)?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="1" <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> readonly> 心脏病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="2" <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> readonly> 高血压
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="3" <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> readonly> 糖尿病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="4" <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> readonly> 精神病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="5" <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> readonly> 癫痫
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="6" <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> readonly> 肝炎
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="7" <?php if(in_array('7',$a) ){ ?>checked="checked"<?php } ?> readonly> 艾滋病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="8" <?php if(in_array('8',$a) ){ ?>checked="checked"<?php } ?> readonly> 肺结核
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="9" <?php if(in_array('9',$a) ){ ?>checked="checked"<?php } ?> readonly> 哮喘
                                    </label>
                                    <label class="checkbox-inline" style="margin-left: 0px;">
                                        <input type="checkbox"  value="10" <?php if(in_array('10',$a) ){ ?>checked="checked"<?php } ?> readonly> 血液系统疾病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="11" <?php if(in_array('11',$a) ){ ?>checked="checked"<?php } ?> readonly> 慢性鼻炎
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="12" <?php if(in_array('12',$a) ){ ?>checked="checked"<?php } ?> readonly> 鼻甲肥大
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="13" <?php if(in_array('13',$a) ){ ?>checked="checked"<?php } ?> readonly> 扁桃体肥大
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="14" <?php if(in_array('14',$a) ){ ?>checked="checked"<?php } ?> readonly> 腺样体肥大
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="15" <?php if(in_array('15',$a) ){ ?>checked="checked"<?php } ?> readonly> 打鼾
                                    </label>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它主诉</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['other_disease']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">是否对以下各项过敏</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="allergy"  value="0" {{$data[0]['orthodontics_chief_complaint']['allergy'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="allergy"  value="1" {{$data[0]['orthodontics_chief_complaint']['allergy'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px" >
                                    {{--疾病选项 1:心脏病 2:高血压 3:糖尿病 4:精神病 5:癫痫 6:肝炎 7:艾滋病 8:肺结核 9:哮喘 10:血液系统疾病 11:慢性鼻炎  12:鼻甲肥大 13:扁桃体肥大  14:腺样体肥大 15:打鼾--}}
                                    <?php $a = $data[0]['orthodontics_chief_complaint']['allergy_options']; $a = explode(',',$a)?>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="1" <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> readonly> 青霉素
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="2" <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> readonly> 口腔局麻药
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="3" <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> readonly> 金属
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="4" <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> readonly> 塑料
                                    </label>
                                    <label class="checkbox-inline" >
                                        <input type="checkbox"  value="5" <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> readonly> 橡胶
                                    </label>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它过敏</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['other_allergy']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-6 control-label">近几年是否一直在服用某种药物</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="keep_taking_medicine"  value="0" {{$data[0]['orthodontics_chief_complaint']['keep_taking_medicine'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="keep_taking_medicine"  value="1" {{$data[0]['orthodontics_chief_complaint']['keep_taking_medicine'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">药物名称</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['drugs_name']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-8 control-label">是否准备或正在怀孕或哺乳(女性)</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="pregnancy"  value="0" {{$data[0]['orthodontics_chief_complaint']['pregnancy'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="pregnancy"  value="1" {{$data[0]['orthodontics_chief_complaint']['pregnancy'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-8 control-label">患者或患者家长是否能在较长时间内配合医生治疗</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="coordination_treatment"  value="0" {{$data[0]['orthodontics_chief_complaint']['coordination_treatment'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="coordination_treatment"  value="1" {{$data[0]['orthodontics_chief_complaint']['coordination_treatment'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-8 control-label">是否有过牙齿或颌面部外伤史</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="tooth_trauma"  value="0" {{$data[0]['orthodontics_chief_complaint']['tooth_trauma'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="tooth_trauma"  value="1" {{$data[0]['orthodontics_chief_complaint']['tooth_trauma'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-8 control-label">患者的家族成员中是否有类似牙齿错牙合情况</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="tooth_wrong_teeth"  value="0" {{$data[0]['orthodontics_chief_complaint']['tooth_wrong_teeth'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="tooth_wrong_teeth"  value="1" {{$data[0]['orthodontics_chief_complaint']['tooth_wrong_teeth'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-6 control-label">是否或曾有以下口腔习惯</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="oral_cavity_habits"  value="0" {{$data[0]['orthodontics_chief_complaint']['oral_cavity_habits'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="oral_cavity_habits"  value="1" {{$data[0]['orthodontics_chief_complaint']['oral_cavity_habits'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px" >
                                    <?php $a = $data[0]['orthodontics_chief_complaint']['oral_cavity_options']; $a = explode(',',$a)?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="1" <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> readonly> 心脏病
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="1" <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> readonly> 吮指
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="2" <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> readonly> 咬唇
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="3" <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> readonly> 口呼吸
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="4" <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> readonly> 咬物
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="5" <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> readonly> 偏侧咀嚼
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value="6" <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> readonly> 吐舌
                                    </label>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它口腔习惯</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['other_oral_cavity']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-6 control-label">是否接受过正畸治疗</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="orthodontic_treatment"  value="0" {{$data[0]['orthodontics_chief_complaint']['orthodontic_treatment'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="orthodontic_treatment"  value="1" {{$data[0]['orthodontics_chief_complaint']['orthodontic_treatment'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">备注</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['orthodontic_treatment_remark']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-6 control-label">患者或患者家长是否还有其它担心或说明的情况</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="orthodontic_treatment"  value="0" {{$data[0]['orthodontics_chief_complaint']['worry'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="orthodontic_treatment"  value="1" {{$data[0]['orthodontics_chief_complaint']['worry'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">备注</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['worry_remark']}}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-6 control-label">其它</label>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">备注</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_chief_complaint']['other']}}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div class="tab-pane fade" id="mianxiang">
                        <div class="container bs-docs-container" style="max-width: 700px;">
                            <div class="row">
                                <div class="form-group">
                                    <h3>面相照&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['positive_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['positive_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>正面照</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['side_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['side_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>侧面照</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['positive_smile_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['positive_smile_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>正面微笑照</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kounei">
                        <div class="container bs-docs-container" style="max-width: 700px;">
                            <div class="row">
                                <div class="form-group">
                                    <h3>口内照&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['upper_arch_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['upper_arch_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>上牙弓照</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['positive_45_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['positive_45_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>正面咬合向上45度像</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['under_arch_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['under_arch_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>下牙弓像</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['right_bite_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['right_bite_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>右咬合像</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['positive_bite_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['positive_bite_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>正面咬合像</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['left_bite_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['left_bite_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>左咬合像</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="xguang">
                        <div class="container bs-docs-container" style="max-width: 700px;">
                            <div class="row">
                                <div class="form-group">
                                    <h3>X光片&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['side_x_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['side_x_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>侧面x光片</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['positive_x_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['positive_x_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>正面x光片</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['tooth_photo'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['tooth_photo']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>牙片</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['cbct_joint_sagittal'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['cbct_joint_sagittal']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>CBCT关节矢状位</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['cbct_coronary_joint'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['cbct_coronary_joint']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>CBCT关节冠状位</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['cbct_anterior_teeth'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['cbct_anterior_teeth']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>CBCT上前牙牙根</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['cbct_under_teeth'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['cbct_under_teeth']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>CBCT下前牙牙根</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['abnormal_teeth'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['abnormal_teeth']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>异常牙</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['air_passage'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['air_passage']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>气道</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php if ($data[0]['case_history_images']['other'] == ''): ?>
                                        <img src="holder.js/200x200?text=暂无图片"  class="img-thumbnail">
                                        <?php else: ?>
                                        <img src="{{$data[0]['case_history_images']['other']}}" width="200" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                        <div class="caption" style="text-align: center">
                                            <h5>其它</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mianbufenxi">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>面部分析&ensp;</h3>
                                    <hr>
                                    <h4>正面</h4>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">对称性</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="symmetry"  value="0" {{$data[0]['orthodontics_clinical_examination']['symmetry'] == '0' ? 'checked' : ''}} readonly> 对称
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="symmetry"  value="1" {{$data[0]['orthodontics_clinical_examination']['symmetry'] == '1' ? 'checked' : ''}} readonly> 不对称
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">颏点</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point"  value="0" {{$data[0]['orthodontics_clinical_examination']['chin_point'] == '0' ? 'checked' : ''}} readonly> 居中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point"  value="1" {{$data[0]['orthodontics_clinical_examination']['chin_point'] == '1' ? 'checked' : ''}} readonly> 偏左
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point"  value="1" {{$data[0]['orthodontics_clinical_examination']['chin_point'] == '2' ? 'checked' : ''}} readonly> 偏右
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">开唇露齿</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="teeth_open_lips"  value="0" {{$data[0]['orthodontics_clinical_examination']['teeth_open_lips'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="teeth_open_lips"  value="1" {{$data[0]['orthodontics_clinical_examination']['teeth_open_lips'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">微笑露龈</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="smile_reveal_gums"  value="0" {{$data[0]['orthodontics_clinical_examination']['smile_reveal_gums'] == '0' ? 'checked' : ''}} readonly> 否
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="smile_reveal_gums"  value="1" {{$data[0]['orthodontics_clinical_examination']['smile_reveal_gums'] == '1' ? 'checked' : ''}} readonly> 是
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">平面</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="plane"  value="1" {{$data[0]['orthodontics_clinical_examination']['plane'] == '1' ? 'checked' : ''}} readonly> 偏斜
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="plane"  value="0" {{$data[0]['orthodontics_clinical_examination']['plane'] == '0' ? 'checked' : ''}} readonly> 不偏斜
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4>侧面</h4>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">侧面形态</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="side_shape"  value="0" {{$data[0]['orthodontics_clinical_examination']['side_shape'] == '0' ? 'checked' : ''}} readonly> 直面型
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="side_shape"  value="1" {{$data[0]['orthodontics_clinical_examination']['side_shape'] == '1' ? 'checked' : ''}} readonly> 凹面型
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="side_shape"  value="2" {{$data[0]['orthodontics_clinical_examination']['side_shape'] == '2' ? 'checked' : ''}} readonly> 凸面型
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">鼻唇角</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="nasolabial_angle"  value="0" {{$data[0]['orthodontics_clinical_examination']['nasolabial_angle'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nasolabial_angle"  value="1" {{$data[0]['orthodontics_clinical_examination']['nasolabial_angle'] == '1' ? 'checked' : ''}} readonly> 偏大
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nasolabial_angle"  value="2" {{$data[0]['orthodontics_clinical_examination']['nasolabial_angle'] == '2' ? 'checked' : ''}} readonly> 偏小
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">颏部凸度</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point_view"  value="0" {{$data[0]['orthodontics_clinical_examination']['chin_point_view'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point_view"  value="1" {{$data[0]['orthodontics_clinical_examination']['chin_point_view'] == '1' ? 'checked' : ''}} readonly> 后缩
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chin_point_view"  value="1" {{$data[0]['orthodontics_clinical_examination']['chin_point_view'] == '2' ? 'checked' : ''}} readonly> 前凸
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yazhouzuzhi">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>牙周组织&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="periodontal_tissue"  value="0" {{$data[0]['orthodontics_clinical_examination']['periodontal_tissue'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="periodontal_tissue"  value="1" {{$data[0]['orthodontics_clinical_examination']['periodontal_tissue'] == '1' ? 'checked' : ''}} readonly> 牙龈红肿
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="periodontal_tissue"  value="1" {{$data[0]['orthodontics_clinical_examination']['periodontal_tissue'] == '2' ? 'checked' : ''}} readonly> 牙龈出血
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yachizhuangtai">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>牙齿状态&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">恒牙列</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="permanent_dentition"  value="0" {{$data[0]['orthodontics_clinical_examination']['permanent_dentition'] == '0' ? 'checked' : ''}} readonly> 全部正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="permanent_dentition"  value="1" {{$data[0]['orthodontics_clinical_examination']['permanent_dentition'] == '1' ? 'checked' : ''}} readonly> 全部缺失
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">乳牙列</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="deciduous_teeth"  value="0" {{$data[0]['orthodontics_clinical_examination']['deciduous_teeth'] == '0' ? 'checked' : ''}} readonly> 全部正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="deciduous_teeth"  value="1" {{$data[0]['orthodontics_clinical_examination']['deciduous_teeth'] == '1' ? 'checked' : ''}} readonly> 全部缺失
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_clinical_examination']['teeth_condition_other']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="guanjiejiancha">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>关节检查&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">开口度</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_degree"  value="0" {{$data[0]['orthodontics_clinical_examination']['opening_degree'] == '0' ? 'checked' : ''}} readonly> 一指
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_degree"  value="1" {{$data[0]['orthodontics_clinical_examination']['opening_degree'] == '1' ? 'checked' : ''}} readonly> 二指
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_degree"  value="2" {{$data[0]['orthodontics_clinical_examination']['opening_degree'] == '1' ? 'checked' : ''}} readonly> 三指
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_degree"  value="3" {{$data[0]['orthodontics_clinical_examination']['opening_degree'] == '1' ? 'checked' : ''}} readonly> 三指以上
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">开口型</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_shape"  value="0" {{$data[0]['orthodontics_clinical_examination']['opening_shape'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_shape"  value="1" {{$data[0]['orthodontics_clinical_examination']['opening_shape'] == '1' ? 'checked' : ''}} readonly> 左偏
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_shape"  value="2" {{$data[0]['orthodontics_clinical_examination']['opening_shape'] == '1' ? 'checked' : ''}} readonly> 右偏
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="opening_shape"  value="3" {{$data[0]['orthodontics_clinical_examination']['opening_shape'] == '1' ? 'checked' : ''}} readonly> 偏摆
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">弹响(左侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_sound"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_sound'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_sound"  value="1" {{$data[0]['orthodontics_clinical_examination']['left_sound'] == '1' ? 'checked' : ''}} readonly> 张口初
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_sound"  value="2" {{$data[0]['orthodontics_clinical_examination']['left_sound'] == '2' ? 'checked' : ''}} readonly> 张口末
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_sound"  value="3" {{$data[0]['orthodontics_clinical_examination']['left_sound'] == '3' ? 'checked' : ''}} readonly> 闭口初
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_sound"  value="4" {{$data[0]['orthodontics_clinical_examination']['left_sound'] == '4' ? 'checked' : ''}} readonly> 闭口末
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">弹响(右侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_sound"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_sound'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_sound"  value="1" {{$data[0]['orthodontics_clinical_examination']['right_sound'] == '1' ? 'checked' : ''}} readonly> 张口初
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_sound"  value="2" {{$data[0]['orthodontics_clinical_examination']['right_sound'] == '2' ? 'checked' : ''}} readonly> 张口末
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_sound"  value="3" {{$data[0]['orthodontics_clinical_examination']['right_sound'] == '3' ? 'checked' : ''}} readonly> 闭口初
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_sound"  value="4" {{$data[0]['orthodontics_clinical_examination']['right_sound'] == '4' ? 'checked' : ''}} readonly> 闭口末
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">摩擦音(左侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_friction_sound"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_friction_sound'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_friction_sound"  value="1" {{$data[0]['orthodontics_clinical_examination']['left_friction_sound'] == '1' ? 'checked' : ''}} readonly> 张口
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_friction_sound"  value="2" {{$data[0]['orthodontics_clinical_examination']['left_friction_sound'] == '2' ? 'checked' : ''}} readonly> 闭口
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">摩擦音(右侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_friction_sound"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_friction_sound'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_friction_sound"  value="1" {{$data[0]['orthodontics_clinical_examination']['right_friction_sound'] == '1' ? 'checked' : ''}} readonly> 张口
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_friction_sound"  value="2" {{$data[0]['orthodontics_clinical_examination']['right_friction_sound'] == '2' ? 'checked' : ''}} readonly> 闭口
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">疼痛(左侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="1" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '1' ? 'checked' : ''}} readonly> 大张口
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="2" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '2' ? 'checked' : ''}} readonly> 左侧动
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="3" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '3' ? 'checked' : ''}} readonly> 右侧动
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="4" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '4' ? 'checked' : ''}} readonly> 前伸
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_pain"  value="5" {{$data[0]['orthodontics_clinical_examination']['left_pain'] == '5' ? 'checked' : ''}} readonly> 紧咬
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">疼痛(右侧)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '0' ? 'checked' : ''}} readonly> 无
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="1" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '1' ? 'checked' : ''}} readonly> 大张口
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="2" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '2' ? 'checked' : ''}} readonly> 左侧动
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="3" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '3' ? 'checked' : ''}} readonly> 右侧动
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="4" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '4' ? 'checked' : ''}} readonly> 前伸
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_pain"  value="5" {{$data[0]['orthodontics_clinical_examination']['right_pain'] == '5' ? 'checked' : ''}} readonly> 紧咬
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_clinical_examination']['joint_examination_other']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yaliejiancha">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>牙列检查&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <label for="inputPassword3" class="col-sm-10 control-label" style="font-weight: 400;padding-left: 0">错颌问题(请用文字描述牙列错颌问题)</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_clinical_examination']['malocclusion_problem']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <hr>
                                    <div class="form-group">
                                        <h4>上下牙弓关系&ensp;</h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>矢状关系&ensp;</h5>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">前牙覆盖&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;正常</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="0" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;深覆盖</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="1" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '1' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="2" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '2' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="3" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '3' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;反覆盖</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="4" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '4' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="5" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '5' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="anterior_teeth_covered"  value="6" {{$data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'] == '6' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">尖牙关系&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;左侧</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;右侧</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">磨牙关系&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;左侧</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_molar_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_molar_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['left_molar_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;右侧</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_molar_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_molar_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="0" {{$data[0]['orthodontics_clinical_examination']['right_molar_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>垂直关系&ensp;</h5>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">spee 曲线</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="speed_curve"  value="0" {{$data[0]['orthodontics_clinical_examination']['speed_curve'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="speed_curve"  value="1" {{$data[0]['orthodontics_clinical_examination']['speed_curve'] == '1' ? 'checked' : ''}} readonly> 反向
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="speed_curve"  value="2" {{$data[0]['orthodontics_clinical_examination']['speed_curve'] == '2' ? 'checked' : ''}} readonly> 过深
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">前牙覆牙合&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;正常</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="0" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;深覆牙合</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="1" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '1' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="2" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '2' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="3" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '3' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;开牙合</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="4" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '4' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="5" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '5' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="deep_bite"  value="6" {{$data[0]['orthodontics_clinical_examination']['deep_bite'] == '6' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">后牙&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;正常</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="0" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;左侧开牙合</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="1" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '1' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="2" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '2' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="3" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '3' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;右侧开牙合</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="4" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '4' ? 'checked' : ''}} readonly> I度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="5" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '5' ? 'checked' : ''}} readonly> II度
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="posterior_teeth"  value="6" {{$data[0]['orthodontics_clinical_examination']['posterior_teeth'] == '6' ? 'checked' : ''}} readonly> III度
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>横向关系&ensp;</h5>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">上颌弓牙</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_arch_teeth"  value="4" {{$data[0]['orthodontics_clinical_examination']['maxillary_arch_teeth'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_arch_teeth"  value="5" {{$data[0]['orthodontics_clinical_examination']['maxillary_arch_teeth'] == '1' ? 'checked' : ''}} readonly> 狭窄
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_arch_teeth"  value="6" {{$data[0]['orthodontics_clinical_examination']['maxillary_arch_teeth'] == '2' ? 'checked' : ''}} readonly> 过宽
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">下颌弓牙</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="lower_dental_arch"  value="0" {{$data[0]['orthodontics_clinical_examination']['lower_dental_arch'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="lower_dental_arch"  value="1" {{$data[0]['orthodontics_clinical_examination']['lower_dental_arch'] == '1' ? 'checked' : ''}} readonly> 狭窄
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="lower_dental_arch"  value="2" {{$data[0]['orthodontics_clinical_examination']['lower_dental_arch'] == '2' ? 'checked' : ''}} readonly> 过宽
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">上颌中线</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="0" {{$data[0]['orthodontics_clinical_examination']['maxillary_midline'] == '0' ? 'checked' : ''}} readonly> 居中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="1" {{$data[0]['orthodontics_clinical_examination']['maxillary_midline'] == '1' ? 'checked' : ''}} readonly> 右偏斜 {{$data[0]['orthodontics_clinical_examination']['maxillary_midline_left'].'mm'}}
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="2" {{$data[0]['orthodontics_clinical_examination']['maxillary_midline'] == '2' ? 'checked' : ''}} readonly> 左偏斜 {{$data[0]['orthodontics_clinical_examination']['maxillary_midline_right'].'mm'}}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">下颌中线</label>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">后牙&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;正常</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="0" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;左侧</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="1" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '1' ? 'checked' : ''}} readonly> 反牙合
                                        </label>


                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="2" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '2' ? 'checked' : ''}} readonly> 正锁牙合
                                        </label>


                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="3" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '3' ? 'checked' : ''}} readonly> 反锁牙合
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-4 control-label">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;反覆盖</label>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="4" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '4' ? 'checked' : ''}} readonly> 反牙合
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="5" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '5' ? 'checked' : ''}} readonly> 正锁牙合
                                        </label>

                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="6" {{$data[0]['orthodontics_clinical_examination']['mandibular_midline'] == '6' ? 'checked' : ''}} readonly> 反锁牙合
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-2 control-label">拥挤度</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">上颌</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount" value="{{$data[0]['orthodontics_clinical_examination']['crowd_degree_maxillary']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">mm</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border: 0">下颌</div>
                                                <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount"  value="{{$data[0]['orthodontics_clinical_examination']['crowded_degree_jaw']}}" readonly>
                                                <div class="input-group-addon" style="border: 0">mm</div>
                                            </div>
                                        </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" style="padding-left: 11px" class="col-sm-2 control-label">Bolton指数</label>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon" style="border: 0">前牙比</div>
                                                    <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount" value="{{$data[0]['orthodontics_clinical_examination']['bolton_anterior_teeth']}}" readonly>
                                                    <div class="input-group-addon" style="border: 0">%</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon" style="border: 0">全牙比</div>
                                                    <input style="width: 60px" type="text" class="form-control" id="exampleInputAmount"  value="{{$data[0]['orthodontics_clinical_examination']['bolton_all_teeth']}}" readonly>
                                                    <div class="input-group-addon" style="border: 0">%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="xguangfenxi">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>X光分析&ensp;<small>曲面断层片</small></h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="surface_fault_slice"  value="0" {{$data[0]['orthodontic_x_analysis']['surface_fault_slice'] == '0' ? 'checked' : ''}} readonly> 乳牙列
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="surface_fault_slice"  value="1" {{$data[0]['orthodontic_x_analysis']['surface_fault_slice'] == '1' ? 'checked' : ''}} readonly> 恒牙列
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="surface_fault_slice"  value="2" {{$data[0]['orthodontic_x_analysis']['surface_fault_slice'] == '2' ? 'checked' : ''}} readonly> 混合牙列
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: 12px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它目标</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontic_x_analysis']['other_target']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wentiliebiao">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>问题列表&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">正面</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="positive"  value="0" {{$data[0]['orthodontics_diagnostic_design']['positive'] == '0' ? 'checked' : ''}} readonly> 直面型
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="positive"  value="1" {{$data[0]['orthodontics_diagnostic_design']['positive'] == '1' ? 'checked' : ''}} readonly> 凹面型
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="positive"  value="2" {{$data[0]['orthodontics_diagnostic_design']['positive'] == '2' ? 'checked' : ''}} readonly> 凸面型
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">骨性</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="question_bone_nature"  value="0" {{$data[0]['orthodontics_diagnostic_design']['question_bone_nature'] == '0' ? 'checked' : ''}} readonly> I类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_bone_nature"  value="1" {{$data[0]['orthodontics_diagnostic_design']['question_bone_nature'] == '1' ? 'checked' : ''}} readonly> II类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_bone_nature"  value="2" {{$data[0]['orthodontics_diagnostic_design']['question_bone_nature'] == '2' ? 'checked' : ''}} readonly> III类
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">生长型</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="growth_type"  value="0" {{$data[0]['orthodontics_diagnostic_design']['growth_type'] == '0' ? 'checked' : ''}} readonly> 均角
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="growth_type"  value="1" {{$data[0]['orthodontics_diagnostic_design']['growth_type'] == '1' ? 'checked' : ''}} readonly> 高角
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="growth_type"  value="2" {{$data[0]['orthodontics_diagnostic_design']['growth_type'] == '2' ? 'checked' : ''}} readonly> 低角
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">牙性(安氏)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="0" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '0' ? 'checked' : ''}} readonly> I类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="1" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '1' ? 'checked' : ''}} readonly> II类I分类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="2" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '2' ? 'checked' : ''}} readonly> II类I分类亚类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="3" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '3' ? 'checked' : ''}} readonly> II类II分类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="4" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '4' ? 'checked' : ''}} readonly> II类II分类亚类
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="5" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '5' ? 'checked' : ''}} readonly> III类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_teeth_nature"  value="6" {{$data[0]['orthodontics_diagnostic_design']['question_teeth_nature'] == '6' ? 'checked' : ''}} readonly> III类亚类
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">前牙覆牙合</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="0" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="1" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '1' ? 'checked' : ''}} readonly> 深覆牙合I
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="2" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '2' ? 'checked' : ''}} readonly> II深覆牙合II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="3" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '3' ? 'checked' : ''}} readonly> 深覆牙合III
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="4" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '4' ? 'checked' : ''}} readonly> 开牙合I
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="5" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '5' ? 'checked' : ''}} readonly> 开牙合II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_overbite"  value="6" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'] == '6' ? 'checked' : ''}} readonly> 开牙合III
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">前牙覆盖</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="0" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="1" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '1' ? 'checked' : ''}} readonly> 深覆盖I
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="2" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '2' ? 'checked' : ''}} readonly> 深覆盖II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="3" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '3' ? 'checked' : ''}} readonly> 深覆盖III
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="4" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '4' ? 'checked' : ''}} readonly> 反覆盖I
                                        </label>
                                        <label  class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="5" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '5' ? 'checked' : ''}} readonly> 反覆盖II
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="question_anterior_teeth_covered"  value="6" {{$data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'] == '6' ? 'checked' : ''}} readonly> 反覆盖III
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="zhenduan">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>诊断&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">骨性</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_bone_nature"  value="0" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_bone_nature'] == '0' ? 'checked' : ''}} readonly> I类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_bone_nature"  value="1" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_bone_nature'] == '1' ? 'checked' : ''}} readonly> II类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_bone_nature"  value="2" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_bone_nature'] == '2' ? 'checked' : ''}} readonly> III类
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">牙性(安氏)</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="0" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '0' ? 'checked' : ''}} readonly> I类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="1" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '1' ? 'checked' : ''}} readonly> II类I分类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="2" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '2' ? 'checked' : ''}} readonly> II类I分类亚类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="3" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '3' ? 'checked' : ''}} readonly> II类II分类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="4" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '4' ? 'checked' : ''}} readonly> II类II分类亚类
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="5" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '5' ? 'checked' : ''}} readonly> III类
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diagnosis_teeth_nature"  value="6" {{$data[0]['orthodontics_diagnostic_design']['diagnosis_teeth_nature'] == '6' ? 'checked' : ''}} readonly> III类亚类
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它诊断</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_diagnostic_design']['other_diagnosis']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="zhiliaomubiao">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>治疗目标&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">面型</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="face_type"  value="0" {{$data[0]['orthodontics_diagnostic_design']['face_type'] == '0' ? 'checked' : ''}} readonly> 维持
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="face_type"  value="1" {{$data[0]['orthodontics_diagnostic_design']['face_type'] == '1' ? 'checked' : ''}} readonly> 改善
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">上颌中线</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="0" {{$data[0]['orthodontics_diagnostic_design']['maxillary_midline'] == '0' ? 'checked' : ''}} readonly> 居中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="1" {{$data[0]['orthodontics_diagnostic_design']['maxillary_midline'] == '1' ? 'checked' : ''}} readonly> 左偏斜
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="maxillary_midline"  value="2" {{$data[0]['orthodontics_diagnostic_design']['maxillary_midline'] == '2' ? 'checked' : ''}} readonly> 右偏斜
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">下颌中线</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="0" {{$data[0]['orthodontics_diagnostic_design']['mandibular_midline'] == '0' ? 'checked' : ''}} readonly> 居中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="1" {{$data[0]['orthodontics_diagnostic_design']['mandibular_midline'] == '1' ? 'checked' : ''}} readonly> 左偏斜
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="mandibular_midline"  value="2" {{$data[0]['orthodontics_diagnostic_design']['mandibular_midline'] == '2' ? 'checked' : ''}} readonly> 右偏斜
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">前牙覆牙合</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="0" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="1" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '1' ? 'checked' : ''}} readonly> 深覆牙合I
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="2" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '2' ? 'checked' : ''}} readonly> 深覆牙合II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="3" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '3' ? 'checked' : ''}} readonly> 深覆牙合III
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="4" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '4' ? 'checked' : ''}} readonly> 开牙合I
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="5" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '5' ? 'checked' : ''}} readonly> 开牙合II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_overbite"  value="6" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_overbite'] == '6' ? 'checked' : ''}} readonly> 开牙合III
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">前牙覆盖</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="0" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '0' ? 'checked' : ''}} readonly> 正常
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="1" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '1' ? 'checked' : ''}} readonly> 深覆盖I
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="2" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '2' ? 'checked' : ''}} readonly> 深覆盖II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="3" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '3' ? 'checked' : ''}} readonly> 深覆盖III
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="4" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '4' ? 'checked' : ''}} readonly> 反覆盖I
                                        </label>
                                        <label style="margin-left: 0px" class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="5" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '5' ? 'checked' : ''}} readonly> 反覆盖II
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="target_anterior_teeth_covered"  value="6" {{$data[0]['orthodontics_diagnostic_design']['target_anterior_teeth_covered'] == '6' ? 'checked' : ''}} readonly> 反覆盖III
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">尖牙关系左侧</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="0" {{$data[0]['orthodontics_diagnostic_design']['left_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="1" {{$data[0]['orthodontics_diagnostic_design']['left_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_fangs"  value="2" {{$data[0]['orthodontics_diagnostic_design']['left_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">尖牙关系右侧</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="0" {{$data[0]['orthodontics_diagnostic_design']['right_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="1" {{$data[0]['orthodontics_diagnostic_design']['right_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_fangs"  value="2" {{$data[0]['orthodontics_diagnostic_design']['right_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">磨牙关系左侧</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="0" {{$data[0]['orthodontics_diagnostic_design']['left_molar_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="1" {{$data[0]['orthodontics_diagnostic_design']['left_molar_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="left_molar_fangs"  value="2" {{$data[0]['orthodontics_diagnostic_design']['left_molar_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" style="padding-left: 11px" class="col-sm-3 control-label">磨牙关系右侧</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="0" {{$data[0]['orthodontics_diagnostic_design']['right_molar_fangs'] == '0' ? 'checked' : ''}} readonly> 中性
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="1" {{$data[0]['orthodontics_diagnostic_design']['right_molar_fangs'] == '1' ? 'checked' : ''}} readonly> 近中
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="right_molar_fangs"  value="2" {{$data[0]['orthodontics_diagnostic_design']['right_molar_fangs'] == '2' ? 'checked' : ''}} readonly> 远中
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <label for="inputPassword3" class="col-sm-2 control-label" style="font-weight: 400;padding-left: 0">其它目标</label>
                                    <textarea class="form-control" rows="5" readonly>{{$data[0]['orthodontics_diagnostic_design']['treatment_other_target']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="zhiliaojihua">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>治疗计划&ensp;</h3>
                                    <hr>
                                </div>
                                <div class="form-group" style="margin-left: -4px;">
                                    <textarea class="form-control" rows="8" readonly>{{$data[0]['orthodontics_diagnostic_design']['treatment_plan']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="zhiliaojinzhan">
                        <div class="container bs-docs-container " style="max-width: 700px;">
                            <div class="row form-horizontal">
                                <div class="form-group">
                                    <h3>治疗进展&ensp;</h3>
                                </div>
                                <div class="form-group">
                                    <table class="table table-condensed">
                                        <thead style="border-top: 2px solid #f4f4f4">
                                            <th>档案编号</th>
                                            <th>治疗进展名称</th>
                                            <th>提交时间</th>
                                            <th>操作</th>
                                        </thead>
                                        <tbody>
                                            @if ($data[0]['orthodontics_treatment_process'] == NULL)
                                                <tr>
                                                    <td colspan="4">暂无治疗进展</td>
                                                </tr>
                                                @else
                                            @foreach ($data[0]['orthodontics_treatment_process'] as $v)
                                            <tr>
                                                <td>
                                                    {{$v['orthodontics_id']}}
                                                </td>
                                                <td>
                                                    {{$v['name']}}
                                                </td>
                                                <td>
                                                    {{date('Y-m-d h:i:s',$v['create_time'])}}
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" data-id="{{$v['id']}}" onclick="cxprocess(this.getAttribute('data-id'))">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    &ensp;
                                                    <a href="javascript:void(0);" data-id="{{$v['id']}}" os-id="{{$v['orthodontics_id']}}" onclick="jinzhandel(this.getAttribute('data-id'),this.getAttribute('os-id'))">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                                @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <br>
                                    &ensp;
                                    &ensp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
            </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <script>
        !function(e){if(e.document){var t=e.document;t.querySelectorAll||(t.querySelectorAll=function(n){var r,i=t.createElement("style"),o=[];for(t.documentElement.firstChild.appendChild(i),t._qsa=[],i.styleSheet.cssText=n+"{x-qsa:expression(document._qsa && document._qsa.push(this))}",e.scrollBy(0,0),i.parentNode.removeChild(i);t._qsa.length;)r=t._qsa.shift(),r.style.removeAttribute("x-qsa"),o.push(r);return t._qsa=null,o}),t.querySelector||(t.querySelector=function(e){var n=t.querySelectorAll(e);return n.length?n[0]:null}),t.getElementsByClassName||(t.getElementsByClassName=function(e){return e=String(e).replace(/^|\s+/g,"."),t.querySelectorAll(e)}),Object.keys||(Object.keys=function(e){if(e!==Object(e))throw TypeError("Object.keys called on non-object");var t,n=[];for(t in e)Object.prototype.hasOwnProperty.call(e,t)&&n.push(t);return n}),Array.prototype.forEach||(Array.prototype.forEach=function(e){if(void 0===this||null===this)throw TypeError();var t=Object(this),n=t.length>>>0;if("function"!=typeof e)throw TypeError();var r,i=arguments[1];for(r=0;n>r;r++)r in t&&e.call(i,t[r],r,t)}),function(e){var t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";e.atob=e.atob||function(e){e=String(e);var n,r=0,i=[],o=0,a=0;if(e=e.replace(/\s/g,""),e.length%4===0&&(e=e.replace(/=+$/,"")),e.length%4===1)throw Error("InvalidCharacterError");if(/[^+\/0-9A-Za-z]/.test(e))throw Error("InvalidCharacterError");for(;r<e.length;)n=t.indexOf(e.charAt(r)),o=o<<6|n,a+=6,24===a&&(i.push(String.fromCharCode(o>>16&255)),i.push(String.fromCharCode(o>>8&255)),i.push(String.fromCharCode(255&o)),a=0,o=0),r+=1;return 12===a?(o>>=4,i.push(String.fromCharCode(255&o))):18===a&&(o>>=2,i.push(String.fromCharCode(o>>8&255)),i.push(String.fromCharCode(255&o))),i.join("")},e.btoa=e.btoa||function(e){e=String(e);var n,r,i,o,a,s,l,h=0,u=[];if(/[^\x00-\xFF]/.test(e))throw Error("InvalidCharacterError");for(;h<e.length;)n=e.charCodeAt(h++),r=e.charCodeAt(h++),i=e.charCodeAt(h++),o=n>>2,a=(3&n)<<4|r>>4,s=(15&r)<<2|i>>6,l=63&i,h===e.length+2?(s=64,l=64):h===e.length+1&&(l=64),u.push(t.charAt(o),t.charAt(a),t.charAt(s),t.charAt(l));return u.join("")}}(e),Object.prototype.hasOwnProperty||(Object.prototype.hasOwnProperty=function(e){var t=this.__proto__||this.constructor.prototype;return e in this&&(!(e in t)||t[e]!==this[e])}),function(){if("performance"in e==!1&&(e.performance={}),Date.now=Date.now||function(){return(new Date).getTime()},"now"in e.performance==!1){var t=Date.now();performance.timing&&performance.timing.navigationStart&&(t=performance.timing.navigationStart),e.performance.now=function(){return Date.now()-t}}}(),e.requestAnimationFrame||(e.webkitRequestAnimationFrame&&e.webkitCancelAnimationFrame?!function(e){e.requestAnimationFrame=function(t){return webkitRequestAnimationFrame(function(){t(e.performance.now())})},e.cancelAnimationFrame=e.webkitCancelAnimationFrame}(e):e.mozRequestAnimationFrame&&e.mozCancelAnimationFrame?!function(e){e.requestAnimationFrame=function(t){return mozRequestAnimationFrame(function(){t(e.performance.now())})},e.cancelAnimationFrame=e.mozCancelAnimationFrame}(e):!function(e){e.requestAnimationFrame=function(t){return e.setTimeout(t,1e3/60)},e.cancelAnimationFrame=e.clearTimeout}(e))}}(this),function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.Holder=t():e.Holder=t()}(this,function(){return function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return e[r].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t,n){e.exports=n(1)},function(e,t,n){(function(t){function r(e,t,n,r){var a=i(n.substr(n.lastIndexOf(e.domain)),e);a&&o({mode:null,el:r,flags:a,engineSettings:t})}function i(e,t){var n={theme:k(O.settings.themes.gray,null),stylesheets:t.stylesheets,instanceOptions:t},r=e.indexOf("?"),i=[e];-1!==r&&(i=[e.slice(0,r),e.slice(r+1)]);var o=i[0].split("/");n.holderURL=e;var a=o[1],s=a.match(/([\d]+p?)x([\d]+p?)/);if(!s)return!1;if(n.fluid=-1!==a.indexOf("p"),n.dimensions={width:s[1].replace("p","%"),height:s[2].replace("p","%")},2===i.length){var l=v.parse(i[1]);if(w.truthy(l.ratio)){n.fluid=!0;var h=parseFloat(n.dimensions.width.replace("%","")),u=parseFloat(n.dimensions.height.replace("%",""));u=Math.floor(100*(u/h)),h=100,n.dimensions.width=h+"%",n.dimensions.height=u+"%"}if(n.auto=w.truthy(l.auto),l.bg&&(n.theme.bg=w.parseColor(l.bg)),l.fg&&(n.theme.fg=w.parseColor(l.fg)),l.bg&&!l.fg&&(n.autoFg=!0),l.theme&&n.instanceOptions.themes.hasOwnProperty(l.theme)&&(n.theme=k(n.instanceOptions.themes[l.theme],null)),l.text&&(n.text=l.text),l.textmode&&(n.textmode=l.textmode),l.size&&(n.size=l.size),l.font&&(n.font=l.font),l.align&&(n.align=l.align),l.lineWrap&&(n.lineWrap=l.lineWrap),n.nowrap=w.truthy(l.nowrap),n.outline=w.truthy(l.outline),w.truthy(l.random)){O.vars.cache.themeKeys=O.vars.cache.themeKeys||Object.keys(n.instanceOptions.themes);var d=O.vars.cache.themeKeys[0|Math.random()*O.vars.cache.themeKeys.length];n.theme=k(n.instanceOptions.themes[d],null)}}return n}function o(e){var t=e.mode,n=e.el,r=e.flags,i=e.engineSettings,o=r.dimensions,s=r.theme,l=o.width+"x"+o.height;t=null==t?r.fluid?"fluid":"image":t;var d=/holder_([a-z]+)/g,c=!1;if(null!=r.text&&(s.text=r.text,"object"===n.nodeName.toLowerCase())){for(var f=s.text.split("\\n"),p=0;p<f.length;p++)f[p]=w.encodeHtmlEntity(f[p]);s.text=f.join("\\n")}if(s.text){var g=s.text.match(d);null!==g&&g.forEach(function(e){"holder_dimensions"===e&&(s.text=s.text.replace(e,l))})}var m=r.holderURL,v=k(i,null);if(r.font&&(s.font=r.font,!v.noFontFallback&&"img"===n.nodeName.toLowerCase()&&O.setup.supportsCanvas&&"svg"===v.renderer&&(v=k(v,{renderer:"canvas"}))),r.font&&"canvas"==v.renderer&&(v.reRender=!0),"background"==t)null==n.getAttribute("data-background-src")&&x.setAttr(n,{"data-background-src":m});else{var y={};y[O.vars.dataAttr]=m,x.setAttr(n,y)}r.theme=s,n.holderData={flags:r,engineSettings:v},"image"!=t&&"fluid"!=t||x.setAttr(n,{alt:s.text?c?s.text:s.text+" ["+l+"]":l});var b={mode:t,el:n,holderSettings:{dimensions:o,theme:s,flags:r},engineSettings:v};"image"==t?(r.auto||(n.style.width=o.width+"px",n.style.height=o.height+"px"),"html"==v.renderer?n.style.backgroundColor=s.bg:(a(b),"exact"==r.textmode&&(n.holderData.resizeUpdate=!0,O.vars.resizableImages.push(n),h(n)))):"background"==t&&"html"!=v.renderer?a(b):"fluid"==t&&(n.holderData.resizeUpdate=!0,"%"==o.height.slice(-1)?n.style.height=o.height:null!=r.auto&&r.auto||(n.style.height=o.height+"px"),"%"==o.width.slice(-1)?n.style.width=o.width:null!=r.auto&&r.auto||(n.style.width=o.width+"px"),"inline"!=n.style.display&&""!==n.style.display&&"none"!=n.style.display||(n.style.display="block"),u(n),"html"==v.renderer?n.style.backgroundColor=s.bg:(O.vars.resizableImages.push(n),h(n)))}function a(e){function n(){var t=null;switch(l.renderer){case"canvas":t=E(u,e);break;case"svg":t=C(u,e);break;default:throw"Holder: invalid renderer: "+l.renderer}return t}var r=null,i=e.mode,o=e.el,a=e.holderSettings,l=e.engineSettings;switch(l.renderer){case"svg":if(!O.setup.supportsSVG)return;break;case"canvas":if(!O.setup.supportsCanvas)return;break;default:return}var h={width:a.dimensions.width,height:a.dimensions.height,theme:a.theme,flags:a.flags},u=s(h);if(r=n(),null==r)throw"Holder: couldn't render placeholder";"background"==i?(o.style.backgroundImage="url("+r+")",l.noBackgroundSize||(o.style.backgroundSize=h.width+"px "+h.height+"px")):("img"===o.nodeName.toLowerCase()?x.setAttr(o,{src:r}):"object"===o.nodeName.toLowerCase()&&x.setAttr(o,{data:r,type:"image/svg+xml"}),l.reRender&&t.setTimeout(function(){var e=n();if(null==e)throw"Holder: couldn't render placeholder";"img"===o.nodeName.toLowerCase()?x.setAttr(o,{src:e}):"object"===o.nodeName.toLowerCase()&&x.setAttr(o,{data:e,type:"image/svg+xml"})},150)),x.setAttr(o,{"data-holder-rendered":!0})}function s(e){function t(e,t,n,r){t.width=n,t.height=r,e.width=Math.max(e.width,t.width),e.height+=t.height}var n=O.defaults.size;switch(parseFloat(e.theme.size)?n=e.theme.size:parseFloat(e.flags.size)&&(n=e.flags.size),e.font={family:e.theme.font?e.theme.font:"Arial, Helvetica, Open Sans, sans-serif",size:l(e.width,e.height,n,O.defaults.scale),units:e.theme.units?e.theme.units:O.defaults.units,weight:e.theme.fontweight?e.theme.fontweight:"bold"},e.text=e.theme.text||Math.floor(e.width)+"x"+Math.floor(e.height),e.noWrap=e.theme.nowrap||e.flags.nowrap,e.align=e.theme.align||e.flags.align||"center",e.flags.textmode){case"literal":e.text=e.flags.dimensions.width+"x"+e.flags.dimensions.height;break;case"exact":if(!e.flags.exactDimensions)break;e.text=Math.floor(e.flags.exactDimensions.width)+"x"+Math.floor(e.flags.exactDimensions.height)}var r=e.flags.lineWrap||O.setup.lineWrapRatio,i=e.width*r,o=i,a=new y({width:e.width,height:e.height}),s=a.Shape,h=new s.Rect("holderBg",{fill:e.theme.bg});if(h.resize(e.width,e.height),a.root.add(h),e.flags.outline){var u=new S(h.properties.fill);u=u.lighten(u.lighterThan("7f7f7f")?-.1:.1),h.properties.outline={fill:u.toHex(!0),width:2}}var d=e.theme.fg;if(e.flags.autoFg){var c=new S(h.properties.fill),f=new S("fff"),p=new S("000",{alpha:.285714});d=c.blendAlpha(c.lighterThan("7f7f7f")?p:f).toHex(!0)}var g=new s.Group("holderTextGroup",{text:e.text,align:e.align,font:e.font,fill:d});g.moveTo(null,null,1),a.root.add(g);var m=g.textPositionData=z(a);if(!m)throw"Holder: staging fallback not supported yet.";g.properties.leading=m.boundingBox.height;var v=null,w=null;if(m.lineCount>1){var b,x=0,A=0,C=0;w=new s.Group("line"+C),"left"!==e.align&&"right"!==e.align||(o=e.width*(1-2*(1-r)));for(var E=0;E<m.words.length;E++){var k=m.words[E];v=new s.Text(k.text);var T="\\n"==k.text;!e.noWrap&&(x+k.width>=o||T===!0)&&(t(g,w,x,g.properties.leading),g.add(w),x=0,A+=g.properties.leading,C+=1,w=new s.Group("line"+C),w.y=A),T!==!0&&(v.moveTo(x,0),x+=m.spaceWidth+k.width,w.add(v))}if(t(g,w,x,g.properties.leading),g.add(w),"left"===e.align)g.moveTo(e.width-i,null,null);else if("right"===e.align){for(b in g.children)w=g.children[b],w.moveTo(e.width-w.width,null,null);g.moveTo(0-(e.width-i),null,null)}else{for(b in g.children)w=g.children[b],w.moveTo((g.width-w.width)/2,null,null);g.moveTo((e.width-g.width)/2,null,null)}g.moveTo(null,(e.height-g.height)/2,null),(e.height-g.height)/2<0&&g.moveTo(null,0,null)}else v=new s.Text(e.text),w=new s.Group("line0"),w.add(v),g.add(w),"left"===e.align?g.moveTo(e.width-i,null,null):"right"===e.align?g.moveTo(0-(e.width-i),null,null):g.moveTo((e.width-m.boundingBox.width)/2,null,null),g.moveTo(null,(e.height-m.boundingBox.height)/2,null);return a}function l(e,t,n,r){var i=parseInt(e,10),o=parseInt(t,10),a=Math.max(i,o),s=Math.min(i,o),l=.8*Math.min(s,a*r);return Math.round(Math.max(n,l))}function h(e){var t;t=null==e||null==e.nodeType?O.vars.resizableImages:[e];for(var n=0,r=t.length;r>n;n++){var i=t[n];if(i.holderData){var o=i.holderData.flags,s=T(i);if(s){if(!i.holderData.resizeUpdate)continue;if(o.fluid&&o.auto){var l=i.holderData.fluidConfig;switch(l.mode){case"width":s.height=s.width/l.ratio;break;case"height":s.width=s.height*l.ratio}}var h={mode:"image",holderSettings:{dimensions:s,theme:o.theme,flags:o},el:i,engineSettings:i.holderData.engineSettings};"exact"==o.textmode&&(o.exactDimensions=s,h.holderSettings.dimensions=o.dimensions),a(h)}else f(i)}}}function u(e){if(e.holderData){var t=T(e);if(t){var n=e.holderData.flags,r={fluidHeight:"%"==n.dimensions.height.slice(-1),fluidWidth:"%"==n.dimensions.width.slice(-1),mode:null,initialDimensions:t};r.fluidWidth&&!r.fluidHeight?(r.mode="width",r.ratio=r.initialDimensions.width/parseFloat(n.dimensions.height)):!r.fluidWidth&&r.fluidHeight&&(r.mode="height",r.ratio=parseFloat(n.dimensions.width)/r.initialDimensions.height),e.holderData.fluidConfig=r}else f(e)}}function d(){var e,n=[],r=Object.keys(O.vars.invisibleImages);r.forEach(function(t){e=O.vars.invisibleImages[t],T(e)&&"img"==e.nodeName.toLowerCase()&&(n.push(e),delete O.vars.invisibleImages[t])}),n.length&&F.run({images:n}),setTimeout(function(){t.requestAnimationFrame(d)},10)}function c(){O.vars.visibilityCheckStarted||(t.requestAnimationFrame(d),O.vars.visibilityCheckStarted=!0)}function f(e){e.holderData.invisibleId||(O.vars.invisibleId+=1,O.vars.invisibleImages["i"+O.vars.invisibleId]=e,e.holderData.invisibleId=O.vars.invisibleId)}function p(e){O.vars.debounceTimer||e.call(this),O.vars.debounceTimer&&t.clearTimeout(O.vars.debounceTimer),O.vars.debounceTimer=t.setTimeout(function(){O.vars.debounceTimer=null,e.call(this)},O.setup.debounce)}function g(){p(function(){h(null)})}var m=n(2),v=n(3),y=n(6),w=n(7),b=n(8),x=n(9),S=n(10),A=n(11),C=n(12),E=n(15),k=w.extend,T=w.dimensionCheck,j=A.svg_ns,F={version:A.version,addTheme:function(e,t){return null!=e&&null!=t&&(O.settings.themes[e]=t),delete O.vars.cache.themeKeys,this},addImage:function(e,t){var n=x.getNodeArray(t);return n.forEach(function(t){var n=x.newEl("img"),r={};r[O.setup.dataAttr]=e,x.setAttr(n,r),t.appendChild(n)}),this},setResizeUpdate:function(e,t){e.holderData&&(e.holderData.resizeUpdate=!!t,e.holderData.resizeUpdate&&h(e))},run:function(e){e=e||{};var n={},a=k(O.settings,e);O.vars.preempted=!0,O.vars.dataAttr=a.dataAttr||O.setup.dataAttr,n.renderer=a.renderer?a.renderer:O.setup.renderer,-1===O.setup.renderers.join(",").indexOf(n.renderer)&&(n.renderer=O.setup.supportsSVG?"svg":O.setup.supportsCanvas?"canvas":"html");var s=x.getNodeArray(a.images),l=x.getNodeArray(a.bgnodes),h=x.getNodeArray(a.stylenodes),u=x.getNodeArray(a.objects);return n.stylesheets=[],n.svgXMLStylesheet=!0,n.noFontFallback=!!a.noFontFallback,n.noBackgroundSize=!!a.noBackgroundSize,h.forEach(function(e){if(e.attributes.rel&&e.attributes.href&&"stylesheet"==e.attributes.rel.value){var t=e.attributes.href.value,r=x.newEl("a");r.href=t;var i=r.protocol+"//"+r.host+r.pathname+r.search;n.stylesheets.push(i)}}),l.forEach(function(e){if(t.getComputedStyle){var r=t.getComputedStyle(e,null).getPropertyValue("background-image"),s=e.getAttribute("data-background-src"),l=s||r,h=null,u=a.domain+"/",d=l.indexOf(u);if(0===d)h=l;else if(1===d&&"?"===l[0])h=l.slice(1);else{var c=l.substr(d).match(/([^\"]*)"?\)/);if(null!==c)h=c[1];else if(0===l.indexOf("url("))throw"Holder: unable to parse background URL: "+l}if(h){var f=i(h,a);f&&o({mode:"background",el:e,flags:f,engineSettings:n})}}}),u.forEach(function(e){var t={};try{t.data=e.getAttribute("data"),t.dataSrc=e.getAttribute(O.vars.dataAttr)}catch(i){}var o=null!=t.data&&0===t.data.indexOf(a.domain),s=null!=t.dataSrc&&0===t.dataSrc.indexOf(a.domain);o?r(a,n,t.data,e):s&&r(a,n,t.dataSrc,e)}),s.forEach(function(e){var t={};try{t.src=e.getAttribute("src"),t.dataSrc=e.getAttribute(O.vars.dataAttr),t.rendered=e.getAttribute("data-holder-rendered")}catch(i){}var o=null!=t.src,s=null!=t.dataSrc&&0===t.dataSrc.indexOf(a.domain),l=null!=t.rendered&&"true"==t.rendered;o?0===t.src.indexOf(a.domain)?r(a,n,t.src,e):s&&(l?r(a,n,t.dataSrc,e):!function(e,t,n,i,o){w.imageExists(e,function(e){e||r(t,n,i,o)})}(t.src,a,n,t.dataSrc,e)):s&&r(a,n,t.dataSrc,e)}),this}},O={settings:{domain:"holder.js",images:"img",objects:"object",bgnodes:"body .holderjs",stylenodes:"head link.holderjs",themes:{gray:{bg:"#EEEEEE",fg:"#AAAAAA"},social:{bg:"#3a5a97",fg:"#FFFFFF"},industrial:{bg:"#434A52",fg:"#C2F200"},sky:{bg:"#0D8FDB",fg:"#FFFFFF"},vine:{bg:"#39DBAC",fg:"#1E292C"},lava:{bg:"#F8591A",fg:"#1C2846"}}},defaults:{size:10,units:"pt",scale:1/16}},z=function(){var e=null,t=null,n=null;return function(r){var i=r.root;if(O.setup.supportsSVG){var o=!1,a=function(e){return document.createTextNode(e)};null!=e&&e.parentNode===document.body||(o=!0),e=b.initSVG(e,i.properties.width,i.properties.height),e.style.display="block",o&&(t=x.newEl("text",j),n=a(null),x.setAttr(t,{x:0}),t.appendChild(n),e.appendChild(t),document.body.appendChild(e),e.style.visibility="hidden",e.style.position="absolute",e.style.top="-100%",e.style.left="-100%");var s=i.children.holderTextGroup,l=s.properties;x.setAttr(t,{y:l.font.size,style:w.cssProps({"font-weight":l.font.weight,"font-size":l.font.size+l.font.units,"font-family":l.font.family})}),n.nodeValue=l.text;var h=t.getBBox(),u=Math.ceil(h.width/i.properties.width),d=l.text.split(" "),c=l.text.match(/\\n/g);u+=null==c?0:c.length,n.nodeValue=l.text.replace(/[ ]+/g,"");var f=t.getComputedTextLength(),p=h.width-f,g=Math.round(p/Math.max(1,d.length-1)),m=[];if(u>1){n.nodeValue="";for(var v=0;v<d.length;v++)if(0!==d[v].length){n.nodeValue=w.decodeHtmlEntity(d[v]);var y=t.getBBox();m.push({text:d[v],width:y.width})}}return e.style.display="none",{spaceWidth:g,lineCount:u,boundingBox:h,words:m}}return!1}}();for(var D in O.flags)O.flags.hasOwnProperty(D)&&(O.flags[D].match=function(e){return e.match(this.regex)});O.setup={renderer:"html",debounce:100,ratio:1,supportsCanvas:!1,supportsSVG:!1,lineWrapRatio:.9,dataAttr:"data-src",renderers:["html","canvas","svg"]},O.vars={preempted:!1,resizableImages:[],invisibleImages:{},invisibleId:0,visibilityCheckStarted:!1,debounceTimer:null,cache:{}},function(){var e=x.newEl("canvas");e.getContext&&-1!=e.toDataURL("image/png").indexOf("data:image/png")&&(O.setup.renderer="canvas",O.setup.supportsCanvas=!0),document.createElementNS&&document.createElementNS(j,"svg").createSVGRect&&(O.setup.renderer="svg",O.setup.supportsSVG=!0)}(),c(),m&&m(function(){O.vars.preempted||F.run(),t.addEventListener?(t.addEventListener("resize",g,!1),t.addEventListener("orientationchange",g,!1)):t.attachEvent("onresize",g),"object"==typeof t.Turbolinks&&t.document.addEventListener("page:change",function(){F.run()})}),e.exports=F}).call(t,function(){return this}())},function(e,t){function n(e){function t(e){if(!x){if(!a.body)return i(t);for(x=!0;e=S.shift();)i(e)}}function n(e){(w||e.type===l||a[c]===d)&&(r(),t())}function r(){w?(a[y](m,n,h),e[y](l,n,h)):(a[p](v,n),e[p](u,n))}function i(e,t){setTimeout(e,+t>=0?t:1)}function o(e){x?i(e):S.push(e)}null==document.readyState&&document.addEventListener&&(document.addEventListener("DOMContentLoaded",function C(){document.removeEventListener("DOMContentLoaded",C,!1),document.readyState="complete"},!1),document.readyState="loading");var a=e.document,s=a.documentElement,l="load",h=!1,u="on"+l,d="complete",c="readyState",f="attachEvent",p="detachEvent",g="addEventListener",m="DOMContentLoaded",v="onreadystatechange",y="removeEventListener",w=g in a,b=h,x=h,S=[];if(a[c]===d)i(t);else if(w)a[g](m,n,h),e[g](l,n,h);else{a[f](v,n),e[f](u,n);try{b=null==e.frameElement&&s}catch(A){}b&&b.doScroll&&!function E(){if(!x){try{b.doScroll("left")}catch(e){return i(E,50)}r(),t()}}()}return o.version="1.4.0",o.isReady=function(){return x},o}e.exports="undefined"!=typeof window&&n(window)},function(e,t,n){var r=encodeURIComponent,i=decodeURIComponent,o=n(4),a=n(5),s=/(\w+)\[(\d+)\]/,l=/\w+\.\w+/;t.parse=function(e){if("string"!=typeof e)return{};if(e=o(e),""===e)return{};"?"===e.charAt(0)&&(e=e.slice(1));for(var t={},n=e.split("&"),r=0;r<n.length;r++){var a,h,u,d=n[r].split("="),c=i(d[0]);if(a=s.exec(c))t[a[1]]=t[a[1]]||[],t[a[1]][a[2]]=i(d[1]);else if(a=l.test(c)){for(a=c.split("."),h=t;a.length;)if(u=a.shift(),u.length){if(h[u]){if(h[u]&&"object"!=typeof h[u])break}else h[u]={};a.length||(h[u]=i(d[1])),h=h[u]}}else t[d[0]]=null==d[1]?"":i(d[1])}return t},t.stringify=function(e){if(!e)return"";var t=[];for(var n in e){var i=e[n];if("array"!=a(i))t.push(r(n)+"="+r(e[n]));else for(var o=0;o<i.length;++o)t.push(r(n+"["+o+"]")+"="+r(i[o]))}return t.join("&")}},function(e,t){function n(e){return e.replace(/^\s*|\s*$/g,"")}t=e.exports=n,t.left=function(e){return e.replace(/^\s*/,"")},t.right=function(e){return e.replace(/\s*$/,"")}},function(e,t){function n(e){return!(null==e||!(e._isBuffer||e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)))}var r=Object.prototype.toString;e.exports=function(e){switch(r.call(e)){case"[object Date]":return"date";case"[object RegExp]":return"regexp";case"[object Arguments]":return"arguments";case"[object Array]":return"array";case"[object Error]":return"error"}return null===e?"null":void 0===e?"undefined":e!==e?"nan":e&&1===e.nodeType?"element":n(e)?"buffer":(e=e.valueOf?e.valueOf():Object.prototype.valueOf.apply(e),typeof e)}},function(e,t){var n=function(e){function t(e,t){for(var n in t)e[n]=t[n];return e}var n=1,r=function(e){n++,this.parent=null,this.children={},this.id=n,this.name="n"+n,"undefined"!=typeof e&&(this.name=e),this.x=this.y=this.z=0,this.width=this.height=0};r.prototype.resize=function(e,t){null!=e&&(this.width=e),null!=t&&(this.height=t)},r.prototype.moveTo=function(e,t,n){this.x=null!=e?e:this.x,this.y=null!=t?t:this.y,this.z=null!=n?n:this.z},r.prototype.add=function(e){var t=e.name;if("undefined"!=typeof this.children[t])throw"SceneGraph: child already exists: "+t;this.children[t]=e,e.parent=this};var i=function(){r.call(this,"root"),this.properties=e};i.prototype=new r;var o=function(e,n){if(r.call(this,e),this.properties={fill:"#000000"},"undefined"!=typeof n)t(this.properties,n);else if("undefined"!=typeof e&&"string"!=typeof e)throw"SceneGraph: invalid node name"};o.prototype=new r;var a=function(){o.apply(this,arguments),this.type="group"};a.prototype=new o;var s=function(){o.apply(this,arguments),this.type="rect"};s.prototype=new o;var l=function(e){o.call(this),this.type="text",this.properties.text=e};l.prototype=new o;var h=new i;return this.Shape={Rect:s,Text:l,Group:a},this.root=h,this};e.exports=n},function(e,t){(function(e){t.extend=function(e,t){var n={};for(var r in e)e.hasOwnProperty(r)&&(n[r]=e[r]);if(null!=t)for(var i in t)t.hasOwnProperty(i)&&(n[i]=t[i]);return n},t.cssProps=function(e){var t=[];for(var n in e)e.hasOwnProperty(n)&&t.push(n+":"+e[n]);return t.join(";")},t.encodeHtmlEntity=function(e){for(var t=[],n=0,r=e.length-1;r>=0;r--)n=e.charCodeAt(r),n>128?t.unshift(["&#",n,";"].join("")):t.unshift(e[r]);return t.join("")},t.imageExists=function(e,t){var n=new Image;n.onerror=function(){t.call(this,!1)},n.onload=function(){t.call(this,!0)},n.src=e},t.decodeHtmlEntity=function(e){return e.replace(/&#(\d+);/g,function(e,t){return String.fromCharCode(t)})},t.dimensionCheck=function(e){var t={height:e.clientHeight,width:e.clientWidth};return t.height&&t.width?t:!1},t.truthy=function(e){return"string"==typeof e?"true"===e||"yes"===e||"1"===e||"on"===e||"✓"===e:!!e},t.parseColor=function(e){var t,n=/(^(?:#?)[0-9a-f]{6}$)|(^(?:#?)[0-9a-f]{3}$)/i,r=/^rgb\((\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\)$/,i=/^rgba\((\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(0\.\d{1,}|1)\)$/,o=e.match(n);return null!==o?(t=o[1]||o[2],"#"!==t[0]?"#"+t:t):(o=e.match(r),null!==o?t="rgb("+o.slice(1).join(",")+")":(o=e.match(i),null!==o?t="rgba("+o.slice(1).join(",")+")":null))},t.canvasRatio=function(){var t=1,n=1;if(e.document){var r=e.document.createElement("canvas");if(r.getContext){var i=r.getContext("2d");t=e.devicePixelRatio||1,n=i.webkitBackingStorePixelRatio||i.mozBackingStorePixelRatio||i.msBackingStorePixelRatio||i.oBackingStorePixelRatio||i.backingStorePixelRatio||1}}return t/n}}).call(t,function(){return this}())},function(e,t,n){(function(e){var r=n(9),i="http://www.w3.org/2000/svg",o=8;t.initSVG=function(e,t,n){var a,s,l=!1;e&&e.querySelector?(s=e.querySelector("style"),null===s&&(l=!0)):(e=r.newEl("svg",i),l=!0),l&&(a=r.newEl("defs",i),s=r.newEl("style",i),r.setAttr(s,{type:"text/css"}),a.appendChild(s),e.appendChild(a)),e.webkitMatchesSelector&&e.setAttribute("xmlns",i);for(var h=0;h<e.childNodes.length;h++)e.childNodes[h].nodeType===o&&e.removeChild(e.childNodes[h]);for(;s.childNodes.length;)s.removeChild(s.childNodes[0]);return r.setAttr(e,{width:t,height:n,viewBox:"0 0 "+t+" "+n,preserveAspectRatio:"none"}),e},t.svgStringToDataURI=function(){var t="data:image/svg+xml;charset=UTF-8,",n="data:image/svg+xml;charset=UTF-8;base64,";return function(r,i){return i?n+btoa(e.unescape(encodeURIComponent(r))):t+encodeURIComponent(r)}}(),t.serializeSVG=function(t,n){if(e.XMLSerializer){var i=new XMLSerializer,o="",a=n.stylesheets;if(n.svgXMLStylesheet){for(var s=r.createXML(),l=a.length-1;l>=0;l--){var h=s.createProcessingInstruction("xml-stylesheet",'href="'+a[l]+'" rel="stylesheet"');s.insertBefore(h,s.firstChild)}s.removeChild(s.documentElement),o=i.serializeToString(s)}var u=i.serializeToString(t);return u=u.replace(/\&amp;(\#[0-9]{2,}\;)/g,"&$1"),o+u}}}).call(t,function(){return this}())},function(e,t){(function(e){t.newEl=function(t,n){return e.document?null==n?e.document.createElement(t):e.document.createElementNS(n,t):void 0},t.setAttr=function(e,t){for(var n in t)e.setAttribute(n,t[n])},t.createXML=function(){return e.DOMParser?(new DOMParser).parseFromString("<xml />","application/xml"):void 0},t.getNodeArray=function(t){var n=null;return"string"==typeof t?n=document.querySelectorAll(t):e.NodeList&&t instanceof e.NodeList?n=t:e.Node&&t instanceof e.Node?n=[t]:e.HTMLCollection&&t instanceof e.HTMLCollection?n=t:t instanceof Array?n=t:null===t&&(n=[]),n=Array.prototype.slice.call(n)}}).call(t,function(){return this}())},function(e,t){var n=function(e,t){"string"==typeof e&&(this.original=e,"#"===e.charAt(0)&&(e=e.slice(1)),/[^a-f0-9]+/i.test(e)||(3===e.length&&(e=e.replace(/./g,"$&$&")),6===e.length&&(this.alpha=1,t&&t.alpha&&(this.alpha=t.alpha),this.set(parseInt(e,16)))))};n.rgb2hex=function(e,t,n){function r(e){var t=(0|e).toString(16);return 16>e&&(t="0"+t),t}return[e,t,n].map(r).join("")},n.hsl2rgb=function(e,t,n){var r=e/60,i=(1-Math.abs(2*n-1))*t,o=i*(1-Math.abs(parseInt(r)%2-1)),a=n-i/2,s=0,l=0,h=0;return r>=0&&1>r?(s=i,l=o):r>=1&&2>r?(s=o,l=i):r>=2&&3>r?(l=i,h=o):r>=3&&4>r?(l=o,h=i):r>=4&&5>r?(s=o,h=i):r>=5&&6>r&&(s=i,h=o),s+=a,l+=a,h+=a,s=parseInt(255*s),l=parseInt(255*l),h=parseInt(255*h),[s,l,h]},n.prototype.set=function(e){this.raw=e;var t=(16711680&this.raw)>>16,n=(65280&this.raw)>>8,r=255&this.raw,i=.2126*t+.7152*n+.0722*r,o=-.09991*t-.33609*n+.436*r,a=.615*t-.55861*n-.05639*r;return this.rgb={r:t,g:n,b:r},this.yuv={y:i,u:o,v:a},this},n.prototype.lighten=function(e){var t=Math.min(1,Math.max(0,Math.abs(e)))*(0>e?-1:1),r=255*t|0,i=Math.min(255,Math.max(0,this.rgb.r+r)),o=Math.min(255,Math.max(0,this.rgb.g+r)),a=Math.min(255,Math.max(0,this.rgb.b+r)),s=n.rgb2hex(i,o,a);return new n(s)},n.prototype.toHex=function(e){return(e?"#":"")+this.raw.toString(16)},n.prototype.lighterThan=function(e){return e instanceof n||(e=new n(e)),this.yuv.y>e.yuv.y},n.prototype.blendAlpha=function(e){e instanceof n||(e=new n(e));var t=e,r=this,i=t.alpha*t.rgb.r+(1-t.alpha)*r.rgb.r,o=t.alpha*t.rgb.g+(1-t.alpha)*r.rgb.g,a=t.alpha*t.rgb.b+(1-t.alpha)*r.rgb.b;return new n(n.rgb2hex(i,o,a))},e.exports=n},function(e,t){e.exports={version:"2.9.3",svg_ns:"http://www.w3.org/2000/svg"}},function(e,t,n){function r(e,t){return d.element({tag:t,width:e.width,height:e.height,fill:e.properties.fill})}function i(e){return h.cssProps({fill:e.fill,"font-weight":e.font.weight,"font-family":e.font.family+", monospace","font-size":e.font.size+e.font.units})}function o(e,t,n){var r=n/2;return["M",r,r,"H",e-r,"V",t-r,"H",r,"V",0,"M",0,r,"L",e,t-r,"M",0,t-r,"L",e,r].join(" ")}var a=n(13),s=n(8),l=n(11),h=n(7),u=l.svg_ns,d={element:function(e){var t=e.tag,n=e.content||"";return delete e.tag,delete e.content,[t,n,e]}};e.exports=function(e,t){var n=t.engineSettings,l=n.stylesheets,h=l.map(function(e){return'<?xml-stylesheet rel="stylesheet" href="'+e+'"?>'}).join("\n"),c="holder_"+Number(new Date).toString(16),f=e.root,p=f.children.holderTextGroup,g="#"+c+" text { "+i(p.properties)+" } ";p.y+=.8*p.textPositionData.boundingBox.height;var m=[];Object.keys(p.children).forEach(function(e){var t=p.children[e];Object.keys(t.children).forEach(function(e){var n=t.children[e],r=p.x+t.x+n.x,i=p.y+t.y+n.y,o=d.element({tag:"text",content:n.properties.text,x:r,y:i});m.push(o)})});var v=d.element({tag:"g",content:m}),y=null;if(f.children.holderBg.properties.outline){var w=f.children.holderBg.properties.outline;y=d.element({tag:"path",d:o(f.children.holderBg.width,f.children.holderBg.height,w.width),"stroke-width":w.width,stroke:w.fill,fill:"none"})}var b=r(f.children.holderBg,"rect"),x=[];x.push(b),w&&x.push(y),x.push(v);var S=d.element({tag:"g",id:c,content:x}),A=d.element({tag:"style",content:g,type:"text/css"}),C=d.element({tag:"defs",content:A}),E=d.element({tag:"svg",content:[C,S],width:f.properties.width,height:f.properties.height,xmlns:u,viewBox:[0,0,f.properties.width,f.properties.height].join(" "),preserveAspectRatio:"none"}),k=a(E);k=h+k[0];var T=s.svgStringToDataURI(k,"background"===t.mode);return T}},function(e,t,n){n(14);e.exports=function r(e,t,n){"use strict";function i(e){var t=e.match(/^[\w-]+/),r={tag:t?t[0]:"div",attr:{},children:[]},i=e.match(/#([\w-]+)/),o=e.match(/\$([\w-]+)/),a=e.match(/\.[\w-]+/g);return i&&(r.attr.id=i[1],n[i[1]]=r),o&&(n[o[1]]=r),a&&(r.attr["class"]=a.join(" ").replace(/\./g,"")),e.match(/&$/g)&&(f=!1),r}function o(e,t){return null!==t&&t!==!1&&void 0!==t?"string"!=typeof t&&"object"!=typeof t?String(t):t:void 0}function a(e){return e||0===e?String(e).replace(/&/g,"&amp;").replace(/"/g,"&quot;"):""}function s(e){return String(e).replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&apos;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}var l,h,u,d,c=1,f=!0;if(n=n||{},"string"==typeof e[0])e[0]=i(e[0]);else{if(!Array.isArray(e[0]))throw new Error("First element of array must be a string, or an array and not "+JSON.stringify(e[0]));c=0}for(;c<e.length;c++){if(e[c]===!1||null===e[c]){e[0]=!1;break}if(void 0!==e[c]&&e[c]!==!0)if("string"==typeof e[c])f&&(e[c]=s(e[c])),e[0].children.push(e[c]);else if("number"==typeof e[c])e[0].children.push(e[c]);else if(Array.isArray(e[c])){if(Array.isArray(e[c][0])){if(e[c].reverse().forEach(function(t){e.splice(c+1,0,t)}),0!==c)continue;c++}r(e[c],t,n),e[c][0]&&e[0].children.push(e[c][0])}else if("function"==typeof e[c])u=e[c];else{if("object"!=typeof e[c])throw new TypeError('"'+e[c]+'" is not allowed as a value.');for(h in e[c])e[c].hasOwnProperty(h)&&null!==e[c][h]&&e[c][h]!==!1&&("style"===h&&"object"==typeof e[c][h]?e[0].attr[h]=JSON.stringify(e[c][h],o).slice(2,-2).replace(/","/g,";").replace(/":"/g,":").replace(/\\"/g,"'"):e[0].attr[h]=e[c][h])}}if(e[0]!==!1){l="<"+e[0].tag;for(d in e[0].attr)e[0].attr.hasOwnProperty(d)&&(l+=" "+d+'="'+a(e[0].attr[d])+'"');l+=">",e[0].children.forEach(function(e){l+=e}),l+="</"+e[0].tag+">",e[0]=l}return n[0]=e[0],u&&u(e[0]),n}},function(e,t){"use strict";function n(e){var t=""+e,n=r.exec(t);if(!n)return t;var i,o="",a=0,s=0;for(a=n.index;a<t.length;a++){switch(t.charCodeAt(a)){case 34:i="&quot;";break;case 38:i="&amp;";break;case 39:i="&#39;";break;case 60:i="&lt;";break;case 62:i="&gt;";break;default:continue}s!==a&&(o+=t.substring(s,a)),s=a+1,o+=i}return s!==a?o+t.substring(s,a):o}var r=/["'&<>]/;e.exports=n},function(e,t,n){var r=n(9),i=n(7);e.exports=function(){var e=r.newEl("canvas"),t=null;return function(n){null==t&&(t=e.getContext("2d"));var r=i.canvasRatio(),o=n.root;e.width=r*o.properties.width,e.height=r*o.properties.height,t.textBaseline="middle";var a=o.children.holderBg,s=r*a.width,l=r*a.height,h=2,u=h/2;t.fillStyle=a.properties.fill,t.fillRect(0,0,s,l),a.properties.outline&&(t.strokeStyle=a.properties.outline.fill,t.lineWidth=a.properties.outline.width,t.moveTo(u,u),t.lineTo(s-u,u),t.lineTo(s-u,l-u),t.lineTo(u,l-u),t.lineTo(u,u),t.moveTo(0,u),t.lineTo(s,l-u),t.moveTo(0,l-u),t.lineTo(s,u),t.stroke());var d=o.children.holderTextGroup;t.font=d.properties.font.weight+" "+r*d.properties.font.size+d.properties.font.units+" "+d.properties.font.family+", monospace",t.fillStyle=d.properties.fill;for(var c in d.children){var f=d.children[c];for(var p in f.children){var g=f.children[p],m=r*(d.x+f.x+g.x),v=r*(d.y+f.y+g.y+d.properties.leading/2);t.fillText(g.properties.text,m,v)}}return e.toDataURL("image/png")}}()}])}),function(e,t){
            t&&(Holder=e.Holder)}(this,"undefined"!=typeof Meteor&&"undefined"!=typeof Package);
        function bb (a)
        {
            if (a > 820)
            {
                $('#neirong').css('height','827px');
                $('#neirong').css('overflow','scroll');
            }else{
                $('#neirong').css('height','');
                $('#neirong').css('overflow','');
            }
        }
    </script>


<div class="col_790 margin_left">
            <!-- InstanceBeginEditable name="content main" -->
            <div id="load_point" class="box">
                <div class="headline_11">
                    <h2>
                        NẠP ĐIỂM</h2>
                </div>
                <div class="body">
                    <div id="card_agency" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="headline_12">
                            <h2>
                                Hệ tại hệ thống chấp nhận nạp các loại thẻ như: <strong> Mobiphone, Vinaphone,
                                    Viettel</strong><br />Lưu ý: Các thẻ nạp sẽ bị tính phí 22% phí dịch vụ</h2>
                        </div>
                        <div class="body">
                            <ul>
                               
                                <li>
                                    <div class="pack">
                                        <div class="block_140x62">
                                            <div class="logo">
                                                <img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/logo_mobi_napdd.gif" alt=""></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pack">
                                        <div class="block_140x62">
                                            <div class="logo">
                                                <img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/logo_vina_napdd.gif" alt=""></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pack">
                                        <div class="block_140x62">
                                            <div class="logo">
                                                <img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/logo_viettel_napdd.gif" alt=""></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="import_load_point">
                        <form method="post" class="form_style_3">
                        <div class="validation-summary-errors">
                            <ul>
    
                                <li>
                                    <?php 
                                    if(isset($message))
                                    {
                                        echo $message;
                                    }
                                    else
                                    {
                                        echo '';
                                    }
                                    ?>
                                </li>
    
                            </ul>
                        </div>
                        <ul>
                            <li>
                                <label>
                                    Loại thẻ <span class="hightlight">*</span></label>
                                <select id="lstTelco" name="lstTelco">
                                	<option value="1">Viettel</option>
                                    <option value="2">MobiFone</option>
                                    <option value="3">Vinaphone</option>
                                    <option value="5">Vcoin</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    Nhập mã số thẻ <span class="hightlight">*</span></label>
                                    <?php 
                                    if(isset($ma_the))
                                    {
                                        $ma = $ma_the;
                                    }
                                    else
                                    {
                                        $ma = '';
                                    }
                                    ?>
                                <input class="keypress" id="code" name="txtCode" type="text" value="<?php echo $ma;?>"/>
                            </li>
                            <li id="serial_info">
                                <label>
                                    Số serial <span class="hightlight">*</span></label>
                                    <?php 
                                    if(isset($series))
                                    {
                                        $s_r = $series;
                                    }
                                    else
                                    {
                                        $s_r = '';
                                    }
                                    ?>
                                <input id="serial" name="txtSeri" type="text" value="<?php echo $s_r;?>"/>
                            </li>
                            <li>
                                <button type="submit" class="btn_2">
                                    <span>NẠP ĐIỂM</span></button>
                                <a class="btn_3" href="<?php echo base_url();?>thanh-vien/nap-the"><span>HỦY BỎ</span></a></li>
                        </ul>
                        </form>
                    </div>
                </div>
            </div>
            <!-- InstanceEndEditable -->
        </div>
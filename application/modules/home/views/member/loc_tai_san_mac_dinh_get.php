<div class="col_790 margin_left">
                <div class="box">
                    <div class="headline_11">
                        <h2>
                            LỌC TÀI SẢN MẶC ĐỊNH</h2>
                    </div>
                    
                    <div class="body">
                    
                        <form  method="post" class="account_form form_style_3" enctype="multipart/form-data">
                        <div id="change_email" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                            <div class="body">
                                
                                <fieldset>
                                    <ul>
                                        <li>
                                            <label>
                                                Loại giao dịch</label>
                                                <label class="label-01" for="t_1">
                                                    <input id="t_1" name="tindang" value="1" type="radio">
                                                    Cần bán</label>
                                                <label class="label-01" for="t_2">
                                                    <input id="t_2" name="tindang" value="2" type="radio">
                                                    Cho thuê</label>
                                                <label class="label-01" for="t_3">
                                                    <input id="t_3" name="tindang" value="3" type="radio">
                                                    Cần mua</label>
                                                <label class="label-01" for="t_4">
                                                    <input id="t_4" name="tindang" value="4" type="radio">
                                                    Cần thuê</label>
                                        </li>
                                        <li>
                                            <label>
                                                Loại tài sản</label>
                                                <?php 
                                                $i=1;
                                                foreach($list_loai_dia_oc_ as $cate_sieu_thi)
                                                {
                                                    if($i%5==0)
                                                    {    
                                                ?>
                                                <label>
                                                    </label>
                                                <?php } else {?>
                                                    <label class="label-01" for="dt_1">
                                                        <input id="dt_1" name="cate_sieu_thi[]" value="<?php echo $cate_sieu_thi['id']?>" type="checkbox">
                                                        <?php echo $cate_sieu_thi['name']?></label>
                                                    
                                                <?php } $i++;} ?>
                                        </li>
                                        <li>
                                            <label>
                                                Tỉnh / thành</label>
                                                <?php 
                                                $i = 1;
                                                foreach($list_city as $k=>$city)
                                                {
                                                    if($i%5==0)
                                                    {
                                                ?>
                                                <label></label>
                                                <?php } else {?>
                                                <label class="label-01" for="c_2">
                                                    <input id="c_2" name="city[]" value="<?php echo $k ?>" type="checkbox">
                                                   <?php echo $city ?></label>
                                                <?php } $i++;} ?>
                                        </li>
                                        <li></li>
                                        <li>
                                            <button type="submit" name="SubmitEmail" id="SubmitEmail" class="btn_2">
                                                <span>CẬP NHẬT</span></button> 
                                                

                                            <button type="submit" name="SubmitHuy" id="SubmitHuy" class="btn_2" value="1" style="margin-left:30px;" onclick="return confirm('Bạn có muốn xóa tất cả điều kiện Lọc Tài Sản Mặc Định không?')">
                                                <span>XÓA TẤT CẢ</span></button>
                                            </li>
                                            
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
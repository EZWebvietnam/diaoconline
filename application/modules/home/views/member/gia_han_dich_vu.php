
<div class="col_790 margin_left">
            <div class="box">
              	<div class="headline_11"><h2>
                ĐĂNG TÀI SẢN MỚI
                </h2></div>

                <form  method="post" class="form_style_3" enctype="multipart/form-data">
                <div class="body">
                  <div class="mess_head margin_bottom"><strong>Điền chính xác các thông tin dưới đây giúp cho tài sản của bạn xuất hiện chính xác và đầy đủ trong các kết quả theo nhu cầu của người dùng, việc này giúp cho giao dịch của bạn sẽ nhanh hơn.</strong></div>
                  
                  <div class="wrap margin_bottom">
                  	<div id="post_info_1" class="rounded_style_1 rounded_box col_509"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>SỐ DƯ TÀI KHOẢN</h2></div>
                        <div class="body">
                        	<input id="AssetId" name="AssetId" type="hidden" value="0">
                           	<fieldset>
                           	    <ul>
                                <li><label>Số dư </label>
                                 <?php echo $so_du[0]['so_du']?>                                      
                              	</li>
                                 </ul>
                                
                              </fieldset>
                        </div>
                    </div>
                    <div id="post_info_2" class="rounded_style_1 rounded_box col_245 margin_left"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>CHI TIẾt</h2></div>
                        <div class="body">
                           	  <fieldset>
                           	    <ul>
                                    <li>Gói dịch vụ: <select id="list_sv" name="dich_vu">
                                    <?php 
                                    foreach($list_dv as $dv)
                                    {
                                        if($detail_order[0]['id_dich_vu']==$dv['id_service'])
                                        {
                                    ?>
                                    <option selected="" value="<?php echo $dv['id_service']?>"><?php echo $dv['name']?></option>
                                    <?php } else { ?>
                                    <option value="<?php echo $dv['id_service']?>"><?php echo $dv['name']?></option>
                                     <?php }} ?>
                                    </select>
                                    
                                   
                                    <li>Số tiền: <div id="price_"><?php echo $detail_order[0]['money']?></div></li>
                                    <li>Thời gian: <input name="time" type="text" id="month" size="1" value="<?php echo $detail_order[0]['time']?>"/> tháng</li>
                                    <li>Đến ngày: <div id="date"><?php echo $detail_order[0]['ngay_het_han']?></div></li>
                                    <li>Tổng tiền: <div id="money_s"><?php echo $detail_order[0]['tong_tien']?></div></li>
                                </ul>
                              </fieldset>
                        </div>
                    </div>
                  </div>  
                 
                 
                  <div id="post_info_6" class="rounded_style_1 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>HOÀN TẤT</h2></div>
                       
                        <div class="body">   
                        	<div class="content">   	
                            	
                           	  <fieldset>
                           	    <ul>
                                	
                                         <button type="submit" name="SubmitNew" value="1" class="btn_2"><span>Thanh toán</span></button>
                                        
                                    
                                        <a name="SubmitCancel" class="btn_3" href="/thanh-vien/trang-chu"><span>HỦY BỎ</span></a>
                                        <input id="Status" name="Status" type="hidden" value="0">
                                        <input id="IsCharged" name="IsCharged" type="hidden" value="False">
                                        
                                    </li>
                                </ul>
                              </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
              </div>


        </div>
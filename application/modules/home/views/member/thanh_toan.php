
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
                                    <li>Gói dịch vụ: <?php echo $detail_order[0]['name']?></li>
                                    <li>Số tiền: <?php echo $detail_order[0]['money']?></li>
                                    <li>Thời gian: <?php echo $detail_order[0]['time']?> tháng</li>
                                    <li>Đến ngày: <?php echo $detail_order[0]['ngay_het_han']?></li>
                                    <li>Tổng tiền: <?php echo $detail_order[0]['tong_tien']?></li>
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
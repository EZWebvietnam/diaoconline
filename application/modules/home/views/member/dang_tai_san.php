 
<div class="col_790 margin_left">
            <div class="box">
              	<div class="headline_11"><h2>
                ĐĂNG TÀI SẢN MỚI
                </h2></div>

                <form  method="post" class="form_style_3" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $code?>" name="code"/>
                <div class="body">
                  <div class="mess_head margin_bottom"><strong>Điền chính xác các thông tin dưới đây giúp cho tài sản của bạn xuất hiện chính xác và đầy đủ trong các kết quả theo nhu cầu của người dùng, việc này giúp cho giao dịch của bạn sẽ nhanh hơn.</strong></div>
                  
                  <div class="wrap margin_bottom">
                  	<div id="post_info_1" class="rounded_style_1 rounded_box col_509"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>THÔNG TIN CƠ BẢN</h2></div>
                        <div class="body">
                        	<input id="AssetId" name="AssetId" type="hidden" value="0">
                           	<fieldset>
                           	    <ul>
                               	<li class="post_type"><label>Loại tin đăng <span class="hightlight">*</span></label>
                                	<div class="option">
                                        <input type="radio" name="TinDang" id="at_1" value="1" checked="checked"><label for="at_1">Cần bán</label>
                                        <input type="radio" name="TinDang" id="at_2" value="2"><label for="at_2">Cho thuê</label>
                                        <input type="radio" name="TinDang" id="at_3" value="3" ><label for="at_1">Cần mua</label>
                                        <input type="radio" name="TinDang" id="at_4" value="4"><label for="at_2">Cần thuê</label>
                                	</div>
                                </li>
                                <li class="realty_type" id="dio"><label>Loại địa ốc <span class="hightlight">*</span></label>
                                	<select id="DioTypeList" name="DioTypeList"><option value="">Chọn loại địa ốc</option>
                                    <?php 
                                    foreach($loai_dia_oc as $l_dia_oc)
                                    {
                                    ?>
                                    <option value="<?php echo $l_dia_oc['id']?>"><?php echo $l_dia_oc['name']?></option>
                                    <?php } ?>
                                    </select>
                                    <select id="DioLineList" name="DioLineList"><option value="">Chọn đường trước nhà</option>
<?php foreach ($list_vi_tri as $l_vi_tri)
{?>
<option value="<?php echo $l_vi_tri['id']?>"><?php echo $l_vi_tri['name']?></option>
<?php } ?>
</select>
                              	</li>
                                <li class="location"><label>Vị trí <span class="hightlight">*</span></label>
                                	<div class="select">	
                                        <select id="CityListMember" name="CityListMember"><option value="">Tỉnh/Thành phố</option>
                                        <?php 
                                        foreach($list_tinh as $tinh)
                                        {
                                        ?>
<option value="<?php echo $tinh['provinceid']?>"><?php echo $tinh['name']?></option>
<?php  } ?>

</select>
                                        <span id="districtMember"><select class="last" id="DistrictListMember" name="DistrictListMember"><option value="">Quận/Huyện</option>
</select></span>
                                        <span id="wardMember"><select id="WardListMember" name="WardListMember"><option value="">Phường/Xã</option>
</select></span>
                                        
                                        <span id="house"><input id="HouseNumberStreet" maxlength="150" name="HouseNumber" placeholder="Số nhà - Đường" type="text" value=""></span>
                                        <input type="hidden" id="tpName" name="tpName" value="Hà Nội">
                                        <input type="hidden" id="qhName" name="qhName" value="Quận/Huyện">
                                        <input type="hidden" id="pxName" name="pxName" value="Phường/Xã">
                                       
                                        <input type="hidden" id="daName" name="daName" value="Danh sách dự án">
                                        <input type="hidden" id="plName" name="plName" value="Chọn tình trạng">
                                        <input type="hidden" id="huongName" name="huongName" value="Chọn hướng địa ốc">
                                        <input type="hidden" id="loaiName" name="loaiName" value="Chọn loại địa ốc">
                                        <input type="hidden" id="dtnName" name="dtnName" value="Chọn đường trước nhà">
                                     </div>   
                              	</li>
                                <li class="map">
                                    <label>Bản đồ</label>
                                    <div id="IdMapReview">
                                        <img alt="" src="<?php echo base_url();?>template/home_ezwebvietnam/images/demo/map_member.jpg">
                                        <button class="btn_2" type="button" id="btnMapReview">
                                            <span>CẬP NHẬT VỊ TRÍ</span>
                                        </button>
                                    </div>
                                    <div id="IdMap" style="display:none">
                                        <div id="map_canvas" style="width:390px; height:300px;margin-bottom:10px;"></div>
                                        <button class="btn_2" type="button" id="btnCancelMapReview">
                                            <span>HỦY CẬP NHẬT</span>
                                        </button>
                                        <script type="text/javascript">
                                            var map;
                                            var marker;
                                            var myLatlng;
                                            var toggleLatlng;

                                            var keyGmap = "AIzaSyAipe4JE1yUZS8gZUiPdSpFxgSn629iDqw";
                                            function initialize() {
                                                myLatlng = new google.maps.LatLng(10.7410135269165, 106.700729370117);
                                                var mapOptions = {
                                                    zoom: 15,
                                                    center: myLatlng,
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                }
                                                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                                                marker = new google.maps.Marker({
                                                    map: map,
                                                    draggable: true,
                                                    animation: google.maps.Animation.DROP,
                                                    position: myLatlng,
                                                    title:"Chọn vị trí tài sản trên bản đồ"
                                                });
                                                google.maps.event.addListener(marker, 'dragend', function (event) {
                                                    setPosition(event.latLng.lat(), event.latLng.lng());
                                                });

                                            }
                                            function setPosition(lat, lng) {
                                                $('#MapX').val(lat);
                                                $('#MapY').val(lng);
                                            }
                                            function loadScript() {
                                                var script = document.createElement("script");
                                                script.type = "text/javascript";
                                                script.src = "http://maps.googleapis.com/maps/api/js?key=" + keyGmap + "&sensor=false&callback=initialize";
                                                document.body.appendChild(script);
                                            }
                                            $(function () {
                                                setPosition('','');
                                                var clicked = $('#Clicked');
                                                clicked.val('');
                                                $('#IdMap').attr('style','display:none');
                                                $('#btnMapReview').click(function () {
                                                    if(clicked.val() == '')
                                                    {
                                                        clicked.val('1');
                                                        loadScript() ;
                                                    }
                                                    $('#IdMapReview').attr('style', 'display:none');
                                                    $('#IdMap').attr('style', '');
                                                });
                                                $('#btnCancelMapReview').click(function(){
                                                    $('#IdMapReview').attr('style', '');
                                                    $('#IdMap').attr('style', 'display:none');
                                                    setPosition('', '');
                                                });
                                            });
                                        </script>
                                        <input type="hidden" id="MapX" name="MapX" value="">
                                        <input type="hidden" id="MapY" name="MapY" value="">
                                        <input type="hidden" id="Clicked" name="Clicked" value="">
                                    </div>
                                </li>
                                <li class="prj"><label>Thuộc dự án</label>
                                	<span id="projectMember"><select id="ProjectListMember" name="ProjectListMember">
</select></span>
                              	</li>
                                <li class="price"><label>Giá <span class="hightlight">*</span></label>
                                    <input id="PriceMain" maxlength="18" name="PriceMain" style="margin-right:13px;" type="text" value="">
                                    
                                    <select id="AssetUnitList" name="AssetUnitList"><option value="tongdientich">tổng diện tích</option>
<option value="m2">m2</option>
<option value="thang">tháng</option>
</select>
                                    <p id="PriceMainConvert"></p>
                                    <p>Lưu ý: Muốn <strong>giá thương lượng</strong> thì <strong>để trống hoặc 0</strong>.</p>
                                    
                              	</li>
                                <li class="agency"><label>Môi giới</label>
                                	<div class="select">
                                        <input type="radio" name="MoiGioi" id="ckMTG" value="1"><label for="ckMTG">Miễn trung gian</label>
                                        <input type="radio" name="MoiGioi" id="ckKGMG" value="2"><label for="ckKGMG">Ký gửi môi giới</label>
                                    </div>
                                    <div class="select" id="dvKGMG" style="display:none">
                                        <div class="hiddenMoiGioi"><input id="FeeConsign" name="FeeConsign" placeholder="Phí ký gửi" type="text" value=""><label>%</label></div>
                                    </div>
                                </li>
                                <li class="living_area"><label>Diện tích sử dụng <span class="hightlight">*</span></label>
                                	<div class="number">
                                		<input id="DTSD" maxlength="9" name="DTSD" type="text" value=""><label>m2</label>
                                        
                                    </div>
                                </li>
                                <li class="total_area">
                                    <label>Diện tích khuôn viên</label>
                                	<div class="number">
                                        <input id="DTKVWidth" name="DTKVWidth" placeholder="chiều ngang" type="text" value=""><label>m</label>
                                        <span>x</span>
                                        <input id="DTKVLength" name="DTKVLength" placeholder="chiều dài" type="text" value=""><label>m</label>
                                        <div class="check"><input type="checkbox" id="chkDTKV"><label for="chkDTKV">Nở hậu</label></div>
                                    </div>
                                    <label id="lbDTKV" style="display:none"></label>
                                    <div class="number" id="dvDTKV" style="display:none">
                                        <input id="DTKVWidthBehind" name="DTKVWidthBehind" placeholder="chiều ngang sau" style="margin-top:1px;" type="text" value=""><label>m</label>
                                    </div>
                                    
                                </li>
                                <li class="used_area"><label>Diện tích xây dựng</label>
                                	<div class="number">
                                        <input id="DTXDWidth" name="DTXDWidth" placeholder="chiều ngang" type="text" value=""><label>m</label>
                                        <span>x</span>
                                        <input id="DTXDLength" name="DTXDLength" placeholder="chiều dài" type="text" value=""><label>m</label>
                                        <div class="check"><input type="checkbox" id="chkDTXD"><label for="chkDTXD">Nở hậu</label></div>
                                    </div>
                                    <label id="lbDTXD" style="display:none"></label>
                                    <div class="number" id="dvDTXD" style="display:none">
                                        <input id="DTXDWidthBehind" name="DTXDWidthBehind" placeholder="chiều ngang sau" style="margin-top:1px;" type="text" value=""><label>m</label>
                                    </div>
                                   
                                </li>
                                
                                </ul>
                                <script type="text/javascript">
                                    $(function () {
                                  $('#dvKGMG').attr('style', 'display:none');
                                        $('#FeeConsign').val('').removeClass();
                                       
                                        $('#ckKGMG').click(function () {
                                            if ($(this).is(':checked')) {
                                                $('#dvKGMG').attr('style', 'display:block');
                                            } 
                                        });
                                        $('#ckMTG').click(function () {
                                            if ($(this).is(':checked')) {
                                                $('#dvKGMG').attr('style', 'display:none');
                                                $('#FeeConsign').val('').removeClass();
                                            }
                                        });
                                  $('#lbDTKV').attr('style', 'display:none');
                                        $('#dvDTKV').attr('style', 'display:none');
                                        $('#chkDTKV').click(function () {
                                            if ($(this).is(':checked')) {
                                                $('#lbDTKV').attr('style', 'display:block');
                                                $('#dvDTKV').attr('style', 'display:block');
                                            } else {
                                                $('#lbDTKV').attr('style', 'display:none');
                                                $('#dvDTKV').attr('style', 'display:none');
                                                $('#DTKVWidthBehind').val('').removeClass();
                                            }
                                        });
                                  $('#lbDTXD').attr('style', 'display:none');
                                        $('#dvDTXD').attr('style', 'display:none');
                                        $('#chkDTXD').click(function () {
                                            if ($(this).is(':checked')) {
                                                $('#lbDTXD').attr('style', 'display:block');
                                                $('#dvDTXD').attr('style', 'display:block');
                                            } else {
                                                $('#lbDTXD').attr('style', 'display:none');
                                                $('#dvDTXD').attr('style', 'display:none');
                                                $('#DTXDWidthBehind').val('');
                                                $('#DTXDWidthBehind').removeClass();
                                            }
                                        });
                                    });
                                </script>
                              </fieldset>
                        </div>
                    </div>
                    <div id="post_info_2" class="rounded_style_1 rounded_box col_245 margin_left"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>ĐẶC ĐIỂM VÀ TIỆN ÍCH</h2></div>
                        <div class="body">
                           	  <fieldset>
                           	    <ul>
                               	<li id="diostatelegal"><label>Tình trạng pháp lý</label>
                                    <select id="DioStateLegalList" name="DioStateLegalList"><option value="">Chọn tình trạng</option>
<?php 
foreach($list_phap_ly as $phap_ly)
{
?>
<option value="<?php echo $phap_ly['id']?>"><?php echo $phap_ly['name']?></option>
<?php } ?>
</select>
                                </li>
                                <li id="diodirection"><label>Hướng tài sản</label>
                                    <select id="DioDirectionList" name="DioDirectionList"><option value="">Chọn hướng địa ốc</option>
<?php 
foreach($list_huong as $huong)
{
?>
<option value="<?php echo $huong['id']?>"><?php echo $huong['name']?></option>
<?php } ?>
</select>
                                </li>
                                
                                <li><label>Số lầu</label>
                                    <select id="NumberOfFloorList" name="NumberOfFloorList"><option value="-1">Chọn số tầng</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select>
                                </li>
                                <li><label>Số phòng khách</label>
                                    <select id="NumberOfLivingRoomList" name="NumberOfLivingRoomList"><option value="-1">Chọn số phòng khách</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select>
                                </li>
                                <li><label>Số phòng ngủ</label>
                                    <select id="NumberOfBedRoomList" name="NumberOfBedRoomList"><option value="-1">Chọn số phòng ngủ</option>
<?php 
foreach($list_pn as $pn)
{
?>
<option value="<?php echo $pn['id']?>"><?php echo $pn['name']?></option>
<?php } ?>
</select>
                                </li>
                                <li><label>Số phòng tắm/WC</label>
                                    <select id="NumberOfWCList" name="NumberOfWCList"><option value="-1">Chọn số phòng WC</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select>
                                </li>
                                <li><label>Số phòng khác</label>
                                    <select id="NumberOfRelaxRoomList" name="NumberOfRelaxRoomList"><option value="-1">Chọn số phòng khác</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
</select>
                                </li>
                                <li><label>Các tiện ích</label></li>
                                <li class="check"><input name="fea_1" id="fea_1" value="1" type="checkbox">
                                <label for="fea_1">Đầy đủ tiện nghi</label></li>
                                <li class="check"><input name="fea_6" id="fea_6" value="1" type="checkbox">
                                <label for="fea_6">Chỗ đậu xe hơi</label></li>
                                <li class="check"><input name="fea_7" id="fea_7" value="1" type="checkbox">
                                <label for="fea_7">Sân vườn</label></li>
                                <li class="check"><input name="fea_8" id="fea_8" value="1" type="checkbox">
                                <label for="fea_8">Hồ bơi</label></li>
                                <li class="check"><input name="fea_14" id="fea_14" value="1" type="checkbox">
                                <label for="fea_14">Tiện kinh doanh</label></li>
                                <li class="check"><input name="fea_20" id="fea_20" value="1" type="checkbox">
                                <label for="fea_20">Tiện để ở</label></li>
                                <li class="check"><input name="fea_21" id="fea_21" value="1" type="checkbox">
                                <label for="fea_21">Tiện làm văn phòng</label></li>
                                <li class="check"><input name="fea_23" id="fea_23" value="1" type="checkbox">
                                <label for="fea_23">Tiện cho sản xuất</label></li>
                                <li class="check"><input name="fea_24" id="fea_24" value="1" type="checkbox">
                                <label for="fea_24">Cho sinh viên thuê</label></li>
                                </ul>
                              </fieldset>
                        </div>
                    </div>
                  </div>  
                  <div id="post_info_3" class="rounded_style_1 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>MÔ TẢ CHI TIẾT</h2></div>
                        <div class="body">
                        	<div class="headline_text">
                        		<p><span class="hightlight">Vùng nội dung mô tả này sẽ được kiểm duyệt thông tin trước khi cho phép hiển thị trên DCBLand.Com</span></p>
								<p>Tin đăng nhập nội dung theo đúng quy định sẽ được ưu tiên duyệt hiển thị nhanh hơn.</p>
								<p>Vui lòng nhập tiếng Việt có dấu. Nếu bạn không nhập mô tả, hệ thống sẽ lấy mô tả tự động.</p>
							</div>
                           	  <fieldset>
                           	    <ul>
                                <li></li>
                                
                               	<li><label>Tiêu đề <strong class="hightlight">*</strong></label>
                                    <input id="Title" name="Title" type="text" value=""></li>
                                <li></li>
                                <li><label>Nội dung mô tả <strong class="hightlight">*</strong></label>
                                    <textarea cols="" id="Detail" name="Detail" rows=""></textarea>
                                    </li>
                                </ul>
                              </fieldset>
                        </div>
                    </div>
                  <div id="post_info_2" class="rounded_style_1 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>CẬP NHẬT HÌNH ẢNH</h2></div>
                        <div class="body">
                        	
                           	    <fieldset>
                                    
                                    
                                     <input id="userfile" name="userfile" type="file" class="qq-upload-button qq-trigger" multiple="true">
                                   <link href="<?php echo base_url(); ?>assets/js/jquery/uploadify_31/uploadify.css" rel="stylesheet" type="text/css" />
                                    <script src="<?php echo base_url()?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#userfile').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '<?php echo base_url()?>assets/js/jquery/uploadify_31/uploadify.swf',
				'uploader' : '<?php echo base_url()?>upload/do_upload_property/<?php echo $code;?>',
                                'debug':false,
                                'auto':true,
                                'cancelImg': '<?php echo base_url()?>assets/javascript/jquery/uploadify_31/uploadify-cancel.png',
                                'fileTypeExts':'*.jpg;*.bmp;*.png;*.tif',
                                'fileTypeDesc':'Image Files (.jpg,.bmp,.png,.tif)',
                                'fileSizeLimit':'2MB',
                                'fileObjName':'userfile',
                                'buttonText':'Uploads',
                                'multi':true,
                                'removeCompleted':false,
                                'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                                    alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                                },
                                 'onUploadSuccess':function(file){
                                    
                                 }
			});
		});
	</script>
                              </fieldset>
                        </div>
                    </div>
                  <div id="post_info_5" class="rounded_style_1 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>THÔNG TIN LIÊN HỆ</h2></div>
                        <div class="body">
                           	  <fieldset>
                           	    <ul>
                               	<li><label>Họ và tên <span class="hightlight">*</span></label>
                                    <input id="ContactName" maxlength="200" name="ContactName" type="text" value="<?php echo $userdetail[0]['full_name']?>"></li>
                                <li class="phone"><label>Điện thoại</label>
                                    <input id="ContactPhone" maxlength="40" name="ContactPhone" placeholder="Điện thoại bàn" style="width:200px" type="text" value=""> 
                                    <input id="ContactMobile" maxlength="40" name="ContactMobile" placeholder="Di động" style="width:200px" type="text" value="<?php echo $userdetail[0]['phone']?>"><span class="hightlight">*</span></li>
                                <li><label>Địa chỉ</label>
                                    <input id="ContactAddress" maxlength="200" name="ContactAddress" type="text" value="<?php echo $userdetail[0]['address']?>"></li>
                                <li><label>Ghi chú </label>
                                    <input id="ContactNotes" maxlength="200" name="ContactNotes" type="text" value=""></li>
                                </ul>
                              </fieldset>
                        </div>
                    </div>
                  <div id="post_info_6" class="rounded_style_1 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    	<div class="headline_12"><h2>HOÀN TẤT</h2></div>
                       
                        <div class="body">   
                        	<div class="content">   	
                            	<h5>Lưu ý:</h5>
                            	<p>Những mục có dấu * là thông tin phải điền đầy đủ. Chỉ khi bạn hoàn tất những thông tin được yêu cầu điền đầy đủ thì các chức năng <strong>Đăng tài sản</strong> mới được kích hoạt</p>
                                <p>DiaOcOnline không chịu trách nhiệm về những nội dung (chữ/ hình ảnh/ Video) do bạn đăng tải</p>
                           	  <fieldset>
                           	    <ul>
                                	<li class="agree"><div class="info">
                                        <p>Khi nhấn nút <strong>ĐĂNG MỚI TÀI SẢN</strong>, bạn đã xác nhận hoàn toàn đồng ý với những <a href="http://www.dcbland.com/dieu-khoan-thoa-thuan" target="_blank"><strong>điều khoản thỏa thuận</strong></a></p></div></li>
                                    <li>
                                                <button type="submit" name="SubmitNew" value="1" class="btn_2"><span>ĐĂNG MỚI TÀI SẢN</span></button>
                                        <button type="submit" name="SubmitSave" value="2" class="btn_2"><span>LƯU LẠI</span></button>
                                    
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
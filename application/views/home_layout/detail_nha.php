
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $title;?>" />
    <meta name="keywords" content="<?php echo $title;?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/general.css?1029" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/Asset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/slides/slides.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/tooltip/tools.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/doolv3.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1771835-4']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
  </script>
</head>
<body>
<div id="container">
<style type="text/css">

	#b_left {
    	position: absolute;
        top: 78px;
        
		width:100px;
	}
	#b_right {
    	position: absolute;
        top: 78px;
		width:100px;
	}
</style>
    <div id="b_left" style="left:90px" ><img src="Content/Images/Dool_qc_100x300.jpg" /></div>
    <div id="b_right" style="right:90px"  ><img src="Content/Images/Dool_qc_100x300.jpg" /></div>
    <script type="text/javascript">
        $(function () {
            WindowResize();
            $(window).resize(function () {
                WindowResize();
            });
        });
        function WindowResize() {
            var bannerLeft = $("#b_left");
            var bannerRight = $("#b_right");
            var widthWindow = $(window).width();
            if (widthWindow < 1200) {
                bannerLeft.css("display", "none");
                bannerRight.css("display", "none");
            } else {
                bannerLeft.css("display", "");
                bannerLeft.css("right", (widthWindow / 2 + 485) + "px");
                bannerRight.css("display", "");
                bannerRight.css("right", (widthWindow - (widthWindow / 2 + 585)) + "px");
            }
        }
    </script>
    <script type="text/javascript">
        $(function () {
            $('#b_left').scrollToFixed();
            $('#b_right').scrollToFixed();
        });
        
</script>    <div id="header" class="margin_bottom">
        <div id="head_content" class="wrap">
            <span id="logo"><a href="/" title="Về trang chủ DCBLand.COM">DCBLand.COM</a></span>
            <?php 
            include('header_.php');
            ?>
            
        </div>
    </div>
    <div id="content_container">
        
    <div class="wrap">


        <div id="realty_hottest" class="wrap margin_bottom">
            <div class="rounded_style_2 rounded_box">
                <div class="headline_img">
                    <h2>
                        Sàn giao dịch bất động sản nổi bật</h2>
                </div>
                <div class="content">
    <script type="text/javascript">
        $(function () {
            $('.newslogost li').each(function () {
                $(this).tooltipsy({
                    content: $(this).find('.textQTip').html()
                });
            });
        });
    </script>
    <ul class=newslogost>
         <?php 
    foreach($dn_nb_core as $dn_nb)
    {
    ?>
            <li >
                    <a href="<?php echo base_url();?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($dn_nb['ten_dn'])))?>-i<?php echo $dn_nb['id']?>/gioi-thieu">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$dn_nb['logo']))
                    {
                    ?>
                        <img src="<?php echo base_url();?>file/uploads/business/<?php echo $dn_nb['logo']?>" width="75" height="75" alt="<?php echo $dn_nb['ten_dn']?>"/>
                         
                          <?php } else { ?>
                    <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $dn_nb['ten_dn']?>"/>
                    <?php } ?>
                        </a>
            
                <div class="textQTip">
                    <p><strong><?php echo $dn_nb['ten_dn']?></strong></p>
                    <p><?php echo $dn_nb['dia_chi_dn']?>
                        <br />
                            ĐT: <?php echo $dn_nb['sdt']?></p>
                </div>
            </li>
     <?php } ?>            
    </ul>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="col_170">
<script type="text/javascript">
    $(function () {
        $("#QuickProjectList,#QuickPriceList,#QuickDioTypeList,#QuickCityList,#QuickDistrictList,#QuickWardList,#CityList,#DistrictList,#WardList,#StreetList,#NumberOfBedRoomList,#DioDirectionList,#DioStateLegalList").uniform({
            selectAutoWidth: true
        });

        var frmSubmit = '#LocationForm';
        $('#filter_normal select, #filter_normal input[type="radio"], #filter_normal input[type="checkbox"]').change(function () {
            $(frmSubmit).submit();
        });
        $('#price_box a').click(function () {
            $('#HDKhoangGiaPost').val($(this).attr('param'));
            $(frmSubmit).submit();
        });
        $('#ResetLoaiDiaOc').bind('click', function () {
            $('#HDLoaiDiaOc').remove();
            $(frmSubmit).submit();
        });
        $('#ResetTinDang').bind('click', function () {
            $('#HDTinDang').remove();
            $(frmSubmit).submit();
        });
        $('#ResetKhuVuc').bind('click', function () {
            $('#HDKhuVuc').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhongNgu').bind('click', function () {
            $('#HDPhongNgu').remove();
            $(frmSubmit).submit();
        });
        $('#ResetViTri').bind('click', function () {
            $('#HDViTri').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhongNgu').bind('click', function () {
            $('#HDPhongNgu').remove();
            $(frmSubmit).submit();
        });
        $('#ResetHuong').bind('click', function () {
            $('#HDHuong').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhapLy').bind('click', function () {
            $('#HDPhapLy').remove();
            $(frmSubmit).submit();
        });
        $('#ResetKhoangGia').bind('click', function () {
            $('#HDKhoangGia').remove();
            $(frmSubmit).submit();
        });

        $('#ShowSearchMenu').click(function () {
            if ($('#filter_quick').attr('style') == 'display:none') {
                $('#filter_quick').attr('style', 'display:block');
                $('#filter_quick div .selector').each(function () {
                    $(this).css('display', 'block')
                })
                $('#filter_normal').attr('style', 'display:none');
                $('#ShowSearchMenu span').text(' + XEM THÊM TÌM NÂNG CAO');
            } else {
                $('#filter_normal').attr('style', 'display:block');
                $('#filter_normal div .selector').each(function () {
                    $(this).css('display', 'block')
                })
                $('#filter_quick').attr('style', 'display:none');
                $('#ShowSearchMenu span').text(' - TRỞ VỀ TÌM NHANH');
            }
        });
        $('#QuickSubmitSearch').click(function () {
            if ($('#QuickDioTypeList').val() == '') {
                $('#QuickDioTypeList').focus();
                return false;
            }
            $('#QuickSubmitSearchHD').val('TimTaiSan');
            $(frmSubmit).submit();
        });
    });
</script>
<form action="/sieu-thi/loc" name="LocationForm" id="LocationForm" method="post" class="form_style_1" enctype="multipart/form-data">
    <div class="headline_4 link-pointer" id="ShowSearchMenu">
        <h2><span> - TRỞ VỀ TÌM NHANH</span></h2>
    </div>

    <div id="filter_quick" class="margin_bottom"  style=display:none >
        <div class="content">
            <ul>
                <li id="post_type" class="filter_block">
                    <div class="rounded_style_7 rounded_box">
                    <div class="body">
                    <fieldset>
                        <div class="content margin_bottom">
                            <ul>
                                <li><label><input type="radio" name="QuickTinDang" value="1" />Cần bán</label></li>
                                <li><label><input type="radio" name="QuickTinDang" value="2" />Cho thuê</label></li>
                            </ul>
                        </div>
                        <div>
                            <div class="divUni-2 margin_bottom">
                                <div class="wid-left"></div>
								<div class="wid">
            	            <select id="QuickDioTypeList" name="QuickDioTypeList"><option value="">Chọn loại địa ốc</option>
<option value="1">Villa - Biệt thự</option>
<option value="20">Nh&#224; phố</option>
<option value="6">Nh&#224; tạm</option>
<option value="9">Văn ph&#242;ng</option>
<option value="8">Căn hộ chung cư</option>
<option value="10">Căn hộ cao cấp</option>
<option value="12">Đất dự &#225;n - Quy hoạch</option>
<option value="11">Đất ở - Đất thổ cư</option>
<option value="14">Đất cho sản xuất</option>
<option value="13">Đất n&#244;ng nghiệp</option>
<option value="23">Đất l&#226;m nghiệp</option>
<option value="19">Nh&#224; Kho - Xưởng</option>
<option value="17">Nh&#224; h&#224;ng - Kh&#225;ch sạn</option>
<option value="15">Mặt bằng - Cửa h&#224;ng</option>
<option value="16">Ph&#242;ng trọ</option>
</select>
                                </div>
                            </div>
          	            </div>
                        <div class="city divUni-2 margin_bottom">
                            <div class="divUni-2">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="QuickCityList" id="QuickCityList">
                                    <option value="" >Tỉnh/Thành phố</option>
                                    <option value="2" >Hà Nội</option>
                                    <option value="3" >TP.HCM</option>
                                    <option value="71" >Đà Nẵng</option>
                                    <option value="53" >Đồng Nai</option>
                                    <option value="61" >Bình Dương</option>
                                    <option value="35" >Long An</option>
                                    <option value="69" >An Giang</option>
                                    <option value="68" >Bà Rịa - Vũng Tàu</option>
                                    <option value="67" >Bắc Giang</option>
                                    <option value="66" >Bắc Kạn</option>
                                    <option value="65" >Bạc Liêu</option>
                                    <option value="64" >Bắc Ninh</option>
                                    <option value="63" >Bến Tre</option>
                                    <option value="62" >Bình Định</option>
                                    <option value="60" >Bình Phước</option>
                                    <option value="59" >Bình Thuận</option>
                                    <option value="58" >Cà Mau</option>
                                    <option value="72" >Cần Thơ</option>
                                    <option value="57" >Cao Bằng</option>
                                    <option value="56" >Đắk Lắk</option>
                                    <option value="55" >Đắk Nông</option>
                                    <option value="54" >Điện Biên</option>
                                    <option value="52" >Đồng Tháp</option>
                                    <option value="51" >Gia Lai</option>
                                    <option value="50" >Hà Giang</option>
                                    <option value="49" >Hà Nam </option>
                                    <option value="47" >Hà Tĩnh</option>
                                    <option value="46" >Hải Dương</option>
                                    <option value="70" >Hải Phòng</option>
                                    <option value="45" >Hậu Giang</option>
                                    <option value="44" >Hòa Bình</option>
                                    <option value="43" >Hưng Yên</option>
                                    <option value="42" >Khánh Hòa</option>
                                    <option value="41" >Kiên Giang</option>
                                    <option value="40" >Kon Tum</option>
                                    <option value="39" >Lai Châu</option>
                                    <option value="38" >Lâm Đồng</option>
                                    <option value="37" >Lạng Sơn</option>
                                    <option value="36" >Lào Cai</option>
                                    <option value="34" >Nam Định</option>
                                    <option value="33" >Nghệ An</option>
                                    <option value="32" >Ninh Bình</option>
                                    <option value="31" >Ninh Thuận</option>
                                    <option value="30" >Phú Thọ</option>
                                    <option value="29" >Phú Yên</option>
                                    <option value="28" >Quảng Bình</option>
                                    <option value="27" >Quảng Nam</option>
                                    <option value="26" >Quảng Ngãi</option>
                                    <option value="25" >Quảng Ninh</option>
                                    <option value="24" >Quảng Trị</option>
                                    <option value="23" >Sóc Trăng</option>
                                    <option value="22" >Sơn La</option>
                                    <option value="21" >Tây Ninh</option>
                                    <option value="19" >Thái Bình</option>
                                    <option value="18" >Thái Nguyên</option>
                                    <option value="17" >Thanh Hóa</option>
                                    <option value="16" >Thừa Thiên Huế</option>
                                    <option value="15" >Tiền Giang</option>
                                    <option value="14" >Trà Vinh</option>
                                    <option value="13" >Tuyên Quang</option>
                                    <option value="12" >Vĩnh Long</option>
                                    <option value="11" >Vĩnh Phúc</option>
                                    <option value="10" >Yên Bái</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
            	        <div class="district divUni-2 margin_bottom">
                            <div id="quickdistrict">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="QuickDistrictList" id="QuickDistrictList">
                                    <option value="" >Quận/Huyện</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
                        <div class="ward divUni-2 margin_bottom">
                            <div id="quickward">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="QuickWardList" id="QuickWardList">
                                    <option value="" >Phường/Xã</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
                        
                        <div>
                            <label><button id="QuickSubmitSearch" name="QuickSubmitSearch" type="submit" class="btn_2" value="TimTaiSan"><span>TÌM TÀI SẢN</span>
                            </button></label>
                            <input type="hidden" name="QuickSubmitSearchHD" id="QuickSubmitSearchHD" value="" />
                        </div>
                      
                </fieldset>
          	    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="filter_normal" class="margin_bottom"  style=display:block >
        <div class="content">
        <ul>
            <li id="post_type" class="filter_block">
                <div class="headline"><h3>LOẠI TIN ĐĂNG</h3><a href="#" name="ResetTinDang" id="ResetTinDang" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
                <div class="rounded_style_7 rounded_box">
            	    <div class="body">
            	        <fieldset>
            	            <ul>
                                <li><input type="radio" name="TinDang" id="at_1" value="1" /><label for="at_1">Cần bán</label></li>
                                <li><input type="radio" name="TinDang" id="at_2" value="2" /><label for="at_2">Cho thuê</label></li>
                                <li><input type="radio" name="TinDang" id="at_3" value="3" /><label for="at_3">Cần mua</label></li>
                                <li><input type="radio" name="TinDang" id="at_4" value="4" /><label for="at_4">Cần thuê</label></li>
          	                </ul>
          	            </fieldset>
                        <input type="hidden" id="HDTinDang" name="HDTinDang" value="1" />
          	        </div>
          	    </div>
            </li>
            <li id="location" class="filter_block">
            <div class="headline"><h3>KHU VỰC</h3><a href="#" name="ResetKhuVuc" id="ResetKhuVuc" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
            	    <fieldset>
            	        <div class="margin_bottom_form">
            	        <div class="city">
                            <div class="divUni-2 margin_bottom">
                                <div class="wid-left"></div>
								<div class="wid">
                                    <select name="CityList" id="CityList">
                                        <option value="" >Tỉnh/Thành phố</option>
                                        <option value="2" >Hà Nội</option>
                                        <option value="3" >TP.HCM</option>
                                        <option value="71" >Đà Nẵng</option>
                                        <option value="53" >Đồng Nai</option>
                                        <option value="61" >Bình Dương</option>
                                        <option value="35" >Long An</option>
                                        <option value="69" >An Giang</option>
                                        <option value="68" >Bà Rịa - Vũng Tàu</option>
                                        <option value="67" >Bắc Giang</option>
                                        <option value="66" >Bắc Kạn</option>
                                        <option value="65" >Bạc Liêu</option>
                                        <option value="64" >Bắc Ninh</option>
                                        <option value="63" >Bến Tre</option>
                                        <option value="62" >Bình Định</option>
                                        <option value="60" >Bình Phước</option>
                                        <option value="59" >Bình Thuận</option>
                                        <option value="58" >Cà Mau</option>
                                        <option value="72" >Cần Thơ</option>
                                        <option value="57" >Cao Bằng</option>
                                        <option value="56" >Đắk Lắk</option>
                                        <option value="55" >Đắk Nông</option>
                                        <option value="54" >Điện Biên</option>
                                        <option value="52" >Đồng Tháp</option>
                                        <option value="51" >Gia Lai</option>
                                        <option value="50" >Hà Giang</option>
                                        <option value="49" >Hà Nam </option>
                                        <option value="47" >Hà Tĩnh</option>
                                        <option value="46" >Hải Dương</option>
                                        <option value="70" >Hải Phòng</option>
                                        <option value="45" >Hậu Giang</option>
                                        <option value="44" >Hòa Bình</option>
                                        <option value="43" >Hưng Yên</option>
                                        <option value="42" >Khánh Hòa</option>
                                        <option value="41" >Kiên Giang</option>
                                        <option value="40" >Kon Tum</option>
                                        <option value="39" >Lai Châu</option>
                                        <option value="38" >Lâm Đồng</option>
                                        <option value="37" >Lạng Sơn</option>
                                        <option value="36" >Lào Cai</option>
                                        <option value="34" >Nam Định</option>
                                        <option value="33" >Nghệ An</option>
                                        <option value="32" >Ninh Bình</option>
                                        <option value="31" >Ninh Thuận</option>
                                        <option value="30" >Phú Thọ</option>
                                        <option value="29" >Phú Yên</option>
                                        <option value="28" >Quảng Bình</option>
                                        <option value="27" >Quảng Nam</option>
                                        <option value="26" >Quảng Ngãi</option>
                                        <option value="25" >Quảng Ninh</option>
                                        <option value="24" >Quảng Trị</option>
                                        <option value="23" >Sóc Trăng</option>
                                        <option value="22" >Sơn La</option>
                                        <option value="21" >Tây Ninh</option>
                                        <option value="19" >Thái Bình</option>
                                        <option value="18" >Thái Nguyên</option>
                                        <option value="17" >Thanh Hóa</option>
                                        <option value="16" >Thừa Thiên Huế</option>
                                        <option value="15" >Tiền Giang</option>
                                        <option value="14" >Trà Vinh</option>
                                        <option value="13" >Tuyên Quang</option>
                                        <option value="12" >Vĩnh Long</option>
                                        <option value="11" >Vĩnh Phúc</option>
                                        <option value="10" >Yên Bái</option>
                                    </select>

                                </div>
                            </div>
          	            </div>
            	        <div class="district divUni-2 margin_bottom">
                            <div id="district">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="DistrictList" id="DistrictList">
                                    <option value="" >Quận/Huyện</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
            	        <div class="bussiness_type divUni-2 margin_bottom">
            	            <div id="ward">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="WardList" id="WardList">
                                    <option value="" >Phường/Xã</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
            	        <div class="bussiness_type divUni-2 margin_bottom">
            	            <div id="street">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="StreetList" id="StreetList">
                                    <option value="" >Đường</option>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
          	        </div>
          	        </fieldset>
                    <input type="hidden" id="HDKhuVuc" name="HDKhuVuc" value="1" />
          	    </div>
          	</div>
        </li>
        <li id="legal_status" class="filter_block">
            <div class="headline"><h3>PHÁP LÝ</h3><a href="#" name="ResetPhapLy" id="ResetPhapLy" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
            	    <fieldset>
                        <div class="divUni-2">
                            <div class="wid-left"></div>
							<div class="wid">
                                <select name="DioStateLegalList" id="DioStateLegalList">
                                    <option value="" >Chọn tình trạng</option>
                                    <option value="1" >Sổ hồng</option>
                                    <option value="2" >Giấy đỏ</option>
                                    <option value="3" >Giấy tay</option>
                                    <option value="4" >Đang hợp thức hóa</option>
                                    <option value="5" >Giấy tờ hợp lệ</option>
                                    <option value="6" >Chủ quyền tư nhân</option>
                                    <option value="7" >Hợp đồng</option>
                                    <option value="8" >Không xác định</option>
                                </select>
                            </div>
                        </div>
          	        </fieldset>
                    <input type="hidden" id="HDPhapLy" name="HDPhapLy" value="1" />
                </div>
          	</div>
        </li>
        <li id="realty_type" class="filter_block">
            <div class="headline"><h3>LOẠI ĐỊA ỐC</h3><a href="#" name="ResetLoaiDiaOc" id="ResetLoaiDiaOc" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
                    <fieldset>
                        <label>Nh&#224;</label>
                        <ul>
                            <li><input type="checkbox" name="LoaiDiaOc_1" id="dt_1" value="1"  /><label for="dt_1">Villa - Biệt thự</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_20" id="dt_20" value="20"  /><label for="dt_20">Nhà phố</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_6" id="dt_6" value="6"  /><label for="dt_6">Nhà tạm</label></li>
                        </ul>
                        <label>Căn hộ/Văn ph&#242;ng</label>
                        <ul>
                            <li><input type="checkbox" name="LoaiDiaOc_9" id="dt_9" value="9"  /><label for="dt_9">Văn phòng</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_8" id="dt_8" value="8"  /><label for="dt_8">Căn hộ chung cư</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_10" id="dt_10" value="10"  /><label for="dt_10">Căn hộ cao cấp</label></li>
                        </ul>
                        <label>Đất</label>
                        <ul>
                            <li><input type="checkbox" name="LoaiDiaOc_12" id="dt_12" value="12"  /><label for="dt_12">Đất dự án - Quy hoạch</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_11" id="dt_11" value="11"  /><label for="dt_11">Đất ở - Đất thổ cư</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_14" id="dt_14" value="14"  /><label for="dt_14">Đất cho sản xuất</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_13" id="dt_13" value="13"  /><label for="dt_13">Đất nông nghiệp</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_23" id="dt_23" value="23"  /><label for="dt_23">Đất lâm nghiệp</label></li>
                        </ul>
                        <label>Địa ốc kh&#225;c</label>
                        <ul>
                            <li><input type="checkbox" name="LoaiDiaOc_19" id="dt_19" value="19"  /><label for="dt_19">Nhà Kho - Xưởng</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_17" id="dt_17" value="17"  /><label for="dt_17">Nhà hàng - Khách sạn</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_15" id="dt_15" value="15"  /><label for="dt_15">Mặt bằng - Cửa hàng</label></li>
                            <li><input type="checkbox" name="LoaiDiaOc_16" id="dt_16" value="16"  /><label for="dt_16">Phòng trọ</label></li>
                        </ul>
                        <input type="hidden" id="HDLoaiDiaOc" name="HDLoaiDiaOc" value="1,20,6,9,8,10,12,11,14,13,23,19,17,15,16" />
                </fieldset>
          	    </div>
          	</div>
        </li>
        <li id="price" class="filter_block">
            <div class="headline"><h3>KHOẢNG GIÁ</h3><a href="#" name="ResetKhoangGia" id="ResetKhoangGia" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
            	    <ul class="price_list" id="price_box">
                        <li><a href="#" param="0#0">+ Giá thương lượng</a></li>
                        <li><a href="#" param="0#5000000">+ dưới 5 triệu</a></li>
                        <li><a href="#" param="5000000#20000000">+ 5 triệu - 20 triệu</a></li>
                        <li><a href="#" param="20000000#100000000">+ 20 triệu - 100 triệu</a></li>
                        <li><a href="#" param="100000000#500000000">+ 100 triệu - 500 triệu</a></li>
                        <li><a href="#" param="500000000#1200000000">+ 500 triệu - 1,2 tỷ</a></li>
                        <li><a href="#" param="1200000000#2000000000">+ 1,2 tỷ - 2 tỷ</a></li>
                        <li><a href="#" param="2000000000#3000000000">+ 2 tỷ - 3 tỷ</a></li>
                        <li><a href="#" param="3000000000#5000000000">+ 3 tỷ - 5 tỷ</a></li>
                        <li><a href="#" param="5000000000#0">+ trên 5 tỷ</a></li>
          	        </ul>
            	    
                    <input type="hidden" id="HDKhoangGiaPost" name="HDKhoangGiaPost" value="-1#-1" />
                    <input type="hidden" id="HDKhoangGia" name="HDKhoangGia" value="1" />
          	</div>
          	</div>
        </li>
            
        <li id="position" class="filter_block">
            <div class="headline"><h3>VỊ TRÍ ĐỊA ỐC</h3><a href="#" name="ResetViTri" id="ResetViTri" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
            	    <fieldset>
                        <ul>
                            <li><input type="checkbox" name="dl_7" id="dl_7" value="7"  /><label for="dl_7">Hẻm xe hơi</label></li>
                            <li><input type="checkbox" name="dl_1" id="dl_1" value="1"  /><label for="dl_1">Mặt tiền đường</label></li>
                            <li><input type="checkbox" name="dl_5" id="dl_5" value="5"  /><label for="dl_5">Đường nội bộ</label></li>
                            <li><input type="checkbox" name="dl_2" id="dl_2" value="2"  /><label for="dl_2">Đường hẻm lớn</label></li>
                            <li><input type="checkbox" name="dl_3" id="dl_3" value="3"  /><label for="dl_3">Đường hẻm nhỏ</label></li>
                            <li><input type="checkbox" name="dl_4" id="dl_4" value="4"  /><label for="dl_4">Không cập nhật</label></li>
                        </ul>
                        <input type="hidden" id="HDViTri" name="HDViTri" value="7,1,5,2,3,4," />
          	        </fieldset>
                    
          	    </div>
          	</div>
        </li>
        <li id="room_number" class="filter_block">
            <div class="headline"><h3>SỐ PHÒNG NGỦ</h3><a href="#" name="ResetPhongNgu" id="ResetPhongNgu" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
            	    <fieldset>
                        <div class="divUni-2">
                            <div class="wid-left"></div>
							<div class="wid">
                                <select name="NumberOfBedRoomList" id="NumberOfBedRoomList">
                                    <option value=""  selected=selected >Chọn số phòng</option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6+" >nhiều hơn 6</option>
                                </select>
                            </div>
                        </div>
          	        </fieldset>
                    <input type="hidden" id="HDPhongNgu" name="HDPhongNgu" value="1" />
          	    </div>
          	</div>
        </li>
            <li id="direction" class="filter_block">
            <div class="headline"><h3>HƯỚNG</h3><a href="#" name="ResetHuong" id="ResetHuong" class="remove">Xóa<span class="ico_remove_11"></span></a></div>
            <div class="rounded_style_7 rounded_box">
            	<div class="body">
                    <fieldset>
                        <div class="divUni-2">
                            <div class="wid-left"></div>
							<div class="wid">
                                <select name="DioDirectionList" id="DioDirectionList">
                                    <option value="" >Chọn hướng địa ốc</option>
                                    <option value="1" >Hướng Ðông</option>
                                    <option value="2" >Hướng Tây</option>
                                    <option value="3" >Hướng Nam</option>
                                    <option value="4" >Hướng Bắc</option>
                                    <option value="5" >Hướng Đông Bắc</option>
                                    <option value="6" >Hướng Đông Nam</option>
                                    <option value="7" >Hướng Tây Bắc</option>
                                    <option value="8" >Hướng Tây Nam</option>
                                    <option value="9" >Không xác định</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" id="HDHuong" name="HDHuong" value="1" />
          	    </div>
          	</div>
        </li>
        </ul>

    </div>
    </div>
    
    

</form>
            </div>
            <?php echo $this->load->view($main_content);?>
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/doolv3.js?1029" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>
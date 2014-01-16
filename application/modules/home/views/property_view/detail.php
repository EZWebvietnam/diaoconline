<div class="col_780 margin_left">
                <div id="result_detail" class="margin_bottom">
                    <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <ul class="headline_tab">
                            <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>sieu-thi">
                                TÀI SẢN ĐANG GIAO DỊCH</a><span class="R"></span></li>
                            <li><a href="<?php echo base_url();?>sieu-thi/chinh-chu">
                                <span>TÀI SẢN CHÍNH CHỦ</span></a></li>
                            
                            <li><a href="<?php echo base_url();?>sieu-thi/nha-tro">
                                <span>NHÀ TRỌ SINH VIÊN</span></a></li>
                            
                        </ul>
                        <div id="search_result">
                            <form action="/sieu-thi/loc" method="post" class="form_style_5">
                            <fieldset>
                                <input placeholder="Từ khóa / Mã số tài sản" type="text" name="txtSearch" id="txtSearch" value="">
                                <button type="submit" name="SubmitSearch" id="SubmitSearch">
                                    Tìm tài sản bất động sản</button>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="rounded_style_2 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="unity_bar">
                            <div class="left">
                                <div class="email_print">
                                    <ul>
                                        <li><a href="javascript:window.print()">
                                            <span class="ico_16 ico_print_16"></span>Bản in</a></li>
                                        <li>
                                            <a href="javascript:void(0)" onclick="GetDataSaved('XgwcVO2PDyF9FMhC8+5KXw==','/thue-phong-tro-c16/phong-tro-cho-thue-quan-binh-tan-1-trieuthang-i540494','.itemsaved')" class="itemsaved">
                                                <span class="ico_16 ico_save_2_16"></span>Lưu tin</a></li>
                                        <li><a href="javascript:history.go(-1)"><span class="ico_16 ico_back_16"></span>Quay lại</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                    <div class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=http://www.diaoconline.vn/thue-phong-tro-c16/phong-tro-cho-thue-quan-binh-tan-1-trieuthang-i540494" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        
        
        </ul>
    </div>

                            </div>
                        </div>
                        <div>
    <div class="breadcrumb">
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/sieu-thi" itemprop="url" title="Siêu thị địa ốc"><span itemprop="title">Siêu thị địa ốc</span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/thue-phong-tro-c16" itemprop="url" title="Thuê Phòng trọ"><span itemprop="title">Thuê Phòng trọ</span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/thue-phong-tro-c16/tphcm-t3" itemprop="url" title="Thuê Phòng trọ TP.HCM"><span itemprop="title">TP.HCM</span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/thue-phong-tro-c16/tphcm-t3/quan-binh-tan-q145" itemprop="url" title="Thuê Phòng trọ Quận Bình Tân TP.HCM"><span itemprop="title">Quận Bình Tân</span></a>
            </div>
    </div>
                        </div>
                            <style type="text/css">
        html
        {
            height: 100%;
        }
        body
        {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map_canvas
        {
            height: 100%;
        }
    </style>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/lightBox/jquery.lightbox-0.5.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/lightBox/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(function () {
            $('#slider a').lightBox({ maxHeight: screen.height * 0.9,
                maxWidth: screen.width * 0.9
            });
        });
    </script>
    <style type="text/css">
        /* jQuery lightBox plugin - Gallery style */
        #gallery
        {
            background-color: #444;
            padding: 10px;
            width: 520px;
        }
        #gallery ul
        {
            list-style: none;
        }
        #gallery ul li
        {
            display: inline;
        }
        #gallery ul img
        {
            border: 5px solid #3e3e3e;
            border-width: 5px 5px 20px;
        }
        #gallery ul a:hover img
        {
            border: 5px solid #fff;
            border-width: 5px 5px 20px;
            color: #fff;
        }
        #gallery ul a:hover
        {
            color: #fff;
        }
    </style>
    <div class="body">
        <h1 class="larger_title"><?php echo $detail[0]['title']?></h1>
        <span class="location">Vị trí:
<?php echo $detail[0]['dia_chi']?></span>
        <div class="detail_info">
                <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/asset_detail.css" rel="stylesheet" type="text/css">
                <div id="image_gallery" class="rounded_box rounded_style_2"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <div class="flexslider">
                        <img src="http://image.diaoconline.vn/sieu-thi/phong-tro_350.jpg" alt="" style="max-width:350px;max-height:362px;">
                    </div>
                </div>
            <div class="right margin_left">
                <div class="features margin_bottom">
                    <div class="currency_convertor">
                        <div class="money">
                            Giá: <?php echo bd_nice_number($detail[0]['price'])?></div>
                    </div>
                    <div class="feat_item">
                        <dl>
                            <dt>Mã số tài sản:</dt>
                            <dd><?php echo $detail[0]['code']?></dd>
                            <dt>Tổng diện tích sử dụng:</dt>
                            <dd>
<?php echo $detail[0]['dien_tich']?>m²
</dd>
                            <dt>Diện tích khuôn viên:</dt>
                            <dd>
                                    <?php echo $detail[0]['chieu_dai']+$detail[0]['chieu_ngang_sau']+$detail[0]['chieu_ngang_truoc']?>m²
</dd>
                            <dt>Diện tích xây dựng:</dt>
                            <dd>
                                    <?php echo $detail[0]['xd_chieu_dai']+$detail[0]['xd_chieu_ngang_sau']+$detail[0]['xd_chieu_ngang_truoc']?>m²
</dd>
                            <dt>Tình trạng:</dt>
                            <dd>
                                    <?php echo $detail[0]['tinh_trang_phap_ly']?>
</dd>
                            <dt>Số phòng ngủ:</dt>
                            <dd>
                                   <?php echo $detail[0]['phong_ngu']?>
</dd>
                            <dt>Số phòng tắm / WC:</dt>
                            <dd>
                                    <?php echo $detail[0]['so_phong_tam_wc']?>
</dd>
                        </dl>
                    </div>
                </div>
                <div class="contact_info margin_bottom">
                    <h3 class="small_headline">
                        THÔNG TIN LIÊN HỆ</h3>
                    <div class="body">
                            <h4>
                                <a href="javascript:void(0)" style="cursor: default"><?php echo $detail[0]['full_name']?></a></h4>
                            <dl>
                                <dt>ĐT:&nbsp;</dt><dd>
                                        <span><?php echo $detail[0]['phone']?></span>
                                </dd>
                                <dt>Địa chỉ:&nbsp;</dt><dd><?php echo $detail[0]['address']?></dd>
                            </dl>
                    </div>
                </div>
                
            </div>
        </div>
            <div id="detail" class="margin_bottom">
                <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <h2 class="headline">
                        <span>MÔ TẢ CHI TIẾT</span></h2>
                </div>
                <div class="rounded_style_2 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <div class="body">
                        <p>
                        <?php echo $detail[0]['content'];?>
                        </p>
                    </div>
                </div>
            </div>
        <div id="feature_detail" class="margin_bottom">
            <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                <h2 class="headline">
                    <span>CẤU TRÚC &amp; TIỆN ÍCH</span></h2>
            </div>
            <div class="rounded_style_2 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                <div class="body">
                    <div class="block">
                        <table>
                            <tbody>
                                <tr class="bg_grey">
                                    <td>
                                        Tổng diện tích sử dụng: <strong>
                                            <?php echo $detail[0]['dien_tich']?>m²</strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        <strong>Diện tích khuôn viên</strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều ngang trước: <strong><?php echo $detail[0]['chieu_ngang_truoc']?>m²
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều ngang sau: <strong><?php echo $detail[0]['chieu_ngang_sau']?>m²
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều dài: <strong><?php echo $detail[0]['chieu_dai']?>m²
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        <strong>Diện tích xây dựng</strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều ngang trước: <strong><?php echo $detail[0]['xd_chieu_ngang_truoc']?>m²
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều ngang sau: <strong><?php echo $detail[0]['xd_chieu_ngang_sau']?>m²
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="child">
                                    <td>
                                        Chiều dài: <strong><?php echo $detail[0]['xd_chieu_dai']?>m²
                                            </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block">
                        <table>
                            <tbody>
                                <tr class="bg_grey">
                                    <td>
                                        Loại địa ốc: <strong>
                                                <a href="/sieu-thi/phong-tro-c16" class="link-ext"><?php echo $detail[0]['loai_dia_oc']?></a>
</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tình trạng pháp lý: <strong><?php echo $detail[0]['tinh_trang_phap_ly']?>
</strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        Hướng: <strong><?php echo $detail[0]['huong']?>
</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Đường trước nhà: <strong>
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        Vị trí địa ốc: <strong>
                                                <a href="/sieu-thi/duong-truoc-nha-khong-cap-nhat-d4" class="link-ext"><?php echo $detail[0]['vi_tri_dia_oc']?></a>
</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số lầu: <strong><?php echo $detail[0]['so_lau']?>
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        Số phòng khách: <strong><?php echo $detail[0]['so_phong_khach']?>
                                            </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số phòng ngủ: <strong><?php echo $detail[0]['phong_ngu']?>
                                            </strong>
                                    </td>
                                </tr>
                                <tr class="bg_grey">
                                    <td>
                                        Số phòng tắm/WC: <strong><?php echo $detail[0]['so_phong_tam_wc']?>
                                            </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số phòng khác: <strong><?php echo $detail[0]['phong_khac']?>
                                            </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block">
                        <table>
                            <tbody>
                                    <tr class="bg_grey">
                                        <td>Đầy đủ tiện nghi
                                        <?php 
                                        if($detail[0]['day_du_tien_nghi']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Chỗ đậu xe hơi
                                        <?php 
                                        if($detail[0]['cho_dau_xe_hoi']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Sân vườn
                                        <?php 
                                        if($detail[0]['san_vuon']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Hồ bơi
                                        <?php 
                                        if($detail[0]['ho_boi']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Tiện kinh doanh<?php 
                                        if($detail[0]['tien_kinh_doanh']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Tiện để ở<?php 
                                        if($detail[0]['tien_de_o']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Tiện làm văn phòng
                                        <?php 
                                        if($detail[0]['tien_lam_van_phong']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Tiện cho sản xuất
                                        <?php 
                                        if($detail[0]['tien_cho_san_xuat']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                                    <tr class="bg_grey">
                                        <td>Cho sinh viên thuê
                                        <?php 
                                        if($detail[0]['cho_sinh_vien_thue']==1)
                                        {
                                        ?>
                                        <span class="ico_16 ico_check_16"></span>
                                        <?php } else {?> 
                                        <span class="ico_16"></span>
                                        <?php }?>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


                    </div>
                </div>
<div class="rounded_style_2 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
    <div id="bottom_menu" class="body wrap margin_bottom">
        <div id="bot-03">
            <h4>
                »ĐỊA ỐC CÙNG TỈNH/THÀNH</h4>
            <ul>    <?php 
                        foreach($list_district_ as $district)
                        {
                            $count = $this->propertyhomemodel->count_dia_oc_district($district['districtid'])
                    ?>
                    <li><span class="bullet">+</span><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>/quan/<?php echo mb_strtolower(url_title(removesign($district['name'])))?>-q<?php echo $district['districtid']?>"><?php echo $district['type'].' '.$district['name']?></a> <span>(<?php echo $count[0]['total']?>)</span></li>
                    <?php } ?>
                    
            </ul>
        </div>
        <div id="bot-01">
            <h4>
                »ĐỊA ỐC THEO DANH MỤC</h4>
            <ul>
                    <?php 
                    foreach($list_loai_dia_oc as $loai)
                    {
                        $count = $this->propertyhomemodel->count_loai_dia_oc($loai['id'])
                    ?>
                    <li><span class="bullet">+</span><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($loai['name']))) ?>-c<?php echo $loai['id']?>"><?php echo $loai['name']?></a> <span>(<?php echo $count[0]['total']?>)</span></li>
                    <?php } ?>
                    
            </ul>
        </div>
        <div id="bot-02">
            <h4>
                »ĐỊA ỐC THEO TỈNH THÀNH</h4>
            <ul>
                    <?php 
                    foreach($list_city_ as $city)
                    {
                        $count = $this->propertyhomemodel->count_dia_oc_tinh_thanh($city['provinceid']);
                    ?>
                    <li><span class="bullet">+</span><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>/city/<?php echo mb_strtolower(url_title(removesign($city['name'])))?>-ct<?php echo $city['provinceid'] ?>"><?php echo $city['name']?></a> <span>(<?php echo $count[0]['total']?>)</span></li>
                    <?php } ?>
                    
            </ul>
        </div>
        
    </div>
</div>
                
                    <div id="latest_posted" class="rounded_style_2 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="headline_3">
                            <h2>
                                CÁC TÀI SẢN CÙNG NGƯỜI ĐĂNG</h2>
                        </div>
                        <div class="content">
                            <div class="content_inner">
                                <ul class="listing_4">
                                        <li><a href="/ban-phong-tro-c16/phong-tro-cho-thue-quan-thu-duc-1-trieu-500-ngan-thang-i540497">
                                            <img src="http://image.diaoconline.vn/sieu-thi/phong-tro.jpg" width="75" height="75" alt="Phòng trọ cho thuê quận Thủ Đức - 1 triệu 500 ngàn/ tháng" title="Phòng trọ cho thuê quận Thủ Đức - 1 triệu 500 ngàn/ tháng"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/thue-phong-tro-c16/phong-tro-cho-thue-quan-thu-duc-1-trieu-500-ngan-thang-i540497">Phòng trọ cho thuê quận Thủ Đức - 1 triệu 500 ngàn/ tháng</a></h2>
                                                <span class="price">1 triệu 500 ngàn/tháng</span>
                                            </div>
                                        </li>
                                        <li><a href="/ban-phong-tro-c16/phong-tro-cho-thue-quan-binh-tan-1-trieu-300-ngan-thang-i540498">
                                            <img src="http://image.diaoconline.vn/sieu-thi/phong-tro.jpg" width="75" height="75" alt="Phòng trọ cho thuê quận Bình Tân - 1 triệu 300 ngàn/ tháng" title="Phòng trọ cho thuê quận Bình Tân - 1 triệu 300 ngàn/ tháng"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/thue-phong-tro-c16/phong-tro-cho-thue-quan-binh-tan-1-trieu-300-ngan-thang-i540498">Phòng trọ cho thuê quận Bình Tân - 1 triệu 300 ngàn/ tháng</a></h2>
                                                <span class="price">1 triệu 300 ngàn/tháng</span>
                                            </div>
                                        </li>
                                        <li class="last"><a href="/ban-phong-tro-c16/phong-tro-cho-thue-nu-duong-au-co-i533081">
                                            <img src="http://image.diaoconline.vn/sieu-thi/phong-tro.jpg" width="75" height="75" alt="Phòng trọ cho thuê nữ đường Âu Cơ" title="Phòng trọ cho thuê nữ đường Âu Cơ"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/thue-phong-tro-c16/phong-tro-cho-thue-nu-duong-au-co-i533081">Phòng trọ cho thuê nữ đường Âu Cơ</a></h2>
                                                <span class="price">1 triệu 200 ngàn/tháng</span>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="others_posted" class="rounded_style_2 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="headline_3">
                            <h2>
                                CÁC TÀI SẢN MỚI NHẤT</h2>
                        </div>
                        <div class="content">
                            <div class="content_inner">
                                <ul class="listing_4">
                                        <li><a href="/ban-phong-tro-c16/ban-gap-can-ho-the-manor-dt-157m2-3-phong-ngu-lau-cao-noi-that-cao-cap-gia-tot-i735021">
                                            <img src="http://image.diaoconline.vn/sieu-thi/2013/12/10/thumb-CF7-EBE8CB.jpg" width="75" height="75" alt="Bán gấp căn hộ The Manor, DT: 157m2, 3 phòng ngủ, lầu cao, nội thất cao cấp, giá tốt" title="Bán gấp căn hộ The Manor, DT: 157m2, 3 phòng ngủ, lầu cao, nội thất cao cấp, giá tốt"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/ban-phong-tro-c16/ban-gap-can-ho-the-manor-dt-157m2-3-phong-ngu-lau-cao-noi-that-cao-cap-gia-tot-i735021">Bán gấp căn hộ The Manor, DT: 157m2, 3 phòng ngủ, lầu cao,  ...</a></h2>
                                                <span class="price">5 tỷ 300 triệu</span>
                                            </div>
                                        </li>
                                        <li><a href="/ban-phong-tro-c16/cho-thue-can-ho-the-manor-officetel-dt-140m2-3-phong-ngu-2wc-noi-that-cao-cap-gia-re-i751458">
                                            <img src="http://image.diaoconline.vn/sieu-thi/2014/01/08/thumb-CCD-3D017C.jpg" width="75" height="75" alt="Cho thuê căn hộ The Manor Officetel, DT: 140m2, 3 phòng ngủ, 2WC, nội thất cao cấp, giá rẻ" title="Cho thuê căn hộ The Manor Officetel, DT: 140m2, 3 phòng ngủ, 2WC, nội thất cao cấp, giá rẻ"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/ban-phong-tro-c16/cho-thue-can-ho-the-manor-officetel-dt-140m2-3-phong-ngu-2wc-noi-that-cao-cap-gia-re-i751458">Cho thuê căn hộ The Manor Officetel, DT: 140m2, 3 phòng  ...</a></h2>
                                                <span class="price">21 triệu 500 ngàn/tháng</span>
                                            </div>
                                        </li>
                                        <li class="last"><a href="/ban-phong-tro-c16/chinh-chu-cho-thue-can-ho-saigon-pearl-topaz-2-dt-135m2-3-phong-ngu-lau-29-view-dep-i751100">
                                            <img src="http://image.diaoconline.vn/sieu-thi/2014/01/07/thumb-2BA-276BDD.jpg" width="75" height="75" alt="Chính chủ cho thuê căn hộ Saigon Pearl - Topaz 2, DT: 135m2, 3 phòng ngủ, lầu 29, view đẹp" title="Chính chủ cho thuê căn hộ Saigon Pearl - Topaz 2, DT: 135m2, 3 phòng ngủ, lầu 29, view đẹp"></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="/ban-phong-tro-c16/chinh-chu-cho-thue-can-ho-saigon-pearl-topaz-2-dt-135m2-3-phong-ngu-lau-29-view-dep-i751100">Chính chủ cho thuê căn hộ Saigon Pearl - Topaz 2, DT:  ...</a></h2>
                                                <span class="price">30 triệu/tháng</span>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
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
                                            <a href="javascript:void(0)" onclick="GetDataSavedProperty('<?php echo $detail[0]['id']?>','/thue-phong-tro-c16/phong-tro-cho-thue-quan-binh-tan-1-trieuthang-i540494','.itemsaved')" class="itemsaved">
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
                <a href="<?php echo base_url();?>sieu-thi" itemprop="url" title="Siêu thị địa ốc"><span itemprop="title">Siêu thị địa ốc</span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>" itemprop="url" title="<?php echo $detail[0]['loai_dia_oc']?>"><span itemprop="title"><?php echo $detail[0]['loai_dia_oc']?></span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
               <span itemprop="title"><?php echo $list_city[$detail[0]['id_city']]?></span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <span itemprop="title"><?php echo $list_district[$detail[0]['id_district']] ?></span>
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
                <?php 
                
                $list_image = $this->propertyhomemodel->get_image($detail[0]['id']);
                if(!empty($list_image))
                {
                ?>
                <div id="image_gallery" class="rounded_box rounded_style_2"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $('#carousel').flexslider({
                                startAt: 0,
                                animation: "slide",
                                controlNav: false,
                                animationLoop: true,
                                slideshow: true,
                                itemWidth: 100,
                                itemMargin: 0,
                                itemMarginAdd: 0,
                                asNavFor: '#slider'
                            });
                            $('#slider').flexslider({
                                startAt: 0,
                                animation: "slide",
                                controlNav: false,
                                animationLoop: true,
                                slideshow: true,
                                slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
                                animationSpeed: 600,
                                itemWidth: 350,
                                smoothHeight: false,
                                sync: "#carousel",
                                start: function (slider) {
                                    $('body').removeClass('loading');
                                },
                                after: function (slider) {
                                    $('#imge_count span').text(slider.currentSlide + 1);
                                }
                            });
                            $('')
                        });
                    </script>
                    <div id="slider" class="flexslider">
                        <div id="imge_count" style="left: 30% !important; z-index: 1 !important;">
                            Hình <span>1</span>/6</div>
                        
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(0px, 0, 0);">
                                <?php 
                                $i=0;
                                foreach($list_image as $image)
                                {
                                ?>
                                <li style="width: 350px; float: left; display: block;">
                                    <div class="slideLarge" style="vertical-align:middle">
                                        <a href="<?php echo base_url();?>file/uploads/property/<?php echo $detail[0]['code']?>/<?php echo $image['file']?>">
                                            <img src="<?php echo base_url();?>file/uploads/property/<?php echo $detail[0]['code']?>/<?php echo $image['file']?>" alt="<?php echo $i;?>" style="max-width:350px;max-height:362px;vertical-align:middle"></a>
                                    </div>
                                </li>
                                <?php $i++;} ?>
                                
                        </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                    <div id="carousel" class="flex-control-thumbs">
                        
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides" style="width: 1200%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(0px, 0, 0);">
                            <?php 
                                $i=0;
                                foreach($list_image as $image)
                                {
                                ?>
                            <li class="flex-active-slide" style="width: 100px; float: left; display: block;">
                                <div class="bor">
                                    <img src="<?php echo base_url();?>file/uploads/property/<?php echo $detail[0]['code']?>/<?php echo $image['file']?>" alt="<?php echo $i;?>" style="width:75px;height:50px">
                                </div>
                            </li>
                            <?php $i++;}?>
                        </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                </div>
                <?php } else {?>
                <div id="image_gallery" class="rounded_box rounded_style_2"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <div class="flexslider">
                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" alt="" style="max-width:350px;max-height:362px;">
                    </div>
                </div>
                <?php } ?>
            <div class="right margin_left">
                <div class="features margin_bottom">
                    <div class="currency_convertor">
                        <div class="money">
                            Giá: <?php 
                            if(is_numeric($detail[0]['price']))
                            {
                                echo bd_nice_number($detail[0]['price']);
                            }
                            else
                            {
                                echo $detail[0]['price'];
                            }
                            ?></div>
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
                                                <a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>" class="link-ext"><?php echo $detail[0]['loai_dia_oc']?></a>
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
                                                <?php echo $detail[0]['vi_tri_dia_oc']?>
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
                                        if($detail[0]['cho_de_xe_hoi']==1)
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
                    <li><span class="bullet">+</span><a href="<?php echo base_url();?>q-sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>/quan/<?php echo mb_strtolower(url_title(removesign($district['name'])))?>-q<?php echo $district['districtid']?>"><?php echo $district['type'].' '.$district['name']?></a> <span>(<?php echo $count[0]['total']?>)</span></li>
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
                    <li><span class="bullet">+</span><a href="<?php echo base_url();?>tp-sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail[0]['loai_dia_oc'])))?>-c<?php echo $detail[0]['id_ldo']?>/city/<?php echo mb_strtolower(url_title(removesign($city['name'])))?>-ct<?php echo $city['provinceid'] ?>"><?php echo $city['name']?></a> <span>(<?php echo $count[0]['total']?>)</span></li>
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
                                        <?php $i = 1;
                                            foreach($list_cung_nguoi_dang as $nd)
                                            {
                                                if($i==3)
                                                {
                                        ?>
                                        <li class="last">
                                        <?php } else {?> 
                                        <li>
                                        <?php } ?>
                                        <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($nd['loai_dia_oc'])))?>-c<?php echo $nd['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($nd['title'])))?>-h<?php echo $nd['id']?>">
                                            <?php 
                                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$nd['code'].'/'.$nd['img']))
                                            {
                                            ?>
                                            <img src="<?php echo base_url();?>file/uploads/property/<?php echo $nd['code']?>/<?php echo $nd['img']?>" width="75" height="75" alt="<?php echo $nd['title']?>" title="<?php echo $nd['title']?>"></a>
                                            <?php } ?>
                                            <div class="right">
                                                <h2>
                                                    <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($nd['loai_dia_oc'])))?>-c<?php echo $nd['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($nd['title'])))?>-h<?php echo $nd['id']?>"><?php echo sub_string(loaibohtmltrongvanban($nd['title']),30);?></a></h2>
                                                <span class="price">
                                                <?php 
                                                if(is_numeric($nd['price']))
                                                {
                                                    echo bd_nice_number($nd['price']);
                                                }
                                                else
                                                {
                                                    echo $nd['price'];
                                                }
                                                ?>
                                                </span>
                                            </div>
                                        </li>
                                        <?php  $i++;} ?>
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
                                        <?php 
                                        $i = 1;
                                        foreach($tai_san_noi_bat_khac as $nb_k)
                                        {
                                            if($i<=3)
                                            {
                                                if($i == 3)
                                                {
                                        ?>
                                        <li><?php } else {?><li class="last">  <?php } ?><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($nb_k['loai_dia_oc'])))?>-c<?php echo $nb_k['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($nb_k['title'])))?>-h<?php echo $nd['id']?>">
                                            <?php 
                                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$nb_k['code'].'/'.$nb_k['img']))
                                            {
                                            ?>
                                            <img src="<?php echo base_url();?>file/uploads/property/<?php echo $nb_k['code']?>/<?php echo $nb_k['img']?>" width="75" height="75" alt="<?php echo $nb_k['title']?>" title="<?php echo $nb_k['title']?>"></a>
                                            <?php } ?></a>
                                            <div class="right">
                                                <h2>
                                                    <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($nb_k['loai_dia_oc'])))?>-c<?php echo $nb_k['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($nb_k['title'])))?>-h<?php echo $nd['id']?>">Bán gấp căn hộ The Manor, DT: 157m2, 3 phòng ngủ, lầu cao,  ...</a></h2>
                                                <span class="price"><?php 
                                                if(is_numeric($nb_k['price']))
                                                {
                                                    echo bd_nice_number($nb_k['price']);
                                                }
                                                else
                                                {
                                                    echo $nb_k['price'];
                                                }
                                                ?></span>
                                            </div>
                                        </li>
                                        <?php }  $i++;} ?>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>

<div class="col_650  margin_bottom">
                <div class="col_650 margin_bottom">
    <script type="text/javascript">
        $(function () {
            // slide show trang chu
            $('#hot_latest_news').slides({
                preload: true,
                generateNextPrev: true,
                play: 5000,
                generatePagination: false,
                generateNextPrev: false,
                pagination: true,
                paginationClass: 'paging_1',
                currentClass: 'actived',
                preloadImage: '<?php echo base_url();?>template/home_ezwebvietnam/Content/images/loading.gif'
            });
        });
    </script>
<div id="hot_latest_news">
    <div class="slides_container">
        <?php 
        foreach($list_new_slide as $new_slide)
        {
        ?>
        <div class="slide_content">
        
            <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new_slide['name'])));?>-c<?php echo $new_slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new_slide['title'])));?>-i<?php echo $new_slide['id_new']?>">
            <?php 
            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$new_slide['img']))
            {
            ?>
                <img src="<?php echo base_url();?>file/uploads/news/<?php echo $new_slide['img']?>" width="310" height="200" alt="<?php echo $new_slide['title']?>" style="float:left"/></a>
            <?php } ?>
                <div class="body">
                <h2 class="larger_title"><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new_slide['name'])));?>-c<?php echo $new_slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new_slide['title'])));?>-i<?php echo $new_slide['id_new']?>"><?php echo $new_slide['title']?></a></h2>
                <span class="updated_date">Cập nhật:<?php echo date('d/m/Y',$new_slide['create_date'])?></span><br />
                <p><?php echo sub_string(loaibohtmltrongvanban($new_slide['content']),222);?></p>
            </div>
            </div>
        <?php }?>
        
        </div>
        <div class="paging_1">
        <ul>
        <?php 
        $count = count($list_new_slide);
        for($i = 1;$i<=$count;$i++)
        {
        ?>
            <li><a href="#"><?php echo $i;?></a></li>
        <?php } ?>
        </ul>
        </div>
    
</div>
<div id="updated_news_list">
	<h3 class="headline_title"><span>THÔNG TIN MỚI CẬP NHẬT</span></h3>
    <ul class="listing_1">
    <?php 
    foreach($list_new_slide_ as $news_slide_)
    {
    ?>
        <li class="updated_news_section">
            <div class="updated_news_descript">                                
            <h2><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($news_slide_['name'])));?>-c<?php echo $news_slide_['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($news_slide_['title'])));?>-i<?php echo $news_slide_['id_new']?>"><?php echo $news_slide_['title']?></a></h2>
            </div>
        </li>
     <?php } ?>   
    </ul>
</div>
                </div>
                
                <div class="col_650">
					<div id="new_logos" class="rounded_style_6 rounded_box margin_bottom">
                        <div class="content">
    <script type="text/javascript">
        $(function () {
            $('.new_logos li').each(function () {
                $(this).tooltipsy({
                    content: $(this).find('.textQTip').html()
                });
            });
        });
    </script>
    <ul class=new_logos>
            <li >
                    <a href="/doanh-nghiep/cong-ty-co-phan-tac-dat-tac-vang-i934/gioi-thieu">
                <img src="http://image.diaoconline.vn/CompanyImageSmall/2011/07/18_Diaoconline_TDTV_75x75.jpg" width="75" height="75" alt="C&#244;ng ty Cổ phần Tấc Đất Tấc V&#224;ng"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty Cổ phần Tấc Đất Tấc V&#224;ng</strong></p>
                    <p>120-122 Đường D1, Phường 25, Quận B&#236;nh Thạnh, TP.HCM
                        <br />
                            ĐT: 84.8.3512 7788 - 3512 7799</p>
                </div>
            </li>
            <li >
                    <a href="/doanh-nghiep/cong-ty-tnhh-thiet-ke-xay-dung-kien-phat-i1107/gioi-thieu">
                <img src="http://image.diaoconline.vn/CompanyImageSmall/2010/12/02_KienPhat_75x75.jpg" width="75" height="75" alt="C&#244;ng ty TNHH Thiết kế - X&#226;y dựng Kiến Ph&#225;t"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty TNHH Thiết kế - X&#226;y dựng Kiến Ph&#225;t</strong></p>
                    <p>1126 Lạc Long Qu&#226;n , Phường 8, Quận T&#226;n B&#236;nh, TP.HCM
                        <br />
                            ĐT: 84.8.3869 1529 - 0918 29 39 59</p>
                </div>
            </li>
            <li >
                    <a href="/doanh-nghiep/cong-ty-co-phan-dich-vu-dia-oc-hoang-khang-i1489/gioi-thieu">
                <img src="http://image.diaoconline.vn/doanh-nghiep/2013/11/27/logo-5C8-cong-ty-hoang-khang.jpg" width="75" height="75" alt="C&#244;ng ty Cổ phần Dịch vụ Địa ốc Ho&#224;ng Khang"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty Cổ phần Dịch vụ Địa ốc Ho&#224;ng Khang</strong></p>
                    <p>111 Nguyễn Thị Thập, KDC Him Lam, T&#226;n Hưng, Quận 7, TP.HCM
                        <br />
                            ĐT: (08) 629 88111 </p>
                </div>
            </li>
            <li >
                    <a href="/doanh-nghiep/cong-ty-co-phan-dau-tu-nam-long-i308/gioi-thieu">
                <img src="http://image.diaoconline.vn/upload/Images/hinhLogo75/namlong-logo.gif" width="75" height="75" alt="C&#244;ng ty Cổ phần Đầu tư Nam Long"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty Cổ phần Đầu tư Nam Long</strong></p>
                    <p>Số 06 Nguyễn Khắc Viện , T&#226;n Phong, Quận 7, TP.HCM
                        <br />
                            ĐT: 84.8.5416 1718</p>
                </div>
            </li>
            <li >
                    <a href="/doanh-nghiep/cong-ty-co-phan-dia-oc-phu-long-i255/gioi-thieu">
                <img src="http://image.diaoconline.vn/CongTy/2009/03/20_Kiva_PhuLong_75x75.gif" width="75" height="75" alt="C&#244;ng ty Cổ phần Địa Ốc Ph&#250; Long"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty Cổ phần Địa Ốc Ph&#250; Long</strong></p>
                    <p>41 Nguyễn Văn Linh, T&#226;n Phong, Quận 7, TP.HCM
                        <br />
                            ĐT: (08) 5412 1818</p>
                </div>
            </li>
            <li >
                    <a href="/doanh-nghiep/cong-ty-co-phan-dich-vu-bat-dong-san-ht-real-i1467/gioi-thieu">
                <img src="http://image.diaoconline.vn/doanh-nghiep/2013/05/22/logo-3F7-cong-ty-co-phan-dich-vu-bat-dong-san-ht-real.jpg" width="75" height="75" alt="C&#244;ng ty cổ phần dịch vụ bất động sản HT Real"/></a>
            
                <div class="textQTip">
                    <p><strong>C&#244;ng ty cổ phần dịch vụ bất động sản HT Real</strong></p>
                    <p>19A Cộng Ho&#224; , Phường 12, Quận T&#226;n B&#236;nh, TP.HCM
                        <br />
                            ĐT: (08) 62 98 39 39</p>
                </div>
            </li>
    </ul>
                        </div>
                    </div>


					
<div id="hot_project" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <div class="content">
            <ul class="headline_tab">
                <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>du-an">DỰ ÁN NỔI BẬT</a><span class="R"></span></li>
            </ul>
            <a href="/du-an" class="grey_link">Xem tất cả</a>
        </div>
    </div>

    <div class="rounded_style_2 rounded_box">
        <div class="content">
        <?php 
        foreach($list_project as $l_pro)
        {
        ?>
            <div class="block">
                <div class="image_info">
                    <a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($l_pro['name'])))?>-c<?php echo $l_pro['id_cate']?>/l<?php echo mb_strtolower(url_title(removesign($l_pro['title'])))?>-i<?php echo $l_pro['id_pro']?>">
                    <?php 
                    if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$l_pro['img']))
                    {
                    ?>
                    <img src="<?php echo base_url();?>file/uploads/project/<?php echo $l_pro['img'];?>" width="300" height="200" alt="Lexington An Phú"/></a>
                    <?php }?>
                    <div class="txt">
                        <h1><a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($l_pro['name'])))?>-c<?php echo $l_pro['id_cate']?>/l<?php echo mb_strtolower(url_title(removesign($l_pro['title'])))?>-i<?php echo $l_pro['id_pro']?>" class="link-white"><?php echo $l_pro['title']?></a></h1>
						<p>Vị trí: <?php echo $list_district[$l_pro['id_district']]?>, <?php echo $list_city[$l_pro['id_city']]?></p>
                    </div>
                </div>
                <div class="prj_info prj_1">
                    <ul class="tabs">
                    <li class="actived"><span>THÔNG TIN DỰ ÁN</span></li>
                    <li><a href="<?php echo base_url();?>sieu-thi/du-an.<?php echo $l_pro['id_pro']?>.duan">TÀI SẢN ĐANG GIAO DỊCH</a></li>
                    </ul>
                    <div class="info_1 txt"><p><?php echo sub_string(loaibohtmltrongvanban($l_pro['content']),229); ?>...</p></div>
                </div>
            </div>
         <?php } ?>   
            
        </div>
    </div>
</div>                </div>
                <div class="col_650  margin_bottom">
                    <div id="home_posted_property" class="col_650 margin_bottom">
                        <div class="rounded_style_2 rounded_box">
                            <div class="content">
    <div class="group_real">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <ul class="headline_tab">
                <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>sieu-thi/chinh-chu">Tài sản chính chủ</a><span class="R"></span></li>
            </ul>
        </div>
        <ul class="listing_1">
        <?php 
        $i = 1;
        foreach($list_pro as $list_prj)
        {
            if($i%2 == 0)
            {
        ?>
            <li class="class=margin_left">
            <?php } else {?>
            <li >
            <?php } ?>
                <div class="posted_block hightlight_type_3 ">
                    <div class="img"><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($list_prj['loai_dia_oc'])))?>-c<?php echo $list_prj['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($list_prj['title'])))?>-h<?php echo $list_prj['id']?>">
                                <?php 
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$list_prj['code'].'/'.$list_prj['img']))
                                {
                                ?>
                                <img src="<?php echo base_url();?>file/uploads/property/<?php echo $list_prj['code']?>/<?php echo $list_prj['img']?>" width="120" height="120" alt="<?php echo $list_prj['title']?>"/>
                                <?php } else {?> 
                                <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="120" height="120" alt="<?php echo $list_prj['title']?>"/>
                                <?php }?>
                                </a></div>
                    <div class="posted_info">
                        <h2><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($list_prj['loai_dia_oc'])))?>-c<?php echo $list_prj['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($list_prj['title'])))?>-h<?php echo $list_prj['id']?>"><?php echo $list_prj['title']?></a></h2>
                        <span class="location"><a class="link-ext" href="/thue-van-phong-c9/tphcm-t3/quan-binh-thanh-q140">Quận Bình Thạnh</a>, 
                                                <a class="link-ext" href="/thue-van-phong-c9/tphcm-t3">TP.HCM</a></span><br />
                        <span class="price">
                        
                        <?php 
                        if(is_numeric($list_prj['price']))
                        {
                        echo bd_nice_number($list_prj['price'])?>/th&#225;ng 
                        <?php } else { echo $list_prj['price'];}?>
                        
                        </span>
                    </div>
                </div>
            </li>
        <?php $i++;} ?>
            
            
            
            </li>
        </ul>
        <a class="view_all" href="<?php echo base_url();?>sieu-thi/chinh-chu">Xem tất cả</a>
    </div>
    <div class="group_real">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <ul class="headline_tab">
                <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>sieu-thi">Tài sản mới nhất</a><span class="R"></span></li>
            </ul>
        </div>
        <ul class="listing_1">
            <?php 
            $i=1;
            
            foreach($list_pro_new as $pro_new)
            {
                if($i%2==0)
                {
                    ?> 
                     <li  class=margin_left >
                    <?php } else {?> 
                     <li >
                    <?php
                }
            ?>
            
                <div class="posted_block ">
                    <div class="img"><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($pro_new['loai_dia_oc'])))?>-c<?php echo $pro_new['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($pro_new['title'])))?>-h<?php echo $pro_new['id']?>">
                                <?php 
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$pro_new['code'].'/'.$pro_new['img']))
                                {
                                ?>
                                <img src="<?php echo base_url();?>/file/uploads/property/<?php echo $pro_new['code']?>/<?php echo $pro_new['img']?>" width="120" height="120" alt="<?php echo $pro_new['title']?>"/>
                                <?php } else { ?> 
                                <img src="<?php echo base_url();?>/file/uploads/no_image.gif" width="120" height="120" alt="<?php echo $pro_new['title']?>"/>
                                <?php }?>
                                </a></div>
                    <div class="posted_info">
                        <h2><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($pro_new['loai_dia_oc'])))?>-c<?php echo $pro_new['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($pro_new['title'])))?>-h<?php echo $pro_new['id']?>"><?php echo $pro_new['title']?></a></h2>
                        <span class="location"><?php echo $list_district[$pro_new['id_district']]?>, 
                                                <?php echo $list_city[$pro_new['id_city']]?></span><br />
                        <span class="price">
                        <?php 
                        if(is_numeric($pro_new['price']))
                        {
                            echo bd_nice_number($pro_new['price']);
                        }
                        else
                        {
                            echo $pro_new['price'];
                        }
                        ?>
                        </span>
                    </div>
                </div>
            </li>
            <?php $i++;} ?>
           
            
        </ul>
        <a class="view_all" href="<?php echo base_url();?>sieu-thi">Xem tất cả</a>
    </div>
    <div class="group_real">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <ul class="headline_tab">
                <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>sieu-thi/gia/gianho-300000000-gialon-1000000000">Tài sản giá thấp</a><span class="R"></span></li>
            </ul>
        </div>
        <ul class="listing_1">
        <?php 
        $i = 1;
        foreach($property_low_price as $low_rice)
        {
            if($i%2==0)
            {
                ?> 
                 <li  class=margin_left >
                <?php }else { ?> 
                <li>
                <?php } 
            
        ?>
           
                <div class="posted_block ">
                    <div class="img"><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($low_rice['loai_dia_oc'])))?>-c<?php echo $low_rice['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($low_rice['title'])))?>-h<?php echo $low_rice['id']?>">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$low_rice['code'].'/'.$low_rice['img']))
                    {
                    ?>
                                <img src="<?php echo base_url();?>file/uploads/property/<?php echo $low_rice['code']?>/<?php echo $low_rice['img']?>" width="120" height="120" alt="<?php echo $low_rice['title']?>"/>
                                <?php } else {?> 
                                <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="120" height="120" alt="<?php echo $low_rice['title']?>"/>
                                <?php } ?>
                                </a></div>
                    <div class="posted_info">
                        <h2><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($low_rice['loai_dia_oc'])))?>-c<?php echo $low_rice['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($low_rice['title'])))?>-h<?php echo $low_rice['id']?>"><?php echo $low_rice['title']?></a></h2>
                        <span class="location"><?php echo $list_district[$low_rice['id_district']]?>, 
                                                <?php echo $list_city[$low_rice['id_city']]?></span><br />
                        <span class="price"><?php 
                        if(is_numeric($low_rice['price']))
                        {
                            echo bd_nice_number($low_rice['price']);
                        }
                        else
                        {
                            echo $low_rice['price'];
                        }
                        ?></span>
                    </div>
                </div>
            </li>
            
                
            <?php $i++;} ?>
        </ul>
        <a class="view_all" href="<?php echo base_url();?>sieu-thi/gia/gianho-300000000-gialon-1000000000">Xem tất cả</a>
    </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box_news" class="col_650">
<div class="headline_title_1 rounded_style_5 rounded_box">
    <div class="content">
        <ul class="headline_tab">
            <?php
            $i = 1; 
            foreach($nav_cate_dis as $nav)
            {
                if($i<=5)
                {
            ?>
            <li><a href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($nav['name'])))?>-c<?php echo $nav['id']?>"><span><?php echo $nav['name']?></span></a></li>
            <?php } $i++;} ?>
        </ul>
        
    </div>
</div>
<div class="rounded_style_2 rounded_box">
    <div class="content">
        <div class="latest_news">
        <?php 
        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$list_new_slide_d[0]['img']))
        {
        ?>
            <div class="img"><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_new_slide_d[0]['name'])))?>-c<?php echo $list_new_slide_d[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_new_slide_d[0]['title'])))?>-i<?php echo $list_new_slide_d[0]['id_disco']?>"><img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $list_new_slide_d[0]['img']?>" width="400" height="250" alt="<?php echo $list_new_slide_d[0]['title']?>"/></a></div>
        <?php } ?>
                <div class="news_info">
                    <div class="category"><a href="<?php echo base_url()?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($list_new_slide_d[0]['name'])))?>-c<?php echo $list_new_slide_d[0]['id_cate']?>">»<?php echo $list_new_slide_d[0]['name']?></a></div>
                    <h2 class="larger_title"><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_new_slide_d[0]['name'])))?>-c<?php echo $list_new_slide_d[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_new_slide_d[0]['title'])))?>-i<?php echo $list_new_slide_d[0]['id_disco']?>"><?php echo $list_new_slide_d[0]['title']?></a></h2>
                    <div class="updated_date"><span>Cập nhật 15 ph&#250;t trước</span></div>
                    <br />
                    <p><?php echo sub_string(loaibohtmltrongvanban($list_new_slide_d[0]['content']),239);?></p>
                </div>
        </div>
        <div class="other_news">
            <h3 class="headline_title"><span>CÁC TIN KHÁC</span></h3>
            <ul>
            <?php 
            foreach($list_new_slide_d_ as $news_d)
            {
            ?>
                <li >
                    <div class="news_block">
                    <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($news_d['name'])))?>-c<?php echo $news_d['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($news_d['title'])))?>-i<?php echo $news_d['id_disco']?>">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$news_d['img']))
                    {
                    ?>
                    <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $news_d['img']?>" width="200" height="125" alt="<?php echo $news_d['title']?>" title="<?php echo $news_d['title']?>" alt="<?php echo $news_d['title']?>"/>
                    <?php } ?>
                    </a><br />
                    <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($news_d['name'])))?>-c<?php echo $news_d['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($news_d['title'])))?>-i<?php echo $news_d['id_disco']?>"><?php echo $news_d['title']?></a>
                    </div>
                </li>
             <?php } ?>   
            </ul>
        </div>
    </div>
</div>                </div>
            </div>
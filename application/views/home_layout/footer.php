<div id="footer">
    
    <div id="footer_top">
<div id="bottom_menu" class="wrap">
                <div id="news_menu">
                    <h4>»THÔNG TIN ĐỊA ỐC</h4>
                    <ul>
                    <?php 
                                                foreach($new_nav as $menu_new)
                                                {
                                                ?>
                                                <li><a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($menu_new['name'])))?>-c<?php echo $menu_new['id']?>"><?php echo $menu_new['name']?></a>
                                                </li>
                                                <?php } ?>
                        
                    </ul>
                </div>
                <div id="market_menu">
                    <h4>»SIÊU THỊ ĐỊA ỐC</h4>
                    <ul>
                        <?php 
                                                foreach($cate_sieu_thi_list as $cate_st)
                                                {
                                                ?>
                                                <li><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($cate_st['name'])))?>-c<?php echo $cate_st['id']?>"><?php echo $cate_st['name']?></a>
                                                </li>
                                                <?php } ?>
                    </ul>
                </div>
                <div id="project_menu">
                    <h4>»DỰ ÁN</h4>
                    <ul>
                            <?php 
                                                foreach($cate_pro_nav as $cate_pro)
                                                {
                                            ?>
                                            <li><a href="<?php echo base_url();?>du-an-c/<?php echo  mb_strtolower(url_title(removesign($cate_pro['name'])))?>-c<?php echo $cate_pro['id']?>"><?php echo $cate_pro['name']?></a></li>
                                            <?php } ?>
                    </ul>
                </div>
                <div id="company_menu">
                    <h4>»DOANH NGHIỆP ĐỊA ỐC</h4>
                    <ul>
                            <li>
                                <a href="/doanh-nghiep/moi-gioi-dia-oc-c1">Môi giới địa ốc</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/vlxd-thi-cong-c3">VLXD & Thi công</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/tai-chinh-phap-ly-c6">Tài chính pháp lý</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/dau-tu-du-an-c12">Đầu tư - Dự án</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/thiet-ke-trang-tri-c14">Thiết kế - Trang trí</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/truyen-thong-quang-cao-c16">Truyền thông - Quảng cáo</a>
                            </li>
                    </ul>
                </div>
                <div id="discover_menu" class="last">
                    <h4>
                        »KHÁM PHÁ - TRẢI NGHIỆM</h4>
                    <ul>
                            <?php 
                                        foreach($nav_cate_dis as $cate_nav)
                                        {
                                        ?>
                                                <li><a href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($cate_nav['name'])))?>-c<?php echo $cate_nav['id']?>"><?php echo $cate_nav['name']?></a></li>
                                        <?php } ?>    
                    </ul>
                </div>
</div>
     
        <div class="wrap">
            <div id="social_network" class="white_border_box rounded_box">
                <div class="content">
                    <div class="like">
                    <div style="margin-bottom:5px;">
                        <b>Hỗ trợ kỹ thuật</b>
                        <span class="phone">0947098968</span>
                        </div>
                        <br />
                        
                        <b>Hỗ trợ trực tuyến</b>
						<a href="ymsgr:sendim?hongdao.tnmt"><img class="aligncenter  wp-image-6317" title="yahoo" src="http://www.aithietke.com/wp-content/uploads/2013/10/yahoo.png" alt="" width="142" height="40"></a>
                    </div>
                    <div class="join_network">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI TẠI: </h4>
                        <ul>
                        <li class="facebook"><a href="http://facebook.com/diaoconlinefc" target="_blank">facebook</a></li>
                        <li class="twitter"><a href="https://twitter.com/DiaOcOnlinevn" target="_blank">twitter</a></li>
                        <li class="youtube"><a href="http://www.youtube.com/diaoconline" target="_blank">youtube</a></li>
                        <li class="google"><a href="https://plus.google.com/u/1/b/101503616522434888485/" target="_blank">google</a></li>
                        <li class="linkedin"><a href="http://www.linkedin.com/in/diaoconline" target="_blank">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="dool_network" class="white_border_box rounded_box">
                <div class="content">
					<h4>DCBLAND.COM NETWORK</h4>
                    <ul>  
                    <li class="dool"><a href="#">DCBLAND.COM</a></li>
                    <li class="roi"><a href="#">DCBLAND.COM</a></li>
                    <li class="tv"><a href="#">DCBLAND.COM</a></li>
                    <li class="map"><a href="#">DCBLAND.COM</a></li>
                    </ul>
                </div>
            </div>
            <div id="misc" class="rounded_style_3 rounded_box">
                <div class="content">
                   	<ul>
                    <li class="btn_help_center first"><a href="http://adv.diaoconline.vn/AboutUs/trogiup.html" target="_blank"><span></span>TRUNG TÂM TRỢ GIÚP</a></li>
                    <li class="btn_ad_price_list"><a href="http://adv.diaoconline.vn/AboutUs/banggia.html" target="_blank"><span></span>BẢNG GIÁ QUẢNG CÁO</a></li>
                    <li class="btn_point_load"><a href="http://adv.diaoconline.vn/AboutUs/trogiup_tphi_napthe.html" target="_blank"><span></span>NẠP ĐIỂM DOOL</a></li>
                    <li class="btn_our_services"><a href="http://adv.diaoconline.vn/AboutUs/dichvu.html" target="_blank"><span></span>DỊCH VỤ CỦA CHÚNG TÔI</a></li>
                    <li class="btn_post_guide"><a href="http://adv.diaoconline.vn/AboutUs/trogiup_tdang.html" target="_blank"><span></span>HƯỚNG DẪN ĐĂNG TIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footer_bottom">
        <div id="foot_content" class="wrap">
        <div id="foot_nav">
            <ul>
            <li class="first"><a href="http://adv.diaoconline.vn/AboutUs" target="_blank">Về chúng tôi</a></li>
            <li><a href="http://adv.diaoconline.vn/AboutUs/trogiup.html" target="_blank">Hướng dẫn sử dụng</a></li>
            <li><a href="/quy-dinh-su-dung">Quy định sử dụng</a></li>
            <li><a href="/dieu-khoan-thoa-thuan">Điều khoản thỏa thuận</a></li>
      
            <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
            <li><a href="/lien-he">Liên hệ</a></li>
            <li><a href="/rss"><img width="36" height="14" alt="rss diaoconline" src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/icon_rss.gif"/></a></li>
            </ul>
        </div>
        <div class="copyright">
        <p>Copyright © 2007 - 2013 DCBLand Corp. ® Ghi rõ nguồn "DCBLand.com" khi phát hành lại thông tin từ website này.<br />
        655 Luỹ Bán Bích,Phường Phú Thạnh, Quận Tân Phú,TP.HCM, Viet Nam. Tel: 0947098968
</p>

        </div>
    </div>
    </div>
</div>
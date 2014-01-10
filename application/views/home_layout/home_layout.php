
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>
            <?php echo $title ?>
        </title>
        <meta charset="utf-8"/>
        <link href="<?php echo base_url();?>template/home_ezwebvietnam/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>template/home_ezwebvietnam/uploads/layout/Default/css/layout.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url();?>template/home_ezwebvietnam/js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/home_ezwebvietnam/js/player.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/home_ezwebvietnam/js/jquery.tooltip.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>template/home_ezwebvietnam/css/colorbox.css" type="text/css" /> 
        <script type="text/javascript" src="<?php echo base_url();?>template/home_ezwebvietnam/js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/home_ezwebvietnam/js/jquery.nivo.slider.pack.js"></script> 
        <link href="<?php echo base_url();?>template/home_ezwebvietnam/css/nivo-slider.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <meta name="description" content="Công ty cổ phần đầu tư thương mại phát triển Phú Thịnh" /><meta name="keywords" content="Công ty cổ phần đầu tư thương mại phát triển Phú Thịnh" /></head>
    <body>
        
            
            <h1 style="position:absolute;z-index:-100000;visibility:hidden;width:1px"></h1>
            <div id="wrapper">
                <div id="header" class="clearfix">

                    <div class="banner"><a href="#" title="banner3" target="_self">
                    <table><tbody><tr><td style="border: 0px solid rgb(180, 4, 4); background: transparent url(http://giangbeo.com/vantai/template/home_ezwebvietnam/Banner_2.jpg) repeat ; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; width: 1000;"><embed type="application/x-shockwave-flash" allowscriptaccess="never" src="http://giangbeo.com/vantai/file/banner.swf" wmode="transparent"  height="220" width="1000"></td></tr></tbody></table>
                    

                    <div id="menu" class="clearfix">
                        <div class="menu_mid clearfix"><a href="/"><img alt="" src="<?php echo base_url();?>template/home_ezwebvietnam/css/images/icon_home.png" /></a>
                            <ul id="menu_mid">
                                <li><a href="<?php echo base_url();?>" target="_self">TRANG CHỦ</a></li>
                                <li><a href="<?php echo base_url();?>gioi-thieu" target="_self">Giới thiệu</a></li>
                                                                 
                                <li><a href="<?php echo base_url();?>dich-vu" target="_self">Dịch vụ</a></li>
                                
                                <li class="last"><a href="<?php echo base_url();?>lien-he" target="_self">LIÊN HỆ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="search-box">
                        <div class="search-box clearfix">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount="3"><p>	CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN </p></marquee>
                            <div class="search">
                                <input name="ctl03$u_menu_top1$u_search_box1$txtSearch" type="text" value="Tìm kiếm" id="ctl03_u_menu_top1_u_search_box1_txtSearch" onfocus="this.value = '';" /> 
                                <input type="submit" name="ctl03$u_menu_top1$u_search_box1$btnSearch" value="" id="ctl03_u_menu_top1_u_search_box1_btnSearch" />
                            </div>
                            <script type="text/javascript">
                                $('#ctl03_u_menu_top1_u_search_box1_txtSearch').blur(function() {
        if ($(this).val() == '') {
            $(this).val('Tìm kiếm');
        }
    });</script>
                        </div>
                    </div>




                </div>
                <div id="content" class="clearfix">
                    <div id="col-left">

                        <div class="box-head"><a href="/" target="_self">Các Dịch Vụ Chính</a></div>
                        <ul id="left-menu" class="menu">
                        <?php 
                        foreach($list_dv as $dich_vu_)
                        {
                        ?>
                            <li><a href="<?php echo base_url();?>dich-vu/<?php echo $dich_vu_['id']?>/<?php echo mb_strtolower(url_title(removesign($dich_vu_['name'])))?>" target="_self"><?php echo $dich_vu_['name']?></a></li>
                         <?php } ?>   
                        <script type="text/javascript"> $('li:last-child').addClass("last");</script>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                var listChk = [];
                                var catid = "0";
                                $("input[name='checksub']").click(function() {
                                    var le = $(this).val()
                                    if (this.checked == true) {
                                        listChk.push($(this).val());
                                        $("input.box" + le).attr("checked", true);
                                    }
                                    else {
                                        $("input.box" + le).attr("checked", false);
                                        var removeitem = $(this).val();
                                        listChk = $.grep(listChk, function(value) {
                                            return value != removeitem;
                                        });
                                    }

                                    $("#load").load("/search_results.aspx?attid=" + listChk + "&cat=" + catid);

                                });
                            });
                        </script>


                        <div class="box-head">Hình ảnh</div> <div class="box-body center">
                        <?php 
                       
                        foreach($list_img as $img)
                        {
                           
                            if(file_exists($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/slide/'.$img['img']))
                            {
                                
                        ?>
                            <a href="#" target="_self" title="Quảng cáotrái">
                                <img alt="Quảng cáotrái" src="<?php echo base_url();?>file/uploads/slide/<?php echo $img['img']?>"  width="190" height="200" />
                            </a>
                            
                        <?php }} ?>
                        </div> 

                        <div class="box-head head1">Mạng xã hội</div>
                        <div class="box-body center" style="padding-top:5px;">
                            <div id="histats_counter"></div>
                                <g:plusone></g:plusone><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fvantaiviettien.com&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                        </div>


                    </div>
                    <div id="col-mid">
                        <div id="slider-wrapper" style="width: 580px; height: 250px;"><div id="slider" class="nivoSlider" style="width: 580px; height: 250px;"><a title="slide1" href="#" target="_blank"><img width="580px" height="250" src="<?php echo base_url();?>file/uploads/slide/nguy-co-pha-san-van-tai.png.jpg" alt="slide1" /></a><a title="slide2" href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/slide/oto3.jpg" alt="slide2" /></a><a title="Slide3" href="#" target="_self"><img src="<?php echo base_url();?>file/uploads/slide/vantai.jpg" alt="Slide3" /></a><a title="slide4" href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/slide/van-tai-hang-hoa_1.jpg" alt="slide4" /></a><a title="slide5" href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/slide/van-tai-noi-dia_1.jpg" alt="slide5" /></a></div></div><script type="text/javascript">$('#slider').nivoSlider();</script>

                    <?php echo $this->load->view($main_content);?>
                    <div id="col-right">

                        <div class="box-head">Hỗ trợ trực tuyến</div>
                        <div class="box-body">
                        <div class="online"><img src="<?php echo base_url();?>file/uploads/customer_support_banner_1.jpg"/>
                        <div class="onname1">Holine</div>
                        <div class="nickName"></div><div class="ontel">0313.987.979 - 0313.987.279</div></div>
                        </div>




                        <div class="box-head">Tin mới</div>
                        <div class="box-body">
                        <?php 
                        foreach($tin_tuc_home as $news_home)
                        {
                        ?>
                            <div class="news-item">
                                <a title="<?php echo $news_home['name']?>" href="<?php echo base_url();?>bai-viet/<?php echo $news_home['id']?>/<?php echo mb_strtolower(url_title(removesign($news_home['name'])))?>">
                                    <img src="<?php echo base_url();?>file/uploads/post/<?php echo $news_home['file']?>" align="left" alt="<?php echo $news_home['name']?>" /></a>
                                <a title="<?php echo $news_home['name']?>" href="<?php echo base_url();?>bai-viet/<?php echo $news_home['id']?>/<?php echo mb_strtolower(url_title(removesign($news_home['name'])))?>"><?php echo $news_home['name']?></a>
                            </div>
                         <?php 
                         }
                         ?>   
                        </div>


                        <div class="box-head">Đối tác</div><div class="box-body center">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();"><a href="http://www.facebook.com/ezwebvietnam" target="__bkank"><img src="http://ninhbinhcoop.com/file/uploads/doitac/article3.jpg"></a><a href="https://www.facebook.com/htxvtninhbinh" target="__bkank"><img src="http://ninhbinhcoop.com/file/uploads/doitac/article4.jpg"></a><a href="http://huuhungpapers.com" target="__bkank"><img width="236" height="58" src="http://huuhungpapers.com/image/banner.jpg"></a></marquee>
                        </div>



                    </div>
                    
                </div>
            </div>

            <div id="menu-bottom" class="clearfix"><div class="menu-bottom">
                    <ul class="clearfix">

                    </ul></div></div>


            <div id="footer">
                <div class="footer"><h3><span style="color:#0000CD"><span style="font-size:16px">CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN <br /> Địa chỉ: Thôn 8 Viên Lang, Xã Việt Tiến, Huyện Vĩnh Bảo, TP. Hải Phòng<br />Điện thoại:0313.987.979 - 0313.987.279 </span></h3>

                    <h3>&nbsp;</h3>

                    <h3><span style="color:#0000CD">&nbsp; &nbsp; &nbsp;</span></h3>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                </div>

            </div><div id="divAdvLeft"></div><div id="divAdvRight"></div><div style="display:block!important;margin: 0 auto 10px auto;width:1000px;margin-top:-36px;text-align:right;color:#ffffff;">Designed by <a style="display:inline!important;" href="http://www.facebook.com/ezwebvietnam" target="_blank" title="Thiết kế website">EZ Web Việt Nam</a></div>
        <script type="text/javascript">        $(document).ready(function() {
            $("#menu_mid li, #left-menu li").hover(function() {
                $(this).find('ul:first').css({visibility: "visible", display: "none"}).show(200);
            }, function() {
                $(this).find('ul:first').css({visibility: "hidden"});
            });
            $('#slider').nivoSlider();
        });
        $(".contentpro img").each(function() {
            $(this).parents("a").lightBox();
        });
        $('.box-body').find('div:last').addClass("last");</script>
    </body>
</html>

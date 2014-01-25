
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title><?php echo $title?></title>
    <meta name="description" content="<?php echo $title;?>" />
    <meta name="keywords" content="<?php echo $title;?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?1037" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/News.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tools.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/doolv3.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
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
    <div id="b_left" style="left:90px" ><img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/Images/Dool_qc_100x300.jpg" /></div>
    <div id="b_right" style="right:90px"  ><img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/Images/Dool_qc_100x300.jpg" /></div>
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
            <span id="logo"><a href="<?php echo base_url();?>" title="Về trang chủ DCBLand.COM">DCBLand.COM</a></span>
            <?php include('header_.php');?>
            
        </div>
    </div>
    <div id="content_container">
        
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/normalize.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        $(function () {
            $('.body img').each(function () {
                var maxWidth = 440;
                var ratio = 0;
                var img = $(this);
                if (img.css("width") > maxWidth) {
                    img.css("width", maxWidth)
                }
                if (img.width() > maxWidth) {
                    ratio = img.height() / img.width();
                    img.attr('width', maxWidth);
                    img.attr('height', (maxWidth * ratio));
                }
            });
            $('.news-content table').each(function () {

                var tbl = $(this);
                if (tbl.attr("border") == "1") {
                    tbl.addClass('bor');
                }
                $()
            });

        });
    </script>
    <div class="wrap">


        <div class="col_180">
            <div class="menu_col_left">
            <?php 
            foreach($left_menu as $menu_left)
            {
            ?>
<div class="margin_bottom" style="clear:both;display:table;">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <div class="TL"></div>
        <div class="TR"></div>
        <div class="BL"></div>
        <div class="BR"></div>
        <h2 class="headline"><a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($menu_left['cate_parent']['name']))); ?>-c<?php echo $menu_left['cate_parent']['id'] ?>"><span><?php echo $menu_left['cate_parent']['name']?></span></a></h2>
    </div>
    <div class="headline_title_2 rounded_box">
    <ul>
            <?php 
            foreach($menu_left['cate_sub'] as $k=>$cate_sub)
            {
            ?>
            <li id="c_<?php echo $k?>" ><a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($cate_sub)));?>-c<?php echo $k?>"><?php echo $cate_sub?></a></li>
            <?php } ?>
    </ul>
    </div>
</div>
<?php } ?>


            </div>
            <div id="left_search" class="rounded_style_1 rounded_box margin_bottom">
                    <script type="text/javascript">
        $(function () {
            $("#FormSearch").submit(function () {
                if ($('#KeySearch').val().trim().length <= 2) {
                    $('#KeySearch').focus();
                    return false;
                } else {
                    return true;
                }
            });
        });
    </script>
<div class="body">
    <form action="/tin-tuc/tim-kiem" id="FormSearch" method="post" class="form_style_1">
    <fieldset>
        <div class="business_search_type margin_bottom_form">
            <input type="text" class="input_text" value="" id="KeySearch" name="KeySearch" placeholder="Nhập từ khóa cần tìm"/>
            <button type="submit" name="Submit" id="Submit" class="btn_2"><span>TÌM KIẾM</span></button>
        </div>
    </fieldset>
    </form>
</div>
            </div>
    <div class="asset-spec-left margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <span>TÀI SẢN MỚI NHẤT</span></h2>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <ul class="listing_1">
                <?php 
                foreach($tai_san_noi_bat_khac as $ts_nb)
                {
                ?>
                        <li><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($ts_nb['loai_dia_oc'])))?>-c<?php echo $ts_nb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($ts_nb['title'])))?>-h<?php echo $ts_nb['id']?>" >
                             <h2>
                             <?php 
                             if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$ts_nb['code'].'/'.$ts_nb['img']))
                             {
                             ?>
                             <img src="<?php echo base_url();?>file/uploads/property/<?php echo $ts_nb['code']?>/<?php echo $ts_nb['img']?>" style="float:left; margin-right:5px;" width="45" height="45" alt="<?php echo $ts_nb['title']?>" title="<?php echo $ts_nb['title']?>" />
                             <?php } ?>
                                   <?php echo $ts_nb['title']?></h2></a>
                        </li>
                 <?php } ?>       
                </ul>
            </div>
        </div>
    </div>
            <div class="banner_180">
                <h2>
                    Quảng cáo</h2>


            </div>
        </div>
        <?php echo $this->load->view($main_content);?>
        <div class="col_300 margin_left">



<div id="position_62" class ='banner_300x250'><div><embed height="250" width="300" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2013/11/11/BD9-smilescard_300x250.swf?clicktag=http://www.diaoconline.vn/quangcao/361/62"/></div><div><embed height="250" width="300" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2013/11/11/BD9-smilescard_300x250.swf?clicktag=http://www.diaoconline.vn/quangcao/361/62"/></div></div><script type='text/javascript'>var Banner62=1;function Random_Banner62(){    var _Arr=document.getElementById("position_62").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner62 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner62 - 1]).html(); $(_Arr[Banner62 - 1]).html(''); $(_Arr[Banner62 - 1]).html(tempBanner);    window.setTimeout("Random_Banner62()" ,25000);    Banner62 = Banner62 + 1;    if(Banner62 > _Arr.length)        Banner62 = 1;}Random_Banner62();</script>
            

    
<div id="law_advisory" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline"><a href="<?php echo base_url();?>tin-tuc-c/cafe-luat-c15"><span>TƯ VẤN CAFE LUẬT</span></a></h2>
        <a href="<?php echo base_url();?>tin-tuc-c/cafe-luat-c15" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="body">
			<ul class="listing_1">
            <?php 
            $i = 1;
            foreach($list_cafe_law as $cafe_law)
            {
                if($i == 1)
                {
            ?>
                    <li >
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cafe_law['name'])))?>-c<?php echo $cafe_law['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($cafe_law['title'])));?>-i<?php echo $cafe_law['id_new']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$cafe_law['img']))
                        {
                        ?>
                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $cafe_law['img']?>" alt="<?php echo $cafe_law['title']?>" width="80" height="61" class="img-left"/>
                        <?php } ?>
                         <?php echo $cafe_law['title']?></a></li>
            <?php } else { ?> 
             <li >
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cafe_law['name'])))?>-c<?php echo $cafe_law['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($cafe_law['title'])));?>-i<?php echo $cafe_law['id_new']?>">
                         <?php echo $cafe_law['title']?></a></li>
            <?php }$i++;} ?>
                    
            </ul>
        </div>
    </div>
</div><div id="fengsui_advisory" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline">
        <a href="<?php echo base_url();?>kham-pha-c/phong-thuy-c4"><span>Phong Thủy</span></a></h2>
        <a href="<?php echo base_url();?>kham-pha-c/phong-thuy-c4" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="body">
			<ul class="listing_1">
                    <?php 
                    foreach($list_phong_thuy as $phong_thuy)
                    {
                    ?>
                    <li >
                        <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($phong_thuy['name'])))?>-c<?php echo $phong_thuy['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($phong_thuy['title'])))?>-i<?php echo $phong_thuy['id_disco']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$phong_thuy['img']))
                        {
                        ?>
                        <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $phong_thuy['img']?>" alt=<?php echo $phong_thuy['title']?>" width="80" height="61" class="img-left"/>
                        <?php } ?>
                         <?php echo $phong_thuy['title']?></a></li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</div>             
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
<script>
$(function() {
    var parent_id = ''+<?php 
    $a =  str_replace('-','_',$this->uri->segment(2));
    $b = explode('_',$a);
    $count = count($b);
    $c = $b[$count-1];
    echo $c = str_replace('c','',$c);
    ?>;
    if(parent_id!='')
    {
            $('#c_'+parent_id).attr("class","actived");
     }   
    });
</script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?1037" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>
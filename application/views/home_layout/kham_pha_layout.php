
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Trải nghiệm Khám phá các mẫu nhà đẹp tại Địa Ốc Trực Tuyến - DCBLand.COM - DCBLand.COM</title>
    <meta name="description" content="Trải nghiệm Khám phá các mẫu nhà đẹp tại Địa Ốc Trực Tuyến - DCBLand.COM" />
    <meta name="keywords" content="thế giới kiến trúc, mách bạn, phong thủy nhà ở, phong thủy nhà bếp, không gian sống của người nổi tiếng, không gian sống hiện đại, nhà của sao, những thương hiệu nổi tiếng, địa chỉ shopping, phong thủy xây nhà" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0038" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Discovery.css" rel="stylesheet" type="text/css" />
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
    <div id="b_left" style="left:90px">

<div id="position_64" class =''>

<?php 
if(empty($vi_tri_1))
{
    ?> 
    
    <?php 
}
else
{
    $i=1;
    foreach($vi_tri_1 as $vt_1)
    {
        if($i==1)
        {
?>
<div class="bannerShow">
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerHide">
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px"></a>
</div>
<?php } $i++;}} ?>
</div><script type='text/javascript'>var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>

<div id="position_65" class =''>
<?php 
if(empty($vi_tri_2))
{
?>
<?php
} else {
    $i=1;
    foreach($vi_tri_2 as $vt_2)
    {
        if($i==1)
        {
?>
<div style="margin-top:5px" class="bannerShow"><a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div style="margin-top:5px" class="bannerHide"><a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner65=1;function Random_Banner65(){    var _Arr=document.getElementById("position_65").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner65 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner65 - 1]).html(); $(_Arr[Banner65 - 1]).html(''); $(_Arr[Banner65 - 1]).html(tempBanner);    window.setTimeout("Random_Banner65()" ,25000);    Banner65 = Banner65 + 1;    if(Banner65 > _Arr.length)        Banner65 = 1;}Random_Banner65();</script>
    </div>
    <div id="b_right" style="right:90px">

<div id="position_66" class =''>
<?php 
if(empty($vi_tri_3))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_3 as $vt_3)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

<div id="position_67" class =''>

<?php 
if(empty($vi_tri_4))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_4 as $vt_4)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
    </div>
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
            <?php include('header_.php');?>
            
        </div>
    </div>
    <div id="content_container">
        
    <div class="wrap">


        <div class="wrap">
            <div class="col_650  margin_bottom">
                    <div id="slider" class="margin_bottom">
                            <?php 
                            $i = 1;
                            $count = count($slide_discovery);
                            foreach($slide_discovery as $slide)
                            {
                                if($i==$count)
                                {
                            ?>
                            <div class="block_slider">
                            <?php } else {?> 
                            <div class="block_slider last">
                            <?php } ?>
                                <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($slide['name'])))?>-c<?php echo $slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($slide['title'])))?>-i<?php echo $slide['id_disco']?>">
                                <?php 
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$slide['img']))
                                {
                                ?>
                                <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $slide['img']?>" width="320" height="200" alt="<?php echo $slide['title']?>" />
                                <?php } ?>
                                </a>
                                <div class="description">
                                    <h2><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($slide['name'])))?>-c<?php echo $slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($slide['title'])))?>-i<?php echo $slide['id_disco']?>"><?php echo $slide['title']?></a></h2>
                                </div>
                            </div>
                            <?php $i++;} ?>
                    </div>
               
                <?php 
                foreach($main['cate_sub'] as $k=>$_cate)
                {
                ?>
                    <div id="arch_world" class="margin_bottom">
                        <div class="headline_title_1 rounded_style_5 rounded_box">
                            <h2 class="headline">
                                <a href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($_cate)))?>-c<?php echo $k?>"><span><?php echo $_cate?></span></a></h2>
                                <a href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($_cate)))?>-c<?php echo $k?>" class="grey_link">
                                Xem thêm</a>
                        </div>
                        <div class="rounded_style_2 rounded_box">
                            <div class="body">
                            <?php foreach($main['list_new'][$k] as $new)
                            {?>
                                    <div class="block_1">
                                        <div class="img">
                                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($new['name'])))?>-c<?php echo $new['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new['title'])))?>-i<?php echo $new['id_disco']?>">
                                                <?php 
                                                if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$new['img']))
                                                {
                                                ?>
                                                <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $new['img']?>" width="200" height="125" alt="<?php echo $new['title']?>"/>
                                                <?php } ?>
                                                </a></div>
                                        <div class="content">
                                            <h2>
                                                <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($new['name'])))?>-c<?php echo $new['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new['title'])))?>-i<?php echo $new['id_disco']?>"><?php echo $new['title']?></a></h2>
                                            <span class="updated_date">Cập nhật: <?php echo date('d/m/Y h:i',$new['create_date'])?></span><br />
                                            <p><?php echo sub_string(loaibohtmltrongvanban($new['content']),100);?></p>
                                        </div>
                                    </div>
                               <?php } ?>  
                                    
                            </div>
                        </div>
                    </div>
                   <?php } ?>
            </div>
            <div class="col_300 margin_left">


    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/house_star.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(window).load(function () {

            $('#hstarslider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
   
    <div id="star_house" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <div class="TL">
            </div>
            <div class="TR">
            </div>
            <div class="BL">
            </div>
            <div class="BR">
            </div>
            <h2 class="headline">
                <span>NHÀ CỦA SAO</span></h2>
            <a href="/kham-pha/nha-cua-sao-c76" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="TL">
            </div>
            <div class="TR">
            </div>
            <div class="BL">
            </div>
            <div class="BR">
            </div>
            <div class="content">
                <div class="img_galery">
                    <div id="hstarslider" class="flexslider">
                        <ul class="slides">
                        <?php 
                        foreach($nha_dep_cua_sao as $nha_cua_sao)
                        {
                        ?>
                                <li><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($nha_cua_sao['name'])))?>-c<?php echo $nha_cua_sao['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_cua_sao['title'])))?>-i<?php echo $nha_cua_sao['id_disco']?>">
                                <?php 
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$nha_cua_sao['img']))
                                { ?>
                                <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $nha_cua_sao['img']?>" alt="<?php echo $nha_cua_sao['title']?>" style="width:290px;height:200px;" />
                                <?php }
                                ?>
                                    </a>
                                    <div class="housetitle">
                                        <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($nha_cua_sao['name'])))?>-c<?php echo $nha_cua_sao['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_cua_sao['title'])))?>-i<?php echo $nha_cua_sao['id_disco']?>">
                                        <?php echo $nha_cua_sao['title']?>
                                        </a>
                                    </div>
                                </li>
                         <?php } ?>      
                        </ul>
                        <div class="housebor">
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/house_outstanding.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
     <script type="text/javascript">

         $(window).load(function () {
           
             $('#houseslider').flexslider({
                 animation: "slide",
                 controlNav: false,
                 animationLoop: true,
                 slideshow: true,
                 start: function (slider) {
                     $('body').removeClass('loading');
                 }
             });
         });
  </script>
<div id="house_collection">
    <div class="rounded_style_2 rounded_box">
        <div class="content">
            <h3>Bộ sưu tập nhà đẹp</h3>
            <div id="houseslider" class="flexslider">
                <ul class="slides">
                    <?php 
                    foreach($nha_dep as $l_nha_dep)
                    {
                    ?>
                    <li>
                        <div class="houseimg">
  	    	            <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($l_nha_dep['name'])))?>-c<?php echo $l_nha_dep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($l_nha_dep['title'])))?>-i<?php echo $l_nha_dep['id']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$l_nha_dep['code'].'/'.$l_nha_dep['img']))
                        {
                        ?>
                          <img src="<?php echo base_url();?>file/uploads/nhadep/<?php echo $l_nha_dep['code']?>/<?php echo $l_nha_dep['img']?>" alt="0" />
                          <?php } ?>
                          </a>
                        </div>
                        <div class="housetitle"><a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($l_nha_dep['name'])))?>-c<?php echo $l_nha_dep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($l_nha_dep['title'])))?>-i<?php echo $l_nha_dep['id']?>"><?php echo $l_nha_dep['title']?></a></div>
  	    		    </li>
                   <?php } ?> 
                </ul>
                 <div class="housebor"><ul><li></li></ul></div>
            </div>
        </div>
    </div>
</div><div id="business_brand" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline">
        <a href="<?php echo base_url();?>kham-pha-c/thuong-hieu-c6"><span>Thương Hiệu</span></a></h2>
        <a href="<?php echo base_url();?>kham-pha-c/thuong-hieu-c6" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="content">
			<ul class="listing_5">
            <?php 
            foreach($list_thuong_hieu as $thuong_hieu)
            {
            ?>
                    <li >
                        <div class="img">
                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($thuong_hieu['name'])))?>-c<?php echo $thuong_hieu['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($thuong_hieu['title'])))?>-i<?php echo $thuong_hieu['id_disco']?>">
                            <?php 
                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$thuong_hieu['img']))
                            {
                            ?>
                                <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $thuong_hieu['img']?>" width="80" height="62" alt="<?php echo $thuong_hieu['title']?>" />
                                <?php } ?>
                                </a></div>
                        <div class="right">
                            <h2><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($thuong_hieu['name'])))?>-c<?php echo $thuong_hieu['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($thuong_hieu['title'])))?>-i<?php echo $thuong_hieu['id_disco']?>"><?php echo $thuong_hieu['title']?></a></h2>
                            <span class="updated_date">Cập nhật: <?php echo date('d/m/Y h:i',$thuong_hieu['create_date'])?></span>
                        </div>
                    </li>
             <?php } ?>       
            </ul>
        </div>
    </div>
</div>            </div>
<div id="shopping" class="wrap margin_bottom">
    <div class="rounded_style_4 rounded_box">
        <div class="content">
            <div class="top">
                <h2 class="headline"><a href="<?php echo base_url();?>kham-pha-c/shopping-cung-dcb-house-c7"><span>Shopping Cùng DCB House</span></a></h2>
                
            </div>
            <div class="show">
                <ul>
                <?php 
               
                foreach($list_shopping as $list_shop)
                {
                ?>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_shop['name'])))?>-c<?php echo $list_shop['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_shop['title'])))?>-i<?php echo $list_shop['id_disco']?>">
                            <?php 
                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$list_shop['img']))
                            {
                            ?>
                            <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $list_shop['img']?>" width="160" height="124" alt="<?php echo $list_shop['title']?>"/>
                            <?php } ?>
                            </a>
                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_shop['name'])))?>-c<?php echo $list_shop['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_shop['title'])))?>-i<?php echo $list_shop['id_disco']?>"><?php echo $list_shop['title']?></a> 
	                    </div>
                    </li>
                 <?php } ?>   
                </ul>
            </div>
        </div>    
    </div>
    <p class="note"></p>
</div>
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0038" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>
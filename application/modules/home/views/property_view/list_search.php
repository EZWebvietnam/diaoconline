<style>
.rounded_style_10000 {
background: #F7FCBD !important;
}
</style>
<div class="col_600 margin_left">
                <div id="result" class="margin_bottom">
                    <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <ul class="headline_tab">
                                    <li id="all"><a href="<?php echo base_url();?>sieu-thi"><span>TÀI SẢN ĐANG GIAO DỊCH</span></a></li>
                                    <li id="chinhchu"><a href="<?php echo base_url();?>sieu-thi/chinh-chu"><span>TÀI SẢN CHÍNH CHỦ</span></a></li>
                                    <li id="nhasv"><a href="<?php echo base_url();?>sieu-thi/nha-tro"><span>Nhà trọ sinh viên</span></a></li>
                            
                        </ul>
                    </div>
                      <div class="rounded_style_2 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="content">
                            <p>
                            </p><h1 class="title">Theo kết quả vừa tìm có:</h1>
                                    <label class="title"> có <?php echo $total;?> tài sản cùng loại địa ốc bạn của tài sản bạn vừa xem
                                    </label><p></p>
                                
                        </div>
                    </div>
                </div>
                <div id="show_result">
                    <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                        <div class="content">
                            <div id="search_result">
                                
                            </div>
                            <div class="paging_2">
                                <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail_cate[0]['name'])))?>-c<?php echo $detail_cate['id']?>',<?php echo $total_page?>));
    });
</script>

                            </div>
                        </div>
                    </div>
                    <div>
    <div class="breadcrumb">
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>sieu-thi" itemprop="url" title="Siêu thị địa ốc"><span itemprop="title">Siêu thị địa ốc</span></a>
            </div>
    </div>
                </div>
                    <div id="result_block">
                            <ul>
                            <?php 
                            foreach($list as $list_property)
                            {
                                switch($list_property['goi_giao_dich'])
                                {
                                    case 1: 
                                    {
                                        $class="hightlight_type_1 margin_bottom";
                                        $round = "rounded_style_2 rounded_box";
                                        $rate = "<div class='rate'>
                                                    <ul>
                                                        <li>1 rated</li>
                                                        <li>2 rated</li>
                                                        <li>3 rated</li>
                                                    </ul>
                                                </div>";
                                        $title = "class='a-red'";
                                        break;
                                    }
                                    case 3:
                                    {
                                       $class="hightlight_type_2 margin_bottom";
                                        $round ="rounded_style_10000 rounded_box";
                                        $rate = "<div class='rate'>
                                                    <ul>
                                                        <li>1 rated</li>
                                                        <li>2 rated</li>
                                                        <li>3 rated</li>
                                                    </ul>
                                                </div>";
                                        $title = "class='a-red'";
                                        break;
                                    }
                                    case 2:
                                    {
                                        $class="hightlight_type_2 margin_bottom";
                                        $round ="rounded_style_10 rounded_box";
                                        $rate = "<div class='rate'>
                                                    <ul>
                                                        <li>1 rated</li>
                                                        <li>2 rated</li>
                                                        <li>3 rated</li>
                                                    </ul>
                                                </div>";
                                         $title = "";
                                        break;
                                    }
                                    case 0:
                                    {
                                        $class="hightlight_type_1 margin_bottom";
                                        $round ="rounded_style_2 rounded_box";
                                        $rate = "";
                                        $title = "";
                                        break;
                                    }
                                }
                            ?>
                                    <li class="<?php echo $class?>">
                                        <div class="<?php echo $round;?>"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div><?php echo $rate?>
                                            <div class="content">
                                                <div class="img">
                                                    <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($list_property['loai_dia_oc'])))?>-c<?php echo $list_property['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($list_property['title'])))?>-h<?php echo $list_property['id']?>">
                                                        <?php 
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$list_property['code'].'/'.$list_property['img']))
                                                        {
                                                        ?>
                                                        <img src="<?php echo base_url();?>file/uploads/property/<?php echo $list_property['code'] ?>/<?php echo $list_property['img']?>" width="150" height="150" alt="<?php echo $list_property['title']?>">
                                                        <?php } else {?> 
                                                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="150" height="150" alt="<?php echo $list_property['title']?>">
                                                        <?php }?>
                                                        </a>
                                                </div>
                                                <div class="info margin_left">
                                                    <h2>
                                                        <a <?php echo $title?> href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($list_property['loai_dia_oc'])))?>-c<?php echo $list_property['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($list_property['title'])))?>-h<?php echo $list_property['id']?>"><?php echo $list_property['title']?></a></h2>
                                                    <span class="location">Vị trí: 
                                                        <?php echo $list_district[$list_property['id_district']]?>, 
                                                        <?php echo $list_city[$list_property['id_city']]?></span>
                                                    <div class="features">
                                                        <ol>
                                                                <li>- Đặc điểm: <?php echo $list_property['vi_tri_dia_oc']?></li>
                                                                <li>- Diện tích: <?php echo $list_property['dien_tich']?></li>
                                                                <li>- Tình trạng: <?php echo $list_property['tinh_trang_phap_ly']?></li>
                                                        </ol>
                                                    </div>
                                                    <div class="active_tool_border active_tool_asset">
                                                        <div class="active_tool rounded_style_2 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                                                            <div class="content">
                                                                <ul>
                                                                    
                                                                    <li><span class="ico_16 ico_arrow_16"></span><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($list_property['loai_dia_oc'])))?>-c<?php echo $list_property['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($list_property['title'])))?>-h<?php echo $list_property['id']?>">
                                                                        Xem chi tiết</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right margin_left">
                                                    <div class="content">
                                                        <span class="property_code">Mã số tài sản: <strong><?php echo $list_property['code']?></strong></span><br>
                                                        <span class="post_type">Cập nhật: <?php echo date('d/m/Y h:i',$list_property['create_date'])?></span><br>
                                                        <div class="price">
                                                            <p>Giá cho thuê:<br><strong><?php 
                                                            if(is_numeric($list_property['price']))
                                                            {
                                                            echo bd_nice_number($list_property['price']);
                                                            }
                                                            else
                                                            {
                                                                echo $list_property['price'];
                                                            }?></strong></p>
                                                        </div>
                                                        <div class="contact_info">
                                                                <p>Liên hệ:<br>
                                                                    <strong><?php echo $list_property['full_name']?></strong><br>
                                                                    <span><?php echo $list_property['phone']?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>         
                                  <?php } ?>  
                                      
                            </ul>
                    </div>
                    <div class="paging_2">
                        <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($detail_cate[0]['name'])))?>-c<?php echo $detail_cate['id']?>',<?php echo $total_page?>));
    });
</script>

                    </div>
                </div>
            </div>
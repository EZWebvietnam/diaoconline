
<div class="col_460 margin_left margin_bottom">
            <div id="news_listing" class="news_form margin_bottom">
                <div class="headline_title_1 rounded_style_5 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <h2 class="headline">
                        <span>Thị trường địa ốc</span></h2>
                    <div class="paging_2">
                        <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page?>, <?php echo $total?>, '<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($detail[0]['name'])))?>-c<?php echo $detail[0]['id']?>',<?php echo $total_page?>));
    });
</script>

                    </div>
                </div>
                <div>
    <div class="breadcrumb">
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="#" itemprop="url" title="Thông tin Địa ốc"><span itemprop="title">Thông tin Địa ốc</span></a>
»            </div>
            <?php 
            if(!empty($cate_parent))
            {
            ?>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($cate_parent[0]['name']))) ?>-c<?php echo $cate_parent[0]['id']?>" itemprop="url" title="<?php echo $cate_parent[0]['name']?>"><span itemprop="title"><?php echo $cate_parent[0]['name']?></span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($detail[0]['name']))) ?>-c<?php echo $detail[0]['id']?>" itemprop="url" title="<?php echo $detail[0]['name']?>"><span itemprop="title"><?php echo $detail[0]['name']?></span></a>
            </div>
            <?php } else {?> 
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($detail[0]['name']))) ?>-c<?php echo $detail[0]['id']?>" itemprop="url" title="<?php echo $detail[0]['name']?>"><span itemprop="title"><?php echo $detail[0]['name']?></span></a>
»            </div>
            <?php } ?>
    </div>
                </div>
                <div class="rounded_style_2 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                    <div class="body">
<ul>
                                <?php 
                                foreach($list as $new)
                                {
                                ?>
                                    <li>
                                        <div class="wrapper">
                                            <div class="img">
                                                <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new['name'])))?>-c<?php echo $new['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new['title'])))?>-i<?php echo $new['id_new']?>">
                                                <?php 
                                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$new['img']))
                                                {
                                                ?>
                                                    <img src="<?php echo base_url();?>file/uploads/news/<?php echo $new['img']?>" width="130" height="100" alt="<?php echo $new['title']?>">
                                                    <?php } ?>
                                                    </a></div>
                                                
                                            <div class="news_info">
                                                <h2>
                                                    <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new['name'])))?>-c<?php echo $new['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new['title'])))?>-i<?php echo $new['id_new']?>"><?php echo $new['title']?></a></h2>
                                                <span class="updated_date">Cập nhật 17 phút trước</span><br>
                                                <p><?php echo sub_string(loaibohtmltrongvanban($new['content']),185);?> ...</p>
                                            </div>
                                        </div>
                                    </li>
                                 <?php } ?> 
                                    
                                    
                                    
                            </ul>
                    </div>
                </div>
            </div>
            <div class="paging_2">
                <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page?>, <?php echo $total?>, '<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($detail[0]['name'])))?>-c<?php echo $detail[0]['id']?>',<?php echo $total_page?>));
    });
</script>

            </div>
        </div>

<div class="col_460 margin_left margin_bottom">
                <div class="rounded_style_2 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
    <div class="breadcrumb">
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>kham-pha" itemprop="url" title="Khám phá"><span itemprop="title">Khám phá</span></a>
»            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url()?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($detail[0]['name'])))?>-c<?php echo $detail[0]['id']?>" itemprop="url" title="<?php echo $detail[0]['name']?>"><span itemprop="title"><?php echo $detail[0]['name']?></span></a>
            </div>
    </div>
                    <div class="body">
                            <div id="hotline_discover" class="margin_bottom">
                            <?php 
                            if(isset($list[0]))
                            {
                            ?>
                                <div>
                                    <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list[0]['name'])))?>-c<?php echo $list[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list[0]['title'])))?>-i<?php echo $list[0]['id_disco']?>">
                                    <?php 
                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$list[0]['img']))
                            {
                            ?>
                                        <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $list[0]['img']?>" width="438" height="270" alt="<?php echo $list[0]['title']?>">
                                        <?php } ?>
                                        </a></div>
                                <div class="headline">
                                    <h2>
                                        <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list[0]['name'])))?>-c<?php echo $list[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list[0]['title'])))?>-i<?php echo $list[0]['id_disco']?>"><?php echo $list[0]['title']?></a></h2>
                                    <span>Cập nhật: <?php echo date('d/m/Y h:i',$list[0]['create_date'])?></span>
                                </div>
                            <?php } ?>
                            </div>
                            <div id="discover_list">
                                <div class="headline_title_1 rounded_style_5 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                                    <h2 class="headline">
                                        <span>CÁC TIN KHÁC</span></h2>
                                    <div class="paging_2">
                                        <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(1, <?php echo $total;?>, '/kham-pha/mach-ban-c6',<?php echo $total_page?>));
    });
</script>

                                    </div>
                                </div>
                                <ul>
                                <?php 
                                
                                $i = 1;
                                $count = count($list);
                                for($i=1;$i<=$count;$i++)
                                {
                                    if(isset($list[$i]))
                                    {
                                ?>
                                        <li>
                                            <div class="block_2">
                                                <div class="img">
                                                    <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list[$i]['name'])))?>-c<?php echo $list[$i]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list[$i]['title'])))?>-i<?php echo $list[$i]['id_disco']?>">
                                                         <?php 
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$list[$i]['img']))
                                                        {
                                                        ?>
                                                        <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $list[$i]['img']?>" width="170" height="128" alt="6 cách tạo góc làm việc tại gia">
                                                         <?php } ?>
                                                        </a></div>
                                                <div class="content">
                                                    <h2>
                                                        <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list[$i]['name'])))?>-c<?php echo $list[$i]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list[$i]['title'])))?>-i<?php echo $list[$i]['id_disco']?>"><?php echo $list[$i]['title']?></a></h2>
                                                    <span class="updated_date">Cập nhật: <?php echo date('d/m/Y',$list[$i]['create_date'])?></span><br>
                                                    <p><?php echo sub_string(loaibohtmltrongvanban($list[$i]['content']),227);?></p>
                                                </div>
                                            </div>
                                        </li>
                                 <?php } }?>     
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="paging_2 margin_bottom">
                    <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(1, <?php echo $total?>, '/kham-pha/mach-ban-c6',<?php echo $total_page?>));
    });
</script>

                </div>
            </div>
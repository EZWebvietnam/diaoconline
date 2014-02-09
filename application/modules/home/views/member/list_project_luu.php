<div class="col_790 margin_left">
              <div id="propertise_displaying" class="box">
              	<div class="headline_11">
                    <div class="headline_title_1">
                        <h2>TIN TỨC ĐÃ LƯU (<span class="ItemTotal"><?php echo $total;?></span>)
                            <div class="paging_2">
                                <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>thanh-vien/du-an-da-luu',<?php echo $total_page?>));
    });
</script>

                            </div>
                        </h2>
                    </div>
                </div>
                
                <div class="body">
 					<div class="propertise_list saved_management">
                    	<ul>
                            <?php 
                            $i=1;
                                foreach($list as $item)
                                {
                                    if($i%2 == 0)
                                    {
                            ?>
                            <li class="last" id="item_<?php echo $item['id_pro']?>">
                            <?php } else {?> 
                            <li id="item_<?php echo $item['id_pro']?>">
                            <?php } ?>
                             	<div class="short_info">
                                   	<div class="img"><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($item['name'])))?>-c<?php echo $item['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($item['title'])))?>-i<?php echo $item['id_pro']?>">
                                    <?php 
                                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$item['img']) && $item['img']!='')
                                    {
                                    ?>
                                        <img src="<?php echo base_url();?>file/uploads/project/<?php echo $item['img']?>" width="75" height="75" alt="<?php echo $item['title']?>"/></a>
                                    <?php } else {?> 
                                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $item['title']?>"/>
                                    <?php } ?>
                                    </div>
                                    <div class="text">
                                        <h4><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($item['name'])))?>-c<?php echo $item['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($item['title'])))?>-i<?php echo $item['id_pro']?>"><?php echo $item['title']?></a></h4>
                                        <span class="updated_date">Ngày lưu:<?php echo date('d/m/Y h:i',$item['ngay_luu'])?></span>
                                        </div>
                                </div>
                                <div class="remove"><a href="javascript:void(0)" onclick="DeleteDataSaved('<?php echo base_url();?>xoa-project-luu/k/<?php echo $item['id_save'] ?>','<?php echo base_url();?>thanh-vien/tin-da-luu/tai-san','#item_<?php echo $item['id_pro']?>')" title="Xóa tin lưu"><span class="ico_remove_11"></span></a></div>
                            </li>
                                <?php $i++;} ?>
                       </ul>
                    </div>
                </div>
                <div class="paging_2">
                    <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>thanh-vien/du-an-da-luu',<?php echo $total_page?>));
    });
</script>

                </div>
              </div>
            </div>
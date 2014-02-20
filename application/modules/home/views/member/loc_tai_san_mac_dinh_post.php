<?php 

function full_url($s)

{

    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;

    $sp = strtolower($s['SERVER_PROTOCOL']);

    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');

    $port = $s['SERVER_PORT'];

    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;

    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];

    return $protocol . '://' . $host . $port . $s['REQUEST_URI'];

}

?>

<div class="col_790 margin_left">

              <div id="propertise_displaying" class="box">

              	<div class="headline_11">

                    <div class="headline_title_1">

                        <h2>LỌC TÀI SẢN MẶC ĐỊNH (<span class="ItemTotal"><?php echo $total;?></span>)

                            <div class="paging_2">

                                <ul class="pager"></ul>

<script type="text/javascript">

    $(function () {

        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo full_url($_SERVER)?>',<?php echo $total_page?>));

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

                            <li class="last" id="item_<?php echo $item['id']?>">

                            <?php } else {?> 

                            <li id="item_<?php echo $item['id']?>">

                            <?php } ?>

                             	<div class="short_info">

                                   	<div class="img"><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($item['loai_dia_oc'])))?>-c<?php echo $item['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($item['title'])))?>-h<?php echo $item['id']?>">

                                    <?php 

                                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$item['code'].'/'.$item['img']) && $item['img']!='')

                                    {

                                    ?>

                                        <img src="<?php echo base_url();?>file/uploads/property/<?php echo $item['code']?>/<?php echo $item['img']?>" width="75" height="75" alt="<?php echo $item['title']?>"/></a>

                                    <?php } else {?> 

                                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $item['title']?>"/>

                                    <?php } ?>

                                    </div>

                                    <div class="text">

                                        <h4><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($item['loai_dia_oc'])))?>-c<?php echo $item['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($item['title'])))?>-h<?php echo $item['id']?>"><?php echo $item['title']?></a></h4>

                                        <span class="updated_date">Ngày lưu:<?php echo date('d/m/Y h:i',$item['create_date'])?></span>

                                        <span class="updated_date"><a href="<?php echo base_url();?>thanh-vien/nang-cap-tai-san/<?php echo $item['id']?>">Nâng cấp dịch vụ</a></span>

                                        </div>

                                </div>

                                <div class="remove"><a href="javascript:void(0)" onclick="DeleteDataSaved('<?php echo base_url();?>xoa-proper/k/<?php echo $item['id'] ?>','<?php echo base_url();?>thanh-vien/tai-san-dang-hien-thi','#item_<?php echo $item['id']?>')" title="Xóa tin lưu"><span class="ico_remove_11"></span></a></div>

                            </li>

                                <?php $i++;} ?>

                       </ul>

                    </div>

                </div>

                <div class="paging_2">

                    <ul class="pager"></ul>

<script type="text/javascript">

    $(function () {

        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo full_url($_SERVER)?>',<?php echo $total_page?>));

    });

</script>



                </div>

              </div>

            </div>
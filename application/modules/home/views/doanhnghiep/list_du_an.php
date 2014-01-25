<div class="body">
<?php 
$i = 1;
foreach($list as $list_du_an_dn)
{
    if($i%2==0)
    {
?>
                            <div class="news_block">
                            <?php } else { ?>
                            <div class="news_block last">
                            <?php } ?>
                                <div class="img">
                                    <a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($list_du_an_dn['name'])))?>-c<?php echo $list_du_an_dn['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_du_an_dn['title'])))?>-i<?php echo $list_du_an_dn['id_pro']?>">
                                    <?php 
                                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$list_du_an_dn['img']))
                                    {
                                    ?>
                                        <img src="<?php echo base_url();?>file/uploads/project/<?php echo $list_du_an_dn['img']?>" style="width:130px;height:100px" alt="<?php echo $list_du_an_dn['title']?>">
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" style="width:130px;height:100px" alt="<?php echo $list_du_an_dn['title']?>">
                                        <?php } ?>
                                        </a></div>
                                <div class="news_descript">
                                    <h2>
                                        <a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($list_du_an_dn['name'])))?>-c<?php echo $list_du_an_dn['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_du_an_dn['title'])))?>-i<?php echo $list_du_an_dn['id_pro']?>"><?php echo $list_du_an_dn['title']?></a></h2>
                                    <p>
                                       <?php echo sub_string(loaibohtmltrongvanban($list_du_an_dn['content']),300);?>...</p>
                                </div>
                            </div>
                          
 <?php } ?>                       
                    <div class="paging_2 margin_bottom">
                        <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page ?>, <?php echo $total ?>, '<?php echo base_url();?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($about[0]['ten_dn'])))?>-i<?php echo $about[0]['id']?>/dau-tu-du-an',<?php echo $total_page;?>));
    });
</script>

                    </div>
                </div>
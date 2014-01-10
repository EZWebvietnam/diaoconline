
                        <div class="box-head">
                            <a href='dich-vu_g735.aspx' >Dịch Vụ</a>
                        </div><div class="box-body clearfix">
                        <?php 
                        foreach($list_dv as $dich_vu)
                        {
                        ?>
                            <div class="cat-news clearfix">
                                <a href="<?php echo base_url();?>dich-vu/<?php echo $dich_vu['id']?>/<?php echo mb_strtolower(url_title(removesign($dich_vu['name'])))?>" title="<?php echo $dich_vu['name']?>">
                                <?php 
                                if(is_file($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/services/'.$dich_vu['u_img']))
                                {
                                ?>
                                    <img width="132" height="102" src="<?php echo base_url();?>file/uploads/services/<?php echo $dich_vu['u_img']?>" alt="<?php echo $dich_vu['name']?>" title="<?php echo $dich_vu['name']?>" align="left"/>
                                <?php } else {?> 
                                <img src="<?php echo base_url();?>file/uploads/vantai.jpg" alt="<?php echo $dich_vu['name']?>" title="<?php echo $dich_vu['name']?>" align="left"/>
                                <?php }?>
                                </a>
                                <h4>
                                    <a href="<?php echo base_url();?>dich-vu/<?php echo $dich_vu['id']?>/<?php echo mb_strtolower(url_title(removesign($dich_vu['name'])))?>" title="<?php echo $dich_vu['name']?>"><?php echo $dich_vu['name']?></a> 
                                </h4>
                                <div class="clearfix"><?php echo sub_string(loaibohtmltrongvanban($dich_vu['content']),400);?>
                                </div>
                                <div class="news-more">
                                    <a href="<?php echo base_url();?>dich-vu/<?php echo $dich_vu['id']?>/<?php echo mb_strtolower(url_title(removesign($dich_vu['name'])))?>">Xem tiếp</a>
                                </div>
                            </div>
                         <?php } ?>   
                            
                        </div>


                    </div>
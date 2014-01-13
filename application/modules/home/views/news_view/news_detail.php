<div class="col_460 margin_left margin_bottom">
            <div id="news_listing" class="news_form margin_bottom">
                <div class="rounded_style_2 rounded_box">
                    <div class="unity_bar border_bottom">
                        <div class="left">
                            <div class="email_print">
                                <ul>
                                    <li><a href="/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146/ban-in" target="_blank">
                                        <span class="ico_16 ico_print_16"></span>Bản in</a></li>
                                    <li><a href="javascript:void(0)" onclick="GetDataSaved('J0X9Nwixfg0=','/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146','.itemsaved')" class="itemsaved">
                                        <span class="ico_16 ico_save_2_16"></span>Lưu tin</a></li>
                                    <li><a href="http://www.diaoconline.vn/du-an/khu-can-ho-c27/lexington-an-phu-i1412"><span class="ico_16 ico_back_16"></span>Quay lại</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                                <div  class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=http://www.diaoconline.vn/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        <li><a href="https://twitter.com/intent/tweet?text=H%c3%a0+N%e1%bb%99i+d%e1%bb%abng+%c4%91%e1%ba%a7u+t%c6%b0+x%c3%a2y+d%e1%bb%b1ng+14+nh%c3%a0+v%e1%bb%87+sinh+ti%e1%bb%81n+t%e1%bb%b7&url=http://www.diaoconline.vn/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146&via=DiaOcOnlinevn" target="_blank"><span class="ico_16 ico_twitter_16">twitter</span></a></li>
        
        </ul>
    </div>

                        </div>
                    </div>
    <div class="breadcrumb">
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/tin-tuc" itemprop="url" title="Thông tin Địa ốc"><span itemprop="title">Thông tin Địa ốc</span></a>
&raquo;            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/tin-tuc/thong-tin-c1" itemprop="url" title="Thông tin Địa ốc Thông tin"><span itemprop="title">Thông tin</span></a>
&raquo;            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="http://www.diaoconline.vn/tin-tuc/thi-truong-dia-oc-c18" itemprop="url" title="Thông tin Địa ốc Thị trường địa ốc"><span itemprop="title">Thị trường địa ốc</span></a>
            </div>
    </div>
                    <div class="body">
                        <h2 class="sub_title"></h2>
                        <h1 class="larger_title"><?php echo $detail[0]['title']?></h1>
                        <span class="updated_date">Cập nhật <?php echo date('d/m/Y',$detail[0]['create_date'])?></span><br />
                        <div class="news-content">
                            <p><?php echo $detail[0]['content']?>
</p>
    <div class="tag_relation">
        <b>Từ khóa:</b>
        <?php 
        if($detail[0]['tag_key']!='')
        {
            $key_tag = explode(',',$detail[0]['tag_key']);
            $count_max = count($key_tag);
            $i = 1;
            foreach($key_tag as $key)
            {
                $key_tag_no_unicode =  mb_strtolower(url_title(removesign($key)));
                if($i == 1)
                {
        ?>
            <a href="/tags/<?php echo $key_tag_no_unicode?>"><?php echo $key;?></a>,
            <?php } else { 
                if($i ==$count_max)
                {
                    echo "<a href='/tags/$key_tag_no_unicode'>$key</a>";
                
            }
            else
            {
                 echo "<a href='/tags/$key_tag_no_unicode'>$key</a>,";
            } } $i++;} }?>
            </div>
                        </div>
                    </div>
                    <div class="unity_bar border_top">
                        <div class="left">
                            <div class="email_print">
                                <ul>
                                    <li><a href="/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146/ban-in">
                                        <span class="ico_16 ico_print_16"></span>Bản in</a></li>
                                    <li><a href="javascript:void(0)" onclick="GetDataSaved('J0X9Nwixfg0=','/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146','.itemsaved')" class="itemsaved">
                                        <span class="ico_16 ico_save_2_16"></span>Lưu tin</a></li>
                                    <li><a href="http://www.diaoconline.vn/du-an/khu-can-ho-c27/lexington-an-phu-i1412"><span class="ico_16 ico_back_16"></span>Quay lại</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                                <div  class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=http://www.diaoconline.vn/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        <li><a href="https://twitter.com/intent/tweet?text=H%c3%a0+N%e1%bb%99i+d%e1%bb%abng+%c4%91%e1%ba%a7u+t%c6%b0+x%c3%a2y+d%e1%bb%b1ng+14+nh%c3%a0+v%e1%bb%87+sinh+ti%e1%bb%81n+t%e1%bb%b7&url=http://www.diaoconline.vn/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146&via=DiaOcOnlinevn" target="_blank"><span class="ico_16 ico_twitter_16">twitter</span></a></li>
        
        </ul>
    </div>

                        </div>
                    </div>
                </div>
            </div>
                <div id="other_news" class="rounded_style_2 rounded_box margin_bottom">
                    <div class="headline_3">
                        <h2>
                            CÁC TIN KHÁC</h2>
                    </div>
                    <div class="body">
                        <ul class="listing_6">
                        <?php 
                        foreach($list_new as $list_new_cate)
                        {
                        ?>
                                <li>
                                    <h2>
                                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($list_new_cate['name'])));?>-c<?php echo $list_new_cate['id_cate'] ?>/<?php echo mb_strtolower(url_title(removesign($list_new_cate['title'])));?>-i<?php echo $list_new_cate['id_new'] ?>">
                                            » <?php echo $list_new_cate['title']?></a></h2>
                                    <span class="updated_date" style="padding-top: 3px; padding-left: 2px;">(<?php echo date('d/m/Y',$list_new_cate['create_date'])?>)</span></li>
                        <?php } ?>
                                
                        </ul>
                    </div>
                </div>              </div>
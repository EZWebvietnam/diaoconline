<div class="col_790 margin_left">
                <!-- InstanceBeginEditable name="content main" -->
                <div id="history" class="box">
                    <div class="headline_11">
                        <h2>
                            LỊCH SỬ GIAO DỊCH</h2>
                    </div>
                    <div class="body">
                        
                        
                        <table id="record" class="margin_bottom">
                            <thead>
                                <tr>
                                    <th class="tc">
                                        STT
                                    </th>
                                    <th class="tc">
                                        Thời gian
                                    </th>
                                    <th class="tc">
                                        Số tiền giao dịch
                                    </th>
                                    <th class="tc">
                                        Loại giao dịch
                                    </th>
                                    <th class="tc">
                                        Hành động
                                    </th>
                                    <th class="tc">
                                        Trạng thái
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i =1;
                            foreach($list as $giao_dich)
                            {
                            ?>
                            <tr>
                                    <td class="tc">
                                        <?php echo $i;?>
                                    </td>
                                    <td class="tc">
                                        <?php echo date('d/m/Y h:i:s',$giao_dich['thoi_gian']);?>
                                    </td>
                                    <td class="tc">
                                        <?php echo $giao_dich['so_tien']?>
                                    </td>
                                    <td class="tc">
                                        <?php echo $giao_dich['loai_giao_dich']?>
                                    </td>
                                    <td class="tc">
                                        <?php echo $giao_dich['hinh_thuc']?>
                                    </td>
                                    <td class="tc">
                                        <?php echo $giao_dich['trang_thai']?>
                                    </td>
                                </tr>
                            <?php $i++;} ?>
                            </tbody>
                        </table>
                        <div class="paging_2">
                            <ul class="pager"></ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page ?>, <?php echo $total ?>, '<?php echo base_url();?>thanh-vien/log-giao-dich',<?php echo $total_page?>));
    });
</script>

                        </div>
                    </div>
                </div>
                <!-- InstanceEndEditable -->
            </div>
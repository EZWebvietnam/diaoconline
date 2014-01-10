<a class="btn btn-primary" href="<?php echo base_url();?>admin/picture/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Danh mục bài viết</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                       
                        <th>Hình ảnh</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($list_image as $post)
                    {
                    ?>
                    <tr>
                        
                        <td>
                        <?php 
                        if(is_file($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/slide/'.$post['img']))
                        {
                        ?>
                         <img width="100" height="100" src="<?php echo base_url();?>file/uploads/slide/<?php echo $post['img']?>" align="left"/>
                        <?php }?>
                        </td>
                        <td class="center">
                            
                            
                            <a onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/picture/delete/<?php echo $post['id']?>">
                                <i class="icon-trash icon-white"></i> 
                                Xóa
                            </a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
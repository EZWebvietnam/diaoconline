<script src="<?php echo base_url() ?>plugin/ckeditor/ckeditor.js"></script>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" name='post' method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Tên bài viết</label>
                        <div class="controls">
                            <input class="input-xlarge focused"  name='name' id="name" type="text" value="">
                        </div>
                    </div>    
                    <div class="control-group">
                        <label class="control-label" >Danh mục tin tức</label>
                        <div class="controls">
                            
                            <select  data-rel="chosen" name='cate'>
                                <option selected="" value='0'>Danh mục cha</option>
                                <?php 
                                foreach($list_about as $about_parent)
                                {
                                    ?> 
                                <option value='<?php echo $about_parent['id']?>'><?php echo $about_parent['name']?></option>
                                    <?php }?>
                            </select>  
                            
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Nội dung</label>
                        <div class="controls">
                            <textarea class="ckeditor" name="editor1" id="editor21"></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editor1');
                            </script> 
                        </div>
                    </div>


                    <div class="form-actions">
                        <button  type="button" onclick="update_about();" class="btn btn-primary">Thêm</button>
                    </div>
                </fieldset>
            </form>
             <!---<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>--->
            <script>
                function update_about()
                {
                    document.post.action="<?php echo base_url();?>admin/about/add";
                    document.post.submit();
                }
                </script>
<link href="<?php echo base_url() ?>assets/js/jquery/uploadify_31/uploadify.css" type="text/css" media="screen" rel="stylesheet"/>
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
            <form class="form-horizontal" name='post' method="post" enctype="multipart/form-data">
                <fieldset>
                     
                    
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Hình ảnh</label>
                        <div class="controls">
                            <input  class="input-xlarge focused" type="file" name="userfile" id="file_logo_cong_ty">
                        </div>
                    </div> 
                    


                    <div class="form-actions">
                        <button name="submit"  type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </fieldset>
            </form>
             <!---<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>--->
            <script>
            
                function keypress(e) {
                    var keypressed = null;
                    if (window.event)
                    {
                        keypressed = window.event.keyCode;
                    }
                    else
                    {
                        keypressed = e.which;
                    }

                    if (keypressed < 48 || keypressed > 57)
                    {
                        if (keypressed == 8 || keypressed == 127)
                        {
                            return;
                        }
                        return false;
                    }
                }
                $(function() {
                    $(".tinh_di").live("click", function() {
                        var id_tinh = "";
                        $('.tinh_di').each(function() {
                            id_tinh = $(this).val();
                        });
                        $.post("<?php echo base_url(); ?>admin/bus/get_bus_province", {"id_tinh": id_tinh}, function(response) {
                            $("#ben_di").html(response);
                        });
                    });
                    $(".tinh_den").live("click", function() {
                        var tinh_den = "";
                        $('.tinh_den').each(function() {

                            tinh_den = $(this).val();


                        });
                        $.post("<?php echo base_url(); ?>admin/bus/get_bus_province", {"tinh_den": tinh_den}, function(response) {
                            $("#ben_den").html(response);
                        });
                    });
                });
            </script>
<script src="<?php echo base_url()?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>

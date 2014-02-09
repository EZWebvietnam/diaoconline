<select class="last" id="ProjectListMember" name="ProjectListMember">
<?php 
foreach($list_project as $district)
{
?>
<option value="<?php echo $district['id']?>"><?php echo $district['title']?></option>
<?php } ?>
</select>
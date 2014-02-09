<select class="last" id="WardListMember" name="WardListMember">
<option value="0">Chọn phường</option>
<?php 
foreach($list_ward as $district)
{
?>
<option value="<?php echo $district['wardid']?>"><?php echo $district['name']?></option>
<?php } ?>
</select>
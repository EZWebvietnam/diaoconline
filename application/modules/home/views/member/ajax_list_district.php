<select class="last" id="DistrictListMember" name="DistrictListMember" param="qh">
<option value="0">Chọn quận</option>
<?php 
foreach($list_district as $district)
{
?>
<option value="<?php echo $district['districtid']?>"><?php echo $district['name']?></option>
<?php } ?>
</select>
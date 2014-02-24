<select class="last" id="DistrictListMember" name="DistrictListMember" param="qh">

<option value="0">Chọn quận</option>

<?php 

foreach($list_district as $district)

{

?>

<option value="<?php echo $district['districtid']?>"><?php if(is_numeric($district['name'])) { echo 'Quận '.$district['name'];} else { echo 'Huyện '.$district['name'];}?></option>

<?php } ?>

</select>
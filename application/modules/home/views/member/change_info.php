<?php

$password = array(

	'name'	=> 'password',

	'id'	=> 'password',

	'size'	=> 30,

);

$email = array(

	'name'	=> 'email',

	'id'	=> 'email',

	'value'	=> set_value('email'),

	'maxlength'	=> 80,

	'size'	=> 30,

);

?>

<?php

$old_password = array(

	'name'	=> 'old_password',

	'id'	=> 'old_password',

	'value' => set_value('old_password'),

	'size' 	=> 30,

);

$new_password = array(

	'name'	=> 'new_password',

	'id'	=> 'new_password',

	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),

	'size'	=> 30,

);

$confirm_new_password = array(

	'name'	=> 'confirm_new_password',

	'id'	=> 'confirm_new_password',

	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),

	'size' 	=> 30,

);

?>

<div class="col_790 margin_left">

            <div class="box">

            <div class="headline_11"><h2>CẬP NHẬT TÀI KHOẢN</h2></div>

            <div class="body">

            <form  method="post" class="account_form form_style_3" enctype="multipart/form-data">

            <div class="validation-summary-errors"><ul>
            <?php 
            if($this->session->flashdata('message'))
            {
                echo $this->session->flashdata('message');
            }
            ?>
            <li><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>

            <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>

            <?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>

            <?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>

            <?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>

            </li>

</ul></div>

                <div id="change_email" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>

                    <div class="headline_12"><h2>THAY ĐỔI EMAIL</h2></div>

                    <div class="body">

                        

                            <input id="Email" name="Email" type="hidden" value="<?php echo $this->session->userdata('email');?>"/>

                           	<fieldset>

                           	<ul>

                            <li><div class="old_email">Email đang sử dụng: <strong><?php echo $this->session->userdata('email');?></strong></div></li>

                            <li><label>Email mới:</label>

                                <?php echo form_input($email); ?></li>

                            <li><label>Password</label>

                                <?php echo form_password($password); ?></li>

                            <li>

                                <button type="submit" name="SubmitEmail" id="SubmitEmail" class="btn_2" value="1"><span>CẬP NHẬT</span></button></li>

                            </ul>

                            </fieldset>

                    </div>

                </div>

                <div id="change_pass" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>

   		            <div class="headline_12"><h2>THAY ĐỔI MẬT KHẨU</h2></div>

                    <div class="body">

                        <fieldset>

                        <ul>

                            <li><label>Nhập mật khẩu cũ:</label>

                                <?php echo form_password($old_password); ?></li>

                            <li><label>Nhập mật khẩu mới:</label>

                                 <?php echo form_password($new_password); ?></li>

                            <li><label>Nhập lại mật khẩu mới:</label>

                               

                                <?php echo form_password($confirm_new_password); ?>

                                </li>

                            <li>

                                <button type="submit" name="SubmitPassword" id="SubmitPassword" value="1" class="btn_2"><span>CẬP NHẬT</span></button></li>

                        </ul>

                        </fieldset>

                    </div>

                </div>

               	<div id="change_profile" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>

                   	<div class="headline_12"><h2>thay đổi thông tin</h2></div>

                    <div class="body">

                           	<fieldset>

                           	<ul>

                            <li><label>Họ và tên</label>

                                <input class="input_text" id="FullName" name="FullName" placeholder="Họ và tên" type="text" value="<?php echo $userdetail[0]['full_name']?>"></li>

                            <li><label>Ngày sinh</label>

                                    <select id="AllDay" name="AllDay"><option value="-1">Chọn ngày</option>

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

<option value="6">6</option>

<option value="7">7</option>

<option value="8">8</option>

<option selected="selected" value="9">9</option>

<option value="10">10</option>

<option value="11">11</option>

<option value="12">12</option>

<option value="13">13</option>

<option value="14">14</option>

<option value="15">15</option>

<option value="16">16</option>

<option value="17">17</option>

<option value="18">18</option>

<option value="19">19</option>

<option value="20">20</option>

<option value="21">21</option>

<option value="22">22</option>

<option value="23">23</option>

<option value="24">24</option>

<option value="25">25</option>

<option value="26">26</option>

<option value="27">27</option>

<option value="28">28</option>

<option value="29">29</option>

<option value="30">30</option>

<option value="31">31</option>

</select>

                                    <select id="AllMonth" name="AllMonth"><option value="-1">Chọn tháng</option>

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option selected="selected" value="5">5</option>

<option value="6">6</option>

<option value="7">7</option>

<option value="8">8</option>

<option value="9">9</option>

<option value="10">10</option>

<option value="11">11</option>

<option value="12">12</option>

</select>

                                    <select id="AllYear" name="AllYear"><option value="-1">Chọn năm</option>

<option value="2014">2014</option>

<option value="2013">2013</option>

<option value="2012">2012</option>

<option value="2011">2011</option>

<option value="2010">2010</option>

<option value="2009">2009</option>

<option value="2008">2008</option>

<option value="2007">2007</option>

<option value="2006">2006</option>

<option value="2005">2005</option>

<option value="2004">2004</option>

<option value="2003">2003</option>

<option value="2002">2002</option>

<option value="2001">2001</option>

<option value="2000">2000</option>

<option value="1999">1999</option>

<option value="1998">1998</option>

<option value="1997">1997</option>

<option value="1996">1996</option>

<option value="1995">1995</option>

<option value="1994">1994</option>

<option value="1993">1993</option>

<option value="1992">1992</option>

<option selected="selected" value="1991">1991</option>

<option value="1990">1990</option>

<option value="1989">1989</option>

<option value="1988">1988</option>

<option value="1987">1987</option>

<option value="1986">1986</option>

<option value="1985">1985</option>

<option value="1984">1984</option>

<option value="1983">1983</option>

<option value="1982">1982</option>

<option value="1981">1981</option>

<option value="1980">1980</option>

<option value="1979">1979</option>

<option value="1978">1978</option>

<option value="1977">1977</option>

<option value="1976">1976</option>

<option value="1975">1975</option>

<option value="1974">1974</option>

<option value="1973">1973</option>

<option value="1972">1972</option>

<option value="1971">1971</option>

<option value="1970">1970</option>

<option value="1969">1969</option>

<option value="1968">1968</option>

<option value="1967">1967</option>

<option value="1966">1966</option>

<option value="1965">1965</option>

<option value="1964">1964</option>

<option value="1963">1963</option>

<option value="1962">1962</option>

<option value="1961">1961</option>

<option value="1960">1960</option>

<option value="1959">1959</option>

<option value="1958">1958</option>

<option value="1957">1957</option>

<option value="1956">1956</option>

<option value="1955">1955</option>

<option value="1954">1954</option>

<option value="1953">1953</option>

<option value="1952">1952</option>

<option value="1951">1951</option>

<option value="1950">1950</option>

<option value="1949">1949</option>

<option value="1948">1948</option>

<option value="1947">1947</option>

<option value="1946">1946</option>

<option value="1945">1945</option>

<option value="1944">1944</option>

<option value="1943">1943</option>

<option value="1942">1942</option>

<option value="1941">1941</option>

<option value="1940">1940</option>

<option value="1939">1939</option>

<option value="1938">1938</option>

<option value="1937">1937</option>

<option value="1936">1936</option>

<option value="1935">1935</option>

<option value="1934">1934</option>

<option value="1933">1933</option>

<option value="1932">1932</option>

<option value="1931">1931</option>

<option value="1930">1930</option>

<option value="1929">1929</option>

<option value="1928">1928</option>

<option value="1927">1927</option>

<option value="1926">1926</option>

<option value="1925">1925</option>

<option value="1924">1924</option>

<option value="1923">1923</option>

<option value="1922">1922</option>

<option value="1921">1921</option>

<option value="1920">1920</option>

<option value="1919">1919</option>

<option value="1918">1918</option>

<option value="1917">1917</option>

<option value="1916">1916</option>

<option value="1915">1915</option>

<option value="1914">1914</option>

</select></li>

                            <li><label>Giới tính</label>

                                <div class="gender">

                                <?php 

                                if($userdetail[0]['sex']==1)

                                {

                                ?>

                                    <input checked="checked" id="MenGender" name="Gender" type="radio" value="1"><label for="MenGender">Nam</label>

                                    <input id="WomenGender" name="Gender" type="radio" value="0"><label for="WomenGender">Nữ</label></div></li>

                                <?php } else {?>

                                <input checked="checked" id="MenGender" name="Gender" type="radio" value="1"><label for="MenGender">Nam</label>

                                    <input id="WomenGender" name="Gender" type="radio" value="0"><label for="WomenGender">Nữ</label></div></li>

                                 <?php } ?>

                            <li><label>Địa chỉ</label>

                                 <input class="input_text" id="Address" maxlength="200" name="Address" placeholder="Địa chỉ" type="text" value="<?php echo $userdetail[0]['address']?>"></li>

                            <li><label>Điện thoại</label>

                                <div class="tel"><input class="input_text" id="Mobile1" maxlength="10" name="Mobile1" placeholder="Điện thoại bàn" type="text" value="">

                                <input class="input_text" id="Mobile2" maxlength="30" name="Mobile2" placeholder="Di động" type="text" value="<?php echo $userdetail[0]['phone']?>"></div></li>

                            <li><label>Tên công ty</label>

                                <input class="input_text" id="CompanyName" maxlength="200" name="CompanyName" placeholder="Tên công ty" type="text" value="<?php echo $userdetail[0]['company']?>"></li>

                            <li><label>Địa chỉ website</label>

                                <input class="input_text" id="Website" maxlength="200" name="Website" placeholder="Địa chỉ Website" type="text" value="<?php echo $userdetail[0]['website']?>"></li>

                            <li><label>Hiển thị thông tin</label>

                                <input id="ShowInfo" name="ShowInfo" type="checkbox" value="true"><input name="ShowInfo" type="hidden" value="false"></li>

                            <li>

                                <button type="submit" name="SubmitInfo" id="SubmitInfo" value="1" class="btn_2"><span>CẬP NHẬT</span></button></li>

                            </ul>

                            </fieldset>

                    </div>

                </div>

                <div id="change_avatar" class="rounded_style_3 rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>

               	    <div class="headline_12"><h2>THAY ĐỔI HÌNH ĐẠI DIỆN</h2></div>

                    <div class="body">

                        <div class="wrapper">

                            <div class="upload">

                                    <fieldset>

                                    <label></label><input type="file" name="userfile" id="file_logo_cong_ty"/>

                                    <div class="default_avatar">

                                        <input type="checkbox" name="logoDefault" id="logoDefault"><label for="logoDefault">Chọn xóa hình mặc định</label>

                                    </div>

                                    </fieldset>

                            	<div class="note"><p>Lưu ý: Hình đại diện có dung lượng nhỏ hơn 512KB</p></div>

                            </div>

                            <button type="submit" name="SubmitLogo" id="SubmitLogo" value="1" class="btn_2"><span>CẬP NHẬT</span></button>

                        </div>

                    </div>

                </div>

            </form>



            </div>

            </div>

        </div>
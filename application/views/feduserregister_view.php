
<h3><?php echo lang('rr_feduser_register_title');?></h3>
<div class="alert-box alert"><?php echo lang('error_usernotexist');?></div>
<br />
<br />
<div class="result notice"></div>
<br />


<?php
$attributes = array('id' => 'applyforaccount');
echo form_open(''.base_url('auth/fedregister'),$attributes);

echo '<div class="buttons"><button type="submit" name="applyforaccount"  class="button" value="'.base_url('auth/fedregister').'">'.lang('applyforaccount').'</button></div>';

echo form_close();

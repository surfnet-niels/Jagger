<?php
$action = base_url().'federations/fedactions/bulkaddsubmit';
$hidden = array(
	'fed' => $fed_encoded,
	'memberstype'=>$memberstype,
);
$form_attrs = array('id'=>'dd');
echo form_open($action,$form_attrs,$hidden);

/**
 * @todo replace check boxes with multiselect
 */

//echo '<div>';
//echo '<select class="select2" multiple="multiple">';
//foreach ($select_elements as $k => $v){
//    echo '<option value="'.$v[id].'">'.trim($v[name]).'</option>';
//}
//echo '</select>';
//echo '</div>';
/////////////////////

$tmpl = array('table_open' => '<table  id="details" class="tablesorter">');
$this->table->set_template($tmpl);
$this->table->set_caption(lang('listavailableprov'));
$this->table->set_heading(lang('rr_tbltitle_name'),'#');
$fed_link = anchor(base_url().'federations/manage/show/'.$fed_encoded,$federation_name);
$mtype = "";
if($memberstype == 'idp')
{
	$ptitle = lang('rr_addnewidpsnoinv');
}
elseif($memberstype == 'sp')
{
	$ptitle = lang('rr_addnewspsnoinv');
}
if($message)
{
	echo $message;
}
echo $this->table->generate($form_elements);
echo '<div class="buttons small-12 columns text-center">';
echo '<button type="reset" name="reset" value="reset" class="button resetbutton reseticon alert">'.lang('rr_reset').'</button> ';
echo '<button type="submit" name="ass" value="add selected new members" class="button savebutton saveicon"><span class="save">'.lang('rr_add').'</button>';
echo "</div>";
echo form_close();

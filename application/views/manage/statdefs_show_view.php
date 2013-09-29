<div id="pagetitle"><?php echo lang('statsmngmt');?></div>
<div id="subtitle"><h3><?php echo anchor(base_url().'providers/detail/show/'.$providerid, $providername ) ;?></h3><h4><?php echo $providerentity;?></h4></div>

<div id="statdefs" style="width: 100%">
<?php
if(!empty($existingStatDefs))
{
    $tmpl = array ( 'table_open'  => '<table id="details" class="zebra">' );
    $this->table->set_template($tmpl);
    $staimg = base_url().'images/stats_bars.png';
   // print_r($existingStatDefs);
    foreach($existingStatDefs as $v)
    {
       $r = array(anchor(base_url().'manage/statdefs/show/'.$providerid.'/'.$v['id'].'',$v['title']),'<a class="lateststat" href="'.base_url().'manage/statistics/latest/'.$v['id'].'"><img src="'.$staimg.'"/></a>');
       $this->table->add_row($r);
    }
    echo $this->table->generate();
   $this->table->clear();

}
else
{
     echo '<div class="alert" style="width: 100%; text-align: center;">'.lang('nostatsdefsfound').' <a href="'.base_url().'manage/statdefs/newstatdef/'.$providerid.'">'.lang('rr_add').'</a></div>';
}
?>
</div>
<div id="statisticdiag"></div>

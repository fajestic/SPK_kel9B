<?php

$cfAroma   = $cf['aroma'];
$cfWarna = $cf['warna'];
$cfKebersihan  = $cf['kebersihan'];
$cfBentuk_Butiran    = $cf['bentuk_butiran'];

$classAroma   = ($cfAroma  ==1) ? 'class="red"' : '';
$classWarna = ($cfWarna ==1) ? 'class="red"' : '';
$classKebersihan  = ($cfKebersihan ==1) ? 'class="red"' : '';
$classBentuk_Butiran   = ($cfBentuk_Butiran   ==1) ? 'class="red"' : '';

$banyak_cf = $cfAroma+$cfWarna+$cfKebersihan+$cfBentuk_Butiran;
$banyak_sf = 4-$banyak_cf;


?>

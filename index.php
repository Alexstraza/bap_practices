<?php

include 'funcs.php';
//See http://bovi.hosts.ma-cloud.nl/md2_bap/p2_w1_functions/
writeHello();

writeMsg('I greet you.');
writeMsg('You win, this time...');

writeMsgTo('Uther','put your faith in the Light!');


$outcome = addValue(5, 7);
echo 'The outcome of 5 + 7 = '. $outcome .'<br/>';

$outcome = calcRect(5, 7);
echo 'The area of a rectangle of 5 and 7 = '. $outcome .'<br/>';



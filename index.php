<?php
$array = array(); 
$array['key'] = 'website'; 
$array['value']='www.chhua.com'; 
$a = serialize($array); 
echo $a; 
unset($array); 
$a = unserialize($a); 
print_r($a); 
echo "aaa";
phpinfo();

<?php
$ff = file_get_contents("http://www.digitalmara.co.ke/xml/Report_Weekly_16-02-20.xml");

preg_match_all('/<ss:Row>([^`]*?)<\/ss:Row>/', $ff, $m);
$data = "From,To,Time";
$last_time = "";
foreach ($m[1] as $key=>$n) 
{
    preg_match_all('/<ss:Data ss:Type="String">([^`]*?)<\/ss:Data>/', $n, $p);
if($last_time){
$diff = strtotime(str_replace("T"," ",$p[1][0])) - strtotime($last_time);//print_r($diff);
$howl = $diff / 60;
if($howl > 2){
    $data .= ($data?"\n":"").$last_time.','.str_replace("T"," ",$p[1][0]).','.$howl;
}
}
$last_time = str_replace("T"," ",$p[1][0]);
}
echo $data;

?>
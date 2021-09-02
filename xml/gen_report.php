<?php
$ff = file_get_contents("http://www.digitalmara.co.ke/xml/Report_20210801.xml");

preg_match_all('/<ss:Row>([^`]*?)<\/ss:Row>/', $ff, $m);
$data = "Advert,Type,Time Played";
foreach ($m[1] as $key=>$n) 
{
    preg_match_all('/<ss:Data ss:Type="String">([^`]*?)<\/ss:Data>/', $n, $p);
    $data .= ($data?"\n":"").$p[1][4].','.$p[1][3].','.str_replace("T"," ",$p[1][0]);
}
echo $data;

?>
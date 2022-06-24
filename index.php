<?php
$dir = 'text';
$files = scandir($dir, 0);
for($i = 2; $i < count($files); $i++)
{
$string ='';
$string = file_get_contents($dir.'/'.$files[$i], true);
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $string, $match);
$result=implode(PHP_EOL,$match[0]);
file_put_contents("listlink.txt",$result);
echo "<pre>";
print_r($result);
echo "</pre>";
}
?>

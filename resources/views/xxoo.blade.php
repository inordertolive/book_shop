<?php
$path = "http://api.map.baidu.com/geocoder/v2/?address=%E5%8C%97%E4%BA%AC%E5%B8%82%E6%B5%B7%E6%B7%80%E5%8C%BA%E4%B8%8A%E5%9C%B0%E5%8D%81%E8%A1%9710%E5%8F%B7&output=json&ak=OAIjkz3QfB7aieMzVE1sY2AZvcfGrqfC";

$result = file_get_contents($path);

//  $result = "{"status":0,"result":{"location":{"lng":116.23761791731043,"lat":40.22641337159427},"precise":0,"confidence":14,"comprehension":64,"level":"区县"}}";
 dump($result);
 json_decode($result,true);
 
 

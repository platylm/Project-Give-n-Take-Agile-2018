<?php
require("phpMQTT.php");

echo "\n mqtt starting..";
  
$host = "46.101.48.109";
$port = 1883;
$clientName = "small124";
$mqtt = new phpMQTT($host, $port, $clientName);

echo "\n mqtt created..";

if(!$mqtt->connect()){
	echo "\n mqtt not connected..";
	exit(1);
}

$topics['KKU/#'] = array("qos"=>0, "function"=>"insertWhether");

$mqtt->subscribe($topics);

echo "\n mqtt Subscribed..";

while($mqtt->proc()) {
		
}

$mqtt->close();
function insertWhether($topic,$msg){
     $object = json_decode($msg);  
    if (!empty($object->d)) {
        include "connectDB.php";
        date_default_timezone_set("Asia/Bangkok");
        $sql = $con->prepare("INSERT INTO whether (name, time_stamp, presure, temp, hum) VALUES (?,?,?,?,?)");
		$sql->bindParam(1, $object->d->myName);			
		$sql->bindParam(2, date("Y-m-d H:i:s"));
        $sql->bindParam(3, $object->d->pressure);
        $sql->bindParam(4, $object->d->temperature);
        $sql->bindParam(5, $object->d->humidity);
		$sql->execute();
    }else{
        return 0;
    }
}
?>
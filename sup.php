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

$topics['KKU/#'] = array("qos"=>0, "function"=>"receiveMessage");

$mqtt->subscribe($topics);

echo "\n mqtt Subscribed..";

while($mqtt->proc()) {
		
}

$mqtt->close();

// echo "\n mqtt closed..";

function receiveMessage($topic,$msg){
	// echo "\n";
	// echo "\n Msg Recieved at ".date("r");
	// echo "\n Topic   : {$topic}";
    // echo "\n Message : {$msg}";
    $object = json_decode($msg);
    print_r($object->d);
    // if (isset($object->d)){
    //     echo "temperature => ".$object->d->temperature ." \n ";
    //     echo "humidity => ".$object->d->humidity ."\n ";
    //     echo "pressure => ".$object->d->pressure." \n ";
    // }
    
}
	


?>
<?php
$data = array(
	array("id" => 1,"soft" => "Linux", "rating" => 3),
	array("id" => 2,"soft" => "Apache","rating" => 1),
	array("id" => 3,"soft" => "MySQL","rating" => 4),
	array("id" => 4,"soft" => "PHP","rating" => 2),
	);

foreach($data as $key => $value){
	$soft[$key] = $value["soft"];
	$rating[$key] = $value["rating"];
}

array_multisort($rating,$soft,$data);
print_r($data);
?>
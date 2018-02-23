<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; //Check ip
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; //Check if behind proxy
$remote_addr = $_SERVER['REMOTE_ADDR']; //check address
$hostname = gethostname(); // get hostname

//Check wether one of the responses are empty or not
if (!empty($http_client_ip)) { 
	$ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
	$ip_address = $http_x_forwarded_for;
} else  {
	$ip_address = $remote_addr;
}

//check mac from arp table using IP - For Windows or Linux change the arp command accordingly
$mac = `arp $ip_address | cut -d " " -f4`;


//Output information
echo "<br /> <br />Your hostname is: $hostname";
echo $hostname;  
echo "<br />Your Mac is: ";  
echo $mac;
?>

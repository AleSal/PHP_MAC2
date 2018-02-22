<?php
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
$hostname = gethostname();


if (!empty($http_client_ip)) {
	$ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
	$ip_address = $http_x_forwarded_for;
} else  {
	$ip_address = $remote_addr;
}

//$output = shell_exec('arp -n $ip_address'); 
$mac = `arp $ip_address | cut -d " " -f4`;


//echo "<br /> <br />Seu hostname é: $hostname";
//echo $hostname;  
echo "<br />Seu Mac é: ";  
echo $mac;
//echo "<pre>$output</pre>"

?>
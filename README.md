# PHP_MAC2
More complete PHP to get MAC from machines on LAN

After a long search over the web for some script that could get the correct mac address of clients trying to connect to my PfSense Captive Portal and finding a lot of lines that didn't worked, I wrote this, works on any server with any device connected to the network.

**This script is formatted for BSD ARP, if you use it under Linux or Windows change the line according to the platform,i.e. "arp -a"  or "arp -n"

**This version also gives you if the user comes from behind a proxy or not, and also outputs the hostname and MAC address. 

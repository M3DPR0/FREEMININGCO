<?php
date_default_timezone_set('Asia/Semarang');

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$ceklis = "{$abu2}[{$res}✓{$abu2}]{$green2}";

/*PLEASE WORK FROM OTHERS WITH NO PLAGIATE / TAKE SOURCE CODE AND CHANGE THE AUTHOR CODE MAKER*/

system("clear");
system("toilet -f big 'Freemining.co' -F gay");

system("toilet --width 30 -f wideterm -F border --metal --gay '   SUBSCRIBE    '");

sleep(2);


system("toilet --width 37 -f wideterm -F border --metal --gay ' BLOCKSAN '"); 

sleep(5);

$banner = "\033[1;36m
┌───────────────────────────────────────┐ 


│YouTube Channel :blocksan

│Telegram Channel :@blocksan


└───────────────────────────────────────┘\n\n";


//youtube


echo $banner;
echo "\n$pentung Login to your account please wait$pentung\n";
echo "===========================================================\n";
$date = date("h:i:sa");
sleep(5);

/*Requirements*/
$ua = array("Mozilla/5.0 (Linux; Android 8.0.0; SM-A600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Mobile Safari/537.36");
$login = "https://freemining.co/api.php";
$data = "action=_login&address=1PkjxTjJrK66VnayL8XBDwMBnPyG7MSMyh&password=206181&referrer=0&user_session_id=0nUgIXpkxnnIhswq";
$home = "https://freemining.co/dashboard.php";

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $login);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a1 = explode('﻿{"return":1,"message":"Login successful"}', $result);
echo "$ceklis$yellow$a1[0] Berhasil Login...\n";
echo "===========================================================\n";
echo "Bot Starting....\n";
sleep(5);
while (true){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $home);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$b1 = explode('<span id="mining_run">', $result);
$b2 = explode('</span>', $b1[1]);
echo "\n$ceklis $date$yellow Success [Balance = $b2[0] BTC]";
sleep(1);
}
?>

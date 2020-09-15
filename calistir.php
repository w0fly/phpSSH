<?php
include('phpseclib/Net/SSH2.php');

set_include_path('phpseclib/Net/');

$ssh = new Net_SSH2("IP Adresi");

$ssh->login("Kullanıcıadı", "Şifre") or die("Bağlantı Sağlanamadı.");


//Örnek olarak network servisimizi yeniden başlatalım.

$ssh->exec("/etc/init.d/networking restart");


?>
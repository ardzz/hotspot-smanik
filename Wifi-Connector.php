<?php
require_once __DIR__ . "/vendor/autoload.php";

$hotspot_smanik = new \App\HotspotSmanik\Main;

$hotspot_smanik->username = "NOMER_NISN"; // ubah 
$hotspot_smanik->password = "NOMER_NISN"; // ubah

echo " 
   :----------------------------------:
      __    __ _   ___ _  
    -/ /-/\-\ ( )-/ __(_) ------------
    -\ \/  \/ / |/ _\-| | --CON-------
    --\  /\  /| / /---| | ----NEC-----
    ---\/--\/-|_\/----|_| ------TOR---
    
   :----------------------------------:

";

date_default_timezone_set("Asia/Jakarta");

if($hotspot_smanik->IsConnectedWiFi()){
    echo "   [".date("H:i:s")."] Terkoneksi ke SSID : HotspotSmanik\n";
    if($hotspot_smanik->login()){
        echo "   [".date("H:i:s")."] Terhubung dengan HotspotSmanik\n";
    }else{
        echo "   [".date("H:i:s")."] Gagal masuk ke jaringan HotspotSmanik\n";
    }
}
else{
    echo "   [".date("H:i:s")."] Perangkat tidak terkoneksi ke SSID HotspotSmanik\n";
}
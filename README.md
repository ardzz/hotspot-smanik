# Hotspot Smanik
### Requirements
* PHP >= 7.*
* PHP-cURL (library) `apt install php-curl`

### Reminder
First of all, you must clone or downloads this repository by executes command of 
```bash
https://github.com/ardzz/hotspot-smanik
```

### Usage
1. Konfigurasi *username* dan *password*
```php
$hotspot_smanik->username = "NOMER_NISN"; // ubah 
$hotspot_smanik->password = "NOMER_NISN"; // ubah
```
https://github.com/ardzz/hotspot-smanik/blob/df43c707a0be558e4384fc757f26a7accf990259/Wifi-Connector.php#L6
2. Jalankan program
```bash
php Wifi-Connector.php
```

### Note
Jika WiFi terasa lambat, silahkan refresh koneksi dan jalankan ulang program.

**Tested on Android 9 (One UI core 1.1) - via *Termux***

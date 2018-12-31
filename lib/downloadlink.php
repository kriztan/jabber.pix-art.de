<?php
// Get the string from the URL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/kriztan/Pix-Art-Messenger/releases/latest');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($ch);
curl_close($ch);

// Decode the JSON string
$data = json_decode($json);

$downloadlinkAPK = $data->assets[0]->browser_download_url;
$downloadlinkPS = 'https://play.google.com/store/apps/details?id=de.pixart.messenger';
$size = formatBytes($data->assets[0]->size);
?>
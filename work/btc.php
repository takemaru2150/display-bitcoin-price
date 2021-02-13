<h3>現在のビットコイン価格</h3>
<?php
$url = file_get_contents('https://api.bitflyer.jp/v1/ticker/?product_code=BTC_JPY');
$response = json_decode($url, true);
$btc_jpy = $response['ltp'];
echo '<h2>'.$btc_jpy.' 円</h2><small>（bitFlyer価格）</small>';
?>
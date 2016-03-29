function sendMessageCurl($apiUrl, $postValue) {

$browserType = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax)";

$ci = curl_init();

curl_setopt($ci, CURLOPT_URL, $apiUrl);

curl_setopt($ci, CURLOPT_USERAGENT, $browserType);

curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 2);

curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ci, CURLOPT_POST, 1);

curl_setopt($ci, CURLOPT_POSTFIELDS, $postValue);

$gatewayResult = curl_exec($ci); curl_close($ci);

return $gatewayResult;

}

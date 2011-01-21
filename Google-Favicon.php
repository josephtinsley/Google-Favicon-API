<?PHP
function getFavicon($var)
{
$filName=substr($var,0,-4);
$fp = fopen ('folder/'.$filName.'.png', 'w+');
$ch = curl_init('http://www.google.com/s2/favicons?domain='.$var);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch);
curl_close($ch);
fclose($fp);
}

$var='techcrunch.com';
getFavicon($var);
?>

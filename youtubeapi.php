<?php
    /**
     * @author Pankaj Kumar Jha
     * @version $1.0.0$
     * @copyright Global Journals Inc.
     * @uses  To fetch data from YOUTUBE.COM in JSON FORMAT
     * @return int
     */

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://gdata.youtube.com/feeds/api/users/VIDEO_UPLOAD_USERNAME/uploads'
));
$resp = curl_exec($curl);
curl_close($curl);
$youtube_data_in_array = json_decode(json_encode((array)simplexml_load_string($resp)),1);
echo "<pre>";
print_r($youtube_data_in_array);
echo "</pre>"; 
?>





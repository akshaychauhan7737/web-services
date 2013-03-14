<?php
    /**
     * @author Pankaj Kumar Jha
     * @version $1.0.0$
     * @copyright Global Journals Inc.
     * @uses  To count facebook likes in JSON Format
     * @return int
     */
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://graph.facebook.com/FACEBOOK_LIKE_PAGE_NAME'
));
$resp = curl_exec($curl);
curl_close($curl);
$obj=json_decode($resp);
echo $obj->likes;
?>
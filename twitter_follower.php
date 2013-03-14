<?php
    /**
     * @author Pankaj Kumar Jha
     * @version $1.0.0$
     * @copyright Global Journals Inc.
     * @uses  To display no of twitter follower without follower text
     * @return int
     */

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://api.twitter.com/1/users/show.json?screen_name=pankajkumarjha7'
));
$resp = curl_exec($curl);
curl_close($curl);
$obj=json_decode($resp);
echo $obj->followers_count; // No of twitter follower
?>
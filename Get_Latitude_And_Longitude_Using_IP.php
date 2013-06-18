 <?php
  //  get lat and log
        
    $lat=get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=74.125.236.133');

    print_r($lat);
    
    ?>
    
    <!--
    Output:
    
    
    
    Array
	(
		[known] => true
		[locationcode] => USNYNYOR
		[fips104] => US
		[iso2] => US
		[iso3] => USA
		[ison] => 840
		[internet] => US
		[countryid] => 254
		[country] => United States
		[regionid] => 154
		[region] => New York
		[regioncode] => NY
		[adm1code] =>     
		[cityid] => 10182
		[city] => New York
		[latitude] => 40.7488
		[longitude] => -73.9846
		[timezone] => -05:00
		[certainty] => 90
		[mapbytesremaining] => Free
	)



    -->

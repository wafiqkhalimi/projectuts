<?php 
$json_string = file_get_contents("http:///api/62b8b0604ce56566/conditions/q/id/Ssemarang.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'current_observation'}->{'display_location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$feelslike_c= $parsed_json->{'current_observation'}->{'feelslike_c'};
$wind_degrees= $parsed_json->{'current_observation'}->{'wind_degrees'};
$temperatur = $parsed_json->{'almanac'}->{'temp_low'}->{'normal'}->{'C'};
$temperatur2 = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
$angin= $parsed_json->{'current_observation'}->{'wind_string'};
echo "Saat ini anda berada di ${location}\n";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Derajat Angin : ${wind_degrees} \n";
echo "<br>";
echo "Suhu Udara : ${feelslike_c} celcius \n";
echo "<br>";
echo "Suhu Udara Paling Rendah : ${temperatur} \n 'Celcius ";
echo "<br>";
echo "Suhu Udara Paling Tinggi : ${temperatur2} \n 'Celcius ";
echo "<br>";
echo "Jarak Pandang : ${visibility_km}kilometers\n";
echo "<br>";
echo "Kekuatan Angin : ${angin}\n";
echo "<br>";
?>
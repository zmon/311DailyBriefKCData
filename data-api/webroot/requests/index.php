<?php

require '../../Slim/Slim.php';

$app = new Slim();

$app->get('/documents', 'getDocuments');

$app->run();

/*
Array
(
    [limit] => 100
    [q] => {"endpoint": baltimore, "status": "open"}
    [skip] => 0
    [_apikey] => i0h95kvp3dyx14hvw9bl								// 
    [callback] => jQuery17209444936546909065_1376344768549
    [_] => 1376344768844
)
*/
function getDocuments() {
$q = $_GET;
//var_dump($q);
//var_dump($q["q"]);
$q = $q["q"];
//var_dump($q);
$q = str_replace('""','"',$q);
$q = str_replace('$gte','"$gte"',$q);
$q = str_replace('$lt','"$lt"',$q);
$q = str_replace('"endpoint": baltimore,','"endpoint": "baltimore",',$q);
//var_dump($q);
//print "\n|$q|\n\n";
$a =  json_decode( $q ); 
//var_dump($a); 
if ( !property_exists($a,'status') ) return json_encode( array() ) ;
if ( $a->status != 'open' ) return json_encode( array() ) ;


$data = '[{"_id":"baltimore.4fa6f484d3e2c2087c00a2cd","status":"open","loc":[-76.6252041422544,39.3441493576759],"endpoint":"baltimore","description":"Rotten benches","service_code":"4e39a3aad3e2c20ed800000e","service_name":"Park Cleaning or Mowing","service_request_id":"12-00314094","updated_datetime":"2012-05-06T18:00:56-04:00","requested_datetime":"2012-05-06T18:00:36-04:00","long":-76.6252041422544,"token":"4fa6f484d3e2c2087c00a2cd","address":"Linkwood Rd, Baltimore","lat":39.3441493576759,"boundary":"Guilford","media_url":"http://311.baltimorecity.gov/attachments/report/4fa6f484d3e2c2087c00a2cd/photo/report.jpg"},{"_id":"baltimore.4fa7a760d3e2c2087c00a3ca","status":"open","loc":[-76.6019239666639,39.2314376756478],"endpoint":"baltimore","service_code":"4e39a3aad3e2c20ed800000a","service_name":"Dirty Alley or Street","service_request_id":"12-00314467","updated_datetime":"2012-05-07T06:44:57-04:00","requested_datetime":"2012-05-07T06:43:44-04:00","long":-76.6019239666639,"token":"4fa7a760d3e2c2087c00a3ca","address":"4010 8th St, Baltimore","lat":39.2314376756478,"boundary":"Brooklyn","media_url":"http://311.baltimorecity.gov/attachments/report/4fa7a760d3e2c2087c00a3ca/photo/report.jpg"},{"_id":"baltimore.4fa742d8d3e2c2087c00a389","status":"open","loc":[-76.5504636333951,39.3638840522453],"endpoint":"baltimore","description":"Reported pothole last week was closed as abated but pothole getting larger. if u drive all the way down northway til u get to harford u will see it on the right.","service_code":"4e39a3abd3e2c20ed8000016","service_name":"Pothole","service_request_id":"12-00314391","updated_datetime":"2012-05-06T23:36:52-04:00","requested_datetime":"2012-05-06T23:34:48-04:00","long":-76.5504636333951,"token":"4fa742d8d3e2c2087c00a389","address":"3004 Northway Dr, Baltimore","lat":39.3638840522453}]';

echo $_GET['callback'].'('. $data . ')';

//	$sql = "select * FROM wine ORDER BY name";
//	try {
//		$db = getConnection();
//		$stmt = $db->query($sql);  
//		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
//		$db = null;
//		echo '{"wine": ' . json_encode($wines) . '}';
//	} catch(PDOException $e) {
//		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
//	}
}


function getConnection() {
	$dbhost="127.0.0.1";
	$dbuser="cellar";
	$dbpass="cellar";
	$dbname="cellar";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>

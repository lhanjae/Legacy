<?

$a = 'a';
for($a; $a<='b'; $a++){
	echo $a;
	echo "<br>";

}


exit;

$connect = @mysql_connect("58.229.163.21", "fz_test2", "test2_588@#") or die ("디비접속에러");
mysql_query("SET NAMES UTF8");

@mysql_select_db ("test_11", $connect) or die ("디비선택에러");


$sql="select * from hanjae_board";
$result = mysql_query($sql, $connect);
$test= mysql_fetch_array($result);
echo "<pre>";


//2중배열
$array = array();
for($i=0; $i<10; $i++){
	for($a=0; $a<10; $a++){
		for($b=5; $b<10; $b++){
			if($b != 7 && $a != 2 && $a != 1 ){
		$array[$i][$a][$b] = $b;
			}
		}
	}
}
print_r($array);



?>
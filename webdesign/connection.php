<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://sqrzjnwkaiwhoo:b4f2f1e5b61b3c03e503fdaee1119f4af484bf6050f93db427611523b3b80765@ec2-44-198-215-235.compute-1.amazonaws.com:5432/dajilnpgjps16i");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
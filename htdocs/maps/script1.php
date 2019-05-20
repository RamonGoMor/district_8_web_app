<?php
		$testString = ",,";
		$testArray = str_getcsv($testString);
		
		$myfile = fopen("test2.csv", "r") or die("Unable to open file!");
		while(!feof($myfile)){
			$newStr = "";
			$testArray = str_getcsv(fgets($myfile));
			$x = 0;
			while( $x < (count($testArray)- 1)){
				if($x==0){
					$newStr .= 'INSERT INTO `crewinfo`( `crew`, `callsign`, `firstname`, `lastname`, `sNumber`, `position`, `area`, `alternatephone`, `personalcell`, `workphone`, `workcell`) VALUES ("'.$testArray[$x].'"';
				}
				else if($x!=(count($testArray)-2)){
					$newStr .= ',"'.$testArray[$x].'"';
				}else{
					$newStr .= ',"'.$testArray[$x].'");';
				}$x++;
			}$newStr.="<br />";echo $newStr;
		}
		fclose($myfile);
		?>
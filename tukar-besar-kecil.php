<?php
function tukar_besar_kecil($string){
$stringUbah=[];
$arrString= str_split($string);
	for($i=0; $i<count($arrString); $i++){
		if(strtolower($arrString[$i])==$arrString[$i]){
        	$stringUbah[]=strtoupper($arrString[$i]);
        }else{
        	$stringUbah[]=strtolower($arrString[$i]);}
	}
 echo implode($stringUbah);
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
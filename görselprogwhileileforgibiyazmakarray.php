<?php
/*$şehir = ["balıkesir",
"kütahya", "bursa", "denizli", "izmit", "mersin", "adana", "artvin"
];
/*for ($i=0; $i<count($şehir);$i++){
echo $şehir[$i];
echo "<br />";
}*/

	$şehir = [
	"balıkesir",
	"kütahya",
	"bursa",
	"denizli",
	"izmit",
	"mersin",
	"adana",
	"artvin"
	];
$kosul = count ($şehir)-1;
while ($kosul) {
echo $şehir[$kosul];
break;
}








?>
<?php
$no          = 1;
foreach ($berita as $t) {
$word = "";
echo $no;
if (($no % 3) ==  0)  {
	$word = 'ekekekeke';
}
echo $word;
echo $t->judul."<br>";

	
$no++; 
} ?>
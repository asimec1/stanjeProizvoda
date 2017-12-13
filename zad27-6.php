<?php
	function stanjeProizvoda($kolicina) 	{
    if($kolicina>=1) {
        echo "Proizvod na stanju."; 
		if ($kolicina<=5) { echo "Treba naručiti proizvod."; }
	}
     else if($kolicina == 0) {
        echo "Proizvod nije na stanju!"; }
     }
    stanjeProizvoda(6);
?>

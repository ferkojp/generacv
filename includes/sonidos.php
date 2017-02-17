<?php 

function pierde(){
	echo "<audio controls='controls' autoplay='autoplay' hidden>
		<source src='tonos/pierde.mp3' />
		</audio>";
}

function gana(){
	echo "<audio controls='controls' autoplay='autoplay' hidden>
		<source src='tonos/gana.mp3' />
		</audio>";
}



function enviaSonido($opcion){
	if($opcion==1){
		gana(); 
	}else{
		pierde();
	}
}

 ?>
<?php
	$metai = date("Y");

	$kelintas = 0;
	foreach($grafikas as $nr => $menuo){
		if($nr%12==1 && $kelintas!=0){
			$metai++;
		}
		$kelintas++;
		echo $this->calendar->generate($metai, $nr, $menuo);
	}
?>
<script>
$(document).ready(function() {
	$( "#datos a" ).click(function( event ) {
		event.preventDefault();
		var laukas = event.target;
		if(event.target.tagName == "STRONG"){
			laukas = event.target.parentElement;
		}
		var laikams = $.ajax( laukas.href )
		  .done(function(atsakas) {
				$('#laikai').html(atsakas);
				$('#submito_mygtukas').prop('disabled', true);
				$("#submito_mygtukas").css("visibility", "hidden");
		  });
	});
});
</script>
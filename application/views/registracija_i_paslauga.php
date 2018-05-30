<section id="content">
	<div class="main-block8">
        <div class="container_12">
			<h1 class="title">Paslauga "<?php echo $paslauga->pasl_pav; ?>"</h1>
				<h2 class="title">Pasirinkite darbuotoją, datą ir laiką!</h2>
			<div class="grid_12 prefix_1">
            <form id="contact-form" action="<?php echo base_url () ; ?>index.php/klientas/registracijosForma/<?php echo $pas_id;?>" method="POST">
				<div><h4>Paslaugą atliekantis specialistas:</h4>
					<div id="pasirink" padding="5px" margin="5px">
						<div style="width: 250px;margin-top: 10;margin-bottom: 10;" > 
							<select class="darb2" name="darbuotojas" id="darbuotojas">
							<option value="0"> Bet kuris specialistas</option>
							<?php
								foreach ($darbuotojai as $darbuotojas){
									echo "<option value='".$darbuotojas->tabel_nr_id."'>".$darbuotojas->vard." ".$darbuotojas->pav."</option>";
								}?>
							</select>
						</div>
					</div>
				</div>
				<div style="width: 40%;float: left;"><h4>Vizito data:</h4>
				<article class="grid_5">
					<div id="datos">
						<?php 
						if(isset($kalendorius)){
							echo $kalendorius;
						}?>
					</div>
				</article>
				</div>
				<article class="grid_5 prefix_1">
					<div  id="laikai"></div>
				</article>
				<article class="grid_10 prefix_1">
                	<div>
                    	<button class="button" type="submit" id="submito_mygtukas" disabled style="visibility: hidden; margin-top: 15;">Tęsti</button>
                	</div>
				</article>
            </form>
            
        </div>
        	<div style="padding-top: 15px;"> 
        		<button class="button" onclick="goBack()"> <i style="padding-top: 2px;" class="fa fa-angle-double-left"></i> Atgal</button> 
        	</div>
    </div>
  </div>
</section>
<script>
	$(document).ready(function() {
		$('#darbuotojas').on('change', function() {
			var jqxhr = $.ajax( "<?php echo base_url(); ?>/index.php/klientas/ajax_gauti_darbuotojo_darbo_dienas/"+this.value+"/<?php echo $pas_id; ?>" )
			  .done(function(atsakas) {
					$('#datos').html(atsakas);
			  });
		});
	});
</script>
<script>
	function goBack() {
	    window.history.back();
	}
</script>
<section id="content">
    <div class="main-block7">
        <div class="container_12">
            <h1 class="title">Išsirinkite vizito laiką!</h1>
            <article class="grid_7 prefix_1">
            <form id="contact-form" action="<?php echo base_url () ; ?>index.php/klientas/registracijosForma/<?php echo $pas_id;?>">
                <input type="hidden" name="data" value="<?php echo $data; ?>" />
                
                <div style="color: #ef67bd" style="height: 20px;"> Pasirinkite dieną: </div>
                <div>
                  <a href="<?php echo base_url () ; ?>index.php/klientas/registracijosLaikas/<?php echo $pas_id;?>/<?php echo date('Y-m-d', strtotime('-1 day', strtotime($data))); ?>#contact-form">&lt; Ankstesnė diena</a>
                  <?php echo $data; ?>
                  <a href="<?php echo base_url () ; ?>index.php/klientas/registracijosLaikas/<?php echo $pas_id;?>/<?php echo date('Y-m-d', strtotime('+1 day', strtotime($data))); ?>#contact-form">&gt; Kita diena</a> 
                </div>

                <?php if (!sizeof($grafikas)) { ?>
                  Nėra laisvų laikų
                <?php } else { ?>
                  <table class="time-table">
                    <thead>
                      <tr>
                        <th style="color: #ef67bd" style="height: 30px">Galimi laikai vizitui:</th>
                      </tr></thead>
                      <br></br>
                      <?php foreach ($grafikas as $laikas) { ?>
                        <tr>
                          <td>
                            <?php if ($laikas['uzimta']) { ?>
                              Užimtas laikas
                            <?php } else { ?>
                              <input type="radio" name="laikas" class="radio" value="<?php echo $laikas['laikas']; ?>-<?php echo $laikas['tabelis']; ?>" />
                            <?php } ?>
                          </td>
                          <td><?php echo $laikas['laikas']; ?></td>
                        </tr>
                      <?php } ?>
                  </table>
                <?php } ?>

                <br></br>
                <div>
                    <button class="button" type="submit" id="submito_mygtukas" disabled style="visibility: hidden;">Tęsti</button>
                </div>
            </form>
          </article>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $('input:radio[name=laikas]').click(function() {
        var checkval = $('input:radio[name=laikas]:checked').val();
		if(typeof something === "undefined"){
			$('#submito_mygtukas').prop('disabled', false);
			$("#submito_mygtukas").css("visibility", "visible"); 
		}else{
			$('#submito_mygtukas').prop('disabled', true);
			$("#submito_mygtukas").css("visibility", "hidden");
		} 	
    });
});
</script>
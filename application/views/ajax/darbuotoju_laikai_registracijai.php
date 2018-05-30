<input type="hidden" name="data" value="<?php echo $data; ?>"/>                
				<?php if (!sizeof($grafikas)) { ?>
                  Nėra laisvų laikų
                <?php } else { ?>
                <h4> Galimi laikai vizitui: </h4> <br>
                  <div class="flex-container">
                      <?php foreach ($grafikas as $laikas) { 

                        $dabar=new DateTime();
                        $dabar->add(new DateInterval('PT1H'));

                        if($dabar < new DateTime($data.' '.$laikas['laikas'] )){

                        ?>
                        <?php if (!$laikas['uzimta']) { ?>
                  <div class="itemas">
                       
                              <input style="width: 20;" type="radio" name="laikas" class="radio" value="<?php echo $laikas['laikas']; ?>-<?php echo $laikas['tabelis']; ?>" />
                        
                          <span style="color: #848383;margin-left: 20;"><?php echo $laikas['laikas']; ?> </span> 
                       

                  </div>
                         <?php } ?>
                      <?php } }?>
                  </div>
                <?php }  ?>

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
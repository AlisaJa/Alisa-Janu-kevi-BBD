<section id="content">
  <div class="main-block">
    <div class="container_12">
      <h1 class="title">Paskutinis žingsnis:</h1>  
        <div class="wrapper border-vert">
          <form id="contact-form" method="post">
        	<article class="grid_5">
            <h4>Jūsų duomenys:</h4>
              <input type="hidden" name="data" value="<?php echo $data; ?>">
              <input type="hidden" name="laikas" value="<?php echo $laikas; ?>">
              <input type="hidden" name="tabelis" value="<?php echo $tabelis; ?>">
              	<fieldset>
                	<div>
                  		<label class="name">
                    		<input type="text" placeholder="Jūsų vardas:" name="vardas" value="<?php if(isset ($vardas)) echo $vardas; ?>">
                    			<br><span class="empty">*Privalomas laukelis.</span> </label>
                	</div>
                 	<div>
                  		<label class="name">
                    		<input type="text" placeholder="Jūsų pavardė:" name="pavarde" value="<?php if(isset ($pavarde))echo $pavarde; ?>">
                    			<br><span class="empty">*Privalomas laukelis.</span> </label>
                	</div>
                	<div>
                  		<label class="email">
                    		<input type="email" placeholder="El. paštas:" name="el_past" value="<?php if(isset ($el_past)) echo $el_past; ?>">
                    			<br><span class="empty">*Privalomas laukelis.</span> </label>
                	</div>
                	<div>
                  		<label class="phone">
                    		<input type="tel" placeholder="Telefono numeris:" name="tel_nr" value="<?php if(isset ($tel_nr)) echo $tel_nr; ?>">
                    			<br><span class="empty">*Privalomas laukelis.</span> </label>
                	</div>
                	<div>
                  		<label class="message">
                    		<textarea placeholder="Pastabos apie užsakymą:" name="pastab" value="<?php if(isset ($pastab)) echo $pastab; ?>"></textarea></label>
                	</div>
                	<div style="padding-left: 27%;">
                  		<button class="button" type="submit" name="Registruotis" >Registruotis</button> 
                	</div>
              </fieldset>
              <div style="padding-top: 15px;"> 
                <button class="button" type="button" onclick="goBack()"> <i style="padding-top: 2px;" class="fa fa-angle-double-left"></i> Atgal</button> 
              </div>
          </article>  
          <article class="grid_6 prefix_2">
            <br></br>
          	<h7>Užsakymo informacija:</h7>
            <h4>Pasirinkta paslauga:</h4>
            <table class="table">
              <thead>
                  <tr>
                  <th>Paslauga </th> <th> Trukmė </th> <th> Kaina €</th>
                  </tr>
              </thead>
            <?php echo "
            <tr>
                <td>" .$paslaugosinfo->pasl_pav."</td>
                <td>" .$paslaugosinfo->trukme."</td>
                <td>" .$paslaugosinfo->kaina."</td>
            </tr>";?>
            </table>
          <h4>Pasirinkta data ir laikas:</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>Data</th><th>Laikas</th>
                  </tr>
                </thead>
                    <?PHP echo "
                <tr>
                    <td>".$data."</td>
                    <td>".$laikas." val. </td>
                </tr>";?>
              </table>
            <h4>Paslaugą atliks:</h4>
                <?php echo "
                 <h5> ".$darbuotojo_duomenys->vard.' '.$darbuotojo_duomenys->pav." </h5> ";?>
            <h4>Užsakymo suma:</h4>
               <?php echo "
               <h5 id='paslaugo_suma'> ".($paslaugosinfo->kaina)." € </h5> ";?>
              <div id="pranesimas"></div>
                <input type="hidden" name="nuolaidos_kodas" id="nuolaidos_kodas" value="0"> </input>
              <div> <input id="nuolaidos_kodas_ivedimui" class="darb1" type="text" placeholder="Nuolaidos pavadinimas:" name="nuolaidos_pavadinimas" value=""> 
              </div>
                  <div style="padding-left: 27%; padding-top: 15px;">
                      <button class="button" type="button" id="pritaikyti_nuolaida" name="Pritaikyti" >Pritaikyti</button> 
                  </div>
                  <?php echo validation_errors(); ?>
            </form>
          </article>
          <script>
    
            $(document).ready(function() {
              $('#pritaikyti_nuolaida').click(function() {

              var nuol_kodas = $('#nuolaidos_kodas_ivedimui').val();


                 $.post("<?php echo base_url(); ?>/index.php/klientas/ajax_gauti_nuolaida/",
                {
                    kodas: nuol_kodas
                },
                function(data, status){
                     if(typeof data.nuolaida !== "undefined" && data.nuolaida){
                        $("#nuolaidos_kodas").val(data.id);
                        var SUMA = <?php echo $paslaugosinfo->kaina; ?>-data.nuolaida;
                        $("#paslaugo_suma").html(SUMA.toFixed(2)+" € ");
                        $("#pranesimas").html("Nuolaida pritaikyta");
                    }else{
                      $("#pranesimas").html(data.klaida);
                    }
                }, "json");
            });
            });  
          </script>
          <script>
            function goBack() {
                window.history.back();
            }
          </script>
        </div>
      </div>
    </div>
  </div>
</section>
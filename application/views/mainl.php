<body>
  <script>
    function deletechecked(){
      if (confirm("Ar tikrai norite ištrinti registraciją?")){
        return true;}
      else {
        return false;} }
    function deletechecked1(){
      if (confirm("Ar tikrai norite atšaukti registraciją?")){
        return true;}
      else {
        return false; } }
  </script>
  <div class="extra-block">
    <section id="content">
      <div class="main-block6" style="width:  1200px; height: 600;">
        <div class="prefix_1" style="margin-left: 4%;">
          <!--Darbuotojo išvedimas į ekraną -->
          <div class="wrapper" style=" width:  1200px;">
          	<div> 
          		<div> <h1 style="font-size: 30;color:#ef97cc;">Darbuotojas: <?php print_r($vard[0]->vard) ?> </h1></div>
          		<div style="padding-bottom: 10;"><h1 style="font-size: 25;color:#ef97cc;"> Pareigos: <?php print_r($pareigos[0]->pareigos) ?></h1> </div>
        	  </div>
                <?php if ($regtvarkymas) {?> 
            <div>
                <a href="<?php echo base_url("index.php/klientas/registracija") ;?>" class="button" type="submit" >Pridėti naują registraciją</a>
            </div> <?php } ?> 
                <form id="contact-form" method="post">
                 <div style="float: left;">
                 	  <?php if ($regtvarkymas) {?>
                 	  <div style="margin-bottom: 10; float: left;"">
                      <select class="reg1" name="tabel_nr_id" id="darbuotojas">
                        <option value="">Visi darbuotojai</option>
                          <?php
                            foreach($darbuotojai as $darbuotojas){
                              echo "<option value='".$darbuotojas->tabel_nr_id."'>".$darbuotojas->vard." ".$darbuotojas->pav."</option>";
                            }
                          ?>
                      </select>
                    </div> <?php } ?>
                  <input class="reg" type="text" placeholder="Registracijos id:" name="reg_id" id="reg_id" value="<?php if (isset($_POST['reg_id'])) echo $_POST['reg_id']; ?>">
                      </div>
                       <div><input class="reg_filtr" type="submit" class="button3" value="Filtruoti" ></div> <br>
                  </form>
            <!--Visų registracijų lentelė -->
            <div class="scrollit6">
              <div> 
                  <table class="cinereousTable1" style="width: 1070px;">
                    <thead>
                      <tr>
                        <th>Reg. ID</th> <th>Nuolaida</th> <th>Paslauga</th> <th>Darbuotojas</th> <th>Pateikimo data</th> <th>Atlikimo data</th> <th>Būsena</th> <th>Kliento vardas</th> <th>Kliento pavardė</th> <th>Tel. Nr.</th> <th>El.Paštas</th> <th>Pastaba</th> <th>Suma</th> <?php if($regtvarkymas) echo '<th>Atšaukti</th>';?> <?php if($regtvarkymas) echo '<th>Redaguoti</th>';?>
                      </tr>
                    </thead>
                      <?php
                        foreach($manoreg as $manoregistracijos){
                                echo'<tr>';
                                echo'<td>',$manoregistracijos->reg_id, '</td>';
                                echo'<td>',$manoregistracijos->nuol_id, '</td>';
                                echo'<td>',$manoregistracijos->pas_id,'</td>';
                                echo'<td>',$manoregistracijos->vard,' ',$manoregistracijos->pav, '</td>';
                                echo'<td>',$manoregistracijos->pateik_data,'</td>';
                                echo'<td>',$manoregistracijos->atlik_data,'</td>';
                                echo'<td>',$manoregistracijos->busena,'</td>';
                                echo'<td>',$manoregistracijos->kl_vard,'</td>';
                                echo'<td>',$manoregistracijos->kl_pav,'</td>';
                                echo'<td>',$manoregistracijos->kl_tel_nr,'</td>';
                                echo'<td>',$manoregistracijos->el_past,'</td>';
                                echo'<td>',$manoregistracijos->pastab,'</td>';
                                echo'<td>',$manoregistracijos->uzsk_suma,'</td>';
                                  if ($regtvarkymas) {
                                echo ' <td>', '<a href="', base_url(), 'index.php/adminas/atsauktivizita/',$manoregistracijos->reg_id,'/2" onClick="return deletechecked1()";>Atšaukti</a>','</td>';}
                                  if ($regtvarkymas) {
                                echo ' <td>', '<a href="', base_url(), 'index.php/adminas/registracijuredagavimas/',$manoregistracijos->reg_id,'"> Redaguoti </a>',' </td>'; }
                                echo '</tr>'; }?>
                  </table>
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
      </section>
    <script>
      //Datos jquery pikeris
      $( document ).ready(function() {
      $( "#atlik_data" ).datepicker({
        inline: true,
        dateFormat: "yy-mm-dd"
      });
      $( "#data_iki" ).datepicker({
        inline: true,
        dateFormat: "yy-mm-dd"
      });
      });
    </script>
  </div>
</body>
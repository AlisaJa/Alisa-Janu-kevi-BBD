<body>
<div class="extra-block">
  <section id="content">
    <div class="main-block4" style="width:500px;">
      <div class="container_12">
        <div style="width: 700px; padding-left: 130;">
          <h4 style="font-size:  30; ">Grafikų redagavimas</h4>
	               <?php echo validation_errors(); ?>
            <div class="grid_9">
              <form method="post">
                <div id="testas1" style="width: 250px; margin-top: 10;">
                  <select class="darb1" name="tabel_nr_id" id="darbuotojas">
                    <option value="">Pasirinkti darbuotoją:</option>
                      <?php
                      foreach($darbuotojai as $darbuotojas){

                        echo "<option value='".$darbuotojas->tabel_nr_id."' ";

                        if ($darbuotojas->tabel_nr_id==$grafikuduomenys->tabel_nr_id){

                          echo "selected='selected'";
                              }
                        echo ">".$darbuotojas->vard." ".$darbuotojas->pav."</option>";
                              } ?>
                  </select> 
                </div> <br>

                  <div style="width: 250px;""> <input class="darb1" type="text" placeholder="Grafiko pavadinimas:" name="dg_pav" id="dg_pav" value="<?php echo $grafikuduomenys->dg_pav;?>"> </div>

                  <div style="width: 250px;"> <input class="darb1" type="text" placeholder="Darbo diena (nuo):" name="darb_dat_nuo" value="<?php echo $grafikuduomenys->darb_dat_nuo;?>" id="darb_dat_nuo"> </div>
                  <div style="width: 250px;"> 
                        <select class="darb1" name="laikas_nuo" >
                          <?php
                          for($li=8; $li<=19; $li++){
                            $sk = $li;
                            if($sk<=9){
                              $sk="0".$sk;
                            }
                            echo '<option value="'.$sk.':00:00" ';
                            if ($sk.':00:00' == $grafikuduomenys->laikas_nuo){
                              echo "selected='selected'";
                             }

                            echo '>'.$sk.':00</option>';
                          }
                          ?>
                        </select><br/></div>

                  <div style="width: 250px;"> <input class="darb1" type="text" placeholder="Darbo diena (iki):" name="darbo_data_iki" value="<?php echo $grafikuduomenys->darbo_data_iki;?>" id="darbo_data_iki"> </div>
                  
                        <select class="darb1" name="laikas_iki" >
                          <?php
                         for($li=8; $li<=19; $li++){
                            $sk = $li;
                            if($sk<=9){
                              $sk="0".$sk;
                            }
                            echo '<option value="'.$sk.':00:00" ';
                            if ($sk.':00:00' == $grafikuduomenys->laikas_iki){
                              echo "selected='selected'";
                             }

                            echo '>'.$sk.':00</option>';
                          }
                          ?>
                        </select><br/></div>

                  <div style="margin-left: 10%;"> <button class="button" type="submit" > Atnaujinti </button> </div> <br>
              </form>

<script>
//Datos jquery pikeris
$( document ).ready(function() {
$( "#darb_dat_nuo" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
$( "#darbo_data_iki" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
});
</script>

  </section>
</div>
</body>
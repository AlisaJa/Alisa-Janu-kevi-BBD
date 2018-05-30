<body>
<div class="extra-block">
  <section id="content">
    <div class="main-block4">
      <div class="container_12">
        <div style="width: 700px; padding-left: 130;">
          <h4 style="text-align:  center; font-size:  30; ">Grafikų peržiūra</h4>
            <div class="grid_9">
              <form id="contact-form" method="post">
                <div class="graf_per">
                  <select style="width: 230px;" name="tabel_nr_id" id="darbuotojas">
                    <option value="">Visi darbuotojai</option>
                      <?php
                        foreach($darbuotojai as $darbuotojas){
                          echo "<option value='".$darbuotojas->tabel_nr_id."'>".$darbuotojas->vard." ".$darbuotojas->pav."</option>";
                        }
                      ?>
                  </select>
                </div>

                <!--FILTRAVIMAS-->

                <div id="testas1" style="width: 230px;"><input style="position: relative; z-index: 100000;" class="darb" type="text" placeholder="Darbo diena (nuo):" name="data_nuo" id="data_nuo" value="<?php if (isset($_POST['darb_dat_nuo'])) echo $_POST['darb_dat_nuo']; ?>">
                </div>

                <div id="testas2" style="width: 220px;"><input style="position: relative; z-index: 100000;" class="darb" type="text" placeholder="Darbo diena (iki):" name="data_iki" id="data_iki" value="<?php if (isset($_POST['darbo_data_iki'])) echo $_POST['darbo_data_iki']; ?>">
                </div><br>
                  <br>
                <div style="width: 100px;"><input style="width: 100px;" type="submit" class="button2" value="Filtruoti"></div> <br>
              </form>
            </div>
            <div class="scrollit3">
              <table class="cinereousTable1">
                    <thead>
                    <tr>
                      <th>Darbuotojas</th><th>Grafiko Pav.</th><th>Data nuo</th><th>Data iki</th><th>Laikas nuo</th><th>Laikas iki</th><th>Redagavimas</th>
                      </tr>
                    </thead>
                        <?php
                        foreach($darbografikas as $darbografikas){
                          echo "<tr>
                              <td>".$darbografikas->vard.' '.$darbografikas->pav."</td>
                              <td>".$darbografikas->dg_pav."</td>
                              <td>".$darbografikas->darb_dat_nuo."</td>
                              <td>".$darbografikas->darbo_data_iki."</td>
                              <td>".$darbografikas->laikas_nuo."</td>
                              <td>".$darbografikas->laikas_iki."</td>";
                           if ($graftvarkymas) {
                           echo ' <td>', '<a href="', base_url(), 'index.php/adminas/grafikai_redag/',$darbografikas->dg_id,'"> Redaguoti </a>',' </td>';
                           }
                          echo '</tr>'; }?>
            </table> 
        </div>
      </div>
    </div>
  </div>
  <script>
//Datos jquery pikeris
$( document ).ready(function() {
$( "#data_nuo" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
$( "#data_iki" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
});
</script>
  </section>
</div>
</body>
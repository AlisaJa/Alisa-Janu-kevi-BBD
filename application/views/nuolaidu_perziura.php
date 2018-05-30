<body>
<div class="extra-block">
  <section id="content">
    <div class="main-block4">
      <div class="container_12">
        <div style="width: 700px; padding-left: 130;">
          <h4 style="text-align:  center; font-size:  30; padding-bottom: 30px;">Nuolaidų peržiūra</h4>
            <div class="grid_9">
              <form id="contact-form" method="post">

                <!--FILTRAVIMAS-->

                <div id="testas1" style="width: 230px;"><input style="position: relative; z-index: 100000;" class="darb" type="text" placeholder="Galiojimo diena (nuo):" name="nuol_data_nuo" id="nuol_data_nuo" value="<?php if (isset($_POST['nuol_data_nuo'])) echo $_POST['nuol_data_nuo']; ?>">
                </div>

                <div id="testas2" style="width: 220px;"><input style="position: relative; z-index: 100000;" class="darb" type="text" placeholder="Galiojimo diena (iki):" name="nuol_data_iki" id="nuol_data_iki" value="<?php if (isset($_POST['nuol_data_iki'])) echo $_POST['nuol_data_iki']; ?>">
                </div><br>
                  <br>
                <div style="width: 100px;"><input style="width: 100px;" type="submit" class="button2" value="Filtruoti"></div> <br>
              </form>
            </div>
            <div class="scrollit3">
              <table class="cinereousTable1">
                    <thead>
                    <tr>
                      <th>Grafiko Pav.</th><th>Data nuo</th><th>Data iki</th><th>Suma</th><th>Rūšis</th><th>Redagavimas</th>
                      </tr>
                    </thead>
                        <?php
                        foreach($nuolaidaa as $nuolaidaa){
                          echo "<tr>
                              <td>".$nuolaidaa->nuol_pav."</td>
                              <td>".$nuolaidaa->nuol_data_nuo."</td>
                              <td>".$nuolaidaa->nuol_data_iki."</td>
                              <td>".$nuolaidaa->suma."</td>
                              <td>".$nuolaidaa->rusis."</td>";
                           echo ' <td>', '<a href="', base_url(), 'index.php/adminas/nuolaidos_redag/',$nuolaidaa->nuol_id,'"> Redaguoti </a>',' </td>';
                          echo '</tr>'; }?>
            </table> 
        </div>
      </div>
    </div>
  </div>
  <script>
//Datos jquery pikeris
$( document ).ready(function() {
$( "#nuol_data_nuo" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
$( "#nuol_data_iki" ).datepicker({
  inline: true,
  dateFormat: "yy-mm-dd"
});
});
</script>
  </section>
</div>
</body>
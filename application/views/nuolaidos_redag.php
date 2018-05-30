<body>
<div class="extra-block">
  <section id="content">
    <div class="main-block4" style="width:500px;">
      <div class="container_12">
        <div style="width: 700px; padding-left: 130;">
          <h4 style="font-size:  30; ">Nuolaidų redagavimas</h4>
	               <?php echo validation_errors(); ?>
            <div class="grid_9">
              <form id="contact-form" method="post">

                  <div style="width: 250px;""> <input class="darb1" type="text" placeholder="Nuolaidos pavadinimas:" name="nuol_pav" id="nuol_pav" value="<?php echo $nuolaiduduomenys->nuol_pav;?>"> </div>

                  <div style="width: 250px;"> <input style="position: relative; z-index: 100000;" class="darb1" type="text" placeholder="Galiojimo diena (nuo):" name="nuol_data_nuo" value="<?php echo $nuolaiduduomenys->nuol_data_nuo;?>" id="nuol_data_nuo"> </div>

                  <div style="width: 250px;"> <input style="position: relative; z-index: 100000;" class="darb1" type="text" placeholder="Galiojimo diena (iki):" name="nuol_data_iki" value="<?php echo $nuolaiduduomenys->nuol_data_iki;?>" id="nuol_data_iki"> </div>

                  <div style="width: 250px;"> <input class="darb1" type="text" placeholder="Suma:" name="suma" value="<?php echo $nuolaiduduomenys->suma;?>" id="suma"> </div>

                  <div style="width: 250px;"> <input class="darb1" type="text" placeholder="Rūšis:" name="rusis" value="<?php echo $nuolaiduduomenys->rusis;?>" id="rusis"> </div>

          </div>
                  <div style="margin-left: 10%;"> <button class="button" type="submit" > Atnaujinti </button> </div> <br>
              </form>

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
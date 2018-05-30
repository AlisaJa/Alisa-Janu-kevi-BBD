<body>
<div class="extra-block">
  <section id="content">
 <div class="main-block6" style="width:  500; height: 600px;">
      <div class="container_12">
        <div class="grid_9">
                 <?php if(null!=($this->session->flashdata('msg'))){ ?>             
                    <div class="main-block5" style="margin: 0px 0px 0px 25px">
                      <h4>
                        <div class="alert alert-success" style="text-align: center;">
                          <strong> <?php echo ($this->session->flashdata('msg')); ?> </strong>
                        </div>
                      </h4>
                    </div>
                    <br></br>
                  <?php } echo validation_errors(); ?> 
          <div style="margin-left: 10%;"> <h4 style="font-size:  30;">Nuolaidos suvedimas</h4> </div><br>
            <div class="prefix_1">
          <!--Nuolaidos suvedimo forma -->
              <form id="contact-form" method="post">

                  <div> <input style="width: 300px;" type="text" placeholder="Nuolaidos pavadinimas:" name="nuol_pav" id="nuol_pav" value=""> 
                  </div><br>
                  <div> <input style="width: 300px; position: relative; z-index: 100000;" type="text" placeholder="Galiojimo diena (nuo):" name="nuol_data_nuo" value="" id="nuol_data_nuo"> 
                  </div><br>
                  <div> <input style="width: 300px;  position: relative; z-index: 100000;" type="text" placeholder="Galiojimo diena (iki):" name="nuol_data_iki" value="" id="nuol_data_iki"> </div><br>
                  <div> <input style="width: 300px;  position: relative; z-index: 100000;" type="text" placeholder="Suma:" name="suma" value=""> </div><br>
                  <div> <input style="width: 300px;  position: relative; z-index: 100000;" type="text" placeholder="Rūšis:" name="rusis" value=""> </div><br>
                  
                </div><br>

                  <div style="margin-left: 27%;"> <input type="submit" class="button" value="Sukurti"> </div> <br>
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

      </div>
    </div>
    </div>
  </div>
  </section>
</div>
</body>
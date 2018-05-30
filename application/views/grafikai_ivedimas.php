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
          <div style="margin-left: 10%;"> <h4 style="font-size:  30;">Darbo grafiko suvedimas</h4> </div><br>
            <div class="prefix_1">
          <!--Darbo grafiko suvedimo forma -->
              <form id="contact-form" method="post">
                <div>
                  <select style="width: 300px;" name="tabel_nr_id" id="darbuotojas">
                    <option value="">Pasirinkti darbuotoją:</option>
                      <?php
                       foreach($darbuotojai as $darbuotojas){
                         echo "<option value='".$darbuotojas->tabel_nr_id."'>".$darbuotojas->vard." ".$darbuotojas->pav."</option>";
                        }
                      ?>
                  </select> 
                </div> <br>
                  <div> <input style="width: 300px;" type="text" placeholder="Grafiko pavadinimas:" name="grafiko_pavadinimas" id="grafiko_pavadinimas" value=""> 
                  </div><br>
                  <div> <input style="width: 300px; position: relative; z-index: 100000;" type="text" placeholder="Darbo diena (nuo):" name="data_nuo" value="" id="data_nuo"> 
                  </div><br>
                    <div> 
                        <select style="width: 300px;" name="laikas_nuo" id="laikas_nuo">
                          <option value="8:00:00">8:00</option>
                          <option value="9:00:00">9:00</option>
                          <option value="10:00:00">10:00</option>
                          <option value="11:00:00">11:00</option>
                          <option value="12:00:00">12:00</option>
                          <option value="13:00:00">13:00</option>
                          <option value="14:00:00">14:00</option>
                          <option value="15:00:00">15:00</option>
                          <option value="16:00:00">16:00</option>
                          <option value="17:00:00">17:00</option>
                          <option value="18:00:00">18:00</option>
                          <option value="19:00:00">19:00</option>
                        </select><br/></div><br>

                  <div> <input style="width: 300px;  position: relative; z-index: 100000;" type="text" placeholder="Darbo diena (iki):" name="data_iki" value="" id="data_iki"> </div><br>
                  
                        <select style="width: 300px;" name="laikas_iki" id="laikas_iki">
                          <option value="8:00:00">8:00</option>
                          <option value="9:00:00">9:00</option>
                          <option value="10:00:00">10:00</option>
                          <option value="11:00:00">11:00</option>
                          <option value="12:00:00">12:00</option>
                          <option value="13:00:00">13:00</option>
                          <option value="14:00:00">14:00</option>
                          <option value="15:00:00">15:00</option>
                          <option value="16:00:00">16:00</option>
                          <option value="17:00:00">17:00</option>
                          <option value="18:00:00">18:00</option>
                          <option value="19:00:00">19:00</option>
                        </select><br/></div><br>

                  <div style="margin-left: 27%;"> <input type="submit" class="button" value="Sukurti"> </div> <br>
              </form>

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

      </div>
    </div>
    </div>
  </div>
  </section>
</div>
</body>
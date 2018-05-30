<body>
<div class="extra-block">
  <section id="content">
    <div class="main-block6" style="width: 850;">
      <div class="container_12">
        <div class="prefix_1">
           <div style="padding-left: 20%;"> <h4>Asmeniniai duomenys </h4></div>
                  <table class="cinereousTable1">
                    <thead>
                    <tr>
                      <th>Tabelio ID</th><th>Pareigos</th><th>Vardas</th><th>Pavardė</th><th>Asmens kodas</th><th>Tel.nr</th><th>Adresas</th><th>Slaptažodis</th>
                      </tr>
                    </thead>
                        <?php
                        foreach($darbuotojas as $darbuotojas){
                          echo
                        "
                            <tr>
                              <td>".$darbuotojas->tabel_nr_id."</td>
                              <td>".$darbuotojas->pareigos."</td>
                              <td>".$darbuotojas->vard."</td>
                              <td>".$darbuotojas->pav."</td>
                              <td>".$darbuotojas->asm_k."</td>
                              <td>".$darbuotojas->tel_nr."</td>
                              <td>".$darbuotojas->adr."</td>
                              <td>".$darbuotojas->slapt."</td>
                            </tr>";
                              }
                          ?>
                  </table>
            <h4 style="font-size: 80%; padding-left: 50%;"> <a href="<?php echo base_url () ; ?>index.php/adminas/asmduomenys" >Redaguoti asm.duom.</a> </h4>

          <?php if(isset($darbuotojopaslaugos)){

          ?>

            <div style="padding-left: 20%;"><h4>Atliekamos paslaugos</h4></div>

            <div class="scrollit">
              <table class="cinereousTable1">
                    <thead>
                    <tr>
                      <th>Pavadinimas</th><th>Trukmė</th><th>Kaina</th>
                      </tr>
                    </thead>

                        <?php
                        foreach($darbuotojopaslaugos as $darbuotojopaslaugos){
                          echo
                        "
                            <tr>
                              <td>".$darbuotojopaslaugos->pasl_pav."</td>
                              <td>".$darbuotojopaslaugos->trukme."</td>
                              <td>".$darbuotojopaslaugos->kaina."</td>
                            </tr>";
                              }
                          ?>
                  </table>
                </div>

                        <?php } ?>
      
              <div style="padding-left: 20%;"><h4>Mano darbo grafikas</h4></div>

            <div class="scrollit5">
              <table class="cinereousTable1">
                    <thead>
                    <tr>
                      <th>Pavadinimas</th><th>Data nuo</th><th>Data iki</th><th>Laikas nuo</th><th>Laikas iki</th>
                      </tr>
                    </thead>
                        <?php
                        foreach($darbografikas as $darbografikas){
                          echo
                        "
                            <tr>
                              <td>".$darbografikas->dg_pav."</td>
                              <td>".$darbografikas->darb_dat_nuo."</td>
                              <td>".$darbografikas->darbo_data_iki."</td>
                              <td>".$darbografikas->laikas_nuo."</td>
                              <td>".$darbografikas->laikas_iki."</td>
                            </tr>";
                              }
                          ?>
                  </table>
                </div>
                
  
      </div>
    </div>
  </div>
  </section>
</div>
</body>
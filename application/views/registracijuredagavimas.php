<body>
  <section id="content">
    <div class="main-block" style="width: 38%;">
      <div class="container_12">
        <div class="prefix_1">
          <article class="grid_5">
            <!--admin registracijų redagavimo langas -->
            <div style="width: 500px;"><h3 style="padding-bottom: 20; color:#ef97cc;">Registracijų duomenys</h3></div>
            <?php echo validation_errors();?>
            <form id="contact-form" method="post">
              <fieldset>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Kliento Vardas: </div>
                   <input type="text" placeholder="Kliento Vardas:" name="kl_vard" class="form_input" value="<?php echo $registracijuduomenys->kl_vard;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Kliento Pavardė: </div>
                    <input type="text" placeholder="Kliento pavardė:" name="kl_pav" class="form_input" value="<?php echo $registracijuduomenys->kl_pav;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Kliento Tel.nr.: </div>
                    <input type="tel" placeholder="Kliento telefono numeris:" name="kl_tel_nr" class="form_input" value="<?php echo $registracijuduomenys->kl_tel_nr;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Kliento El. paštas: </div>
                    <input placeholder="El. paštas:" class="form_input" name="el_past" value="<?php echo $registracijuduomenys->el_past;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Kliento pastabos: </div>
                    <input placeholder="Kliento pastabos:" class="form_input" name="pastab"  value="<?php echo $registracijuduomenys->pastab;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Tabel nr. ID: </div>
                    <input placeholder="Tabel nr. ID:" class="form_input" name="tabel_nr_id"  value="<?php echo $registracijuduomenys->tabel_nr_id;?>"/> </label>
                </div>
                <div>
                  <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Data: </div>
                    <input placeholder="Atlikimo data:" class="form_input" name="data"  value="<?php echo $registracijuduomenys->atlik_data;?>"/> </label>
                </div>

                <div><br></br>
                  <button class="button" type="submit" >Atnaujinti</button> 


                </div>
              </fieldset>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
</body>

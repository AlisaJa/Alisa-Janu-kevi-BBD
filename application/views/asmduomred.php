<body>
  <section id="content">
    <div class="main-block" style="width:  600px;">
      <div class="container_12">
        <div class="prefix_1">
          <article class="grid_5">
            <h3 style="padding-bottom: 20;">Mano duomenys</h3>
              <?php echo validation_errors(); ?>
              <form id="contact-form" method="post">
                <fieldset>
                  <div>
                    <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Vardas: </div>
                      <input type="text" placeholder="Vardas:" name="vard" class="form_input" value="<?php echo $asmeniniaiduomenys->vard;?>"/> </label>
                  </div>
                  <div>
                    <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Pavardė: </div>
                      <input type="text" placeholder="Pavardė:" name="pav" class="form_input" value="<?php echo $asmeniniaiduomenys->pav;?>"/> </label>
                  </div>
                  <div>
                    <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Tel.nr.: </div>
                      <input type="tel" placeholder="Telefono numeris:" name="tel_nr" class="form_input" value="<?php echo $asmeniniaiduomenys->tel_nr;?>"/></label>
                  </div>
                  <div>
                    <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Adresas: </div>
                      <input placeholder="Adresas:" class="form_input" name="adr" value="<?php echo $asmeniniaiduomenys->adr;?>"/> </label>
                  </div>
                  <div>
                    <label class="name" style="padding-top: 13;"> <div style="padding-bottom:  3px;"> Slaptažodis: </div>
                      <input placeholder="Slaptažodis:" class="form_input" type="password" name="slapt"  value="<?php echo $asmeniniaiduomenys->slapt;?>"/> </label>
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
</body>

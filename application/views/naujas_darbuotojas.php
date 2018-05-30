<body>
  <div class="extra-block">
    <section id="content">
      <?php if(null!=($this->session->flashdata('msg'))){ ?>             
        <div class="main-block5">
          <h4> <div class="alert alert-success" style="text-align: center;"> <strong> <?php echo ($this->session->flashdata('msg')); ?> </strong> </div>
          </h4>
        </div> <br></br>   <?php } ?> 
    <div class="main-block6" style="width:  620px; height: 480px;">
      <div class="container_12">
        <div class="grid_9">
          <div style="margin-left: 17%;"> <h4 style="font-size:  30px; padding-bottom: 50px;">Sukurti naują darbuotoją</h4> </div>
          <?php echo validation_errors();?>
            <div class="prefix_1">
                <!--Naujo darbuotojo suvedimo forma -->
              <form id="contact-form" method="post">
                <fieldset>
                  <div>
                      <label class="name">
                        <input type="text" placeholder="Vardas:" name="vard" value="<?php if(isset ($vard)) echo $vard; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="name">
                        <input type="text" placeholder="Pavardė:" name="pav" value="<?php if(isset ($pav))echo $pav; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="name">
                        <input type="text" placeholder="Asmens kodas:" name="asm_k" value="<?php if(isset ($asm_k))echo $asm_k; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="name">
                        <input type="text" placeholder="Pareigos:" name="pareigos" value="<?php if(isset ($pareigos)) echo $pareigos; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="phone">
                        <input type="tel" placeholder="Telefono numeris:" name="tel_nr" value="<?php if(isset ($tel_nr)) echo $tel_nr; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="name">
                        <input type="text" placeholder="Adresas:" name="adr" value="<?php if(isset ($adr)) echo $adr; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  <div>
                      <label class="name">
                        <input type="password" placeholder="Slaptažodis:" name="slapt" value="<?php if(isset ($slapt)) echo $slapt; ?>">
                          <br><span class="empty">*Privalomas laukelis.</span> </label>
                  </div>
                  </div>
                    <div style="margin-left: 34%;"> <input type="submit" class="button" value="Sukurti"> </div> <br>
                  </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
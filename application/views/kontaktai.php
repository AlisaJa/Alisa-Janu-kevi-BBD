<body>
  <section id="content">
    <div class="main-block">
      <div class="container_12">
        <div class="wrapper border-vert">
          <article class="grid_5">
            <h3>ADRESAS</h3>
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.30004561228!2d25.245457799645763!3d54.670200181821045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd947870846ccd%3A0x2703d44d2adaf9c!2sSavanori%C5%B3+pr.+49%2C+Vilnius+03130!5e0!3m2!1slt!2slt!4v1512338780766" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <dl class="address">
              <dt>WONDERLAND<br>
                Savanorių pr. 49-64<br>
                Vilnius, Lietuva</dt>
              <dd><i3 class="fa fa-mobile" aria-hidden="true"></i3> <span>Telefonas:</span> +37060773181 </dd>
            </dl>
          </article>
          <article class="grid_5 prefix_2">
            <?php echo validation_errors(); ?>
            <h3>Susisiekite su mumis!</h3>
            <form id="contact-form" method="post" action="<?php echo base_url () ; ?>index.php/klientas/kontaktai">
              <div class="success"> Kontaktinė forma užpildyta! <strong>Mes su Jumis susisieksime.</strong> </div>
              <fieldset>
                <div>
                  <label class="name">
                    <input value="<?php echo $vardas; ?>" type="text" name="vardas" placeholder="Jūsų vardas:">
                    <br><span class="empty">*Privalomas laukelis.</span> </label>
                </div>
                <div>
                  <label class="email">
                    <input value="<?php echo $elpastas; ?>" type="text" name="elpastas" placeholder="El. paštas:">
                    <br><span class="empty">*Privalomas laukelis.</span> </label>
                </div>
                <div>
                  <label class="phone">
                    <input value="<?php echo $telnr; ?>" type="text" name="telnr" placeholder="Telefono numeris:">
                    <br><span class="empty">*Privalomas laukelis.</span> </label>
                </div>
                <div>
                  <label class="message">
                    <textarea name="zinute" placeholder="Jūsų žinutė:" ><?php echo $zinute; ?></textarea>
                    <br><span class="empty">*Privalomas laukelis.</span> </label>
                </div>
                <div>
                  <button class="button" type="reset" >Ištrinti</button>
                  <button class="button" type="submit" >Siųsti</button> 
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

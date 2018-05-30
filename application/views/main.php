<body>
  <section id="content">
    <?php if(null!=($this->session->flashdata('msg'))){ ?>              
      <div class="main-block5">
        <h4>
          <div class="alert alert-success">
            <strong style="padding-left: 32% "><?php echo ($this->session->flashdata('msg')); ?> </strong>
          </div>
        </h4>
      </div>
      <br></br>
    <?php } ?> 
    <div class="main-block4">
      <div class="wrapper">
        <article class="grid_5">
          <figure class="box-1"><img src="images/page1-img1.jpg" alt="">
              <figcaption>Paslaugos <a href='<?php echo base_url(); ?>/index.php/klientas/paslaugos';"></a></figcaption>
          </figure>
        </article>
        <article class="grid_5">
          <figure class="box-1"><img src="images/page1-img2.jpg" alt="">
            <figcaption>Registracija <a href='<?php echo base_url(); ?>/index.php/klientas/registracija';"></a></figcaption>
          </figure>
        </article>
        <article class="grid_5">
          <figure class="box-1"><img src="images/page1-img3.jpg" alt="">
            <figcaption>Kontaktai <a href='<?php echo base_url(); ?>/index.php/klientas/kontaktai';></a></figcaption>
          </figure>
        </article>
      </div>
    </div>
  </section>
</body>
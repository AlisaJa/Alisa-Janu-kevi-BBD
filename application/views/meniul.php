<header>
    <script>
    function deletechecked1(){
      if (confirm("Ar tikrai norite atsijungti?"))
      {
        return true;
      }
      else 
      {
        return false;
      }
    }
  </script>
    <div class="row-nav">
      <div class="main" style="width: 1250px;">
      <h1 class="logo"><a href="<?php echo base_url(); ?>index.php/adminas/visosregistracijos"><img alt="" src="<?php echo base_url(); ?>/images/logo3.png" width="147" height="78"></a></h1>
        <nav>
          <ul class="menu">

            <li><a href="<?php echo base_url () ;?>index.php/adminas/visosregistracijos"><i3 class="fa fa-list" aria-hidden="true"></i3>Registracijos</a></li>
            <li><a href="<?php echo base_url () ;?>index.php/adminas/manoduom"><i3 class="fa fa-user" aria-hidden="true"></i3>Mano duomenys</a></li>
            		<?php if($this->session->userdata['tabel_nr_id']<=2){ ?>

            <li><a><i3 class="fa fa-calendar" aria-hidden="true"></i3>Grafikai</a>
              <ul class="sub-menu">
                <li><a href="<?php echo base_url () ; ?>index.php/adminas/grafikai_perziura"><i3 class="fa fa-star-o" aria-hidden="true"></i3>Peržiūra</a></li>
                <li><a href="<?php echo base_url () ; ?>index.php/adminas/grafikai_ivedimas"><i3 class="fa fa-star-o" aria-hidden="true"></i3>Įvedimas</a> </li>
              </ul></li><?php }?>
                    <?php if($this->session->userdata['tabel_nr_id']<=2){ ?>

            <li><a href="<?php echo base_url(); ?>index.php/adminas/naujas_darbuotojas"><i3 class="fa fa-user" aria-hidden="true"></i3>Naujas darbuotojas</a>
             </li><?php }?>
                    <?php if($this->session->userdata['tabel_nr_id']<=2){ ?>

            <li><a><i3 class="fa fa-percent" aria-hidden="true"></i3>Nuolaida</a>
              <ul class="sub-menu">
                <li><a href="<?php echo base_url () ; ?>index.php/adminas/nuolaidu_perziura"><i3 class="fa fa-star-o" aria-hidden="true"></i3>Peržiūra</a></li>
                <li><a href="<?php echo base_url () ; ?>index.php/adminas/nuolaidos_sukurimas"><i3 class="fa fa-star-o" aria-hidden="true"></i3>Įvedimas</a> </li>
              </ul></li><?php }?>
            <li><a href="<?php echo base_url () ;?>index.php/adminas/atsijungti" onClick="return deletechecked1()"><i3 class="fa fa-sign-out" aria-hidden="true">
            </i3>Atsijungti</a></li>
            <li><a href="<?php echo base_url () ;?>index.php/adminas/pagalbadarb"><i3 class="fa fa-info" aria-hidden="true"></i3>D.U.K.</a></li>
          </ul>
         </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
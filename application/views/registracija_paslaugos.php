
<!DOCTYPE html><html lang='en' class=''>
<head><link rel="canonical" href="https://codepen.io/anon/pen/yPjXYB" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
      <!--link jquery ui css-->
    <!--<link type="text/css" rel="stylesheet" href="<?php echo base_url('js/jquery-ui-1.12.1/jquery-ui.css'); ?>" />-->

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Lato:300,400,700,900");
table {
    border-collapse: collapse;
    width: 300px;
}
th, td {
    padding:8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

@import url(https://fonts.googleapis.com/css?family=Pacifico);
body {
  font-family: "Lato", Helvetica, Arial;
  font-size: 16px;
}

.text-center {
  text-align: center;
}

*, *:before, *:after {
  -webkit-border-sizing: border-box;
  -moz-border-sizing: border-box;
  border-sizing: border-box;
}

.container {
  width: 350px;
  margin: 50px auto;
}
.container > ul {
  list-style: none;
  padding: 0;
  margin: 0 0 20px 0;
}

.title {
  font-family: 'Pacifico';
  font-weight: norma;
  font-size: 40px;
  text-align: center;
  line-height: 1.4;
  color: #ef97cc; /*#2980B9*/
}

.dropdown a {
  text-decoration: none;
}
.dropdown [data-toggle="dropdown"] {
  position: relative;
  display: block;
  color: white;
  background: #990033;
  -moz-box-shadow: 0 1px 0 #cc0044 inset, 0 -1px 0 #ffccdd inset;
  -webkit-box-shadow: 0 1px 0 #cc0044 inset, 0 -1px 0 #ffccdd inset;
  box-shadow: 0 1px 0 #cc0044 inset, 0 -1px 0 #ffccdd inset;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
  padding: 10px;
}
.dropdown [data-toggle="dropdown"]:hover {
  background: #ffccdd;
}
.dropdown .icon-arrow {
  position: absolute;
  display: block;
  font-size: 0.7em;
  color: #fff;
  top: 14px;
  right: 10px;
}
.dropdown .icon-arrow.open {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}
.dropdown .icon-arrow.close {
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}
.dropdown .icon-arrow:before {
  content: '\25BC';
}
.dropdown .dropdown-menu {
  max-height: 0;
  overflow: hidden;
  list-style: none;
  padding: 0;
  margin: 0;
}
.dropdown .dropdown-menu li {
  padding: 0;
}
.dropdown .dropdown-menu li a {
  display: block;
  color: #6f6f6f;
  background: #EEE;
  -moz-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  -webkit-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  text-shadow: 0 -1px 0 rgba(255, 255, 255, 0.3);
  padding: 10px 10px;
}
.dropdown .dropdown-menu li a:hover {
  background: #f6f6f6;
}
.dropdown .show, .dropdown .hide {
  -moz-transform-origin: 50% 0%;
  -ms-transform-origin: 50% 0%;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
}
.dropdown .show {
  display: block;
  max-height: 9999px;
  -moz-transform: scaleY(1);
  -ms-transform: scaleY(1);
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  animation: showAnimation 0.5s ease-in-out;
  -moz-animation: showAnimation 0.5s ease-in-out;
  -webkit-animation: showAnimation 0.5s ease-in-out;
  -moz-transition: max-height 1s ease-in-out;
  -o-transition: max-height 1s ease-in-out;
  -webkit-transition: max-height 1s ease-in-out;
  transition: max-height 1s ease-in-out;
}
.dropdown .hide {
  max-height: 0;
  -moz-transform: scaleY(0);
  -ms-transform: scaleY(0);
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  animation: hideAnimation 0.4s ease-out;
  -moz-animation: hideAnimation 0.4s ease-out;
  -webkit-animation: hideAnimation 0.4s ease-out;
  -moz-transition: max-height 0.6s ease-out;
  -o-transition: max-height 0.6s ease-out;
  -webkit-transition: max-height 0.6s ease-out;
  transition: max-height 0.6s ease-out;
}

@keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-moz-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-webkit-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-moz-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-webkit-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
</style></head><body>
    <section id="content">
        <div class="main-block">
            <div class="container_12">
                <h1 class="title">Išsirinkite paslaugą!</h1>

                <!-- DROPDOWN PASLAUGŲ PASIRINKIMAI-->
                  <ul>
                    <li class="dropdown">
                      <a href="#" data-toggle="dropdown">Plaukų priežiūra<i class="icon-arrow"></i></a>
                            <?php echo ' <ul class="dropdown-menu">';
                                foreach($paslaugoskategorijos1 as $Pasl_kat){
                       				   echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';                     
                              }  echo '</ul>'; ?>
                    </li>
                    <li class="dropdown">
                      <a href="#" data-toggle="dropdown">Nagų priežiūra<i class="icon-arrow"></i></a>
                            <?php echo ' <ul class="dropdown-menu">';
                				foreach($paslaugoskategorijos2 as $Pasl_kat){

                                echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';
                				      } echo '</ul>';?>
                    </li>
                   <li class="dropdown">
                      <a href="#" data-toggle="dropdown">Makiažas<i class="icon-arrow"></i></a>
                            <?php echo ' <ul class="dropdown-menu">';
                            foreach($paslaugoskategorijos3 as $Pasl_kat){
                                echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';                     
                 					    } echo '</ul>'; ?>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Antakių ir blakstienų priežiūra<i class="icon-arrow"></i></a>
                          <?php echo ' <ul class="dropdown-menu">';
              				foreach($paslaugoskategorijos4 as $Pasl_kat){
                              echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';                   
                				    } echo '</ul>'; ?>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Ilgalaikis makiažas<i class="icon-arrow"></i></a>
                          <?php echo ' <ul class="dropdown-menu">';
              				foreach($paslaugoskategorijos5 as $Pasl_kat){
                              echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';                   
              				      } echo '</ul>';?>
                  </li>
                   <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Depiliacija<i class="icon-arrow"></i></a>
                          <?php echo ' <ul class="dropdown-menu">';
                          foreach($paslaugoskategorijos6 as $Pasl_kat){
                              echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';              				     
              				      } echo '</ul>';?>
                </li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown">Masažai<i class="icon-arrow"></i></a>
                        <?php echo ' <ul class="dropdown-menu">';
                        	foreach($paslaugoskategorijos7 as $Pasl_kat){
                            echo ' <li><a href="'.base_url().'index.php/klientas/registravimasisPaslaugai/'.$Pasl_kat->pas_id.'">',"$Pasl_kat->pasl_pav","<div>$Pasl_kat->kaina  €</div>". "<div>  <i class='fa fa-clock-o'></i> $Pasl_kat->trukme</div>".'</a></li>';
            			       }  echo '</ul>'; ?>
                </li>
              </ul>
            </div>
          </div>
        </section>

  <script >// Dropdown Menu
    var dropdown = document.querySelectorAll('.dropdown');
    var dropdownArray = Array.prototype.slice.call(dropdown,0);
    dropdownArray.forEach(function(el){
        var button = el.querySelector('a[data-toggle="dropdown"]'),
                menu = el.querySelector('.dropdown-menu'),
                arrow = button.querySelector('i.icon-arrow');

        button.onclick = function(event) {
            if(!menu.hasClass('show')) {
                menu.classList.add('show');
                menu.classList.remove('hide');
                arrow.classList.add('open');
                arrow.classList.remove('close');
                event.preventDefault();
            }
            else {
                menu.classList.remove('show');
                menu.classList.add('hide');
                arrow.classList.remove('open');
                arrow.classList.add('close');
                event.preventDefault();
            }
        };
    })

    Element.prototype.hasClass = function(className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    };
  </script>
</body>
</html>
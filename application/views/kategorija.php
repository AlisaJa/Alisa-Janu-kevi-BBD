
<div class="extra-block">
  <section id="content">
  <div class="main-block2">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_12 prefix_1">
          <?php
            foreach ($kategorijospavadinimas as $Kat_pav) {
              echo "<h8> ".$Kat_pav->pasl_kat_pav."</h8>";
              }?><br></br>
            <table class="cinereousTable">
              <thead>
                <tr>
                  <th>Paslauga</th><th>Trukmė</th><th>Kaina € </i2></th>
                </tr>
              </thead>
                  <?php
                    foreach($paslaugoskategorijos as $Pasl_kat){
                      echo "
                          <tr>
                            <td>".$Pasl_kat->pasl_pav."</td>
                            <td>".$Pasl_kat->trukme."</td>
                            <td>".$Pasl_kat->kaina."</td>
                          </tr>";
                          } ?>
            </table>
                <div style="padding-top: 20px;"> <a href="<?php echo base_url(); ?>/index.php/klientas/registracija" class="button">Registruokis dabar!</a> </div>
        </article>
      </div>
    </div>
  </div>
  <section>
</div>


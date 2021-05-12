@include('layout.header')
@include('navigation.navigation')
<style media="screen">
  .fas.large{
    font-size: 36px;
  }
  .fab.large{
    font-size: 26px;
  }
  .page-wrapper{
    padding-top: 100px;
  }
  div.box{
    padding: 10px;
    border-bottom: 1.5px solid rgb(214, 214, 214);
  }
  .text-white.outline{
    text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
  }
  .btn-link{
    text-decoration: none;
  }
</style>
<div class="page-wrapper">
  <div class="container-fluid">

    <div class="box">
      <?php foreach ($country as $view_country): ?>
        <div class="col-xl-12">
          <div class="p-2 text-center">
            <h2 class="text-white outline">
              <?php echo $view_country['name']; ?>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000">
            <div class="card bg-warning">
              <div class="card-body">
                <div class="d-inline-block">
                  <h5 class="text-white">Kasus Positif</h5>
                  <h2 class="mb-0 text-white"><?php echo $view_country['positif']; ?></h2>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                  <i class="fas large fa-ambulance text-dark"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="300">
            <div class="card bg-danger">
              <div class="card-body">
                <div class="d-inline-block">
                  <h5 class="text-white">Kasus Meninggal</h5>
                  <h2 class="mb-0 text-white"><?php echo $view_country['meninggal']; ?></h2>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                  <i class="fas large fa-skull text-dark"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="400">
            <div class="card bg-success">
              <div class="card-body">
                <div class="d-inline-block">
                  <h5 class="text-white">Kasus Sembuh</h5>
                  <h2 class="mb-0 text-white"><?php echo $view_country['sembuh']; ?></h2>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                  <i class="fas large fa-hospital text-dark"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="400">
            <div class="card bg-primary">
              <div class="card-body">
                <div class="d-inline-block">
                  <h5 class="text-white">Dalam Perawatan</h5>
                  <h2 class="mb-0 text-white"><?php echo $view_country['sembuh']; ?></h2>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                  <i class="fas large fa-procedures text-dark"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="box">
      <div class="col-xl-12">
        <div class="p-2 text-center">
          <h2 class="text-white outline">Provinsi</h2>
        </div>
      </div>
      <div class="row">
        <?php $no = 0; ?>
        <?php foreach ($province as $view_provice): ?>
          <div class="col-xl-3">
            <div data-aos="flip-up" data-aos-delay="300" class="card">
                <div class="card-header">
                    <h5>
                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#<?php echo $view_provice["attributes"]["Kode_Provi"]; ?>" aria-controls="<?php echo $view_provice["attributes"]["Kode_Provi"]; ?>>">
                         <span class="fas fa-angle-down mr-2"></span><?php echo $view_provice["attributes"]["Provinsi"]; ?>
                     </button></h5>
                </div>
                <div class="collapse" id="<?php echo $view_provice["attributes"]["Kode_Provi"]; ?>">
                  <div class="card-body" >
                    <p><i class="fas fa-ambulance"></i> Kasus Positif : <?php echo $view_provice["attributes"]["Kasus_Posi"]; ?></p>
                    <p><i class="fas fa-skull"></i> Kasus Meninggal : <?php echo $view_provice["attributes"]["Kasus_Meni"]; ?></p>
                    <p><i class="fas fa-hospital"></i> Kasus Sembuh : <?php echo $view_provice["attributes"]["Kasus_Semb"]; ?></p>
                  </div>
                </div>
            </div>
          </div>
          <?php $no++; ?>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="box">
      <div class="col-xl-12">
        <div class="p-2 text-center">
          <h2 class="text-white outline">Dunia</h2>
        </div>
      </div>
      <div class="row">
        <?php foreach ($world as $view_world): ?>
          <?php if ($view_world["attributes"]["Country_Region"] == "Indonesia"): ?>
            <div class="col-xl-6" data-aos="zoom-in-up" data-aos-duration="4000">
              <div class="card bg-primary">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-white">Negara : <?= $view_world["attributes"]["Country_Region"]; ?></h5>
                    <p class="mb-0 text-white">Positif  = <?php echo number_format($view_world["attributes"]["Confirmed"]); ?></p>
                    <p class="mb-0 text-white">Meninggal  = <?php echo number_format($view_world["attributes"]["Deaths"]); ?></p>
                    <p class="mb-0 text-white">Sembuh  = <?php echo number_format($view_world["attributes"]["Recovered"]); ?></p>
                    <p class="mb-0 text-white">Aktif  = <?php echo number_format($view_world["attributes"]["Active"]); ?></p>
                  </div>
                  <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                    <i class="fas large fa-flag text-dark"></i>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if ($view_world["attributes"]["Country_Region"] == "India"): ?>
            <div class="col-xl-6" data-aos="zoom-in-up" data-aos-duration="4000">
              <div class="card bg-secondary">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-white">Negara : <?= $view_world["attributes"]["Country_Region"]; ?></h5>
                    <p class="mb-0 text-white">Positif  = <?php echo number_format($view_world["attributes"]["Confirmed"]); ?></p>
                    <p class="mb-0 text-white">Meninggal  = <?php echo number_format($view_world["attributes"]["Deaths"]); ?></p>
                    <p class="mb-0 text-white">Sembuh  = <?php echo number_format($view_world["attributes"]["Recovered"]); ?></p>
                    <p class="mb-0 text-white">Aktif  = <?php echo number_format($view_world["attributes"]["Active"]); ?></p>
                  </div>
                  <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                    <i class="fas large fa-flag text-dark"></i>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>
@include('layout.footer')

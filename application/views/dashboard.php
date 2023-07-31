<div class="container-fluid"> 
    <div class="row">
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Produk</div>
                        <div class="text-right"><?= $jumlah_barang; ?></div>
                      </div>
                      <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url('barang'); ?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Penjualan</div>
                        <div class="text-right"><?= $jumlah_penjualan; ?></div>
                      </div>
                      <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url('laporan'); ?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Wishlist</div>
                        <div class="text-right"><?= $jumlah_wishlist; ?></div>
                      </div>
                      <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url('wishlist'); ?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Cart</div>
                        <div class="text-right"><?= $jumlah_chart; ?></div>
                      </div>
                      <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url('chart'); ?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
    </div> 
</div> 

      


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
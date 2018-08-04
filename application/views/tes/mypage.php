<div>

<?php if ($nullstock > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah habis...',
                                  type: 'error',
                                  
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<?php if ($nullex > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah kedaluwarsa...',
                                  
                                 
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<!-- top tiles -->
          <div class="row tile_count" style="text-align: center;">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-medkit"></i> Total Obat</span>
              <div class="count"><?php echo $stockobat ?></div>
              
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-hospital-o"></i> Total Kategori</span>
              <div class="count"><?php echo $stockkat ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pemasok</span>
              <div class="count"><?php echo $sup ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-edit"></i> Total Transaksi</span>
              <div class="count"><?php echo $inv ?></div>
            </div>
          </div>
          <!-- /top tiles -->


          <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?php echo base_url('example/form_med') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-medkit green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Obat</h3>
                    <p>Menambahkan obat baru</p>
                  </div>
                  </a>
                </div>

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?php echo base_url('example/form_cat') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-hospital-o green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Kategori</h3>
                    <p>Menambahkan kategori obat baru</p>
                  </div>
                  </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?php echo base_url('example/form_sup') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Pemasok</h3>
                    <p>Menambahkan pemasok baru</p>
                  </div>
                  </a>
                </div>

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo base_url('example/form_invoice') ?>">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-edit green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Tagihan</h3>
                    <p>Menambahkan tagihan dari pembeli</p>
                  </div>
                </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo base_url('example/table_exp') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-warning green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Kedaluwarsa</h3>
                    <p>Banyak obat yang kedaluwarsa</p>
                  </div>
                </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?php echo base_url('example/table_stock') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-file-text-o green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Habis</h3>
                    <p>Melihat stok obat yang habis</p>
                  </div>
                  </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <a href="<?php echo base_url('example/table_invoice') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Transaksi</h3>
                    <p>Transaksi penjualan obat</p>
                  </div>
                </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <a href="<?php echo base_url('example/table_cat') ?>">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-shopping-cart green"></i>
                    </div>
                    <div class="count">...</div>
                    <h3>Stok</h3>
                    <p>Stok obat berdasar kategori</p>
                  </div>
                </div>
              </a>
            </div>

  <div>
    
  </div>


<br>
</div>

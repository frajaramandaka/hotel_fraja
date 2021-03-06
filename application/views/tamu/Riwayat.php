<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://unpkg.com/feather-icons"></script>
      <title>Hotel Hebat/History</title>
   </head>
   <body style="background-color: GhostWhite">
      <!-- Header -->
      <?php $this->load->view('tamu/_partials/Header.php')?>
      <div class="jumbotron jumbotron-fluid mb-5"></div>
      <div class="card text-center">
      <div class="card-header" style="background-color: DarkTurquoise">
         <ul class="nav nav-pills card-header-pills d-flex justify-content-center" >
            <li class="nav-item"  style="margin: 0px 25px 0px 0px">
               <a class="nav-link bg-warning  text-light" href="<?= base_url('Tamu/DataPesanan');?>">Data Pesanan</a>
            </li>
            <li class="nav-item" style="margin: 0px 0px 0px 25px">
               <a class="nav-link active" href="<?= base_url('Tamu/Riwayat');?>">Riwayat Pesanan</a>
            </li>
            <li class="nav-item" style="margin: 0px 0px 0px 25px">
               <?php if (empty($_SESSION['user']->level)) :?>
               <a class="nav-link bg-warning text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?= base_url('Tamu/PesanKamar');?>">Pesan Kamar</a>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Pesan Kamar Gagal</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           maaf anda harus login terlebih dahulu
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                           <a href="<?= base_url('Auth/Login');?>" type="submit" class="btn btn-primary">Login</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php else :?>
               <a class="nav-link bg-warning text-light" href="<?= base_url('Tamu/PesanKamar');?>">Pesan Kamar</a>
               <?php endif ;?>
            </li>
         </ul>
      </div>
      <div class="card-body">
      <?php if (empty($_SESSION['user']->level)) :?>
      <h3 class="mt-3 " id="DataPesanan" style="">Maaf anda belum melakukan pemesanan :( </h3>
      <p><i data-feather="arrow-down-circle"></i></p>
      <a href="<?= base_url('Auth/Login'); ?>" type="submit" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 0px 35% 0px 35%">Lakukan pemesanan</a>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Pesan Kamar Gagal</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               maaf anda harus login terlebih dahulu
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
               <a href="<?= base_url('Auth/Login');?>" type="submit" class="btn btn-primary">Login</a>
            </div>
            <?php else :?>
            <table class="table table-bordered table-striped" style="margin-bottom: 20%;">
               <thread>
                  <tr>
                     <th style=""></th>
                     <th style="width">Nama Pemesan</th>
                     <th style="width">Tipe Kamar</th>
                     <th style="width">Tanggal Check-in</th>
                     <th style="width">Tanggal Check-out</th>
                     <th style="width">Jumlah kamar</th>
                     <th style="width">Nama Tamu</th>
                     <th style="width">Email</th>
                     <th style="width">Nomor Whatsapp</th>
                     <th style="width">Kode Reff</th>
                     <th style=""></th>
                  </tr>
                  <tbody>
                     <?php foreach($datariwayat as $data):?>
                     <tr>
                        <td width="50"><img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap" ></td>
                        <td><?= $data->nama_pemesan?></td>
                        <td><?= $data->nama_kamar?></td>
                        <td><?= $data->tgl_cekin?></td>
                        <td><?= $data->tgl_cekout?></td>
                        <td><?= $data->jmlh_kamar?></td>
                        <td><?= $data->nama_tamu?></td>
                        <td><?= $data->email?></td>
                        <td><?= $data->no_hp?></td>
                        <td><?= $data->KodReff?></td>
                        <td>
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data->id_pemesanan?>">Cetak PDF</button>
                           <!-- Modal -->
                           <div class="modal fade" id="exampleModal<?= $data->id_pemesanan?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h3 class="modal-title" id="exampleModalLabel">Detail Transaksi</h3>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="card">
                                          <div class="card-header" style="background-color: Gold">Hotel Hebat</div>
                                          <div class="card-body">
                                             <p class="card-text">Anda telah berhasil melakukan pemesanan</p>
                                             <hr>
                                             <img class="card-img-top" src="<?= base_url('assets/image/').$data->gambar_tipekamar?>" alt="Card image cap">
                                             <hr>
                                             <p class="d-flex justify-content-start">Kode Reff</p>
                                             <p class="d-flex justify-content-start" style="margin-top: -15px; color: Red"><?= $data->KodReff?></p>
                                             <hr>
                                             <div class="d-flex justify-content-between">
                                                <p>Nama Pemesan</p>
                                                <p><?= $data->nama_pemesan?></p>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                <p>Tipe Kamar</p>
                                                <p><?= $data->nama_kamar?></p>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                <p>Tanggal Check-In</p>
                                                <p><?= $data->tgl_cekin?></p>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                <p>Tanggal Check-Out</p>
                                                <p><?= $data->tgl_cekout?></p>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                <p>Nama Tamu</p>
                                                <p><?= $data->nama_tamu?></p>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                <p>Total Harga</p>
                                                <p><?= $data->harga?></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <a href="<?= base_url('Tamu/Cetak').'?id='.$data->id_pemesanan?>" type="button" class="btn btn-primary" target="_blank">Cetak</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <?php endforeach;?>
                  </tbody>
               </thread>
            </table>
            <?php endif ;?>  
         </div>
      </div>
      <!-- Footer-->
      <?php $this->load->view('tamu/_partials/Footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
         feather.replace()
      </script>
      <script>
         function cetak() {
           window.print();
         }
      </script>
   </body>
</html>
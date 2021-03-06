

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
      <title>Hotel Hebat/Kamar</title>
   </head>
   <body style="background-color: GhostWhite">
      <!-- Header -->
      <?php $this->load->view('tamu/_partials/Header.php')?>
      <div class="jumbotron jumbotron-fluid mb-5"></div>
      <p class="bg-warning" style="width: 100%; height: 30px; margin: -48px 0px 25px 0px;">&nbsp</p>
      <div class="row">

      <?php foreach ($datakamar as $key => $value) :?>
         <!-- <?= var_dump($value->id_kamar); ?> -->
      <div class="card" style="width: 21rem; margin-left: 40px">
         <img class="card-img-top" src="<?= base_url('assets/image/').$value->gambar_tipekamar ?>" alt="Card image cap">
         <div class="card-body">
            <h5 class="card-title"><?= $value->nama_kamar ?></h5>
            <hr>
            <div class="d-flex justify-content-between">
               <p>Mengenai Fasilitas</p>
               <a href="<?= base_url('Tamu/kamar').'?id='.$value->id_kamar ?>" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                     <p><?= $value->detail ?></p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: 5px;">
               <p>Ketersediaan Kamar</p>
               <p><?= $value->jml_kamar?></p>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: -5px;">
               <p>Harga</p>
               <p><?= $value->harga?></p>
            </div>
            <div class="d-flex justify-content-end" style="margin-top: -5px;">
               <a class="btn btn-primary" style="margin: 30px 0px 0px 0px; font-size: 13px;" href="<?= base_url('Tamu/PesanKamar'); ?>">Booking Kamar</a>
            </div>
         </div>
      </div>

      <?php endforeach ; ?>
      <!-- <div class="card" style="width: 22rem; margin: 10px 0px 0px 20px">
         <img class="card-img-top" src="<?= base_url('assets/image/silver room.jpg')?>" alt="Card image cap">
         <div class="card-body">
            <h5 class="card-title">Silver Room</h5>
            <p class="card-text">memiliki 2 buah kasur berukuran 1 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja kecil untuk bersantai atau tempat bekerja, serta memiliki kamar mandi dengan shower.</p>
         </div>
      </div>
      <div class="card" style="width: 22rem; margin: 10px 0px 20px 20px">
         <img class="card-img-top" src="<?= base_url('assets/image/gold room.jpg')?>" alt="Card image cap">
         <div class="card-body">
            <h5 class="card-title">Gold Room</h5>
            <p class="card-text">memiliki 1 buah kasur berukuran 2 orang dengan televisi berukuran 32 inci, serta memiliki 2 buah sofa dan meja untuk bersantai atau tempat bekerja, serta memiliki kamar mandi dengan bathup.</p>
         </div>
      </div>
      <div class="card" style="width: 22rem; margin: 10px 0px 20px 20px">
         <img class="card-img-top" src="<?= base_url('assets/image/platinum room.jpg')?>" alt="Card image cap">
         <div class="card-body">
            <h5 class="card-title">Platinum Room</h5>
            <p class="card-text">memiliki 1 buah kasur berukuran 2 orang dan 2 buah kasur berukuran 1 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja untuk bersantai atau tempat bekerja, juga memiliki ruang makan untuk keluarga, dilengkapi kamar mandi dengan bathup</p>
         </div>
      </div>
      <div class="card" style="width: 22rem; margin: 10px 0px 20px 20px">
         <img class="card-img-top" src="<?= base_url('assets/image/reguler room.jpg')?>" alt="Card image cap">
         <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">memiliki 2 buah kasur berukuran 2 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja untuk bersantai atau tempat bekerja, juga memiliki ruang makan untuk keluarga, dilengkapi kamar mandi dengan bathup</p>
         </div>
      </div> -->
      </div>
      <p style="margin-bottom: 400px;">&nbsp</p>
      <!-- Footer-->
      <?php $this->load->view('tamu/_partials/Footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>


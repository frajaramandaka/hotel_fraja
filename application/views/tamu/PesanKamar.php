
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
      <title>Hotel Hebat/Pesan Kamar</title>
   </head>
   <body style="background-color: GhostWhite">
      <!-- Header -->
      <?php $this->load->view('tamu/_partials/Header.php')?>
      <div class="jumbotron jumbotron-fluid mb-5">
      </div>
      <div class="container-lg">
      <div class="card mt-3" style="margin-bottom: 60px;">
      <h4 class="card-header d-flex justify-content-center"  style="background-color: Gold;">Pesan Kamar</h4>
      <div class="card-body">
      <div class="row">
         <div class="col-sm-12">
            <form action="<?= base_url('Tamu/KirimData') ?>" method="POST">
               <div class="form-row">
                  <div class="form-group col-md-12">
                     <label for="inputEmail4">Nama Pemesan :</label>
                     <input type="text" name="nama_pemesan" class="form-control" id="inputEmail4"  value="<?= $_SESSION['user']->username ?>" readonly>
                  </div>
                  <div class="form-group col-md-12">
                     <label for="inputAddress">Tipe Kamar :</label>
                     <select class="form-control" name="id_kamar">
                        <option selected>Pilih Tipe :</option>
                        <option value="1">Regular Room</option>
                        <option value="2">Silver Room</option>
                        <option value="3">Gold Room</option>
                        <option value="4">Platinum Room</option>
                        <option value="5">Deluxe Room</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-md-12">
                  <label for="inputAddress">Tanggal Check-in :</label>
                  <input type="date" name="tgl_cekin" class="form-control" id="inputAddress" placeholder="">
               </div>
               <div class="form-group col-md-12">
                  <label for="inputAddress2">Tanggal Check-out :</label>
                  <input type="date" name="tgl_cekout" class="form-control" id="inputAddress2" placeholder="">
               </div>
               <div class="form-row">
                  <div class="form-group col-md-12">
                     <label for="inputCity">Jumlah Kamar :</label>
                     <input type="number" name="jmlh_kamar" class="form-control" id="">
                  </div>
                  <div class="form-group col-md-12">
                     <label for="inputEmail4">Nama Tamu :</label>
                     <input type="text" name="nama_tamu" class="form-control" id="inputEmail4" placeholder="">
                  </div>
                  <div class="form-group col-md-12">
                     <label for="inputEmail4">Email :</label>
                     <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="contoh : hotelhebat@gmail.com">
                  </div>
                  <div class="form-group col-md-12">
                     <label for="inputEmail4">Nomor Whatsapp :</label>
                     <input type="number" name="no_hp" class="form-control" id="inputEmail4" placeholder="08xxxxxxxxxxx">
                  </div>
               </div>
               <button type="submit" class="btn btn-primary mt-3 mb-2">Pesan</button>
               </form>
         </div>
      </div>
      </div>
      </div>
      </div>
      <div class="card-footer mt-3 p-3 rounded" style="background-color: Gold; margin-bottom: 335px;"></div>
      <!-- Footer-->
      <?php $this->load->view('tamu/_partials/Footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>


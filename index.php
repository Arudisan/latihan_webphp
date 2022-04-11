<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arudikun's Site</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/bootstrap/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->   
</head>
<body>
  <!-- navbar  -->
 <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid d-flex ">
    <a class="navbar-brand navbar-BBrand text-white" href="#">Arudikun Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown ">
      <ul class="navbar-nav ms-auto mb-2 mb">
        <li class="nav-item">
          <a class="nav-link active text-white span-nav" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white span-nav" href="#kontak">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white span-nav" href="my resume.html">Resume</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white span-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Download Materi
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="file/01 - pengenalan html.pdf"> <i class="bi-code"></i> Materi HTML</a></li>
            <li><a class="dropdown-item" href="file/09 10 - Pengenalan CSS.pdf"><i class="bi-book"></i> Materi CSS</a><hr></li>
            <li><a class="dropdown-item" href="file/13 14 - Bootstrap.pdf"><i class="bi-coin" ></i>Materi Boostrap </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header -->
<header id="home" class="subkonten1">
    <div class="container-fluid justify-content-center d-flex flex-row align-items-center" >
      <span>
        <!-- <h2 class="tulisan-header"> Hello <br> <span class="pe-3 tulisan-header"> I'm Web Designer </span> </h2> -->
       <img src="img/My biography.PNG" alt=" " width="350"  class="rounded-circle mt-4 border-1 border-danger">
      </span>
    </div>
</header>
<section>
  <!-- section about me-->
  <section class="subkonten2" id="about">
    <div class="container-fluid align-items-center d-flex flex-column pb-5">
      <h2 class="text-dark fw-bold pb-2 pt-3 fontsection"> >>>> About Me <<<< </h2>
      <div class="col-md-6"> Nama saya ardi,saya dari program IPS,saya mempunyai hobby yaitu bermain game di PC maupun mobile.Dari hal tersebut saya mempunyai minat di bidang IT sehingga saya belajar di LP3I untuk mendalami tentang IT dan mengambil program ASE
        </div>
  </div>
  </section>
<!-- section Blog 1 blog 2  -->
<section>
  <section id="" class="subkonten4">
     <div class="container-fluid align-items-center d-flex flex-column pb-4">
       <h2 class="text-dark fw-bold pb-2 pt-5 fontsection"> >>>> My Blog <<<< </h2>
        </div>
          <div class="container-fluid justify-content-center d-flex flex-row pb-4">
             <div class="row" style="align-items: center;">
                <div class="col-md-4 text-end"><img src="img/Logo Microsoft word.png" class="rounded-circle mt-2 border-1"
            width="150" alt=""></div>
        <div class="col-md-6">
      <h4>Tutorial Microsoft Word </h4>
      <hr>
      <div class="d-flex">
            <div class="tanggal">16-11-2021</div> 
            <label class="ps-2 pb-2 text-primary">Made By IT team </label>
            </div>
            <p>Microsoft word merupakan aplikasi dari microsoft yang digunakan untuk mengerjakan segala pekerjaaan administratif mulai dari persuratan hingga tugas ingin tau selengkapya klik tombol berikut </p>
           <a href="Detailblog1.html">More Detail</a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 text-end"><img src="img/logo microsoft excel.png" class="rounded-circle mt-2 border-1"
            width="150" alt=""></div>
        <div class="col-md-6">
          <h4 class="pt-4"> Tutorial  Microsoft Excel </h4>
          <hr>
          <div class="d-flex">
          <div class="tanggal">10-11-2021</div> 
          <label class="ps-2 pb-2 text-primary">Made by IT Team</label>
          </div>
          <p>Microsoft excel juga merupakan aplikasi dari microsoft yang digunakan untuk mengerjakan segala pekerjaaan administratif berbasis perhitungan yang biasa digunakan untuk keperluan data yang berunsur inputan</p>
          <a href="detailblog2.html">More Detail</a>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
</section >
<section id="kontak" class="subkonten3"> 
  <div class="container-fluid align-items-center d-flex flex-column pb-4">
    <h2 class="text-white fw-bold pb-2 pt-3 text-center fontsection"> >>>>Contact Us<<<< </h2>
    <form action="#" method="POST">
      <fieldset>
        <table>
          <tbody>
            <tr>
              <td class="pb-1 fontsection"><label for="">Email</label></td>
              <td class="pb-1"><input type="email" name="txt_email" id="txt_email" size="70"
                  placeholder="Enter your own mail"></td>
            </tr>
            <tr>
              <td class="pb-1 fontsection"><label for="" class="pe-5">Nama Lengkap</label></td>
              <td class="pb-1"><input type="text" name="nama" id="nama" size="70" placeholder=" Please Input yout Complete name"></td>
            </tr>
            <tr>
              <td class="fontsection"> Keterangan</td>
              <td> <textarea name="keterangan" id="keterangan" cols="71" rows="5" placeholder="Give your comment"></textarea></td>
            </tr>
          </tbody>
        </table>
        <br>
        <center>
          <button type="submit" class="btn-success" style="border-radius: 50pt; width: 12vh;"> Submit</button>
          <button type="reset" class="btn-warning" > Reset</button>
        </center>
      </fieldset>
    </form>
  </div>
</section>
</div>
<!-- footer -->
<footer class="bg-danger opacity-100">
  <div class="container-fluid d-flex justify-content-sm-evenly font-1">  
      <span>
          <h6 class="pt-3"> arudikun office : </h6>
          <br>
          <h6> <a href="https://goo.gl/maps/mHF5SD6gT8vHGdYP8" target="_blank" class="link"></a> <i class="bi-house-fill" ></i> Gg Benteng II,Jemurwonosari,Surabaya.Indonesia</h6>
          <br>
          <h6><a href="http://wa.me/6289621415682" target="_blank" class="link"></a><i class="bi-telephone-fill"> </i> telepon : 089621415682</h6>
          <br>
          <h6><a href="mailto:ardibbmme@gmail.com"class="link font-1" target="_blank"> <i class="bi-mailbox "> </i>Email : ardibbmme@gmail.com </h6></a>
          <br>
      </span> 
      <span style="color: white;" class="">
          <h6 class="pt-3 "> SOCIAL MEDIA </h6>
          <br>
          <h6 class="font-1"><a href="http://wa.me/6289621415682" target="_blank" class="link font-1" > <i class="bi-whatsapp font-1"  ></i> Whatsapp 
          </a></h6> 
          <br>
          <h6><a href="https://www.instagram.com/aroedyqoen/" target="_blank" class="link font-1"> <i class="bi-instagram" > </i> instagram
          </a> </h6>
          <br>
          <h6><a href="https://web.facebook.com/ardi.master" target="_blank" class="link font-1"> <i class="bi-facebook"></i>facebook
         </a></h6> 
         <br>
      </span>
  </div> 
</footer>
<!-- footer -->
<script type="text/javascript" src="asset/bootstrap/js/bootstrap.bundle.min.js">        
</script>
</body>
</html>
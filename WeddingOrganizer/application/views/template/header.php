<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Zero">
    <link rel="shortcut icon" href="<?php echo base_url('assets/mystyle/image/logohome.jpg') ?>">

    <link rel="stylesheet" type="text/css" href=<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>>
   	<link rel="stylesheet" type="text/css" href=<?= base_url('assets/mystyle/css/style.css') ?>>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php foreach($tentang as $ttg) : ?>
      <title><?= $ttg->nama_aplikasi ?></title>
    <?php endforeach ?>
    <style> @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap');@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,400&display=swap'); </style>
    <style type="text/css">
      .bg-home{
        background-color: #e58203;
      }
      .text-home{
        color: #ea9e0a;
      }
      @media screen and (max-width: 767px){    
        .image-dokumentasi img{
          height: 80px;
        }  
        .isiblog a{
          font-size: 8px;
        } 
        .carouselhome img{
          width: 100%;
          height: 38vh;
          border-radius: 20px;
        }
        .titlepaketcover h1{
          font-size: 26px;
        }
        .titlepaketcover p{
          font-size: 14px;
        }
        .paketpaket h1{
          font-size: 19px;
          margin-bottom: -5%;
        }
        .paket-ket h5{
          font-size: 13px;
          padding: 0 15px;
        }
        .paketpaket small{
          font-size: 11px;
          margin-top: -5%;
        }
        .faq-cover h4{
          font-size: 19px;
        }
        .faqqna h5{
          font-size: 14px;
        }
        .faqqna p{
          font-size: 12px;
        }
        .knslts{
          font-size: 12px;
        }
        .knslts a{
          font-size: 12px;
        }
        .promocover h3, .blog-cover h3{
          font-size: 19px;
        }
        .promocover a, .blog-cover a{
          font-size: 12px;
        }
        .timercount h3{
          font-size: 19px;
          margin-bottom: 0;
        }
        .timercount{
          font-size: 12px;
        }
        .kontak{
          width: 80%;
          margin-left: 10%;
          font-size: 14px;
        }
        .follow img.instagram{
          width: 25%;
        }
        .follow img.facebook{
          width: 30%;
        }
        .footer h5{
          font-size: 16px;
        }
        .footer a{
          font-size: 12px;
        }
        .blogs img{
          height: 150px;
        }
        .blog-title  h2{
          font-size: 19px;
        }
        .blog-title  a{
          font-size: 12px;
        }
        .blog-content{
          width: 80%;
          margin-left: 10%;
        }
        .blog-content .blog-image{
          height: 120px;
          overflow: hidden;
          display: flex;
          align-items: center;
          border: 3px solid black;
        }
        .blog-content img{
          width: 100%;
        }
        .blog-content small{
          font-size: 9px;
        }
        .blog-content p{
          font-size: 10px;
        }
        .blog-content h1,
        .blog-content h2,
        .blog-content h3,
        .blog-content h4,
        .blog-content h5{
          font-size: 15px;
        }
        .form-komentar h2{
          font-size: 15px;
        }
      }
      @media screen and (min-width: 768px)
      {
        .image-dokumentasi img{
          height: 150px;
        }  
        .follow img.instagram{
          width: 15%;
        }
        .follow img.facebook{
          width: 20%;
        }
        .paket-ket h5{
          margin:0 20%;
          width: 60%;
        }
        
        #timercount{
          margin: 0 20%;
        }
        .timercount small{
          display: none;
        }
        .carouselhome img{
          width: 100%;
          height: 100vh;
          border-radius: 20px;
        }
        .timercount h3{
          font-size: 50px;
          margin-bottom: 0;
        }
        .timercount{
          font-size: 20px;
        }
        .pemesanan-cover{
          width: 50%;
          margin-left: 25%;
        }
        .pemesanan{
          padding: 75px 0;
          border-radius: 20px;
        }
        .kontak{
          width: 30%;
          margin-left: 35%;
        }
        .kontakimg{
          width: 15%;
        }
        .blogs img{
          height: 200px;
        }
        .blog-content{
          width: 70%;
          margin-left: 15%;
        }
        .blog-content .blog-image{
          height: 600px;
          overflow: hidden;
          display: flex;
          align-items: center;
          border: 3px solid black;
          border-radius: 20px;
        }
        .blog-content img{
          width: 100%;
        }


      }
      .kontak a{
        /*font-family: 'Barlow', sans-serif;*/
        font-weight: normal;
      }
      body{
        background-image: url(https://img.freepik.com/free-vector/abstract-background-with-squares_23-2148995948.jpg?w=2000);
        background-color: floralwhite;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: cursive;
        font-weight: bold;
      }
      #content, .navbar{
        margin-left: 1%;
        margin-right: 1%;
      }
      .carouselbanner img{
        height: 300px;
      }
      iframe{
        width: 100%;
        height: 250px;
      }
      .nav-link{
        color: green;
      }
      .collapse{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .navbar{
        width: 80%;
        opacity: 80%;
        position: absolute;
        z-index: 10000;
      }
      ul.menu-footer li{
        display: block;
      }
      ul.menu-footer li a{
        color: white;
        font-weight: normal;
      }
      /* Paket */
        .paketcover{
          border-radius: 20px;
        }
        .paket{
          border-left: 1px solid black;
        }
        .paket:first-child{
          border-left: 0;
        }
        .paket-ket h5{
          font-weight: bold;
        }
      /* End Paker */
      /* Faq */
        .faqs{
          cursor: pointer;
        }
        .faq-cover{
          border-radius: 20px;
        }
        .faqqna{
          border-radius: 20px;
        }
        .jawab{
          border-bottom-right-radius: 18px;
          border-bottom-left-radius: 18px;
        }
        .knslts a{
          font-weight: bold;
        }
        .knslts a:hover{
          border: 1px solid darkolivegreen;
        }
      /* End Faq */
      /* Promo */
        .timercount div{
          border-radius: 20px;
        }
        .promocover{
          border-radius: 20px;
        }
        .promocover a{
          font-weight: bold;
          border: none;
        }
        .promocover a:hover{
          border: 1px solid white;
        }
      /* End Promo */
      /* Pemesanan */
        .pemesanan-cover{
          font-family: cursive;
        }
        .pemesanan-cover h2{
          font-family: cursive;
        }
      /* End Pemesanan */
        .blog-cover{
          border-radius: 20px;
        }
        .blog-cover a{
          font-weight: bold;
          border: none;
        }
        .blog-cover a:hover{
          border: 1px solid white;
        }
      
      .lokasi-footer iframe{
        border-radius: 20px;
      }
      .blogs img{
        width: 100%;
        border-radius: 20px;
        border:  2px solid black;
        opacity: 80%;
        transition: .5s;
      }
      .coblog{
        border-radius: 22px;
        border:  2px solid black;
        overflow: hidden;
        position: relative;
        margin-bottom: 5%;
      }
      .coblog:hover > img{
        transition: .5s;
        transform: scale(1.1);
      }
      .textcoblog{
        position: absolute;
        bottom: 5%;
        left: 5%;
        right: 5%;
      }
      .blog-content p{
        font-weight: normal;
      }
      .content-blog{
        font-family: arial;
      }
    </style>
  </head>
  <body>
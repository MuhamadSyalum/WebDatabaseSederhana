<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list pelanggan toko xyz</title>
   <style>
    .home{

min-height:600px ;
display: flex;
align-items: center;
background:url(image-removebg-preview.png) no-repeat;
background-size: cover;
background-position: center;
}

.home .content{
max-width: 60rem;
}

.home .content h3{
font-size: 3rem;
text-transform: uppercase;
color:#000;
}

.home .content p{
font-size: 2rem;
line-height: 1.8;
padding:1rem 0;
color:#000;
}


.home{

    background-position: left;
    justify-content: center;
    text-align: center;
}
.footer{
    background-color: #000;
    
    text-align: center;
    }
    
   
    
    .footer .links a{
    padding:.7rem 2rem;
    color:#fff;
    border:var(--border);
    border-color:#fff;
    font-size: 2rem;
    }
    
    .footer .links a:hover{
    background:#0000CD;
    }
    
    .footer .credit{
    font-size: 2rem;
    color:#fff;
    padding:1.5rem;
    }
    
    .footer .credit span{
    color:#0000CD;
    }
    </style>
</head>
<body>
<section class="home" id="home">
    <div class="content">
        <h3>HALO SELAMAT DATANG DI TAMPILAN WEB SEDERHANA</h3>
        
        <p>selamat Datang di kelompok 2</p>
    </div>
</section>
<footer>
    <section class="footer">
    <div class="links">
    <a href="customers.php">Data Pelanggan</a>
        <a href="customera.php">Pelanggan Huruf A</a>
        <a href="orderan.php">Data Orderan</a>
        <a href="orderann.php">Pesanan Terbesar</a>
        </div>

    <div class="credit">created by <span>Muhamad Syalum</span></span> | all rights reserved</div>

</section>
</footer>
</body>
</html>
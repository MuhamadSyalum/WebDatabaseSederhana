<?php include("db.php");  
?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="favicon.ico"/>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MulaysStore</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');



:root{
    --main-color:#d3ad7f;
    --white:#fff;
    --bg:#fff;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}
body{
    background: green;
}
table{ 
        width:100% ;
       
        align-items: center;
        border-collapse: collapse;
        background-color: #6ea1cc;
        position: relative;
        margin: auto;
        color: #0000ff;
    }
    table th{
        color: #000;
        border: 2px solid #000;
        padding: 25px 50px;
    }
    table td{
        border: 2px solid #000;
        padding: 25px 50px;
    }
    table thead th{
        background-color: #35a9db;
        color: white;
        border-color: #6ea1cc;
        text-transform: uppercase;
    }
    table tbody td{
    color: #353535;
    }
    table tbody tr:nth-child(odd)td{
        background-color: #f2f2f2;
    }
    table tbody tr:hover td{
        background-color: #ffffa2;
        border-color: #ffff0f;
        transition: all .2s;
    }
    table tfoot th{
        text-align: center;
        background-color: #e5f5ff;
    }
    .footer{
    background-color: #000;
    
    text-align: center;
    }
    
    
    .footer .links{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
    gap:1rem;
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
    
  

<section class="table">
    <table>
    <thead>
        <tr>
            <th colspan="6"><h1>data Pelanggan</h1></th>
        </tr>
        <tr>
            <th width="60px">No</th>
            <th><h1>Id Pelanggan</h1></th>
            <th><h1>Nama</h1></th>
            
            <th><h1>Alamat</h1></th>
            <th><h1>Nomor Telepon</h1></th>
           
            
            
        </tr>
    </thead>
    <tbody>
<?php
 $no = 1;
        $sql = "SELECT * FROM customers";
        $query = mysqli_query($conn, $sql);
        
        while($pembeli = mysqli_fetch_array($query)){
            echo "<tr>";
            
            echo "<td><h1>".$no++. "</h1></td>";
            echo "<td><h1>".$pembeli['id']."</h1></td>";
            echo "<td><h1>".$pembeli['nama']."</h1></td>";
            echo "<td><h1>".$pembeli['alamat']."</h1></td>";
            echo "<td><h1>".$pembeli['no_telp']."</h1></td>";
            
           
            

            echo "</tr>";
        }       
        ?>
        </tbody>
    <tfoot>
      
        <tr>
            <th colspan="5"><h1>Total: <?php echo mysqli_num_rows($query) ?></h1></th>
            
        </tr>
       
    </tfoot>
    </table> 
</section>
<footer>
    <section class="footer">
    <div class="links">
    <a href="index.php">Menu</a>
        <a href="customera.php">Pelanggan Huruf A</a>
        <a href="orderan.php">Data Orderan</a>
        <a href="orderann.php">Pesanan Terbesar</a>
        </div>

    <div class="credit">created by <span>Muhamad Syalum</span></span> | all rights reserved</div>

</section>
</footer>
</body>
</html>
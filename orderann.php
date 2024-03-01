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
.home{

min-height:600px ;
display: flex;
align-items: center;
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
   
</style>

</head>
<body>
    
  

<section class="table">
<?php
$sql = '
SELECT c.nama, COUNT(o.jumlah_pesanan) AS jumlah_pesanan, SUM(o.total_pesanan) AS total_pesanan
FROM customers c
JOIN orders o ON c.id = o.id_customers
GROUP BY c.id
ORDER BY jumlah_pesanan DESC
LIMIT 1;
';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer_name = $row['nama'];
    $number_of_orders = $row['jumlah_pesanan'];
    $total_amount = $row['total_pesanan'];
} else {
    echo 'No results found.';
}
echo "
<table>
<thead>
    <tr>
        <th>Nama Pelanggan</th>
        <th>Jumlah Order</th>
        <th>Total pesanan</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>$customer_name</td>
        <td>$number_of_orders</td>
        <td>$total_amount</td>
    </tr>
    </tbody>
</table>
";
$conn->close();
?>
</section>
<footer>
<section class="footer">
<div class="links">
<a href="index.php">Menu</a>
<a href="customers.php">Data Pelanggan</a>
<a href="customera.php">Data Pelanggan Huruf A</a>
<a href="orderan.php">Data Pesanan</a>
</div>

<div class="credit">created by <span>Muhamad Syalum</span></span> | all rights reserved</div>

</section>
</footer>
</body>
</html>
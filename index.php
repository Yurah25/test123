<?php

$name = "YUSUF";
$nim = "H1D024049";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWAL</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
    *,html{
         padding: 0;
         margin: 0;
         font-family:'Montserrat', sans-serif ;
    }

     header{
        background-color:rgb(213, 224, 239);
        position:fixed;
        top: 0;
        left: 0;
        height: 80px;
        z-index: 9999;
        padding-bottom: 5px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center; 
        border-bottom: 1px solid #074f57;
     }   
    header h1{
        padding-left: 25px;
        color: #074f57;
        font-weight: 800;
        font-style: italic;
     }
    header span{
        color:rgba(78, 135, 250, 0.78);
     }
     
    nav ul{
        padding-right: 25px;
        list-style-type: none;
        display: flex;
        border-radius: 7px;
        gap: 25px;
    }

    nav a{
        color: #074f57;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.25rem;
        position: relative;
    }

    nav a::after{
        content: '';
        position: absolute;
        width: 0;
        background: rgba(78, 135, 250, 0.78);
        left: 0;
        height: 3px;
        border-radius: 2px;
        bottom: -6px;
        transition: 0.3s;
    }
     
    nav a:hover, a.active{
        color: rgba(78, 135, 250, 0.78);
    }

    nav a:hover::after, a.active::after {
        width: 100%;
    }
    
    .hero{
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('../static/images/home.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .hero::after{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        display: block;
        background: linear-gradient(deg 0%, rgba(78, 135, 250, ) 3%, rgba(255, 255, 255, 0) 25% )
    }
    .item{
        color: rgb(255, 255, 255);
        padding : 10rem;
    }
    .item h1{
        font-weight: 700;
        font-size: 5rem;
        box-shadow: 1 1 3 1px black;
    }
    .tentang{
        min-height: 100vh;
        width: 100%;
        display: flex;
        background-color: rgb(78, 135, 250);
        align-items: center;
    }
    @media (max-width:1366px){
        html{
            font-size: 75%;
        }
    }
    @media (max-width: 768px){
        html{
            font-size: 62.5%;
        }
        
    }
    @media (max-width:450px){
        html{
            font-size: 55%;
        }
        
    }

    </style>
</head>
<body>
    <header>
    <h1><?php echo $name?><span>25</span></h1>
    <nav>
        <ul>
            <li><a href="#home"> Home</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>
    </header>
    <section class="hero" id="home">
        <main class="item">
            <h1>Selamat Datang</h1>
            <p>Halo teman - teman ini adalah website percobaan yang saya buat<br>dan pertama kali yang saya buat dengan menghubungkan git didalamnya</p>
        </main>
    </section>
    <section class="tentang" id="tentang">
        <h1>Tentang Saya</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, et error voluptas nostrum iure aut<br>pariatur incidunt amet delectus possimus quae iusto numquam doloremque, doloribus excepturi harum molestias similique molestiae?</p>
    </section>
    <script>
      feather.replace();
    </script>
</body>
</html>
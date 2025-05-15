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
         font-family:'Montserrat', sans-serif ;
    }

     header{
        background-color:rgb(213, 224, 239);
        position:fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        padding-bottom: 5px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center; 
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
    <script>
      feather.replace();
    </script>
</body>
</html>
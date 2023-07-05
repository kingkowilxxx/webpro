<!-- PENGKONDISIAN SWITCH -->

<?php 

    $val= '';

    if( isset($_GET["pg"]) ):
        $val= $_GET["pg"];
    endif;

    switch($val){
        case "p1":
            $title_page= "Latihan Script PHP";
            $konten= "<h3>TANTRI THE ONE AND ONLY MY FUTURE 💑 🤍 </h3>";        
            break;
        case "p2":
            $title_page= "Latihan Script PHP";
            $konten= "<h3>I LOVE TANTRI SO FUCKIN MUCH ❤️ </h3>"; 
            break;
        case "p3":
            $title_page= "Latihan Script PHP";
            $konten= "<h3>TANTRI MA LUV ❤️ </h3>"; 
            break;
        default:
            $title_page= "Latihan Script PHP";
            $konten= "<h3>I LOVE TANTRI SO MUCH 💦👶🏻 </h3>"; 
            break;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_page; ?></title>
</head>
<body>

<a href="latihan3.php?pg=p1">Page 1</a>
<a href="latihan3.php?pg=p2">Page 2</a>
<a href="latihan3.php?pg=p3">Page 3</a>

    <?=
        $konten;
    ?>
    

</body>
</html>
<?php
$tanulok=[
        [
        "id"=>1,
        "nev"=>"Gyula"
        "ev"=>2000]
        ["id"=>2,
        "nev"=>"Pista"
        "ev"=>2003]
        ["id"=>3,
        "nev"=>"Kata"
        "ev"=>2001]
        ["id"=>4,
        "nev"=>"Juli"
        "ev"=>2005]
        ["id"=>5,
        "nev"=>"Tomi"
        "ev"=>2000
        ]
      // print_r($tanulok)
    ];
    $str="<ul>"
        foreach($tanulok as $tanulo){
           // print_r($tanulo);
           //echo $tanulo('nev') 
           //echo "<hr
            $str.="<li>{$tanulo('nev')}</li>"
    
        }
    
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul><?$str?></ul>
</body>
</html>
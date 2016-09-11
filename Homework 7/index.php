<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        Assignment 7
    </title>
    <style>
        h1,
        #animalPhotos {
            text-align: center;
            font-family: sans-serif;
            color: #3EA055;
        }
        
        #animalPhotos > img {
            height: 150px;
        }
    </style>
</head>

<body>

    <h1>Wallabies!</h1>

    <div id="animalPhotos">
        <?php
            
        //$dir = "/home/holtwashere/macchiato.centralus.cloudapp.azure.com/public_html/a7"; //Current directory
        
        $images = glob("*.jpg");
        $i =0;
        foreach($images as $image)
        {
                echo "<img src = $image alt = animal #$i>";
                $i++;
        }
        ?>
    </div>

</body>

</html>
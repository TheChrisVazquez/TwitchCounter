<!DOCTYPE html>
<html lang="en">
<?php
include 'config.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    @font-face {
        font-family: "fuente";
        src: url('fonts/Mantinia Regular.otf');
    }

    #count {
        font-family: "MantiniaW00-Regular";
        padding-top: 20px;
        padding-left: 20px;
        font-size: 190%;
    }

    #background {
        position: fixed;
        height: 12%;
        width: 18%;
        z-index: -1;
    }
</style>

<body><img id="background" src="img/pergamino.png" alt="">
    <h2 id="count">MUERTES: 0</h2>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        let cont = 0;
        let intervalo = null;

        intervalo = setInterval(() => {
            // fetch('http://prueba.test/countController.php')
            fetch('https://coronadisimil.000webhostapp.com/countController.php')
                .then(response => response.json()).then(data => {
                        document.getElementById('count').innerHTML = 'MUERTES: ' + data.num;
                    }

                );
        }, 1000);
    </script>
</body>

</html>
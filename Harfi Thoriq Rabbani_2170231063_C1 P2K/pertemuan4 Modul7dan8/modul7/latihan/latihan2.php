<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
        $nama[] = "Harfi";
        $nama[] = "Thoriq";
        $nama[] = "Rabbani";
        echo $nama[0] . $nama[1] . $nama[2];
        echo "<br>";
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>
<?php
include "stories/dbconfig.php";

//FUNGSI CARI
function cari($keyword)
{
    include "stories/dbconfig.php";
    $query = "SELECT * FROM stories WHERE judul LIKE '%$keyword%' AND approval_status = '1' ORDER BY tanggal DESC";

    $result = mysqli_query($connect, $query);

    return $result;
}

// MEMANGGIL SEMUA DATA ARTIKEL BERDASARKAN UPDATE TERBARU
$r = mysqli_query($connect, "SELECT * FROM stories WHERE approval_status = '1' ORDER BY tanggal DESC");

// KETIKA TOMBOL CARI DI KLIK
if (isset($_POST['cari'])) {
    $r = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Anxwer - Stories">
    <meta name="description" content="Baca pengalaman orang lain tentang gangguan kecemasan dan bagikan juga pengalamanmu disini.">
    <meta name=”robots” content="index, follow">
    <title>Anxwer - Stories</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM CSS -->
 
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- YANG INI NAVBAR -->
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/storiesStyle.css">
    <link rel="stylesheet" href="stories/css/storiesForm.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/font.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body>
    <style>
        body,
        html {
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            position: relative;
        }
    </style>
    <!-- NAVBAR -->
    <section id="navbar" >
        <?php
        include ('homepage/navbar.html');
        ?>
    </section>

    <!-- CONTENT -->
    <section id="header" style="padding-top: 7em;">
         <?php

        include ('stories/stories_header.html');
        
        ?> 
    </section>

    <section id="list" class="pt-5" >
         <?php

        include ('stories/stories_list.php');
        
        ?> 
    </section>

    <!-- FOOTER -->
    <section id="footer">
        <?php 	


        include ('homepage/footer.html');

        ?>
    </section> 
    <script src="js/script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
</body>

</html>
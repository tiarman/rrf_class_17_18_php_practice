<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Practice Class 18</title>
        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>


<body>
    <div class="slider-container">
        <div class="single-item">
           
        <div class="new-div">
            <div class="single-slide-items" style="background-image: url('https://i.ibb.co.com/fzBXpX7L/2.png');">
                <h1 style="font-size: 70px; font-weight: 700;">Welcome To Our Site</h1>
                <p style="text-align: justify; font-weight: 700;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, consequuntur!</p>
                <button>Discover</button>
            </div>
        </div>
       
        </div>
    </div>

 <section>
 <div class="main-nave">
 <ul>
 <?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name
?>
            <li><a href="practice_class_17_18_PHP copy.php" class="<?= ($currentPage == 'practice_class_17_18_PHP copy.php') ? 'active' : '' ?>">Home</a></li>
            <li><a href="pages.php" class="<?= ($currentPage == 'pages.php') ? 'active' : '' ?>">Pages</a></li>
            <li><a href="about_us.php" class="<?= ($currentPage == 'about_us.php') ? 'active' : '' ?>">About Us</a></li>
            <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
        </ul>
        
    </div>
 </section>

 <section style="margin-top: 20px;">
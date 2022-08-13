<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/about-img.jpg?raw=true" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Facility to choose from a wide range of books on different subjects.Facility to choose from books written by both; novice as well as established authors.100% original books.Books available at affordable prices.Attractive discounts on different books</p>
         <p>Facility of comparing the book price with the market value.Cash on Delivery facility available.100% Secure and Safe Shopping.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-1.png?raw=true" alt="">
         <p>A Woman’s Journey Through India is written from the point of view of a person who doesn’t live in India. Expect a book that chronicles the author’s adventures as a solo female traveller in India. Expect a book that also acts as a guide to such travelling in India.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>PRAVEEN</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-2.png?raw=true" alt="">
         <p>Nina Hill is a 29-year-old bookworm who loves being alone, thank you very much! She has a job at a bookstore, a cat named Phil, an awesome trivia team for the nights when she feels particularly adventurous, and a world-class planner.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>PRIYA</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-3.png?raw=true" alt="">
         <p>Before Dawn narrates the story of Gemma Zessar, a powerful and ruthless woman, who heads a 12-billion-dollar media conglomerate, and is known for her ambition and greed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>MOHAN</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-4.png?raw=true" alt="">
         <p>Isha and the Hedgerow-Folk serves to sensitize young readers about being conscious of their surrounding environment and those who live in the lap of Nature. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>KARTHIKA</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-6.png?raw=true" alt="">
         <p>Every individual in this world has some problems, and many times the answers or solutions to these problems are known to the person.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>NETHRA</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/pic-5.png?raw=true" alt="">
         <p>Full of mysteries, paradoxes, and a whole lot of twists and turns make this book an unpredictable, enthralling, and haunting read..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ARUNKUMAR</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-1.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-2.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-3.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-4.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-6.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="https://github.com/SRIDHARAN1819/project/blob/main/author-5.jpg?raw=true" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
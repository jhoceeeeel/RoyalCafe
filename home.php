<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="menucss/menustyle.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide align-items-center text-center text-md-left min-vh-100">
            <div class="content">
               <span>Order Now</span>
               <h3>Creamy Coffee</h3>
               <a href="#category" class="btn">See Category</a>
            </div>
            <div class="image">
               <img src="menu images/home-img-1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Order Now</span>
               <h3>Sweet Frappes</h3>
               <a href="#category" class="btn">See Category</a>
            </div>
            <div class="image">
               <img src="menu images/home-img-2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Order Now</span>
               <h3>Refreshing Tea's</h3>
               <a href="#category" class="btn">See Category</a>
            </div>
            <div class="image">
               <img src="menu images/home-img-3.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category" id="category">

   <h1 class="heading">Drinks Category</h1>

   <div class="box-container">

      <a href="category.php?category=Espresso Based" class="box">
         <img src="menu images/menu-1.png" alt="">
         <h3>Espresso Based</h3>
      </a>

      <a href="category.php?category=Filter Coffee" class="box">
         <img src="menu images/menu-2.png" alt="">
         <h3>Filter Coffee</h3>
      </a>

      <a href="category.php?category=Cold Brew" class="box">
         <img src="menu images/menu-3.png" alt="">
         <h3>Cold Brew</h3>
      </a>

      <a href="category.php?category=Frappes" class="box">
         <img src="menu images/frappes.png" alt="">
         <h3>Frappes</h3>
      </a>

      <a href="category.php?category=Milk Tea's" class="box">
         <img src="menu images/menu-6.png" alt="">
         <h3>Milk Tea's</h3>
      </a>


      <a href="category.php?category=Iced Tea's" class="box">
         <img src="menu images/iced tea.png" alt="">
         <h3>Iced Tea's</h3>
      </a>


   </div>

</section>




















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->







<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="menujs/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>
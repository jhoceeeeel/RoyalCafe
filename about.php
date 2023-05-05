<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="menucss/menustyle.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3></h3>
   <p> <span> </span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">


      <div class="content  align-items-center text-center  min-vh-100">
    
         <h3>why choose us?</h3>
         <h2>For a experience like no other</h2>
         <p>At Royal Blend, we believe that every cup of coffee and milk tea should be an experience worth savoring. That's why we only use the highest quality beans and tea leaves, carefully sourced from around the world, to create our expertly crafted beverages. Our skilled baristas have years of experience in the coffee and tea industry and are dedicated to bringing you the perfect cup every time. Whether you're in the mood for a rich and flavorful espresso or a refreshing and creamy milk tea, we have something to satisfy your cravings. And with our cozy atmosphere and friendly staff, you'll feel right at home every time you visit.</p>
      </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->


</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Our History</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="team-member-1.jpg" alt="">
            <div class="content">
            <p>Jhocel is one of the owners of the newly built cafe called Royal Blend. She is a passionate and dedicated entrepreneur who has always had a keen interest in the hospitality industry. Queenie has gained extensive experience in managing cafes and restaurants over the years, and she is known for her exceptional leadership skills and ability to create a warm and welcoming atmosphere in any establishment. With her wealth of knowledge and expertise, she has played a pivotal role in the success of Royal Blend, and her commitment to providing top-quality service has earned her a loyal following of customers.</p>
            <h3>Jhocel Jonson</h3>
         </div>
         </div>

         <div class="swiper-slide slide">
            <img src="team-member-2.jpg" alt="">
            <div class="content">
            <p>Rafael is another owner of Royal Blend cafe, and he is a skilled barista who has dedicated his career to mastering the art of coffee-making. He has honed his craft over the years, experimenting with different roasts and brewing methods to create the perfect cup of coffee. Rafael's passion for coffee is infectious, and he is always eager to share his knowledge and expertise with others. His attention to detail and commitment to quality have helped Royal Blend gain a reputation as one of the best cafes in town. With Rafael at the helm of the coffee-making process, customers can expect nothing but the best from Royal Blend.</p>
            <h3>Rafael Cena</h3></div>
         </div>

         <div class="swiper-slide slide">
            <img src="m2.jpg" alt="">
            <div class="content">
            <p>As Jhocel and Rafael started planning for their dream cafe,
             they knew they wanted to create a space that would truly stand out in every way. They searched high and low for the perfect location, finally finding a prime spot in a bustling part of town.</p>
            <h3>Royal Blend Building Construction</h3></div>
         </div>
      
         <div class="swiper-slide slide">
            <img src="shop.jpg" alt="">
            <div class="content">
            <p>Finally, after months of hard work and dedication, Royal Blend was ready to open its doors.
             As customers started pouring in, they were immediately struck by the cafe's inviting atmosphere and exceptional Milk Tea And Coffee. Word quickly spread about this new spot in town, and Royal Blend quickly became one of the most popular cafes around.</p>
            <h3>Our Humble Begining</h3></div>
         </div>
         <div class="swiper-slide slide">
            <img src="about.jpg" alt="">
            <div class="content">
            <p>A charming and inviting cafe that offers a truly exceptional experience. From the moment you step inside, you'll be struck by the warm and welcoming atmosphere, which is both stylish and cozy. </p>
            <h3> Royal Blend</h3></div>
         </div>
         <div class="swiper-slide slide">
            <img src="customer 2.jpg" alt="">
            <div class="content">
            <p>At Royal Blend, we pride ourselves on treating our staff like family, not employees. From day one, we make it a priority to create a warm and supportive work environment, 
where everyone feels valued and appreciated for their contributions. We believe that happy employees make for happy customers, which is why we invest so much time and effort in building strong relationships with our staff.</p>
            <h3>Family Not Employee</h3></div>
         </div>
         <div class="swiper-slide slide">
            <img src="customer 1.jpg" alt="">
            <div class="content">
            <p> Our new social series about film adaptations kicks off with the
                actors and directors who brought the book to life.</p>
            <h3>Loved By The Guest</h3></div>
         </div>
         </div>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->





<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->









<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="menujs/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Dvsmining</title>

    <!-- links -->
    <?php include '../inc/links.php';?>

  </head>
  <body>

     <?php 
          // Navbar Section
          include '../inc/navbar.php'; 
          // About Section
          include '../templates/About.php';
          // Clients Section
          include '../templates/Clients.php';
           // Services Section
           include '../templates/services.php';
          // Why Choose Us Section
          include '../templates/wcu.php';
          // Testimonials Section
          include '../templates/Testimonials.php';
          // CTA Section
          include '../inc/cta.php';
          // footer Section
          include '../inc/footer.php';
          // whatsapp
          include '../inc/whatsapp.php';
     ?>

  </body>
</html>
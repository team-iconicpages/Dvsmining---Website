<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About | Dvsmining</title>
    
    <!-- links -->
    <?php include '../inc/links.php';?>

  </head>
  <body class="bg-gray-100">
    <!-- mobile navbar -->
    <?php include '../inc/mobile_navbar/about_page_navbar.php';?>

    <!-- About Us Section -->
     <?php include '../templates/About.php';?>

    <!-- Journey Section -->
    <?php include '../templates/Journey.php';?>

    <!-- Blog Post -->
    <?php include '../templates/blog_post.php';?>
    
    <!-- CTA -->
    <?php include '../inc/cta.php'?>

    <!-- footer -->
    <?php include '../inc/footer.php'; ?>

    <!-- whatsapp -->
    <?php include '../inc/whatsapp.php';?>

    <!-- Animate On Scroll -->
    <script>
      AOS.init();
    </script>

    <!-- jQuery -->
    <script>
      $(document).ready(function () {
        $("#menu-toggle").click(function () {
          $("#mobile-menu").toggle();
        });
      });
    </script>
  </body>
</html>

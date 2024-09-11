<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Dvsmining</title>
    
    <!-- links -->
    <?php include '../inc/links.php';?>

  </head>
  <body class="bg-gray-100">
    <!-- mobile navbar -->
    <?php include '../inc/mobile_navbar/contact_page_navbar.php';?>

    <!-- Information -->
    <?php include '../templates/Info.php';?>

    <!-- Form Section -->
    <?php include '../templates/contact_form.php';?>

    <!-- footer -->
    <?php include '../inc/footer.php'; ?>

    <!-- whatsapp -->
    <?php include '../inc/whatsapp.php';?>

  

    </body>

  <script>
    AOS.init();
    $("#menu-toggle").click(function () {
      $("#mobile-menu").toggle();
    });
  </script>
</html>

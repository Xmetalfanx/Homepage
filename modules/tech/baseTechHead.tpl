
<!DOCTYPE html>
<!-- the closing HTML tag has to be removed too -->
<html lang="en">
<head>

  <title>
    <?php

    $mainTitle = 'Xmetal TechHQ Section - ';

    global $sectiontitle;         // Allows the use of the $sectionTitle variable
    echo $mainTitle . $sectionTitle . $pageTitle;
    ?>

    </title>

  <meta name="Description" content="Xmetafanx's Homepage is a site that can help you with Computer Problem, File Sharing News, Computer FAQ's, Security Information, Antivirus and Spyware Removal, and much much more..">


  <!-- this works but seems wrong .. like it shouldn't be two levels up -->
  <?php require __DIR__ . "/../../modules/headerInclude.tpl"; ?>

</head>

<!DOCTYPE html>

<head>
  <meta name="Description" content="Xmetafanx's LinuxHQ site is a page for ..">
  <title>

    <?php

    $mainTitle = 'Xmetal LinuxHQ Section - ';

    global $sectionTitle;         // Allows the use of the $sectionTitle variable

    echo $mainTitle . $sectionTitle . $pageTitle;
    ?>
  </title>

    <?php include_once __DIR__ . '/../../modules/headerInclude.tpl'; ?>

</head>

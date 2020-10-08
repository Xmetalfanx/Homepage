<?php

    $sectionTitle='';
    $pageTitle="LinuxHQ Frontpage";

    $path = getenv('DOCUMENT_ROOT');
    include($path . '/templates/linux/open/baseLinuxTemplate.tpl');
?>

  <div class="main-section main-section--left-col">
    <?php include $path . '/linuxHQ/modules/mainCarousel.tpl' ?>

    <h4 class="themeColorAccent">Introduction</h4>

    <div class="text-justify">
      <p>Hello, I'd like to give a little background about my  experience with Linux, before you start browsing my site, to get a sense for where I am coming from. For a number of years now , I have been using Linux to some degree, and  have been using it more and more, while using  Windows less and less.</p>
      <p>I have recently found a number of Linux reviewers on Youtube that have  inspired me&#x9;to make a  page that hopefully can show that Linux is not something that is just  for programmers or advanced users.</p>
      <p>Showing  Tutorials, My reviews (as well as others), and sites that have helped me over&#x9;the years, is TRUE goal I have with this section. The Linux related ideas I came up with to add to the main site started to get way out of hand to put in a "small section" so that's when I decided to do the split into TechHQ (former WIndows Section ... and still has some cross-platform stuff) and LinuxHQ.</p>
    </div>

    <!-- OMGUbuntu RSS feed/news -->
    <?php include $path . "/linuxHQ/modules/omgubuntu.tpl"; ?>

  </div>


  <div class="d-none d-md-block">

    <!-- Distrowatch RSS Feed -->
    <?php include $path . "/linuxHQ/modules/distrowatch.tpl"; ?>
  </div>


</div> <!-- Ends the mainSection div....flexContainer's div is closed IN the footer file below  -->

<?php include $path . "/modules/footer.tpl"; ?>

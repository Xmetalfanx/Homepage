<!DOCTYPE html>
<html lang="en">
<head>
  <title> Xmetal&apos;s Homepage</title>

  <?php include 'modules/headerInclude.tpl'; ?>

  <!-- Universal CSS file-->
  <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
  <!-- Header "navigation"-->
  <?php include 'modules/frontnav.tpl'; ?>
  <!-- Conainter for both sections, below-->

  <!-- This should be a column -->
  <div id="mainBody" class="m-0">
    <div class="coverImage d-none d-lg-block">

    </div>
    
    <div id="mainText" class="row">
      <div class="col-6">
        <div>I am removing (note: It's just not for me, I have nothing bad to say about it ... I think some issues I had are Bourbon.io and Bootstrap conflicting at times, and that's why I am removing that extra CSS code that is not needed) Bourbon.io and related content so the layout on some pages are broken now and I am working on it to get it back to normal ASAP. </div>
      </div>

      <div class="col-6">
        <a href="https://github.com/Xmetalfanx" target="_blank">
          <i class="fab fa-github fa-2x"></i>
        </a>

        <h4>My Github Other Github project</h4>
        <a href="https://github.com/Xmetalfanx/linuxSetup" target="_blank">LinuxSetup</a>- Helps a user setup some things with a menu system on Ubuntu, Fedora, OpenSuse, and (minor things for this distro ... so far) Solus.   This includes adding well known third party repos, enabling coming setings not set by default, and adding common software in one shot

        <br><br>
        <a href="https://github.com/Xmetalfanx/linuxThemes" target="_blank">LinuxThemeing</a>

        This originally was going to be a part of the LinuxSetup scripts, though it grew too much and I decided to branch it out.
        This installs themes and icon packs of well liked Linux Themes into your system.  I have alot of plans for this for version and distro detection.
      </div>
    </div>
  </div>

  <?php include 'modules/footer.tpl'; ?>

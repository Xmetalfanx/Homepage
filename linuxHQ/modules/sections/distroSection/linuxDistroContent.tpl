
<div class="row">
  <div class="col-lg-1"><?php echo $icon; ?></div>
  <div class="col-lg-11 name"><?php echo $name; ?></div>
</div>

<?php include $sitePath . '/linuxHQ/modules/sections/distroSection/distroTable.tpl'; ?>
<?php include $sitePath . '/linuxHQ/modules/ytsection.tpl'; ?>

<div class="card">
  <div class="card-block">
    <h4 class="card-title">Description</h4>
    <div class="card-text"><?php echo $description; ?></div>
  </div>
</div>

<div class="bold">Screenshots</div>
<div class="screenshots"><?php echo $distroSshot; ?><br/></div>


<div class="card">
  <div class="card-block">
    <h3 class="card-title">
      Reviews
      <?php include $sitePath . '/linuxHQ/modules/section/linuxDistroReviewer.php' ; ?>
    </h3>
  </div>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">My Experience: </h4>
    <div class="card-text"><?php echo $EXP; ?> <br/><?php echo $experience; ?> <br/><br/>
      <div class="boldUnderline">
        Any other comments I have about this distro:
        <?php echo $otherComments; ?><br/><?php include $sitePath . '/linuxHQ/modules/distroRec.tpl'; ?>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">USB Drive Creation Experience</h4>
    <div class="card-text">
      <a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a>
    </div>
    <?php include $sitePath . '/linuxHQ/modules/sections/usb.tpl'; ?>
  </div>
</div>

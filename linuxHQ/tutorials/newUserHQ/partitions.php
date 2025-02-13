<?php
	$pageTitle = 'Partitions... What are they?';

  require_once __DIR__ . '/../../../templates/linux/open/baseLinuxTutorBlank.tpl';
?>


<div class="d-flex">
  <div class="card"> 
    <div class="card__header">What is a Partition</div>
    <div class="card__body"> 
      <p>Think of your hard drive as a Pie or Pizza.</p>
      <p>Your drive is one single &ldquo;slice&rdquo; (the entire Pizza = one slice) ...Partitioning allows you to divide your drive into sections that do not &ldquo;have to be&rdquo;, the same size.  This is basically how you can run Windows and Linux on the same computer. Part of the drive is for Windows, and another part is for Linux. </p>
    </div>
  </div>
  <div class="card"> 
    <div class="card__header">Word of Warning</div>
    <div class="card__body">
      <p>Many Linux installers have an option that allows you to use the entire drive for Linux.</p><em><strong> If you do not watch what your doing, you CAN format the Windows side and lose your data.</strong></em>.  
      <p>I am not saying "Be WORRIED"... just "pay attention".   </p>
      <p>It is better to stop what your doing and double check if you're not sure.  Just take your time (remember &ldquo;everyone was new to Linux&rdquo; at some point) and read the instructions on what your doing.  If you follow this advice, you have nothing to worry about at all.</p>
      <p>Accidentally removing Windows is a common mistake (when there is one), that I personally see new users make during the partitioning step &hellip; ... mainly just because they did not simply pay attention to what was going on and read what the installer was telling them.  ALSO NOTE: Installers can detect Windows typically and will default to "install Linux along side Windows", but it is a good idea to backup important data in/from Windows "just in case" beforehand.</p>
    </div>
  </div>
</div>

</div> <!-- ends primary-content -->
</div> <!-- ends main-section -->

<?php require __DIR__."/../../../modules/footer.tpl"; ?>
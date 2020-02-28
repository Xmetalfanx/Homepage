<?php 
	$the_title = 'Xmetalfanx Security Section - Rogue Virus and Malware scanners and how to remove them';

  $path = getenv('DOCUMENT_ROOT'); 
  include $path . "/templates/tech/open/baseTechSecurityTemp.tpl";

?>


<div class="card w-95 mx-auto shadow my-2">
  <div class="card-header">Antivirus Scanners, I trust </div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="https://support.kaspersky.com/us/kscloud" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/AVs/kaspersky.png" alt="Kaspersky Security Cloud graphics">Kaspersky Security Cloud </a></li>
      <li class="list-group-item"><a href="https://www.bitdefender.com/solutions/free.html" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/AVs/bitDefender.png" alt="Bit Defender Free graphic">Bit Defender Free</a></li>
    </ul>
  </div>
</div>
<div class="card w-95 mx-auto shadow my-2">
  <div class="card-header">Antivirus Scanners, I am not sure about </div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="" target="_blank">AVG (Bought by Avast) </a></li>
      <li class="list-group-item"><a href="https://www.avast.com/en-us/index#pc" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/AVs/avast.png">Avast</a></li>
    </ul>
    <div>Please see:
      <ul>
        <li><a href="https://www.cnet.com/news/antivirus-firm-avast-is-reportedly-selling-users-web-browsing-data/" target="_blank">Antivirus firm Avast is reportedly selling users' web browsing data - Cnet </a></li>
        <li><a href="https://www.youtube.com/watch?v=8iXlQjRgqXo" target="_blank">Quisup's Youtube video on the subject </a></li>
        <li><a href="https://www.youtube.com/watch?v=cmYw6vLeIYU" target="_blank">Britec09's Youtube video on the subject </a></li>
        <li><a href="https://www.pcworld.com/article/3516502/report-avast-and-avg-collect-and-sell-your-personal-info-via-their-free-antivirus-programs.html" target="_blank">Update: Avast kills Jumpshot data-collection business after privacy concerns mount</a></li>
        <div>Also please remember that CCleaner (a FORMER must have program) for me, is/has been owned by Avast for awhile now ... I have personally switched to BleachBit on my only remaining Windows system.</div>
      </ul>
    </div>
  </div>
</div>
<div class="card w-95 mx-auto shadow my-2">
  <div class="card-header">Malware and Rootkit Scanners</div>
  <div class="card-body">
    <div>This does not count all the smaller, specialty scanners, by the way </div>
    <ul class="list-group"> 
      <li class="list-group-item"><a href="" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/emsisoft.png" alt="Emsisoft Anti-Malware graphic">Emsisoft Anti-Malware</a></li>
      <li class="list-group-item"><a href="https://www.zemana.com/antimalware" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/zenmana.png" alt="Zemana Anti-Malware graphic">Zemana AntiMalware</a></li>
      <li class="list-group-item"><a href="https://www.hitmanpro.com/en-us/hmp.aspx" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/hitman.png" alt="Hitman Pro graphic">Hitman Pro</a></li>
      <li class="list-group-item"><a href="http://www.malwarebytes.org/" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/malwarebytes.png" alt="Malwarebytes graphic">MalwareBytes</a></li>
    </ul>
  </div>
</div>
<hr/> 
<div class="card w-95 mx-auto shadow my-2">
  <div class="card-header">Specific Scanners/Misc Tools </div>
  <div class="card-body"> 
    <div>(not always needed, but I for instance have updated copies of all of these &quot;just in case&quot;). These can be used to help clean, badly infected computers:</div>
    <ul class="list-group"> 
      <li class="list-group-item"><a href="http://www.bleepingcomputer.com/combofix/how-to-use-combofix" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/combofix.png" alt="Combofix Graphic">ComboFix</a>
        <div>I have seen ComboFix, first-hand help computers that were badly infected; new users, should only use this if reformatting SEEMS like the only hope, after MalwareBytes &quot;failed&apos;. Note: At that time I had no idea about RKill (listed below) so instead of running Combofix, running RKill THEN Malwarebytes, may have worked as well</div>
      </li>
      <li class="list-group-item"><a href="https://www.bleepingcomputer.com/download/rkill/" target="_blank">RKill</a><img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/rkill.png" alt="Rkill graphic">2020 note: I am not sure how useful this is in Windows 10, or if this is even updated anymore<br/>- Listed on many BleepingComputers tutorials as what to use before Malwarebytes on pesky infections that contain rootkits that try to disable Malwarebytes from cleaning your computer</li>
      <li class="list-group-item"><a href="https://usa.kaspersky.com/downloads/tdsskiller" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/TDSSKiller.png" alt="TDSSKiller graphic">TDSSKiller</a> Kaspersky's offering to remove TDSS infections </li>
      <li class="list-group-item"><a href="https://www.malwarebytes.com/adwcleaner/" target="_blank"> <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/adwcleaner.png" alt="ADWCleaner graphic">Malwarebyte's AdwCleaner </a></li>
    </ul>
  </div>
</div>
<div class="card w-95 mx-auto shadow my-2">
  <div class="card-header">Things Pro (paid) versions of programs tend to have, the free programs do not</div>
  <div class="card-body"> 
    <ul>
      <li>Better tech support from company when you actually purchase the software&apos;s Pro version
        <div>This fact I even question, since at one point,  I had questions for Comodo AND Avast, and (via forum) both responded promptly, and answered my question(s) completely)   </div>
      </li>
      <li>The detection rate of freewares (like Avast and Avira) are 100% the same.  THERE IS NO DIFFERENCE.</li>
      <li>Paid Programs tend to bundle AV&apos;s + Parental Control Software + Firewalls + &quot;Spam blockers&quot; together .
        <ul>
          <li>I find that using a different program for certain tasks tend to provde better security and allows me to choose what programs I use for what task.  Some All In One products tend to not be great at everything they do.<br></li>
        </ul>
      </li>
    </ul>
  </div>
</div>




</div></div>

<!-- include baseTechFooter -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>

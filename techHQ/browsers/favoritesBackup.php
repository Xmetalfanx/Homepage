<?php

	 $the_title = 'Xmetalfanx Browser Section - Favorites Backup';
  	  $the_content = <<<EOD

    <p>
    <span class="boldText"> Maxthon, Avant or Internet   Explorer</span>
    </p>

    <p>Generally its the same for all 3... </p>
    <ol>
		  <li> Go to File and then Export, or Import and Export </li>
		  <li> if there is a submenu go to &quot;export
			favorites&quot;... if the message is not the same as what i say,
			its very similar </li>
		  <li>Select the location of the backup folder. <br />
		  </li>
    </ol>
<p><img src="/techHQ/progIcons/browsers/firefox_1.png" alt="Firefox Icon" width="36" height="36" class="imgleft" />
      <span class="boldText">Mozilla&#39;s &quot;Firefox&quot; - Method 1</span>
    </p>
<ol>
  <li> Go to &quot;Bookmarks&quot; and then click Organize Bookmarks </li>
  <li> Then go to this Window&#39;s File Menu and Click Export </li>
  <li>Here you type the name and location to back your bookmarks up
    to... Remember to back this file up (to removable media, i mean) , otherwise you still will
    lose your &quot;backup&quot; too ...
    which is beside the point of why your backing up in the first place<br />
  </li>
</ol>
<p class="boldText">Mozilla Firefox - Method 2</p>
    <ol>
      <li>This is a VERY SIMPLE METHOD .</li>
      <li>Install Firefox </li>
      <li>Install <a href="http://customsoftwareconsult.com/extensions" target="_blank">FEBE - Firefox Environmental Backup Extension </a></li>
      <li>Set a few options like what to backup and what directory to place the backups in, and your set</li>
      <li>Now just go to the Tool menu, down to <span class="boldItalics">FEBE - Perform Backup </span>      </li>
    </ol>
    <ul>
      <li><img src="/techHQ/browsers/FEBE_Window.jpg" alt="FEBE Window" width="583" height="291" class="imgLeftPad" /></li>
    </ul>
<p style="clear:both;" class="boldText">Google Chrome </p>
    <ol>
      <li>Go here (there is no text on the menus ... its the one all the way on the right that is shown here) ... Go down to where it says &quot;Bookmark Manager&quot;<br /><br />
        <img src="/techHQ/browsers/Google_Chrome_Bookmark_Man.jpg" alt="Google Chrome Screenshot" width="450" height="391" class="imgLeftPad" /><br />

        <p><a href="/techHQ/browsers/Chrome_bookmark.jpg" target="_blank">
          <img src="/techHQ/browsers/Chrome_bookmark.jpg" alt="Chrome Bookmark Menu" width="643" height="424" class="imgLeftPad" /></a></p>
      </li>
      <li>  Go to Tools and then Export, which will export/save a HTML file to the location of your choice ... that simple    </li>
    </ol>
<div class="justify"> <strong>REMEMBER</strong>: A common error when backing up data new
      users make is backing items up the same drive and not actually using
      removable media... in this sense you put your spare house keys on the
      same keychain as the originals, so if you do manage to lose one...
      you lose the other one too .... (If you are using separate
      partitions, that would work too ... but still ... if your Hard drive
      goes down... all partitions will be lost too)
</div>

EOD;
?>
 <?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechBrowserTemplate.php"); ?>

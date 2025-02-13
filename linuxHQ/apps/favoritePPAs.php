<?php
	$pageTitle = 'Favorite Apps';

  require_once __DIR__ . '/../../templates/linux/baseLinuxAPP.tpl';
?>


<h1>MASS PPA</h1>
<ul>
  <li>Ambient Noise</li>
  <li>Grub Customizer</li>
  <li>Lollypop Music Player</li>
  <li>MakeMKV PPA</li>
  <li>Media Elch Media renamer/Meta info downloader - MAY not work after 16.04.x</li>
  <li>Libre Office PPA</li>
  <li>Noobslab Conky PPA</li>
  <li>Altyo - Drop Down Alternative</li>
  <li>Vocal PPA</li>
</ul>
<h4>With per-PPA Confirmation</h4><code>
  sudo add-apt-repository ppa:costales/anoise &amp;&amp; sudo add-apt-repository
  ppa:danielrichter2007/grub-customizer &amp;&amp; sudo add-apt-repository ppa:gnumdk/lollypop &amp;&amp; sudo add-apt-repository ppa:heyarje/makemkv-beta &amp;&amp; sudo add-apt-repository ppa:kvibes/mediaelch &amp;&amp; sudo add-apt-repository ppa:libreoffice/ppa &amp;&amp; sudo add-apt-repository ppa:linvinus/altyo &amp;&amp; sudo add-apt-repository ppa:nathandyer/vocal-daily &amp;&amp; sudo add-apt-repository ppa:noobslab/noobslab-conky</code>
<h4>Without per-PPA Confirmation</h4><code>
  sudo add-apt-repository -y ppa:costales/anoise &amp;&amp; sudo add-apt-repository -y
  ppa:danielrichter2007/grub-customizer &amp;&amp; sudo add-apt-repository -y ppa:gnumdk/lollypop &amp;&amp; sudo add-apt-repository -y ppa:heyarje/makemkv-beta &amp;&amp; sudo add-apt-repository -y ppa:kvibes/mediaelch &amp;&amp; sudo add-apt-repository -y ppa:libreoffice/ppa &amp;&amp; sudo add-apt-repository -y ppa:linvinus/altyo &amp;&amp; sudo add-apt-repository -y ppa:nathandyer/vocal-daily &amp;&amp; sudo add-apt-repository -y ppa:noobslab/noobslab-conky</code>




<ul>
  <li>
		<a href="#"> </a>
    <div>
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Individual PPA List - Multimedia Apps</h4>
        </div>
        <div class="card-text">
          <h3>Ambient Noise<code>sudo add-apt-repository ppa:costales/anoise</code></h3>
          <h3>Krita Editor<code>sudo add-apt-repository ppa:dimula73/krita</code></h3>
          <h3>Lollypop Music Player<code>sudo add-apt-repository ppa:gnumdk/lollypop</code></h3>
          <h3>MakeMKV<code>sudo add-apt-repository ppa:heyarje/makemkv-beta</code></h3>
          <h3>MediaElch, for assisting naming files for Kodi<code>sudo add-apt-repository ppa:kvibes/mediaelch</code></h3>
          <h3>Vocal Daily PPA<code>sudo add-apt-repository ppa:nathandyer/vocal-daily</code></h3>
          <h3>for &ldquo;Variety WP changer&rdquo;<code>sudo add-apt-repository ppa:noobslab/noobslab-conkypeterlevi/ppa</code></h3>
        </div>
      </div>
    </div>
  </li>
  <li >
		<a href="#"> </a>
    <div>
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Individual PPA List - Other Apps </h4>
        </div>
        <div class="card-text">
          <h3>Grub Customizer PPA for customizing the Grub Boot Loader<code>sudo add-apt-repository ppa:danielrichter2007/grub-customizer</code></h3>
          <h3>Kubuntu Plasma 5, backports<code>sudo add-apt-repository ppa:kubuntu-ppa/backports</code></h3>
          <h3>PPA for the LATEST Libre Office version<code>sudo add-apt-repository ppa:libreoffice/ppa</code></h3>
          <h3>?? guake drop down terminal alternative?<code>sudo add-apt-repository ppa:linvinus/altyo</code></h3>
          <h3>Noobslab Conky PPA<code>sudo add-apt-repository ppa:noobslab/noobslab-conky</code></h3>
          <h3>for &ldquo;Variety WP changer&rdquo;<code>sudo add-apt-repository ppa:noobslab/noobslab-conkypeterlevi/ppa</code></h3>
          <h3>Conky-manager, aptik, timeshift<code>sudo add-apt-repository ppa:teejee2008/ppa</code></h3>
          <h3>Veracrypt<code>sudo add-apt-repository ppa:unit193/encryption</code></h3>
          <h3>Atom and/or Brackets Editors PPA<code>sudo add-apt-repository ppa:webupd8team/atom &amp;&amp; sudo add-apt-repository ppa:webupd8team/brackets</code></h3>
        </div>
      </div>
    </div>
  </li>
</ul>

<?php require __DIR__ . "/../../modules/footer.tpl"; ?>

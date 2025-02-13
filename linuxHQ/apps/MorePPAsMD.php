<?php

  $pageTitle = 'Adding PPAs to any Ubuntu Based Distro';

  require_once __DIR__ . '/../../templates/linux/baseLinuxAPP.tpl';
?>

<h2>
  <a href="#more-ppas">More PPAs</a></h2>
    
    <ul>
      <li>
        <h5>Streaming audio recorder - Can record streaming audio</h5>
			<code>sudo add-apt-repository ppa:audio-recorder/ppa </code>
      </li>

      <li>
        <h5>Installing a few tweak tools for Ubuntu/Unity</h5>
			<code>sudo apt-get install unsesttings unity-tweak-tool</code>
      </li>
    </ul>
    <p>
      <img src="http://www.webmin.com/screens2/useradmin.png" alt="User Admin Screenshot" />
      <br />
      <img src="http://www.webmin.com/screens2/firewall-edit.png" alt="Firewall Rule Creation" />
    </p>


    <ul>
      <li>
        <h5>Audio Recorder - Streaming audio recorder</h5>
			  <code>sudo apt-add-repository ppa:osmoma/audio-recorder</code>
        <ul>
          <li>
            <img src="https://lh4.googleusercontent.com/-DczIitaxSTk/UsVcAZeRZwI/AAAAAAAAG4I/zXawPGLNdwU/s1600/audio-recorder-2.jpg"
            alt="Audio Recorder Screenshot" />
          </li>
        </ul>
      </li>

      <li>
        <h5>Kodi Related</h5>
			<code>sudo add-apt-repository ppa:team-xbmc/ppa</code> <br />
        <ul>
          <li>
            <em>How to install kodi</em>
			<code>sudo apt-get install kodi kodi-pvr* kodi-audioencoder*</code>
          </li>
        </ul>
      </li>
   
    </ul>

<?php require __DIR__ . "/../../modules/footer.tpl"; ?>

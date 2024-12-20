// let for where to put the output
let distroResults = document.getElementById('linux-primary-content');

let myPage = '/linuxHQ/distro/';
let DWPage = 'https://distrowatch.com/';
let distroGraphics = '/linuxHQ/graphics/distros/';
let YTPLBase = 'https://www.youtube.com/playlist?list=';
let YTPLEmbeddedBase = 'https://www.youtube.com/embed/videoseries?list=';

function displayDistroOutput(
  currentDistroFamily,
  currentDistroName,
  currentDistroIcon,
  currentDistroTitle,
  currentDistroSupportedVersions,
  currentDistroLatestVersions,
  currentDistroHomepage,
  currentDistroDownload,
  currentDistroForum,
  currentDistroScreenshot,
  currentDistroScreenshotTN,
  currentDistroYTReviewPLaylist,
  currentDistroYTTipsPLaylist,
  currentDistroFeaturesDesktops,
  currentDistroSimilarDistros,
  currentDistroTargetAudience,
  currentDistroSoftwareType
) 
{
  let distroSShotPath = '/linuxHQ/screenshots/' + currentDistroFamily + '/';
  let distroSShotTNPath = distroSShotPath + 'thumbnails/';

  // Template Literal for output

  const currentDistroSShotOutput = `

        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="thumbnail-fluid--lg d-none d-md-inline-block" src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" >
        </a>
    `;

  const currentDistroMoreInfoOutput = `
    <div class="py-3">
      <span class="fw-800">Target Audience: </span>${currentDistroTargetAudience}<br />
      <span class="fw-800">Featured Desktops: </span>${currentDistroFeaturesDesktops}<br />
      <span class="fw-800">Similar Distros: </span>${currentDistroSimilarDistros}<br />
    </div> 
    
    `;

    const currentDistroYTOutput = `
    
      <div class="yt-container">
        <div class="header">Youtube Playlists</div>  
        <div class="yt-playlist">   
          <iframe class="YT-playlist-tn" src="${YTPLEmbeddedBase}${currentDistroYTReviewPLaylist}" target="_blank" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          
          <iframe class="YT-playlist-tn" src="${YTPLEmbeddedBase}${currentDistroYTTipsPLaylist}" target="_blank" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        
          <div class="d-xs-block d-lg-none p-3">
            <div>
                <a href="${YTPLBase}${currentDistroYTReviewPLaylist}" target="_blank" rel='noreferrer'>Youtube Review/Walkthrough/Comments Playlist </a>
            </div>
            <div>
                <a href="${YTPLBase}${currentDistroYTTipsPLaylist}" target="_blank" rel='noreferrer'>Youtube Tips/Tricks/Tutorial Playlist</a>
            </div>
          </div>
        </div>


      
      <div class="header"> Linux/Tech Youtubers </div> 
      <div class="yt-content-creators d-xs-none d-md-block">
        <div class="card">
          <div class="card__body">
            <a href="https://www.youtube.com/@destinationlinux" target="_blank">    
            <img src="/linuxHQ/graphics/yt/destinationLinux.jpg" alt="Destination Linux Channel Link" /> 
                Destination Linux
            </a>
          </div>
      </div>

      <div class="card">
        <div class="card__body">
            <a href="https://www.youtube.com/@EzeeLinux/" target="_blank">
              <img src="/linuxHQ/graphics/yt/joecollins.jpg" alt="Ezee Linux/Joe Collins Channel Link" />  
              Joe Collins
            </a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
            <a href="https://www.youtube.com/@TheLinuxEXP" target="_blank">
            <img src="/linuxHQ/graphics/yt/theLinuxEXP.jpg" alt="" />
            TheLinuxEXP
            </a>
        </div>
      </div>

    <div class="card">
      <div class="card__body">
          <a href="https://www.youtube.com/@InfinitelyGalactic" target="_blank">
            <img src="/linuxHQ/graphics/yt/IG.jpg" alt="InfinitelyGalactic Channel Link" />    
            IG
          </a>
      </div>
    </div>

    <div class="card">
      <div class="card__body">
          <a href="https://www.youtube.com/@BrodieRobertson" target="_blank">
            <img src="/linuxHQ/graphics/yt/brodie.jpg" alt="Brodie Robertson Channel Link" />    
            Brodie Robertson
          </a>
      </div>
  </div>

    <div class="card">
      <div class="card__body">
          <a href="https://www.youtube.com/@TuxDigitalNetwork" target="_blank">
            <img src="/linuxHQ/graphics/yt/tuxdigital.jpg" alt="https://www.youtube.com/@InfinitelyGalactic Channel Link" />    
            Tux Digital 
          </a>
      </div>
    </div>

    <div class="card">
      <div class="card__body">
        <a href="https://www.youtube.com/@TunnellVision" target="_blank">
          <img src="/linuxHQ/graphics/yt/michaelTunnell.jpg" alt="https://www.youtube.com/@InfinitelyGalactic Channel Link" />    
          Michael Tunnell
        </a>
      </div>
    </div>

 </div>
  
  
    `;

  // Oct 2021: empty div needed for CSS alignment
    const currentDistoHeaderOutput = `
    <div class="card__header">
      <div>
        <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" class="icon--size48">
        ${currentDistroTitle}
      </div>
    </div>
    `;

  const currentDistroInfoOutput = `

    <div class="card">${currentDistoHeaderOutput}
      <div class="card__body">
        <!-- For both col's (so to speak) -->
        <div class="d-flex jc-space-between">
          <!-- for left hand col ... left of the screenshots -->
          <div class="d-md-inline-block">

            <span class="fw-800">Homepage: </span>
            <a href="${currentDistroHomepage}" target="_blank" rel='noreferrer'>${currentDistroTitle}'s Homepage
            </a>
            <br/>

            <span class="fw-800">Download: </span>
                <a href="${currentDistroDownload}" target="_blank" rel='noreferrer'>${currentDistroTitle}'s Download Page
                </a><br/>

            <span class="fw-800">Forums:</span>
                <a href="${currentDistroForum}" target="_blank" rel='noreferrer'>${currentDistroTitle}'s Forum</a><br/>

            <span class="fw-800">Distrowatch Page: </span>
                <a href="${DWPage}${currentDistroName}" blank="_blank" rel='noreferrer'>${currentDistroTitle} Distrowatch Link
                    </a>

            <div class="py-3">
              <h4> Versions</h4>
              <span class="fw-800">Latest Version:</span> ${currentDistroLatestVersions} <br />
              <span class="fw-800">Currently Supported Versions: </span>${currentDistroSupportedVersions} <br />
            </div>

            ${currentDistroMoreInfoOutput}
            </div>

              <div> ${currentDistroSShotOutput}</div>
            </div>
                ${currentDistroYTOutput}

              </div>
            </div>
        </div>
        `;

  distroResults.insertAdjacentHTML('beforeend', currentDistroInfoOutput);
}

// "main" function
function getDistroData(data, $localDistroName) {
  jsonURL = '/linuxHQ/json/distros-min.json';

  // Get JSON Data
  $.getJSON(jsonURL, function (data) {
    $.each(data, function (key, value) {
      for (let distroFamily = 0; distroFamily < value.length; distroFamily++) {
        //////////////////////////////////////////////////////////////////////////
        // DECLARE variables

        let currentDistroFamily = key;

        // Name/Title
        let currentDistroName = value[distroFamily].distroName;
        let currentDistroTitle = value[distroFamily].distroTitle;

        // graphics
        let currentDistroIcon = value[distroFamily].graphics.iconURL;

        // versions
        let currentDistroSupportedVersions = value[distroFamily].versions.supportedVersions;
        let currentDistroLatestVersions = value[distroFamily].versions.latestVersion;

        // moreInfo
        let currentDistroFeaturesDesktops =
          value[distroFamily].moreinfo.desktops;
        let currentDistroSimilarDistros = value[distroFamily].moreinfo.similar;
        let currentDistroTargetAudience = value[distroFamily].moreinfo.target;

        // I think i meant "rolling, ...etc for this let"
        let currentDistroSoftwareType = value[distroFamily].moreinfo.software;

        // Website
        let currentDistroHomepage = value[distroFamily].website.homepage;
        let currentDistroDownload = value[distroFamily].website.download;
        let currentDistroForum = value[distroFamily].website.forum;

        // Screenshot
        let currentDistroScreenshotTN =
          value[distroFamily].screenshots.thumbnails;
        let currentDistroScreenshot = value[distroFamily].screenshots.src;

        // Youtube Playlists
        let currentDistroYTReviewPLaylist =
          value[distroFamily].youtube.reviewPlaylist;
        let currentDistroYTTipsPLaylist =
          value[distroFamily].youtube.tipsPlaylist;

        console.log(currentDistroName);
        console.log("latest version:" + value[distroFamily].versions.latestVersion);
        console.log("supported Version:" + value[distroFamily].versions.supportedVersions);
        console.log("");

        ////////////////////////////////////////////////////////////////////////////

        if (localDistroName == currentDistroName) {
          displayDistroOutput(
            currentDistroFamily,
            currentDistroName,
            currentDistroIcon,
            currentDistroTitle,
            currentDistroSupportedVersions,
            currentDistroLatestVersions,
            currentDistroHomepage,
            currentDistroDownload,
            currentDistroForum,
            currentDistroScreenshot,
            currentDistroScreenshotTN,
            currentDistroYTReviewPLaylist,
            currentDistroYTTipsPLaylist,
            currentDistroFeaturesDesktops,
            currentDistroSimilarDistros,
            currentDistroTargetAudience,
            currentDistroSoftwareType
          );
        }
      }
    }); // Ends .each loop
  }); // ends getJSON loop
}

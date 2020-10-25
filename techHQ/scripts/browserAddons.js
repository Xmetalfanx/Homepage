let browserResults = document.getElementById('browserSection');
let browserIconDir = '/techHQ/progIcons/internet/browsers/';
let addonIconDir = '/techHQ/browsers/addons/graphics/';

// for Icons
let firefoxIcon = 'firefox.svg';
let chromeIcon = 'chrome.svg';

////////////////////////////////////////////////////////////////////
// "main" function

function browserAddonData(data) {
	$(document).ready(function() {
		// "Things DO GET HERE, successfully"
		// console.log("Inside softwareData function in JS");

		browserAddonsJSONUrl = '/techHQ/json/browserAddons.json';

		// Get JSON Data
		$.getJSON(browserAddonsJSONUrl, function(data) {

            //console.log("data: " + data);

            dataValue = Object.values(data);
            dataValue.forEach(displayKeys);

            function displayKeys(allCatagories, index){
                //console.log("allCatagories");
                //console.log(allCatagories);

                let allCatValues = Object.values(allCatagories);

                allCatValues.forEach(displayAddons);

                function displayAddons(item, index)
                {
                    //console.log(item);

                    item.forEach(handleEachAddon);


                    function handleEachAddon(eachAddon, index){
                        console.log(eachAddon);


                        let addonTitle = eachAddon.addonTitle;
                        let addonName = eachAddon.addonName;

                        let addonIcon = eachAddon.iconURL;

                        //
                        // Meta vars
                        let moreInfo = eachAddon.moreInfo;
                        // AddonURLs
                        // note to self: maybe make the URL, URLs, later ... whatever
                        let addonURLs = eachAddon.addonURL;
                        // End of Meta Vars

                        // More Info
                        let addonDev = moreInfo.developer;
                        // for Firefox 57+
                        let addonFFQuat = moreInfo.forFFQuantum;

                        let chromeURL = addonURLs.chromeURL;
                        let firefoxURL = addonURLs.firefoxURL;

                        const browserOutput = `
                        
                            <div class="card">
                                <div class="card__header card__header--dark-bg"> 
                                    <div class="addon-title">
                                        <img src=\"${addonIconDir}${addonIcon}\" alt=\"${addonTitle} icon \" class="icon icon--size40"/>${addonTitle}
                                    </div>
                                    <div class="platform">
                                        <a href="${chromeURL}" target="_blank">
                                            <img src=\"${browserIconDir}${chromeIcon}\" alt=\"${addonTitle} Chrome icon\" class=\" icon icon--size40\" />
                                        </a>

                                           <a href="${firefoxURL}" target="_blank">
                                            <img src=\"${browserIconDir}${firefoxIcon}\" alt=\"${addonTitle} Firefox icon\" class=\" icon icon--size40\" />
                                            </a>
                                    
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div>description here, perhaps</div>

                                </div>
                            </div>
                        `;

                        // Main output
                        browserResults.insertAdjacentHTML('afterbegin', browserOutput);

                    }

                }
            }


		}); // ends getJSON loop
	});
}

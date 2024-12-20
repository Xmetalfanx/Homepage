let browserResults = document.getElementById("browserSection");
let browserIconsDir = "/techHQ/progIcons/internet/browsers/";

// The idea of this is to MAYBE shorten the URL in the "col1" file ... .URl would be "${browserAdBlockDir}/exactfile.php" for example
// an IDEA only for now
let browserAdBlockDir = "/techHQ/browsers/adblocking/";


// Browser Engines - HP means Homepage or something that can explain
let goannaHP = "<a href=\"http://www.moonchildproductions.info/goanna.shtml\" target=\"_blank\"> Goanna Engine by Moonchild Productions </a> <br /><br /><a href=\"https://github.com/MoonchildProductions/UXP\" target=\"_blank\">Source on Github</a>";

////////////////////////////////////////////////////////////////////
// "main" function

function browserData(data) {
    $(document).ready(function() {
        const browserJSONUrl = "/techHQ/json/browsers.json";

        // Get JSON Data
        $.getJSON(browserJSONUrl, function(data) {

            // Output = all of the json, i think
            //let dataString = JSON.stringify(data);
            //  console.log(dataString);

            let browserEngines = Object.keys(data);
            console.log(browserEngines);

            let browsersInCurrentEngine  = Object.values(data);
            // console.log("browsersInCurrentEngine: " + browsersInCurrentEngine);

            //let stringTest = JSON.stringify(browsersInCurrentEngine);
            //console.log("stringTest: " + stringTest)


            browsersInCurrentEngine.forEach(outputEngineBrowsers);

            function outputEngineBrowsers(currentEngine, index){
                console.log("currentEngine: " + currentEngine);

                let currentEngineBrowsers = Object.values(currentEngine);

                //console.log(currentEngineBrowsers);

                currentEngineBrowsers.forEach(handleEachBrowser);

                function handleEachBrowser(currentBrowser, item){

                    const currentBrowEngine = "";
                    const browserName = currentBrowser.browserName;
                    const browserTitle = currentBrowser.browserTitle;

                    // Meta Var
                    const browserLinks = currentBrowser.links;

                    const browserIcon = browserLinks.browserIcon;
                    const browserHomepage = browserLinks.homepage;
                    const browserDownload = browserLinks.download;

                    // Meta Var
                    const moreInfo = currentBrowser.moreInfo;

                    const browserVersion = moreInfo.version;
                    const browserPlatforms = moreInfo.platforms;
                    const browserDescription = moreInfo.description;

                    const browserOutput = `

                    <div class="card m-4">
                        <div class="card__header--wide">
                            <div>
                                <a href="${browserHomepage}" blank="_blank">
                                    <img src="${browserIconsDir}${browserIcon}" class="icon--size40" /> ${browserTitle}</a>
                            </div>
                            <div>
                                Platform(s): ${browserPlatforms}
                            </div>
                        </div>

                        <div class="card__body">

                            <span class="fw-800"> Browser Engine:</span> (TODO later)

                            <br /><br />
                            <a href="${browserDownload} " target+"blank"> Download Page</a>

                            <br /><br />
                            <span class="fw-800">Description: </span>
                            <span >${browserDescription}
                        </div>
                    </div>
                    `;

                // Main output
                browserResults.insertAdjacentHTML("afterbegin", browserOutput);


                }
            }
        });
    });
}

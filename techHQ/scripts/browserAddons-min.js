let browserResults=document.getElementById("browserSection"),browserIconDir="/techHQ/progIcons/internet/browsers/",addonIconDir="/techHQ/browsers/graphics/icons/",firefoxIcon=browserIconDir+"firefox.svg",chromeIcon=browserIconDir+"chrome.svg",vivaldiIcon=browserIconDir+"vivaldi.svg";function browserAddonData(o){$(document).ready((function(){browserAddonsJSONUrl="/techHQ/json/browserAddons.json",$.getJSON(browserAddonsJSONUrl,(function(o){allAddonCategories=Object.keys(o),allAddonValues=Object.values(o);for(let o in allAddonValues){eachAddonCategory=allAddonValues[o];for(let o in eachAddonCategory){eachAddon=eachAddonCategory[o];let e=eachAddon.addonTitle,r=(eachAddon.addonName,eachAddon.iconURL),d=eachAddon.moreInfo,c=eachAddon.addonURL,s=(d.developer,d.addonPlatform),i=d.description,a=c.chromeURL;const t=`<a href="${c.firefoxURL}" target="_blank">\n              <img src="${firefoxIcon}" alt="${e} Firefox icon" class=" icon icon--size40" />\n            </a>`,l=`<a href="${a}" target="_blank">\n                <img src="${chromeIcon}" alt="${e} Chrome icon" class=" icon icon--size40" />\n\n                <img src="${vivaldiIcon}" alt="${e} Vivaldi icon" class=" icon icon--size40" />\n\n            </a>`;function n(o){if(null!=o)return totalBrowserIcon="","crossBrowser"==o?totalBrowserIcon=t+l:"firefox"==o?totalBrowserIcon=t:void 0}n(s);const v=`\n                    <div> ${totalBrowserIcon} </div>`,f=`\n                <div class="card">\n                    <div class="card__header">\n                    ${`\n                <div>\n                    <img src="${addonIconDir}${r}" alt="${e} icon " class="icon--size40" />${e}\n                </div>\n                `}\n                    ${v}\n\n                    </div>\n                    <div class="card__body">\n                    <div>${i}</div>\n                    </div>\n                </div>\n                            `;browserResults.insertAdjacentHTML("beforeend",f)}}}))}))}
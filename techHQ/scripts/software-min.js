let softwareOutput=document.getElementById("softwareSection");const wineIcon='<img src="/techHQ/platforms/wine.svg " alt="Wine Icon" style=""/> Works on W.I.N.E.';function softwareData(n){$(document).ready((function(){$.getJSON("/techHQ/json/software.json",(function(n){for(let e in n){Object.keys(n);const e=Object.values(n);for(let n in e){const t=e[n];for(let n in t){const e=n.replace(/['"]+/g,""),a=t[n];for(let n in a)if(localSubCat==e){const e=a[n],t=e.moreInfo,o=e.progTitle,r=(e.progName,e.images.icon),s=(e.images.sshotURL,t.progDesc),i=t.progHomepage,c=t.progPlatform,l=t.worksonwine,d=t.status,f='<i class="fa-brands fa-2x fa-linux mr-4" aria-hidden="true"></i>',p='<i class="fa-brands fa-2x fa-windows" aria-hidden="true"></i>',m=f+p;"w"==c?platformIcon=p:"l"==c?platformIcon=f:"cp"==c&&(platformIcon=m);const u=`\n                    <div class="card">\n                      <div class="card__header--wide">\n                        <div>\n                            <img src="${r}" alt="${o} alt tag" class="icon--size40  mr-1" loading="lazy" >\n                            <a href="${i}" target="_blank" rel="noreferrer">\n                              ${o}\n                            </a>\n                        </div>\n\n                        <div>\n                          ${'<span class="d-none d-md-inline-block pr-3">Platform:</span>'+platformIcon}\n                        </div>\n                    </div>\n                    `;softwareOutput.insertAdjacentHTML("beforeend",u+'<div class="card__body"> <span class="fw-800"> Project Status: </span>'+d+"<br/><br/>"+s),!0===l&&softwareOutput.insertAdjacentHTML("beforeend",wineIcon),softwareOutput.insertAdjacentHTML("beforeend","</div>")}}}break}}))}))}
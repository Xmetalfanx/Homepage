#!/bin/bash

function cleanCSSFolder() {
  clear && echo "Clearing out CSS folder"
  rm css/*.css
  rm css/*.css.map
}

function userPrompt() {
    read -rp "Press any key to continue"
}

cleanCSSFolder

clear && echo "Running scss check/fix THEN Compile Sass to a raw CSS file"
npm run fix:scss
userPrompt

echo "Compiling Scss to CSS" 
npm run compile:scss
#userPrompt

echo "Fixing Raw CSS file, BEFORE postCSS"
npm run fix:rawcss
userPrompt

clear && echo "Running PostCSS on RAW CSS file"
npm run postcss:all
#userPrompt

# not sure if this makes sense ... 
# echo "Running Stylelint Fix on minified CSS file"
# npm run fix:mincss
#userPrompt

echo "COMPLETED"
# userPrompt

# clear
# echo "Performing Cleanup"
# rm css/styling-raw.css*
# echo "Cleanup complete"

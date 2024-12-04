import cssnano from "cssnano";
import postcssDiscardEmpty from "postcss-discard-empty";
import postcssPresetEnv from "postcss-preset-env";
import postcssSorting from "postcss-sorting";
import stylelint from "stylelint";
import purgecss from "@fullhuman/postcss-purgecss";
import combineSelectors from "postcss-combine-duplicated-selectors";

// is this "fs" needed? ... optimize-css-mq has it listed
// const fs = require("fs");


module.exports = {
  plugins: [
    // doiuse(""),
    postcssPresetEnv({stage: 2}),
    postcssSorting({}),
    postcssDiscardEmpty({}),
    stylelint({
      /* your options */
      "fix": true
    }),
    combineSelectors({
      removeDuplicatedProperties: true
    }),
    // purgecss({
    //   content: [
    //     './**/*.php',
    //     './**/*.tpl',
    //     "./**/*.js"
    // ],
    // safelist: ['feed-title','feed-item-title', 'feed-item-desc' ]
    // }),
    cssnano({
      preset: ['default', {
        colormin: false,
      }],
    })
  ]
}

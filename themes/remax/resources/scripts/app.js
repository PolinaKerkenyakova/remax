console.log($ , 'before import');

import "jquery";
import $ from "jquery";

import { domReady } from "@roots/sage/client";

// Modules
import slider from "./modules/slider";
console.log($, 'after modules');

const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  console.log($, 'inside main');
  slider();

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

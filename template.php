<?php
/**
 * This i where functions go.
 *
 *
 * function functionName($argument1, $argument2) {
 *   $variable = $argument1 + $argument2;
 *   echo $variable . " is the output";
 * }
 * echo functionName(1, 2)
*/

function minicss_css_alter(&$css) {
  // Remove unwanted core css
  $exclude = array(
    'core/modules/system/css/system.css' => FALSE,
    'core/modules/system/css/system.theme.css' => FALSE,
    'core/misc/normalize.css' => FALSE,
    'core/modules/layout/css/grid-flexbox.css' => FALSE,
    'core/modules/system/css/menu-dropdown.theme.css' => FALSE,
    'core/modules/system/css/menu-toggle.theme.css' => FALSE,
    'core/misc/smartmenus/css/sm-core-css.css' => FALSE,
  );

  $css = array_diff_key($css, $exclude);

}

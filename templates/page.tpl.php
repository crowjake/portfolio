<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Backdrop page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->langcode contains its textual representation.
 *   $language->dir contains the language direction.
 *   It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes Array of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html<?php print backdrop_attributes($html_attributes); ?>>
  <head>
    <?php print backdrop_get_html_head(); ?>
    <title><?php print $head_title; ?></title>
    <?php print backdrop_get_css(); ?>
    <?php print backdrop_get_js(); ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/themes/portfolio/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/themes/portfolio/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/themes/portfolio/favicon/favicon-16x16.png">
    <link rel="manifest" href="/themes/portfolio/favicon/site.webmanifest">
    <link rel="mask-icon" href="/themes/portfolio/favicon/safari-pinned-tab.svg" color="#668a74">
    <meta name="msapplication-TileColor" content="#2f5080">
    <meta name="theme-color" content="#E9ECEF">
    <script src="https://kit.fontawesome.com/05b27b0a6a.js" crossorigin="anonymous"></script>
  </head>
  <body class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($body_attributes); ?>>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <?php print backdrop_get_js('footer'); ?>
  </body>
</html>

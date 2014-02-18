<?php
/**
 * The code used to display the search widget
 *
 * @package WordPress
 * @subpackage Infobahn
 * @since Infobahn 1.0
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/infobahn/">
    <label class="screen-reader-text" for="s">Search the site</label>
    <input type="text" placeholder="Search the site" value="" name="s" id="s">
    <input type="submit" id="searchsubmit" value="Search">
</form>
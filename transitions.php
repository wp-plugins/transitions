<?php
/*
Plugin Name: Transitions Alpha
Plugin URI:  http://krisjaydesigns.com/?p=946
Description: Fading Transition Effect for Page Navigation. Page Fades In - Page Fades Out on each Click. jQuery, AJAX effect.
Author: Kris Jonasson
Author URI:  http://krisjaydesigns.com
Version: 0.3 alpha

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/ 
// Addition To Options List
add_action('admin_menu', 'transitions');
function transitions() {
    // Adds Options Submenu:
    add_options_page('Transitions', 'Transitions', 8, 'transitionswp', 'transitions_wp');
}
add_action('login_head','transitions_login');
add_action('wp_head','transitions_website');
add_action('admin_head','transitions_admin');
function transitions_login() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/transitions.js'></script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_website() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/transitions.js'></script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_admin() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/transitions.admin.js'></script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_wp() { ?>
<h2>Transitions.3 Alpha - Page Transitioning WordPress Plugin</h2>
<p>Sorry, Still haven't had the time to add any options yet...I will get to it one day....</p>
<p></p>
<p>Copyright &copy; 2010 <a href="http://krisjaydesigns.com" target="_blank">Kris Jonasson</a></p>
<? } ?>
<?php
/*
Plugin Name: Transitions - AJAX/jQuery Effects
Plugin URI:  http://krisjaydesigns.com/?p=946
Description: Fading Transition Effect for Page Navigation. Page Fades In/Out on each Click. jQuery, AJAX effect.
Author: Kris Jonasson
Author URI:  http://krisjaydesigns.com
Version: 0.5a

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/ 
add_action('admin_menu', 'transitions');
function transitions() {
add_options_page('Transitions', 'Transitions', 8, 'transitionswp', 'transitions_wp');
add_option('transitionsimage', '');
add_option('transitionsrepeater', '');
add_option('transitionshtml', '');
}
add_action('login_head','transitions_login');
add_action('wp_head','transitions_website');
add_action('admin_head','transitions_admin');
add_action('wp_head','transitions_image');
add_action('wp_head','transitions_repeater');
add_action('wp_head','transitions_html');
function transitions_login() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/transitions.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/loader.js'></script>
<script type="text/javascript">
		QueryLoader.selectorPreload = 'body';
		QueryLoader.init();
	</script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_website() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/transitions.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/loader.js'></script>
<script type="text/javascript">
		QueryLoader.selectorPreload = 'body';
		QueryLoader.init();
	</script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_admin() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/transitions.admin.js'></script>
<style type="text/css"> body { display:none; } </style>
<? }
function transitions_image() { ?>
<?php $transoneimgurl = get_option('transitionsimage'); ?>
<style type="text/css">
html{background-image:url(<?php echo $transoneimgurl; ?>);}
<? }
function transitions_repeater() { ?>
<?php $transonerepeater = get_option('transitionsrepeater'); ?>
html{background-repeat:<?php echo $transoneimgurl; ?>;}
<? }
function transitions_html() { ?>
<?php $transonehtmlclr = get_option('transitionshtml'); ?>
html{background-color:<?php echo $transonehtmlclr; ?>;}
</style>
<? }
function transitions_wp() { ?>
<style type="text/css">#transitionsoptions {width:600px;height:451px;margin-top:10px;padding-top:22px;background: transparent url(<?php bloginfo('url'); ?>/wp-content/plugins/transitions/imgs/transitions.bg.png);} .leftsidetrans {float:left;width:280px;height:400px;margin-left:22px;text-align:center;} .rightsidetrans {float:right;width:280px;height:380px;margin-top:15px;}</style>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/thickbox.js'></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/transitions/js/farbtastic.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#colorpicker').farbtastic('#color');
  });
</script>
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/transitions/transitions.farbtastic.colorpicker.css" type="text/css" />	
<link rel='stylesheet' id='thickbox-css'  href='<?php bloginfo('url'); ?>/wp-includes/js/thickbox/thickbox.css' type='text/css' media='all' />
<div class="wrap">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transitions - AJAX/jQuery Fading Page Effects</h2>
<div id="transitionsoptions">
<div class="leftsidetrans">
<p><b>Add Background Image</b><br />(use the 'Upload Image' buttom to the right)</p>
<form method="post" action="options.php" id="transitions-option1">
		<?php wp_nonce_field('update-options') ?>             
		<input type="text" name="transitionsimage" value="<?php echo get_option('transitionsimage'); ?>" style="float:left;padding:4px; font-size:1em;" size="40" />
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="transitionsimage" />
		<div style="clear:both;padding-top:0px;"></div>
<p class="submit" style="margin-top:1px;margin-left:21px;"><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" /></p>
		<div style="clear:both;padding-top:10px;"></div>
	</form>
<p><b>Will The Image Be Repeating?</b><br />(type 'repeat' or 'no-repeat')</p>
<form method="post" action="options.php" id="transitions-option2">
		<?php wp_nonce_field('update-options') ?>		
                <input type="text" name="transitionsrepeater" value="<?php echo get_option('transitionsrepeater'); ?>" style="float:left;padding:4px; font-size:1em;" size="10" />
<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="transitionsrepeater" /><p class="submit" style="margin-top:1px;margin-left:21px;"><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" /></p>
		<div style="clear:both;padding-top:10px;"></div>
	</form>
<p><b>Color To Fade Out/In</b><br />(Use Color Picker)</p>
<form method="post" action="options.php" id="transitions-option3">
		<?php wp_nonce_field('update-options') ?>		
                <input type="text" name="transitionshtml" value="<?php echo get_option('transitionshtml'); ?>" style="float:left;padding:4px; font-size:1em;" size="10" />
<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="transitionshtml" /><p class="submit" style="margin-top:1px;margin-left:21px;"><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" /></p>
		<div style="clear:both;padding-top:10px;"></div>
	</form>
           </div>
<div class="rightsidetrans">
<div style="clear:both;padding-top:10px;"></div>
<form style="margin-top:11px;margin-left:43px;float:left;">
<a href="media-upload.php?type=image&amp;TB_iframe=true" id="add_image" class="thickbox" title='Add an Image' onclick="return false;"><input type="submit" name="Submit" value="Upload Image File" style="margin-bottom:2px;width:155px;height:45px;"/></a>
</form>	
<div id="colorpicker" style="margin-top:112px;margin-left:29px;"></div><br />
<form style="margin-left:49px;margin-top:8px;"><input type="text" id="color" name="color" value="#123456" /></form>
     </div>
<div id="transfoot" style="margin-left:22px;"><div style="clear:both;padding-top:10px;"></div>
&copy;2010 <a href="http://krisjaydesigns.com" target="_blank">Kris Jonasson</a> | Created, Maintained &amp; Copyright | Released Under GNU3</div>
           </div>
     </div>
<? } ?>
<?php
/**
* Plugin Name: CarrotPress
* Description: Adds a healthy does of Vitamin A to the WordPress Admin, putting carrots into all your checkboxes and radio buttons.
* Plugin URI: https://MRWweb.com/wordpress-plugins/carrotpress/
* Version: 2.0.0
* Author: Mark Root-Wiley (MRWweb)
* Author URI: https://MRWweb.com
* Donate Link: https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=522061398
* License: GPLv3
* Text Domain: carrotpress
* Domain Path: /languages
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

define( 'CARROTPRESS_VERSION', '2.0.0' );

add_action( 'admin_enqueue_scripts', 'cp_add_vitamin_a' );
function cp_add_vitamin_a() {
	wp_enqueue_style(
		'cp_styles',
		plugins_url( 'css/carrotpress.css', __FILE__ ),
		array( 'dashicons' ),
		CARROTPRESS_VERSION
	);
}
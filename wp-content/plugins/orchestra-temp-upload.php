<?php
/*
Plugin Name: Orchestra.io Upload to Temp
Plugin URI: 
Description: Sets the upload path to sys_get_temp_dir(), allowing uploads to be stored temporarily, presumably before being moved elsewhere (like Amazon S3 via the tantan-s3 plugin).
Version: 0.1
Author: Dylan Kuhn
Author URI: http://www.cyberhobo.net/
Minimum WordPress Version Required: 3.0
License: GPL2+
*/

/*  Copyright 2011  Dylan Kuhn  (email : cyberhobo@cyberhobo.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2 or later, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_filter( 'option_upload_path', array( 'OrchestraUploadToTemp', 'filter_option_upload_path' ) );

class OrchestraUploadToTemp {

	static public function filter_option_upload_path( $upload_path ) {
		return sys_get_temp_dir();
	}
}
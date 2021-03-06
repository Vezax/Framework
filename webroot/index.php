<?php

/**
 * Copyright (C) 2009-2012 Shadez <https://github.com/Shadez>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

// Application entry point

define('WEBROOT_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('BOOT_FILE', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'boot.php');
define('SITE_DIR',  dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR);
define('TEMPLATES_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);

$debug = false; // Display debug info?

require_once(BOOT_FILE);
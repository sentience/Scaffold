<?php

// =========================================
// = Scaffold Configuration =
// =========================================

/**
 * The location of the Scaffold system folder
 */
$system = './';

/**
 * Production Mode
 *
 * TRUE for production, FALSE for development. In development the cache is always
 * refreshed each time you reload the CSS. In production, the cache is locked
 * and will only be recache if BOTH of these conditions are met:
 *
 *		1. One of the files in the request has changed
 *		2. The cache lifetime has expired (set below)
 */
$config['production'] = true;

/**
 * Cache Lifetime
 *
 * This value, in seconds, determines how long the cache will last before it
 * tries to recompile the CSS again from the source.
 */
$config['max_age'] = 3600;

/**
 * Load paths
 *
 * Paths for Scaffold to search for files. It will use these paths to try and find
 * @import and url() paths (and others).
 */
$config['load_paths'] = array(realpath('./'));

/**
 * PHP gzip compression
 *
 * If you don't want to use the .htaccess to gzip your files, you can have Scaffold
 * do it for you before it outputs the CSS to the browser. Note that this takes longer
 * to do than to just use Apache to compress your components.
 *
 * Set this from 1-9, with 9 being the highest compression, and false being no compression.
 */
$config['output_compression'] = false;

// =========================================
// = Extension Configuration =
// =========================================

/** 
 * Enabled extensions
 */
$config['extensions'] = array(
	//'AbsoluteUrls',
	//'ServerImport',
	//'NestedSelectors',
	//'Mixins'
	'Minify'
);

/**
 * Extensions have their own configuration by using the format:
 * 		$config['Constants']['key'] = value;
 * These are then available within the extension with $this->config.
 */
//$config['AbsoluteUrls']['require_files'] = false;

// =========================================
// = Load Scaffold =
// =========================================

include $system.'/index.php';
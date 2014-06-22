<?php

/*!
 * Mustache Helper Fetch Rule Class
 *
 * Copyright (c) 2014 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 * How to handle requests for mustache helpers
 *
 */

namespace PatternLab\Fetch\Rules;

use \PatternLab\Config;
use \PatternLab\Fetch\Rule;

class MustacheHelperRule extends Rule {
	
	public function __construct() {
		
		parent::__construct();
		
		$this->name          = "mustache helper";
		$this->unpack        = false;
		$this->writeDir      = Config::$options["pluginDir"];
		
		$this->shortCommand  = "m";
		$this->longCommand   = "mustachehelper";
		
	}
	
}
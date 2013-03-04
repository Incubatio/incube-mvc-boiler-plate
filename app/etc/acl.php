<?php
return array(

		"groups" => array("anonymous", "registered", "admin"),


		"rights" => array(
			"IndexController"		=> array("*" => "*"),
			"ExceptionController"	=> array("*" => "*"),

			"TestController"		=> array(	
				"*"	        => "admin",
				"index"		=> "*",
				"new"		=> "registered",
				"showAll"	=> "registered",
				"save"		=> "registered",
				"edit"		=> "registered", 
				"list"		=> "*",
				"get"		=> "*",
				),
			)
		);

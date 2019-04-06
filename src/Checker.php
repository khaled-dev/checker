<?php

namespace Checkers;

/**
 * 
 */
class Checker 
{
	
	public static function That(bool $bool) : string
	{
		return ($bool) ? "It's good, keep going." : "It's bad, wait a sec!";	
	}


}
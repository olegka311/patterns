<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 23:25
 */

class Memory
{
	protected $type;
	protected $size;
	
	protected function __construct($type, $size)
	{
		$this->type = $type;
		$this->size = $size;
	}
}
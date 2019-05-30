<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 23:17
 */

class PersonalComputer
{
	/**
	 * @var Memory 
	 */
	public $memory;
	
	public function __construct(Memory $memory)
	{
		$this->memory = $memory;
	}
}
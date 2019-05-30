<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 18:46
 */

namespace builder;


abstract class PC
{
	protected $model = 'PC';
	protected $ram;
	protected $videoCArd;
	
	public function setMemory($memory)
	{
		$this->ram = $memory;
	}
	
	public function setVideoCard($videoCard)
	{
		$this->videoCArd = $videoCard;
	}
}
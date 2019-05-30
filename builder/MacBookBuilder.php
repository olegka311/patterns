<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 18:44
 */

namespace builder;


class MacBookBuilder implements BuilderInterface
{
	/**
	 * @var PC
	 */
	private $pc;
	
	public function createPC()
	{
		$this->pc = new MacBook();
	}
	
	public function addRam()
	{
		$this->pc->setMemory('512');
	}
	
	public function setVideoCard()
	{
		$this->pc->setVideoCard('Nvidia Gforce 1000');
	}
	
	public function getPC()
	{
		return $this->pc;
	}
}
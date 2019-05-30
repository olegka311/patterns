<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 18:44
 */

namespace builder;


class HPBuilder implements BuilderInterface
{
	/**
	 * @var PC
	 */
	private $pc;
	
	public function createPC()
	{
		$this->pc = new HP();
	}
	
	public function addRam()
	{
		$this->pc->setMemory('256');
	}
	
	public function setVideoCard()
	{
		$this->pc->setVideoCard('Nvidia Gforce 700');
	}
	
	public function getPC()
	{
		return $this->pc;
	}
}
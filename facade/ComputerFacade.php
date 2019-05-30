<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 23:38
 */

class ComputerFacade
{
	/**
	 * @var OsInterface
	 */
	private $os;

	/**
	 * @var BiosInterface
	 */
	private $bios;

	/**
	 * @param BiosInterface $bios
	 * @param OsInterface   $os
	 */
	public function __construct(BiosInterface $bios, OsInterface $os)
	{
		$this->bios = $bios;
		$this->os = $os;
	}

	public function turnOn()
	{
		$this->bios->execute();
		$this->bios->waitForKeyPress();
		$this->bios->launch($this->os);
	}

	public function turnOff()
	{
		$this->os->halt();
		$this->bios->powerDown();
	}
}
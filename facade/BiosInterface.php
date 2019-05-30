<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 23:40
 */

interface BiosInterface
{
	public function execute();
	
	public function waitForKeyPress();

	public function launch(OsInterface $os);

	public function powerDown();
}
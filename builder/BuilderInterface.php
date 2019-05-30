<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 18:32
 */

namespace builder;


interface BuilderInterface
{
	public function createPC();
	public function addRam();
	public function setVideoCard();
	public function getPC();
}
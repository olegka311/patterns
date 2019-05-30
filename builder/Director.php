<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 19:31
 */

namespace builder;


class Director
{
	public function build(BuilderInterface $builder)
	{
		$builder->createPC();
		$builder->addRam();
		$builder->setVideoCard();

		return $builder->getPC();
	}
}
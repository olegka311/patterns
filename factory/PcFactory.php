<?php
/**
 * Created by PhpStorm.
 * User: olehmotyka
 * Date: 2019-05-30
 * Time: 22:54
 */
namespace factory;

class PcFactory
{
	public static function createPcByModel($model)
	{
		switch ($model) {
			case 'mac' :
				return new MacBook();

			case 'hp' :
				return new Hp();

			case 'acer':
				return new Acer();

			default :
				return false;
		}
	}
	
}
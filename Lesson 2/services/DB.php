<?php

namespace App\services;

/**
 * Class DB
 * Получать из БД данные
 * @package App\services
 */
class DB implements IDB
{
	public function find($sql)
	{
		return $sql;
	}
	public function findAll($sql)
	{
		return $sql;
	}
	public function Type($name){
		if ($name == 'Электроника'){
			return 'Electronics цена в два раза дешевле';
		}
		if ($name == 'Реальный') {
			return 'Real';
		}
		if ($name == 'Весовой') {
			return 'Weight';
		}
		return 'undefined';
	}


	public function myMoney($totalSum, $percent ) {
		return '<p style="color: red">Наша прибыль: ' . ($totalSum/100) * $percent . ' р.</p><br><br><br>';
	}
}

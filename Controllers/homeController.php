<?php

namespace Controllers;

use Views\View;
use Models\Name;


class homeController
{
	public function actionMain(): void
	{
		// Рендер главной страницы портала
		View::render('index');
	}
	public function actionPeople(): void
	{
		// Создаем модель
		$model = new Name();

		// Получаем данные используя модель
		$data = $model->getValue();

		// Передаем данные представлению для их отображения
		View::render('people', [
			'data' => $data,
		]);
	}
}
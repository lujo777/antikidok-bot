<?php
	/*
		Файл настроек для бота "NewBot"
		Версия данного бота: 0.01
		Ссылка на GitHub (возможно вышло обновление, провеcmcmcmрьте): https://github.com/DenBroShow/GameBot
	*/

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$botToken = "917d6bad08de5c0600ec510a55692b55c16c49a95f6048ff524b0edf8536e99d6b4c3646925884ee14ec8"; //oAuth2 токен группы
	
	$onGroup = 0; //Вступать ли в группу, чтобы бот ответил на сообщение (0 - вступление не требуется;; 1 - нужно вступить в группу)
	$secretKey = "demo"; //Секретный ключ (используется для обработки сообщений, а так-же для входа в админ-панель)
	$confirmationKey = "cca734ae"; //Ключ подтверждения, который должен вернуть сервер
	$groupID = "159964322"; //ID группы, к которой будет привязан бот

	$mysqlBase = substr($url["path"], 1); //Название базы данных MySQL
	$mysqlUser = $url["user"]; //Имя пользователя MySQL
	$mysqlPass = $url["pass"]; //Пароль пользователя (если его нет - оставить поле пустым)
	$mysqlHost = $url["host"]; //Хост (адрес) MySQL
	
	$startMoney = 500; //Стартовый баланс для пользователя

	//$crapiToken = 956f114cc63d43eb817280b31456c9f25654faf6742c4736b843e745ff161158; Токен cr-api
	//Будет активно в Alpha 5
?>
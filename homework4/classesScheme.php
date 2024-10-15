<?php

//класс для подключения к базе данных (singletone)
final class DBconnection
{
    public static $instance;
    //блокировака методов
    private function __construct() {}
    private function __clone() {}
    private function __sleep() {}
    private function __wakeup() {}
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    //подключение к БД
    public function tryConnection() {}
    //закрытие подключение к БД
    public function closeConnection() {}
    //чтение данных из БД
    public function read() {}
    //обновлеение данных в БД
    public function update() {}
    //удаление данных из БД
    public function delete() {}
}

interface UserInterface {}
//класс для работы с пользовтелями
class User implements UserInterface
{
    protected function __construct() {}
    public function login() {}
    //функционал логаута пользователя
    public function logout() {}
    //функционал регистрации нового пользователя
    public function register() {}
    //функционал проверки залогинени ли прользователь
    public function isLogged() {}
    public function clearCache() {}
}
//фабрика для User
final class StaticUserFactory
{
    public static function factory(): UserInterface
    {
        $obj = new User();
        $obj->isLogged();
        $obj->clearCache();
        return $obj;
    }
}

class Task
{
    protected function __construct() {}
    //добавление новой задачи
    public function addTask() {}
    //удаление задачи
    public function deleteTask() {}
    //изменение задачи
    public function changeTask() {}
    //получение списка задач пользователя
    public function returnUserTasklist() {}
    //добавление исполнителя к задаче
    public function addUserToTask() {}
    //удаление иполнителя у задача
    public function deleteUserFromTask() {}
    //изменение срока выполнения задачи
    public function changeTaskFinishTime() {}
}

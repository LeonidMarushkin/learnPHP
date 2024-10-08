<?php

//класс для подключения к базе данных
final class DBconnection
{
    protected function __construct() {}
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
//класс для работы с пользовтелями
class User
{
    protected function __construct() {}
    //функционал логина пользователя
    public function login() {}
    //функционал логаута пользователя
    public function logout() {}
    //функционал регистрации нового пользователя
    public function register() {}
    //функционал проверки залогинени ли прользователь
    public function isLogged() {}
    //
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

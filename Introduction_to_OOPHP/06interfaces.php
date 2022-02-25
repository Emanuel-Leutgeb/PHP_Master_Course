<?php

class Task
{

}

interface TaskStorageInterface
{
    public function get($id);
    public function store(Task $task);
}

class FileTaskStorage implements TaskStorageInterface
{
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function store(Task $task)
    {
        // TODO: Implement store() method.
    }
}

class MySQLDatabaseTaskStorage implements TaskStorageInterface
{
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function store(Task $task)
    {
        // TODO: Implement store() method.
    }
}

$storage = new MySQLDatabaseTaskStorage();
$storage = new FileTaskStorage();
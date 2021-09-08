<?php
namespace App\Core\Repository;

use App\Core\Entity\Task;

interface TaskRepository
{
    public function save(Task $task);
}
<?php
namespace App\Infra\Repository;

use App\Core\Entity\Task;
use App\Core\Repository\TaskRepository;

class TaskRepositoryMemory implements TaskRepository
{
    private $tasks = [];
    public function save(Task $task) 
    {
        $this->tasks[] = $task;
        return $this->tasks;
    }
}
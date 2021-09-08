<?php
namespace App\Core\UseCase;

use App\Core\Entity\Task;
use App\Core\Repository\TaskRepository;

class CreateTask
{
    private TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository  = $taskRepository;
    }

    public function execute(string $task, $done=0)
    {
        $task = Task::create($task);
        return $this->taskRepository->save($task);
    }
}
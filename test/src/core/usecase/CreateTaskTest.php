<?php
namespace Test;

use App\Core\UseCase\CreateTask;
use App\Infra\Repository\TaskRepositoryMemory;
use PHPUnit\Framework\TestCase;



class CreateTaskTest extends TestCase
{
    public function testShouldCreateTask()
    {
        $taskRepository = new TaskRepositoryMemory;
        $task = new CreateTask($taskRepository);
        $response = $task->execute("New Task");
        
        $this->assertEquals('New Task', $response[0]->task);
        $this->assertEquals(0, $response[0]->done);
        
    }
   
}


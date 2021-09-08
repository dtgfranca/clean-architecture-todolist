<?php
namespace App\Core\Entity;

class Task 
{
    public $task;
    public $done;
    
    public function __construct($task, $done = 0 )
    {
        $this->task = $task;
        $this->done =$done;
        
    }

    public static function create(string $task, $done=0)
    {
        return new Task($task, $done);
    }
}
<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TasksIndex extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public function save(){

            $task = new Task();
            $task->user_id =  auth()->id();
            $task->title = $this->title;
            $task->slug = $this->slug;
            $task->description = $this->description;
            $task->status = $this->status;
            $task->priority = $this->priority;
            $task->deadline = $this->deadline;
            $saved = $task->save();
    }
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}

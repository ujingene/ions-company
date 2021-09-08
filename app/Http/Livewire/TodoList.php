<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos, $task_name, $todo_id;
    public $updateMode = false;

    protected $rules = [
        'task_name' => 'required|string',
    ];

    private function resetInputFields(){
        $this->reset('task_name');
    }

    public function store()
    {
        $this->validate();
  
        Todo::create([
            'task_name' => $this->task_name,
            'completed' => false,
        ]);
  
        session()->flash('message', 'Todo  Created Successfully.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        $this->todo_id = $id;
        $this->task_name = $todo->task_name;
        $this->completed = $todo->completed;
  
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * Update Resource.
     *
     * @var array
     */
    public function update()
    {
        $this->validate();
  
        $todo = Todo::find($this->todo_id);
        $todo->update([
            'task_name' => $this->task_name,
            'completed' => false,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Todo Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * Update Resource.
     *
     * @var array
     */
    public function markAsCompleted()
    {
        $this->validate();
  
        $todo = Todo::find($this->todo_id);
        $todo->update([
            'task_name' => $this->task_name,
            'completed' => true,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Todo Completed and Closed Successfully.');
        $this->resetInputFields();
    }

    /**
     * Delete Resource.
     *
     * @var array
     */
    public function delete($id)
    {
        Todo::find($id)->delete();
        session()->flash('message', 'Todo Deleted Successfully.');
    }

    public function render()
    {
        $this->todos = Todo::all();
        return view('livewire.todo-list')->extends('layouts.todosLayout');
    }
}

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Task Name:</label>
        <input type="text" wire:model.lazy="task_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Task">
        @error('task_name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Create New ToDo</button>
</form>
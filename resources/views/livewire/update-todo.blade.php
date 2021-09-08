<form>
    <input type="hidden" wire:model="todo_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">Task Name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model.lazy="task_name">
        @error('task_name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-success">Update</button>
    <button wire:click.prevent="markAsCompleted()" class="btn btn-dark">Update & Mark Completed</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
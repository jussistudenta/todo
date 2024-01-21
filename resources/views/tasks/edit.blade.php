<x-layout>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Edit Task</h2>

            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="my-4">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" name="title" id="title" type="text" value="{{ $task->title }}">
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $task->description }}</textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Update Task</button>
                <a class="btn btn-secondary ms-2" href="{{ route('tasks.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</x-layout>
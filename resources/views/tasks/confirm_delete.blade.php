<x-layout>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Delete Task?</h2>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="my-4">
                    <label class="form-label" for="title">Title</label>
                    <input disabled class="form-control" name="title" id="title" type="text" value="{{ $task->title }}">
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea disabled class="form-control" name="description" id="description" rows="3">{{ $task->description }}</textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-danger">Delete</button>
                <a class="btn btn-secondary ms-2" href="{{ route('tasks.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</x-layout>
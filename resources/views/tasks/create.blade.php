<x-layout>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Anna palautetta</h2>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="my-4">
                    <label class="form-label" for="name">Title</label>
                    <input class="form-control" name="name" id="title" type="text">
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Add Task</button>
                <a class="btn btn-secondary ms-2" href="{{ route('tasks.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</x-layout>

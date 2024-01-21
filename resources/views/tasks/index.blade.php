<x-layout>
    <div class="text-center border-bottom pb-4 mb-4">
        <h2>Tasks</h2>

        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>
    </div>

    <table class="table table-hover table-bordered">
        <thead class="bg-dark text-light">
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody class="bg-light">
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

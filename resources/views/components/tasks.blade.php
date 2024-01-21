@props(['tasks'])

<div class="text-center border-bottom pb-4 mb-4">
    <h2>Tasks</h2>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>
</div>

@if (count($tasks) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td style="width: 10%">
                        <a class="btn btn-secondary" href="{{ route('tasks.edit', $task->id) }}">
                            Edit
                        </a> &nbsp;
                    </td>
                    <td style="width: 10%">
                        <a class="btn btn-danger" href="{{ route('tasks.confirm_delete', $task->id) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no tasks! Please add one!
@endif

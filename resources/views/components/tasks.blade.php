@props(['tasks'])

<div class="text-center border-bottom pb-4 mb-4">
    <h2>Tehtävät asiat</h2>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Lisää tehtävä</a>
</div>

@if (count($tasks) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nimi</th>
                <th>Kuvaus</th>
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
                            Muokkaa
                        </a> &nbsp;
                    </td>
                    <td style="width: 10%">
                        <a class="btn btn-danger" href="{{ route('tasks.confirm_delete', $task->id) }}">
                            Poista
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no tasks! Please add one!
@endif

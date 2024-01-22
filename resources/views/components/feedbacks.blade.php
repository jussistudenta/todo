@props(['feedbacks'])

<div class="text-center border-bottom pb-4 mb-4">
    <h2>Palautteet</h2>
</div>

@if (count($feedbacks) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nimi</th>
                <th>Sähköposti</th>
                <th>Palaute</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td>
                        {{ $feedback->name }}
                    </td>

                    <td>
                        {{ $feedback->email }}
                    </td>

                    <td>
                        {{ $feedback->feedback }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    Palautteita ei ole.
@endif

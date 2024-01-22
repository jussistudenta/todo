<x-layout>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Lisää tehtävä</h2>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="my-4">
                    <label class="form-label" for="title">Nimi</label>
                    <input class="form-control" name="title" id="title" type="text">
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="description">Kuvaus</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Lisää tehtävä</button>
                <a class="btn btn-secondary ms-2" href="{{ route('tasks.index') }}">Peruuta</a>
            </form>
        </div>
    </div>
</x-layout>

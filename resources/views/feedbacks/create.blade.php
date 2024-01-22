<x-layout>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>
                Anna palautetta
            </h2>

            <form action="{{ route('feedbacks.store') }}" method="POST">
                @csrf
                <div class="my-4">
                    <label class="form-label" for="name">
                        Oma nimesi
                    </label>
                    <input class="form-control" name="name" id="title" type="text">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="feedback">Sähköpostiosoitteesi</label>
                    <input class="form-control" name="email" id="email" rows="3">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-4">
                    <label class="form-label" for="feedback">Palautteesi</label>
                    <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
                    @error('feedback')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary">Anna palaute</button>
                <a class="btn btn-secondary ms-2" href="{{ route('tasks.index') }}">Peruuta</a>
            </form>
        </div>
    </div>
</x-layout>

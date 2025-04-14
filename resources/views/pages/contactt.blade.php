<x-layouts.app>

    @section('content')
    <div class="container">
        <h1>Contacteer ons</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contactt.submit') }}">
            @csrf

            <div class="mb-3">
                <label for="naam" class="form-label">Naam</label>
                <input type="text" name="naam" id="naam" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mailadres</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="bericht" class="form-label">Bericht</label>
                <textarea name="bericht" id="bericht" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Verstuur</button>
        </form>
    </div>
    @endsection
</x-layouts.app>

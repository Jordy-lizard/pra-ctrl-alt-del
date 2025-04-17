<x-layouts.app>
    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('messages.homepage_line_1') }}</p>
        <p>{{ __('messages.homepage_line_2') }}</p>
        <p>{{ __('messages.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('messages.all_brands') }}
        </x-slot:title>
    </h1>

    <div class="popular-manuals">
        <h2>{{ __('messages.popular_manuals') }}</h2>
        <ul>
            @foreach ($popularManuals as $popularManual)
                <li>
                    @if($popularManual->brand)
                        {{ $popularManual->brand->name }}: {{ $popularManual->name }}
                    @else
                        {{ __('messages.unknown_brand') }}: {{ $popularManual->name }}
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    {{-- A-Z selectie menu --}}
    <div class="brand-letter-nav" style="margin: 20px 0;">
        @foreach(range('A', 'Z') as $letter)
            <a href="javascript:void(0)" class="letter-link" data-letter="{{ $letter }}" style="margin-right: 10px;">{{ $letter }}</a>
        @endforeach
    </div>

    {{-- Merken lijst per letter --}}
    <div class="container">
        <div class="row">
            @foreach(range('A', 'Z') as $letter)
                <div id="letter-{{ $letter }}" class="brand-section col-md-12" style="display:none;">
                    <h2>{{ $letter }}</h2>
                    <ul>
                        @foreach($brands as $brand)
                            @php
                                $current_first_letter = strtoupper(substr($brand->name, 0, 1));
                            @endphp

                            @if ($current_first_letter === $letter)
                                <li>
                                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    {{-- JavaScript voor het tonen van de geselecteerde sectie --}}
    <script>
        document.querySelectorAll('.letter-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedLetter = this.getAttribute('data-letter');

                // Verberg alle secties
                document.querySelectorAll('.brand-section').forEach(section => {
                    section.style.display = 'none';
                });

                // Toon de geselecteerde sectie
                document.getElementById('letter-' + selectedLetter).style.display = 'block';
            });
        });
    </script>

</x-layouts.app>

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
            <a href="#letter-{{ $letter }}" style="margin-right: 10px;">{{ $letter }}</a>
        @endforeach
    </div>

    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <div class="row">
            @foreach($brands->chunk($chunk_size) as $chunk)
                <div class="col-md-4">
                    <ul>
                        @php $header_first_letter = null; @endphp
                        @foreach($chunk as $brand)
                            @php
                                $current_first_letter = strtoupper(substr($brand->name, 0, 1));
                            @endphp

                            @if ($current_first_letter !== $header_first_letter)
                                </ul>
                                <h2 id="letter-{{ $current_first_letter }}">{{ $current_first_letter }}</h2>
                                <ul>
                                @php $header_first_letter = $current_first_letter; @endphp
                            @endif

                            <li>
                                <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>

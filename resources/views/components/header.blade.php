<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1>{{ __('misc.homepage_title') }}</h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
    <a href="{{ route('contactt.show') }}">Contact</a>
</div>
<div class="language-switch" style="margin: 20px 0;">
    <a href="{{ route('language.switch', ['lang' => 'nl']) }}" style="margin-right: 10px;">NL</a>
    |
    <a href="{{ route('language.switch', ['lang' => 'en']) }}" style="margin-left: 10px;">EN</a>
</div>

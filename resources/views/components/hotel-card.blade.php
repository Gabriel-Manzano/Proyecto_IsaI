<div class="hotel-card">
    <img src="{{ asset($image) }}" alt="{{ $name }}" />
    <div class="hotel-description">
        <h3>{{ $name }}</h3>
        <p>{{ $location }}</p>
        
        @if($rating)
            <x-estrellas :rating="$rating" />
        @endif
        
        @if($link)
            <a href="{{ $link }}">Ver más</a>
        @endif
    </div>
</div>

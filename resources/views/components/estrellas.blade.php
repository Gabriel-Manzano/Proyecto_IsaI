<div class="stars">
    @for ($i = 1; $i <= 5; $i++)
        <i class="ri-star{{ $i <= floor($rating) ? '-fill' : ($i - $rating == 0.5 ? '-half-fill' : '-line') }}"></i>
    @endfor
</div>

<div class="ce-block__content" style="pointer-events: none">
    @foreach ($data['items'] as $item)
        <div><label>
            <input class="cdx-checklist__item-checkbox" type="checkbox" {{ $item['checked'] ? 'checked' : '' }}
                value="{{ $item['text'] }}">
            {{ $item['text'] }} </label></div>
    @endforeach
</div>

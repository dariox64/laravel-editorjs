<blockquote class="editor-warning">
    <p class="title">{{ $data['title'] }}</p>
    @if (!empty($data['message']))
    <small class="message warning">{{ $data['message'] }}</small>
    @endif
</blockquote>

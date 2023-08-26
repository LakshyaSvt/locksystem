@if ($content != null && isset($content) && json_decode($content) != null && count(json_decode($content)) > 0)
    @foreach (json_decode($content) as $index => $row)
        <p>
            <strong>{{ $index+1 }}.)</strong>
            {{ $row->product_name ?? '-' }}, Qty : {{ $row->qty ?? '-' }}
        </p>
    @endforeach
@else
    <p>--No Products--</p>
@endif

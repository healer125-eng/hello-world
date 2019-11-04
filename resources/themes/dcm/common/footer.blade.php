
<footer id="page-footer" class="bg-body-light">
    <div class="content py-0">
        <div class="row font-size-sm">

              

                @if(isset($footerMenuArr) && $footerMenuArr)
                    @foreach ($footerMenuArr as $index => $item)
                        <div class="col-4 col-md">
                            <h5>{{ $item['text'] ?? "Footer #" . ++$index }}</h5>
                            <ul class="list-unstyled text-small">
                                @if( isset($item['children']) && count($item['children']) > 0 )
                                    @each('common.partials.footer-item', $item['children'], 'item')
                                @else
                                    <li>
                                        <a title="{{ $item['title'] ?? $item['text'] ?? '' }}" class="text-muted" href="{{ $item['href']  ?? '#' }}">
                                            <i class="{{ $item['icon'] ?? ''}} mr-1"></i> {{ $item['title'] ?? $item['text'] ?? ''}}
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    @endforeach
                @endif
        </div>
    </div>
</footer>

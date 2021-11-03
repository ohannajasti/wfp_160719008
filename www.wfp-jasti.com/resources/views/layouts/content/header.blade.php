<h3 class="page-title">
    {{ $titlePage }}
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        @foreach ($breadcrump_items as $items)
            <li>
                @if ($loop->first) <i class="fa fa-home"></i><a
                        href='javascript:;'>{{ $items }}</a>
                @else
                    @if ($breadcrump_href[$loop->index] == '')
                        <a href='javascript:;'>{{ $items }}</a>
                    @else
                        <a
                            href={{ route($breadcrump_href[$loop->index]) }}>{{ $items }}</a>
                    @endif
                @endif
                @unless($loop->last) <i class="fa fa-angle-right"></i> @endunless
            </li>
        @endforeach
    </ul>
</div>

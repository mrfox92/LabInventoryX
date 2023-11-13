<div class="breadcrumb-area">
    <h3>{{ $title }}</h3>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            @foreach ($breadcrumbs as $breadcrumb)
                
                <li class="breadcrumb-item {{ $breadcrumb['active'] ?? '' }}">

                    @if (isset($breadcrumb['active']))

                        {{ $breadcrumb['name'] }}

                    @else
                        
                        <a href="{{ route($breadcrumb['url']) }}">{{ $breadcrumb['name'] ?? '' }} 
                            @isset($breadcrumb['icon'])
                                @component('components.partials.icons.bx-icons', ['iconClass' => $breadcrumb['icon']]) @endcomponent
                            @endisset
                        </a>

                    @endif
                </li>

            @endforeach

        </ol>
    </nav>

</div>
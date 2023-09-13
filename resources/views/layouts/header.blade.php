<div class="main-navbar fixed-top bg-white">
    <div class=" top-links justify-content-end container p-3 d-none d-md-none d-lg-flex">
        <ul>
            @foreach ($iconData as $item)
                <li>
                    <img src="{{ $item['iconUrl'] }}" alt="Icon">
                    <span>{{ $item['value'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="33" >
                <span class="ml-2 d-block">{{$companyName}}</span>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @foreach ($navLinks as $navLink)
                    <li class="nav-item {{ $navLink['child'] ? 'dropdown' : '' }}">
                        <a class="nav-link {{ $navLink['child'] ? 'dropdown-toggle' : '' }}"
                           href="{{ $navLink['linkUrl'] }}"
                           @if ($navLink['child'])
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                           @endif
                        >
                            {{ $navLink['page'] }}
                        </a>
                        @if ($navLink['child'])
                            <ul class="dropdown-menu">
                                @foreach ($navLink['children'] as $childLink)
                                    <li><a class="dropdown-item" href="{{ $childLink['linkUrl'] }}">{{ $childLink['page'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
          </div>
        </div>
      </nav>

</div>

<nav class="navbar navbar-expand-lg bg-green">
    <div class="container">
        <button class="navbar-toggler bg-yellow text-green" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                @foreach($categories as $cat)
                    @foreach($cat->items as $category)
                        @if ($category->items->count() > 0)
                            <li class="nav-item dropdown">
                                <a class="nav-link link-lime dropdown-toggle" href="{{ route('category.show', $category->slug) }}" id="{{ $category->slug }}"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="{{ $category->slug }}">
                                    @foreach($category->items as $item)
                                        <a class="dropdown-item link-green" href="{{ route('category.show', $item->slug) }}">{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link link-lime" href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</nav>

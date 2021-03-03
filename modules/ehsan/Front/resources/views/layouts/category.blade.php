<li class="dropdown active">
    <!-- PAGES -->
    <a class="dropdown-toggle" href="#">
        دسته بندی ها
    </a>
    <ul class="dropdown-menu">
        @foreach ($categories as $category)
        <li class="dropdown">
            <a class="dropdown-toggle" href="#">
                {{$category->title}}
            </a>
            @if (count($category->SubCategories))
            <ul class="dropdown-menu">
                @foreach ($category->SubCategories as $SubCategory)
                <li><a href="page-about-us-1.html">{{$SubCategory->title}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</li>
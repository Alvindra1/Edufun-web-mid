<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{route('page.home')}}"> Edufun</a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('category.show', 1)}}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{route('category.show', 2)}}">Network Security</a></li>                        </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('writers')}}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('post.index')}}">Post</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{route('menu-builder')}}">Menu Builder</a>
            </li>
            @foreach ($menu_page as $item)
            <li class="nav-item active">
            <a class="nav-link" href="{{$item['link']}}">{{$item['label']}}</a>
                </li>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>  
    
        
    </div>
</nav>



<header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="link-secondary" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @if (auth()->check())
                <p class="blog-header-logo text-dark">{{ auth()->user()->name }}</p>
                <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif

        </div>
    </div>
</header>

{{-- // <!-- Drugi Laravelov projekat Blog - vezbe --> --}}

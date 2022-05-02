<body>

    <div
        class="flex-center position-ref full-heigth"
    >

    @if(Route::has('login'))

        <div class="top-right links">
            @auth
                <a href="{{route('login')}}">Home</a>

            @else
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Register</a>
            @endauth
        </div>
        @endif


        <div class="content">
            <div class="title m-b md">
                Laravel
            </div>


            <div    class="links">
            @foreach ($links as $link )
                <a href="{{$link->url}}">{{$link->title}}</a>
            @endforeach

            </div>
        </div>
    </div>
</body>

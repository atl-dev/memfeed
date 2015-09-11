<html>

    <head>
        @include('assets')
    </head>

    <body>
        
        <div class='container container-fluid'>
            
            @if(isset($profile))
                @include('partials.profile.default')
            @else 
                @include(partials.message.profile.404)
            @endif

        </div>

        @include('partials.page.footer')
    </body>

</body>

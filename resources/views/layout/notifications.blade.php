@if ($errors->any())
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </p>
    </div>
@endif

@if ( session()->has('message') )
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if ($message = Session::get('success'))
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            {{ $message }}
        </p>
    </div>
@endif

@if ($message = Session::get('error'))
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            {{ $message }}
        </p>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            {{ $message }}
        </p>
    </div>
@endif

@if ($message = Session::get('info'))
    <div id="js--notification-box" class="position-fixed top-0 alert alert-primary w-100 mb-0" role="alert">
        <p class="text--md text-center fc--white">
            {{ $message }}
        </p>
    </div>
@endif

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Laravel</h1>
        <div class="row">
            <div class="col">
                <h2>Basic</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('simple-route') }}">Simple Route</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('route-with-view') }}">Route with Call View</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('route-controller') }}">Route with Controller Method</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('route-controller/25') }}">Create Route with Parameter</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ route('items.index') }}">Resource Route</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('user/create') }}">Form Validation</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('my-form') }}">Ajax Form Validation</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('check-it') }}?type=2">Create Custom Middleware</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('posts') }}">Ajax Request</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('image-upload') }}">Image Upload</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('ajax-image-upload') }}">Ajax Image Upload</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('file-upload') }}">File Upload</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('multiple-image-upload') }}">Multple Image Upload</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('users') }}">Pagination</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ route('ajax.pagination') }}">Ajax Pagination</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('product') }}"> Laravel Model Observers</a></li>
                </ul>
            </div>
            <div class="col">
                <h2>Advance</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('custom-validation') }}">Create Custom Validation Rule</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('custom-helpers') }}">Custom Helper function</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('my-helper') }}">Custom Helper Facade Class</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('sandeep') }}">Create Custom Facade</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('helper') }}">Add Custom Configuration File</a></li>
                    <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('create-custom-log') }}">Create Custom Log File</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                <li class="nav-item"><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="{{ url('simple-route') }}">Simple Route</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>

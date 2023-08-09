<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <h1 class="text-center">Laravel Basic</h1>
        <div class="row">
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="{{ url('simple-route') }}">Simple Route</a></li>
                    <li class="nav-item"><a href="{{ url('route-with-view') }}">Route with Call View</a></li>
                    <li class="nav-item"><a href="{{ url('route-controller') }}">Route with Controller Method</a></li>
                    <li class="nav-item"><a href="{{ url('route-controller/25') }}">Create Route with Parameter</a></li>
                    <li class="nav-item"><a href="{{ route('items.index') }}">Resource Route</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item">dd</li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="">Simple Route</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="">Simple Route</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>

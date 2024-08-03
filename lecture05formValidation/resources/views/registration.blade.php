<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>





    <div class="container">



        <form action="{{ url('/') }}/reg" method="POST">

            {{-- @php

                echo '<pre>';
                print_r($errors->all());
                echo '</pre>';

            @endphp --}}


            @csrf
              <x-maheen name="username" type="text" label="User Name" />
              <x-maheen name="useremail" type="email" label="Email Address" />
              <x-maheen name="password" type="password" label="Password" />
              <x-maheen name="password_config" type="password" label="Confirm Password" />




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">


</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>



        <div class="container">
            <h1>
                {{ $title }}
            </h1>
            <form action="{{ $url }}" method="post">

                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        value="{{ $arham->name }}" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                        value="{{ $arham->email }}" placeholder="name@example.com">
                </div>
                <div class="form-check form-check-inline">


                    <input class="form-check-input" type="radio" name="gen" id="inlineRadio1" value="M"
                        {{ $arham->gender == 'M' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio1">Male</label>


                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="inlineRadio2"
                        value="F"{{ $arham->gender == 'F' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="inlineRadio2"
                        value="O"{{ $arham->gender == 'O' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Other</label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="exampleFormControlInput1"
                        value="{{ $arham->dob }}" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> City</label>
                    <input type="text" class="form-control" name="city" id="exampleFormControlInput1"
                        value="{{ $arham->city }}" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="exampleFormControlInput1"
                        value="{{ $arham->location }}" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{ $arham->address }}</textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" value="Submit">

                </div>

            </form>

        </div>




    </main>
    <footer>
        <!-- place footer here -->
    </footer>


 






    <script>
        let table = new DataTable('#myTable');
    </script>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>

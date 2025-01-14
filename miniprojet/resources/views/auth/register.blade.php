<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>
<body>

{{-- <div class="position-relative"> --}}
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                  <h1 class="cared-title">Register</h1>
                </div>
                <div class="card-body">
                    <form action="" metode="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label" >Name</label>
                            <input type="text" name="name" class="form-input" id="name" placeholder="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" >Email</label>
                            <input type="email" name="email" class="form-input" id="email" placeholder="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" >Password</label>
                            <input type="password" name="password" class="form-input" id="password" placeholder="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid" >
                                <button class="btn btn-praimery">Register</button>
                            </div>


                        </div>




                    </form>

                </div>
            </div>

        </div>

    </div>

    </div>

</div>
    </section>

</body>
</html>

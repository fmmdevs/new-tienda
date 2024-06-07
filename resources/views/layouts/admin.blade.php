<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>@yield('title')</title>

</head>

<body>
    <div class="page-container">

        <div class="row g-0 content-wrap">
            <!-- sidebar -->
            <div class="p-3 col-4 col-md-2  fixed text-white bg-dark text-center vh-100">
                <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                    <span class="fs-4">Admin Panel</span>
                </a>
                <hr />
                <ul class="nav flex-column">
                    <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">Home</a></li>
                    <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">Products</a></li>
                    <li><a href="{{ route('admin.category.index') }}" class="nav-link text-white">Categories</a>
                    </li>
                    <li> <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Home</a> </li>
                </ul>
            </div>
            <!-- sidebar -->

            <div class="col-8 col-md-10 content-grey">
                <nav class="p-3 shadow text-end">
                    <span class="profile-font">Admin</span>
                    {{-- Imagen de admin profile --}}
                    <img class="img-profile rounded-circle" src="{{ asset('/img/admin-profile.jpeg') }}">
                </nav>
                <!-- Each view will insert its own content -->
                <div class="g-0 m-5"> @yield('content') </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="copyright py-4 text-center text-black">
            <div class="container"> <small> Copyright - 2024 </small> </div>
        </footer>
        <!-- footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>

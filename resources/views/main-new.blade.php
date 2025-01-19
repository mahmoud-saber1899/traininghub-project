<!-- resources/views/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrainingHub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc24d89fce.js" crossorigin="anonymous"></script>
    <style>
        .star-rating {
            color: #ffc107; /* Bootstrap's warning color for stars */
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #34495e;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('main') }}">
                <img src="{{ asset('images/main-logo.png') }}" alt="Logo" height="40">
            </a>

            <!-- Search Bar -->
            <form class="d-flex mx-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>
            </form>

            <!-- Login Button -->
            <a href="{{ url('/student') }}" class="btn btn-primary">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
            </a>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="d-flex justify-content-center align-items-center" style="background-color: #f3f3f3; height: 500px;">
        <div class="text-center">
            <h1 class="display-4 fw-bold">{{ env('APP_NAME') }}</h1>
            <p class="lead text-muted">
                A platform that brings together the student and his supervisor during training. <br> It helps them communicate, attach reports, and share the student's experiance in the institution in which he trained
            </p>
        </div>
    </section>
    <div class="container mt-5">
        <!-- Your main content goes here -->
        <h2>Recent Experiences</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="post">
                    @csrf
                    <select name="orgnization-name" id="orgnizationFillter" class="form-select">
                        <option selected>Select Orgnization</option>
                        @foreach($orgnizations as $orgnization )
                            <option value="{{ $orgnization->id }}">{{ $orgnization->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        <section class="main-content" style="margin-top: 30px;">
            <div class="row">
                @foreach($orgnizations as $org)
                    <div class="col-md-4" style="margin-bottom: 10px;">
                        <div class="card">
                            <div class="card-header">
                                <h3 style="font-size: 20px;">{{ $org->name }}</h3>
                            </div>
                            <div class="card-body">
                                <p class="ornization-descriptio">
                                    Hello there
                                </p>
                                <div class="star-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $org->ratings->avg('rating'))
                                            <span class="star">&#9733;</span> <!-- Filled star -->
                                        @else
                                            <span class="star">&#9734;</span> <!-- Empty star -->
                                        @endif
                                    @endfor
                                </div>
                                <small>
                                    {{ $org->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

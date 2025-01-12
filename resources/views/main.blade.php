<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/heroicons@2.1.1/dist/heroicons.js"></script>
    <title>TrainingHub</title>
    <style>
        .star-rating {
            color: #ffc107; /* Bootstrap's warning color for stars */
            font-size: 1.2rem;
        }
    </style>
</head>
<body class="bg-light">
<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Left Side: Logo and Application Name -->
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="me-2" style="height: 40px;">
                <span class="h5 mb-0">{{ env('APP_NAME') }}</span>
            </div>

            <!-- Right Side: Login Button -->
            <div>
                <a href="{{ url('/student') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                    </svg>
                    Login
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container mt-5">
    <h1 class="text-center mb-4">Top Rated Organizations</h1>

    <!-- Widget 1: Top Rated Organizations -->
    <div class="card mb-4 shadow">
        <div class="card-body">
            <h2 class="card-title h4 mb-3">Top Rated Organizations</h2>
            <ul class="list-group">
                @foreach ($orgnizations->sortByDesc(function($org) {
                    return $org->ratings->avg('rating');
                })->take(5) as $org)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-medium">{{ $org->name }}</span>
                        <div class="star-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $org->ratings->avg('rating'))
                                    <span class="star">&#9733;</span> <!-- Filled star -->
                                @else
                                    <span class="star">&#9734;</span> <!-- Empty star -->
                                @endif
                            @endfor
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Widget 2: Application Rates -->
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title h4 mb-3">Application Rates</h2>
            <p class="card-text">This widget can display application-specific rates or statistics.</p>
            <!-- Add more content here as needed -->
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

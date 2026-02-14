<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #fff;
            color: #4B1C1C;
        }
        .navbar {
            background: #800000 !important;
        }
        .navbar .navbar-brand, .navbar .nav-link {
            color: #800000 !important;
            font-weight: bold;
        }
        .navbar .nav-link.active, .navbar .nav-link:focus, .navbar .nav-link:hover {
            color: #a83232 !important;
            
        }
        .container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(128,0,0,0.08);
            padding: 2rem;
            margin-top: 2rem;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #800000;
            font-weight: bold;
        }
        table th {
            background: #800000;
            color: #fff;
        }
        table tr {
            border-bottom: 1px solid #f3eaea;
        }
        table td {
            color: #4B1C1C;
        }
        .btn-primary {
            background: #800000;
            border: none;
        }
        .btn-primary:hover {
            background: #a83232;
        }
        .navbar .nav-link + .nav-link {
            margin-left: 2.5rem;
        }
        .navbar-toggler {
            border-color: #800000 !important;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23800000' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <svg class="me-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: inline-block;">
                <rect x="2" y="2" width="36" height="36" rx="8" fill="#800000"/>
                <path d="M10 15h20M10 20h20M10 25h20" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="15" r="2" fill="white"/>
                <circle cx="12" cy="20" r="2" fill="white"/>
                <circle cx="12" cy="25" r="2" fill="white"/>
            </svg>
            <a class="navbar-brand" href="/">STUDENT PORTAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">STUDENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">COURSES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

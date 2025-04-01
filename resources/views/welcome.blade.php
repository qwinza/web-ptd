<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
        
        <style>
            body {
                background-color: black !important; /* Background hitam */
                color: white !important; /* Warna teks putih */
                font-family: 'DM Sans', sans-serif; /* Font DM Sans */
                text-align: center;
            }
        
            .navbar {
                background-color: black !important; /* Navbar hitam */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
            }
        
            .navbar-brand {
                font-size: 1.5rem;
                font-weight: bold;
                color: white !important;
            }
        
            .navbar-nav .nav-link {
                color: white !important; /* Navbar link menjadi putih */
                font-size: 1rem;
            }
        
            .navbar-nav .nav-link:hover {
                color: #17a2b8 !important;
            }

            
        </style>
    </head>
    
    <body>
        @include('components.navbar')

        <div class="container mt-5">
            @include('layouts.dashboard') 
            @include('contents.subBlock')
            @include('contents.carouselBlock')
        </div>
        
        @include('components.footer')
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

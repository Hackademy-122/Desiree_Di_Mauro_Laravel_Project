<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- OWL CAROUSEL --}}
<link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
{{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Project DB</title>
</head>
<body>

    <x-navbar/>
 {{$slot}}
    
   
    

    {{-- OWL CAROUSEL --}}
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
</body>
</html>
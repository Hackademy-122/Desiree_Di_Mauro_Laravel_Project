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

  {{-- GOOGLE FONT --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet
  

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
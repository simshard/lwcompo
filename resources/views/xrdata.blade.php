<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    @vite(['resources/css/app.css','resources/js/app.js'])
     
    <title>HMRC UK Exchange Rate table </title>
</head>
<body>
    <div class="container mx-auto mt-4">
  <div class="my-8">
    <h2 class="text-lg font-semibold mt-4">HMRC UK Exchange Rate table </h2>

    <livewire:xr-table />
</div>
  <div class="text-3xl text-purple-900 text-center">
    @php  $str = "\u{03A8}";//  
    echo $str;
    @endphp
</div>
</div>
</body>
</html>
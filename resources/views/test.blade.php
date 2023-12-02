<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    @vite(['resources/css/app.css','resources/js/app.js'])
     
    <title>Livewire Examples </title>
</head>
<body>
    <div class="container mx-auto mt-4">
    <div class="text-red-500 text-xl ">HOME  </div>
    <p class="mt-3 text-blue-600 text-base">
        Tailwind  and Livewire installed correctly
    </p>
  <livewire:counter/>
   
  <div class="text-3xl text-purple-900 text-center">
    @php  $str = "\u{03A8}";//  
    echo $str;
    @endphp
</div>
</div>
</body>
</html>
   
 
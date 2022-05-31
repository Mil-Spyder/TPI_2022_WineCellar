<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <h1>{{ $data->appelation }} </h1>
    <h2>{{$data->cuvee_name}}</h2>
    <h3>{{$data->vintage}}</h3> 
    <div class=" grid grid-cols-3 gap-2">
        <div>
            <p class="font-bold text-gray-800 ">Couleur</p>
            <p class="font-light text-gray-500">{{ $data->color }}</p>
        </div>
       
        <div>
            <p class="font-bold text-gray-800 ">Region</p>
            <p class="font-light text-gray-500">{{ $data->region }}</p>
        </div>
        <div>
            <p class="font-bold text-gray-800 ">Culture</p>
            <p class="font-light text-gray-500">{{ $data->culture->label }}</p>
        </div>
        @if ($data->winemaker_id==0)
        @else
        <div>
            <p class="font-bold text-gray-800 ">Nom du domaine</p>
            <p class="font-light text-gray-500">{{$data->winemaker->domain_name }}</p>
        </div>
        @endif
        <div>
            <p class="font-bold text-gray-800 ">Cépage</p>
            <p class="font-light text-gray-500">{{$data->grape_variety_id }}</p>
        </div>
        <div>
            <p class="font-bold text-gray-800 ">Date consommable</p>
            <p class="font-light text-gray-500">{{ $data->consumable_date }}</p>
        </div>
        <div>
            <p class="font-bold text-gray-800 ">Date apogée</p>
            <p class="font-light text-gray-500">{{ $data->peak_date }}</p>
        </div>
        <div>
            <p class="font-bold text-gray-800 ">Date danger</p>
            <p class="font-light text-gray-500">{{ $data->danger_date }}</p>
        </div>
    </div>
    <h2 for="presentation" class="text-gray-700 font-medium mb-2 underline text-2xl">Déscriptions</h2>
    <div class="flex">
        <p class="text-gray-500 py-2 text-m">
            {{ $data->description }}
        </p>
    </div>

</body>
</html>




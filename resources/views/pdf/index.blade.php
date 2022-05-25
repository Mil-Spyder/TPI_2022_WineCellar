<h1>{{ $data->appelation }} </h1>
<h2>{{$data->cuvee_name}}</h2>
<h3>{{$data->vintage}}</h3>

<br><h4>{{$data->grape_variety}}</h4>

<ul>
    <li>{{$data->region}}</li>
    <li>{{$data->vintage}}</li>
    <li>{{$data->consumable__date}}</li>
    <li>{{$data->Peak_date}}</li>
    <li>{{$data->danger_date}}</li>
    <li>{{$data->culture->label}}</li>
    <li>{{$data->color}}</li>

    <li>{{$data->grape_variety}}</li>
    <li>{{$data->winemaker_id}}</li>
</ul>

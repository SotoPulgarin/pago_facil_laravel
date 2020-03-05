<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Paises</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>poblacion</th>
                <th>ciudades</th>
            </tr>
        </thead>
            <tbody>
                @foreach($paises as $pais=>$informacion)
                    <tr>
                        <td rowspan="2"> {{  $pais  }}   </td>
                        <td rowspan="2"> {{ $informacion["capital"] }}  </td>
                        <td rowspan="2"> {{ $informacion["moneda"] }}   </td>
                        <td rowspan="2"> {{ $informacion["poblacion"] }}   </td>
                        <td bgcolor="orange"> {{ $informacion["ciudades"][0] }}   </td>

                    </tr>
                    <tr>
                        <td bgcolor="blue">   {{$informacion["ciudades"][1]}}     </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>

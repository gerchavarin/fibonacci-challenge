<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ficonacci Challenge</title>

    <style>
        body {
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <th>Posición</th>
            <th>Nombre</th>
            <th>Fecha</th>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{$request->posicion}}</td>
                <td>{{$request->nombre}}</td>
                <td>{{$request->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
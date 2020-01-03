<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
<div class="tabla">
        <table border="1">
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            </tr>
            @foreach ($pruebas as $prueba)
            <tr>
                <td>{{$prueba->id}}</td>
                <td>{{$prueba->nombre}}</td>
            </tr>
            @endforeach

        </table>
</div>
</body>
</html>
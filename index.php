<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA FETCH</title>
</head>
<body>
    <h1>BUSCAR INFORMACION DE UN PAIS</h1>
    <form id="formu">
        <!--ingresar el formulario para consultar datos y consulta de php-->
        <input type="text" name="pais" id="pais">
        <button type="submit">Consultar</button> 
        <button id="botonConsultar" type="button">Consultar a PHP</button>
    </form>
    <p id="resultado"></p>
    <br>
    <table border="1px solid">
        <thead>
            <tr>
                <th>INFORMACION</th>
                <th>RESULTADO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PAIS</td>
                <td id="nombrePais"></td>
            </tr>
            <tr>
                <td>POBLACION</td>
                <td id="poblacionPais"></td>
            </tr>
            <tr>
                <td>CAPITAL</td>
                <td id="capitalPais"></td>
            </tr>
            <tr>
                <td>BANDERA</td>
                <td><img src="" alt="" id="banderaPais"></td>
            </tr>
        </tbody>
    </table> 
    <script src="script.js"></script>
</body>
</html>
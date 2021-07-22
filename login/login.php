<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            width: 25%;
            background-color: #ffc;
            border: 2px solid #f00;
            margin: auto;
        }
        .izq {
            text-align: right;
        }
        .der {
            text-align: left;
        }
        td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Introduce tus datos</h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td class="izq">Login:</td>
                <td class="der"><input type="text" name="login" id=""></td>
            </tr>
            <tr>
                <td class="izq">Contraseña:</td>
                <td class="der"><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="LOGIN" name="enviar"></td>
            </tr>
        </table>

    </form>
    
</body>
</html>
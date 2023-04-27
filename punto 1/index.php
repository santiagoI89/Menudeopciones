<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Ejercicios</title>
</head>
<body>
    <form action="" method="post">
        <p>Seleccione la accion a ejecutar</p>
        <select name="opcion">
            <option  value="1">
                Datos personales
            </option> 
            <option  value="2">
                Sumar
            </option>  
            <option  value="3">
                Restar
            </option>  
            <option  value="4">
                Multiplicar
            </option>  
            <option  value="5">
                Dividir
            </option>     
        </select> 
        <button>Seleccionar</button>   
    </form>
</body>
</html>


<?php
$opt=$_POST['opcion'];
switch ($opt) {
    case '1':
       header('Location: formulario.php');
        break;
        case '2':
            header('Location: suma.php');
            break;
            case '3':
                header('Location: resta.php');
                break;
                case '4':
                    header('Location: multiplicacion.php');  
                    break;
                    case '5':
                        header('Location: division.php');   
                        break;
    
    default:
       
        break;
}
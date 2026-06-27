<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 60%; margin-bottom: 30px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Sistema de Deportes</h1>
    
<?php 
    include 'conn.php'; 

    // TABLA 1: EQUIPOS
    $sqlEquipos = $conn->query("SELECT * FROM equipos");
    echo "<h2>Tabla 1: Equipos</h2>";
    if($sqlEquipos && $sqlEquipos->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nombre del Equipo</th><th>Puntos</th></tr>";
        while($fila = $sqlEquipos->fetch_assoc()){
            echo "<tr><td>".$fila["id"]."</td><td>".$fila["nombre"]."</td><td>".$fila["puntos"]."</td></tr>";
        }
        echo "</table>";
    }

    // TABLA 2: JUGADORES
    $sqlJugadores = $conn->query("SELECT * FROM jugadores");
    echo "<h2>Tabla 2: Jugadores Estrella</h2>";
    if($sqlJugadores && $sqlJugadores->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nombre del Jugador</th><th>Goles</th></tr>";
        while($fila = $sqlJugadores->fetch_assoc()){
            echo "<tr><td>".$fila["id"]."</td><td>".$fila["nombre"]."</td><td>".$fila["goles"]."</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>
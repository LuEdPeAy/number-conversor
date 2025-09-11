<?php
include_once('operaciones.php');
include_once('elementos.php');

$menu = new elementos;
$alertDanger = '';
$decimal;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los datos se han enviado y son POST
    $decimal = htmlspecialchars($_POST['numeroDecimal']); // Limpia los datos para evitar inyecciones
    $hexadecimal;
    $alertDanger = '';

    if (!empty($decimal)) {
      if (filter_var($decimal, FILTER_VALIDATE_INT) !== false && $decimal > -1) {
              $conversor = new operaciones;
              $hexadecimal = $conversor->convertiraHexadecimal($decimal);
          } else {
            $alertDanger = '<div class="container">
              <div class="alert alert-danger" role="alert">
                El número introducido no es un entero válido. Debe de ser entero positivo mayor a cero.
              </div>
              </div>';
              $isEnteroValido = false;
          }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal a Binario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg mb-4" data-bs-theme="dark">
  <div class="container-fluid bg-dark">
    <a class="navbar-brand" href="/">Luedpeay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <?php  echo $menu->getMenu();  ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="card text-center">
  <div class="card-header">
    Convertidor Decimal a Hexadecimal
  </div>
  <div class="card-body">
    <h5 class="card-title">Decimal a Hexadecimal</h5>
    <p class="card-text">Simple convertidor de práctica de números enteros decimales a Hexadecimal.</p>
  </div>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      

    <div class="container text-center mb-4">
      <?php echo $alertDanger; ?>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="numeroDecimal" class="form-label">Decimal:</label>
            <input type="number" value="<?php echo !empty($decimal) ? htmlspecialchars($decimal) : ''; ?>" required class="form-control" id="numeroDecimal" name="numeroDecimal" aria-describedby="decimalHelp">
            <div id="decimalHelp" class="form-text">Escribe un número en formato decimal.</div>
            <button class="btn btn-primary mt-3" type="submit">Convertir</button>
          </div>
        </div>
        <div class="col border-start">
          <div class="mb-3">
            <label for="numeroHexadecimal" class="form-label">Hexadecimal:</label>
            <input type="text" class="form-control" id="numeroHexadecimal" aria-describedby="HexadecimalHelp" readonly value="<?php echo !empty($hexadecimal) ? htmlspecialchars($hexadecimal) : ''; ?>">
            <div id="HexadecimalHelp" class="form-text">Número en formato Hexadecimal.</div>
          </div>
        </div>
      </div>
    </div>    
    </form>
  </div>
  <div class="card-footer text-body-secondary">
    Luedpeay
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
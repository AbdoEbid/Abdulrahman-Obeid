<?php
define('tax', .2);

if ($_POST) {
    $units = $_POST['condition'];
    switch ($units) {
        case $units <= 50:
            $units = $units * .5;
            $vat = $units * tax;
            $bill = $units + $vat;
            break;
        case $units > 50 && $units <= 150:
            $units = $units * .5;
            $vat = $units * tax;
            $bill = $units + $vat;
            break;
        case $units > 150 && $units <= 250:
            $units = $units * .5;
            $vat = $units * tax;
            $bill = $units + $vat;
            break;
        case $units >= 250:
            $units = $units * .5;
            $vat = $units * tax;
            $bill = $units + $vat;
            break;
        default:
            $bill = "invalid";
    }
    $bill = "Your Elec Bill is " . $bill . "EGP";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>ELECTRICITY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-12 text-center text-danger mt-5 h1">Electricity Bill</div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="my-input">Consumption</label>
                    <input id="" class="form-control" type="number" name="condition">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-danger btn-sm">Calc Bill</button>
                </div>
            </form>
            <div class="alert alert-success">
                <?php echo $bill ?? ""; ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
if ($_POST) {
    $firstnum = $_POST['firstnum'];
    $secondnum = $_POST['secondnum'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case $operation = 'add':
            $result = $firstnum + $secondnum;
            break;
        case 'sub':
            $result = $firstnum - $secondnum;
            break;
        case $operation = 'mul':
            $result = $firstnum * $secondnum;
            break;
        case $operation = 'div':
            $result = $firstnum / $secondnum;
            break;
        case $operation = 'mod':
            $result = $firstnum % $secondnum;
            break;
        case $operation = 'exp':
            $result = $firstnresult ** $secondnum;
            break;
        default:
            $result = "invalid";
    }
    $result = "The Result is " . $result;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>CALCULATOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-12 text-center text-danger mt-5 h1">CALCULATOR</div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="my-input">First Number</label>
                    <input id="" class="form-control" type="number" name="firstnum">
                </div>
                <div class="form-group">
                    <label for="my-input">Second Number</label>
                    <input id="" class="form-control" type="number" name="secondnum">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="add"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="sub"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="mul"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="div"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="mod"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" name="operation" value="exp"></input>
                </div>

            </form>
            <div class="alert alert-success">
                <?php echo $result ?? "";    ?>
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
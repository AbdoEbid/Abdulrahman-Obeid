<?php
if ($_POST) {
    $percentage = $_POST['physics'] + $_POST['chemistry'] + $_POST['biology'] + $_POST['mathematics'] + $_POST['computer'];
    $percentage = $percentage / 5;

    switch ($percentage) {
        case $percentage >= 90:
            $grade = "The Grade is A";
            break;
        case $percentage >= 80:
            $grade = "The Grade is B";
            break;
        case $percentage >= 70:
            $grade = "The Grade is C";
            break;
        case $percentage >= 60:
            $grade = "The Grade is D";
            break;
        case $percentage >= 40:
            $grade = "The Grade is E";
            break;
        case $percentage < 40:
            $grade = "The Grade is F";
            break;
        default:
           $grade = "invalid";
    }
    $percentage = "The Percentage is " . $percentage ."%" ;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>GRADES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-12 text-center text-danger mt-5 h1">GET Grade</div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="my-input">PHYSICS</label>
                    <input id="" class="form-control" type="number" name="physics" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="my-input">CHEMISTRY</label>
                    <input id="" class="form-control" type="number" name="chemistry" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="my-input">BIOLOGY</label>
                    <input id="" class="form-control" type="number" name="biology" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="my-input">MATHEMATICS</label>
                    <input id="" class="form-control" type="number" name="mathematics" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="my-input">COMPUTER</label>
                    <input id="" class="form-control" type="number" name="computer" min="0" max="100">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-danger btn-sm">Check Grade</button>
                </div>

            </form>
        <div class="alert alert-success">
            <?php echo $percentage ?? "";
            echo "<br>";
            echo $grade ?? "";
            ?>
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
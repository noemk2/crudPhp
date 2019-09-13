<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?
require_once 'process.php';
?>
<?
$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
// pre_r($result); 
pre_r($result->fetch_assoc());
// more data by BD
pre_r($result->fetch_assoc());


function pre_r($array)
{
    # code...
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>

<body>
    <div>
        <div class="row justify-content-center">
            <form action="process.php" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" value="Enter ur name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Location:</label>
                    <input type="text" name="location" value="Enter ur location" class="form-control">
                </div>
                <div class="form-group">
                    <button type="summit" name="save" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
</body>

</html>
<?php

$arr = array('images\Untitled-2.jpg', 'images\Untitled-3.jpg', 'images\Untitled-4.jpg');
function slide($list)
{
  $html = '';
  foreach ($list as $image) {
    $html = '<div class="carousel-item active">
    <img src="' . $image . '" class="d-block" style="width:100%; height: 200px" alt="image">
  </div>';
    echo $html;
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="row">
    <div col-md-2></div>
    <div col-md-8>
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            

          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    <div col-md-2></div>
  </div>

</body>

</html>
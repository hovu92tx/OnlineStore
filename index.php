<?php
$title = 'Home';
$activePage = 'home';
$arr = array('images\Untitled-2.jpg', 'images\Untitled-3.jpg', 'images\Untitled-4.jpg');
function slide($list)
{
    $html = "";
    $html1 = '';
    foreach ($list as $image) {
        $html1 .= '<div class="carousel-item active">
    <img src="' . $image . '" class="d-block" style="width:100%; height: 200px" alt="image">
  </div>';

    }
    $html = "<div id=\"slide\" class=\"carousel slide\" data-bs-ride=\"carousel\" style=\"width:250px; height:300px\">
<div class=\"carousel-inner\">.$html1.
</div>
<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slide\" data-bs-slide=\"prev\">
  <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
  <span class=\"visually-hidden\">Previous</span>
</button>
<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slide\" data-bs-slide=\"next\">
  <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
  <span class=\"visually-hidden\">Next</span>
</button>
<div class=\"row mt-3\">
  <p>Product's Name: #</p>
  <p>Price: #</p>
</div>
<div class=\"row\"><button>Product Detail</button></div>
</div>";
    return $html;
}
$html = slide($arr);
include 'template/layout.html';
?>
<?php
function component($product_name,$product_price,$product_img){
$element = "
<div class=\"col-md-3 my-3 my-md-0\">
  <form  action=\"index.html\" method=\"post\">
    <div class=\"shadow card\">
      <div>
        <img src=\"$product_img\" alt=\"img1\" class=\"img-fluid card-img-top\">
      </div>
      <div class=\"card-body\">
        <h5 class=\"card-title\">$product_name</h5>
        <h6>
          <li class=\"fas fa-star\"></li>
          <li class=\"fas fa-star\"></li>
          <li class=\"fas fa-star\"></li>
          <li class=\"fas fa-star\"></li>
          <li class=\"far fa-star-half\"></li>

        </h6>
        <p class=\"card-text\">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
        </p>
        <h5>
          <small class=\"text-secondary\"><s>$599</s></small>
          <span class=\"price\">$product_price</span>
        </h5>
          <button class=\"btn btn-warning\" type=\"submit\" name=\"add\">add to cart<i class=\"fas fa-shopping-cart\"></i></button>
      </div>
    </div>
  </form>
</div>
";

echo $element;
};
 ?>

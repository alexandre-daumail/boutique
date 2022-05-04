<?php

$title = "Article";
$css = "articles";

require('process/header.php');

$item = new Item();

?>

<main>
    
<?php
            
            if (isset($_GET['code']) && !empty($_GET['code'])){
            
                $array = $item->getItemsbyCode($_GET['code']);
                                        
            } else {
            
                header('location: items.php');
            
            }
        
        
           echo  '<form method="post" action="articles.php?action=add&code=' . $array[0]["code"] . '">

<div class="product-image"><img src="' . $array[0]["image"]. '"></div>

<div class="product-tile-footer">

    <div class="product-title"><a href="article.php?code=' . $array[0]["code"] . '">' . $array[0]["name"]. '</a></div>

    <div class="product-price">' . $array[0]["price"] . '€ </div>

    <div class="cart-action">
        <input type="number" class="product-quantity" name="quantity" value="1" />
        <input type="submit" value="Add to Cart" class="btnAddAction" />
    </div>

</div>

</form></main>';
    
            



require('process/footer.php');?>
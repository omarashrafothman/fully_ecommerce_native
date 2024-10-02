<?php
// helper functions
//redirect custom  function
function redirect($location)
{
    header("location:$location");
}


function query($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}
function confirm($results)
{
    global $connection;
    if (!$results) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}


function scape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);

}

function fetch_array($result)
{
    return mysqli_fetch_array($result);

}

// ***************************************** FRONT END FUNCTIONS ************************************************


//get categories
function get_categories()
{


    $query = query("SELECT * FROM categories");

    confirm(results: $query);



    while ($row = fetch_array($query)) {

        $categories_list = <<<DELIMETER

             <a href='category.php' class='list-group-item'>{$row['car_tittle']}</a>
        DELIMETER;

        echo $categories_list;
    }


}





// get products


function get_products()
{

    $query = query("SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIMETER

            <div class="col-sm-4 col-lg-4 col-md-4 p-2 productBox">
                    <div class="thumbnail">
                    <div class="imageContainer">    <img src="{$row['product_image']}" alt="{$row['product_tittle']}"></div>
                        <div class="caption">
                            <h4 class="pull-right">&#36;{$row['product_prise']}</h4>
                            <h4><a href="item.php?id={$row['product_id']}">{$row['product_tittle']}</a>
                            </h4>
                            <p>{$row['product_desc']}</p>
                        </div>
                        <div class="ratings ">
                            <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to Cart</a>
                        </div>
                    </div>
                </div>
        DELIMETER;

        echo $product;
    }



}
// ***************************************** BACK END FUNCTIONS ************************************************


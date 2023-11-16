<?php

require '../config/function.php';

$paramResult = checkParamId('index');
if(is_numeric($paramResult))
{
    $indexValue = validate($paramResult);

    if(isset($_SESSION['productItems']) && isset($_SESSION['productItemIds'])){

        unset($_SESSION['productItems'][$indexValue]);
        unset($_SESSION['productItemIds'][$indexValue]);

        redirect('order-create.php', 'Item Removed');

    }else{
        redirect('order-create.php', 'There is no item');
    }
}
else{
    redirect('order-create.php', 'Param not numeric');
}

?>
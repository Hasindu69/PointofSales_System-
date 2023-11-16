<?php

require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $productId = validate($paraResult);

    $product = getById('products', $productId);

    if($product['status'] == 200)
    {
        $response = delete('products', $productId);
        if($response){

            $deleteImage = "../".$product['data']['image'];
            if(file_exists($deleteImage)){
                unlink($deleteImage);
            }

            redirect('products.php', 'Product deleted successfully');
        }
        else{
            redirect('products.php', 'Something went wrong');
        }
    }
    else{
        redirect('products.php', $product['message']);
    }

    //echo $adminId;

}
else{
    redirect('products.php', 'Something went wrong');
}
?>
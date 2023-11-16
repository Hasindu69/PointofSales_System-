<?php

require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $categoryId = validate($paraResult);

    $category = getById('categories', $categoryId);

    if($category['status'] == 200)
    {
        $response = delete('categories', $categoryId);
        if($response){
            redirect('categories.php', 'Category deleted successfully');
        }
        else{
            redirect('categories.php', 'Something went wrong');
        }
    }
    else{
        redirect('categories.php', $category['message']);
    }

    //echo $adminId;

}
else{
    redirect('categories.php', 'Something went wrong');
}
?>
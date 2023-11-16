<?php

require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $customerId = validate($paraResult);

    $customer = getById('customers', $customerId);

    if($customer['status'] == 200)
    {
        $response = delete('customers', $customerId);
        if($response){
            redirect('customers.php', 'Customer deleted successfully');
        }
        else{
            redirect('customers.php', 'Something went wrong');
        }
    }
    else{
        redirect('customers.php', $category['message']);
    }

    //echo $adminId;

}
else{
    redirect('customers.php', 'Something went wrong');
}
?>
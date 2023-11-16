<?php

require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $adminId = validate($paraResult);

    $admin = getById('admins', $adminId);
    if($admin['status'] == 200)
    {
        $adminDeleteRes = delete('admins', $adminId);
        if($adminDeleteRes){
            redirect('admin.php', 'Admin deleted successfully');
        }
        else{
            redirect('admin.php', 'Something went wrong');
        }
    }
    else{
        redirect('admin.php', $admin['message']);
    }

    //echo $adminId;

}
else{
    redirect('admin.php', 'Something went wrong');
}
?>
<?php


if(isset($_POST['insert']))
{
    
    // get values form input text and number
    
    $x1 = $_POST['Tip'];
    $x2 = $_POST['Şehir'];
    $x3 = $_POST['Bölge'];
    $x4 = $_POST['ayrıntılar'];
    // connect to mysql database using mysqli
    require_once 'connection.php';
    
    // mysql query to insert data
    
    $query = "INSERT INTO `emlaklist` (`id`, `Type`, `Location`, `Area`, `ayrıntılar`, `tuvalet_sayısı`, `banyo_sayısı`) VALUES (NULL, '$x1', '$x2', '$x3', '$x4', '', '');";
    
    $result = mysqli_query($connection,$query);
    
    // check if mysql query successful
    
    if($result)
    {
        echo 'Veri başarıyla girildi';
    }
    
    else{
        echo 'Veri girilemedi';
    }
    
    mysqli_close($connection);
}
else{
    echo "başarız gönderme";
}


?>

<?php 

try{

    $db = new PDO('mysql:host=172.30.250.109;dbnam=test', 'swift', '51302751');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Success !";
} catch(PDOException $e){
    echo "Fail";
}


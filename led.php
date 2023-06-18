<?php
require 'template/database.php';

    $insert=$database ->prepare("SELECT * FROM tweet ORDER BY date DESC LIMIT 1");
    $insert->execute();

echo json_encode($insert->fetchAll(PDO::FETCH_ASSOC));

?>
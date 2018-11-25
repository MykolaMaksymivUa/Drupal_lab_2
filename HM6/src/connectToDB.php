<?php
$settings = [
    'host' => 'mariadb',
    'dbname' => 'drupal_lab',
    'user' => 'drupal_lab',
    'password' => 'drupal_lab',
];

try{
    $pdo = new PDO("mysql:host=" .$settings['host'] . ";dbname=" .$settings['dbname'], $settings['user'], $settings['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

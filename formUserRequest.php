<?php
$data = ['response' => 'error'];
if(!empty($_POST)){
$data['response'] = 'success';
$data['user'] = $_POST['nom'].' '.$_POST['prenom'];
}


echo json_encode($data);
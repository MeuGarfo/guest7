<?php
if(method()=='POST'){
    $result=signin();
    if(isset($result['error'])){
        redirect($_ENV['SITE_URL'].'auth/signin?erro');
    }else{
        redirect($_ENV['SITE_URL']);
    }
}else{
    $data=[
        'title'=>"Entrar"
    ];
    view("auth/signin",$data);
}
?>

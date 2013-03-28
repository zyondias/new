<?php

class Inscricao extends AppModel
{
    //colocando em ordem Ascedente com base no nome
    public $order = array('nome' => 'ASC');
    //habiltando cache para query para armazenar o cache do servidoro ultimo resultado obtido de uma query executada assim ele não precisa executar a mesma query
    public $cacheQueries = true;
    //fazendo validações dos campos obrigatorios na base de dados
    public $validate = array( 
         'nome'=>array('rule'=>'notEmpty','message'=>'preencha o seu nome'),
         'email'=>array('rule'=>'notEmpty','message'=>'Preencha o seu E-mail')
        );


}

?>

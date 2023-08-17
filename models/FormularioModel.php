<?php

namespace app\models;

use yii\base\Model;

class FormularioModel extends Model{
    public $nome;
    public $email;
    public $idade;

    public function rules(){
        return[
            // ['nome', 'required'],
            // ['email','required'],
            // ['idade','required']

            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly' =>true]
        ];
    }

    public function attributeLabels()
    {
        return[
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    }
}
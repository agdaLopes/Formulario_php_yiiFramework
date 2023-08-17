<?php

namespace app\controllers;

use app\models\FormularioModel;
use yii\base\Controller;
use Yii;

class FormularioController extends Controller {
    public function actionFormulario() {
        $formularioModel = new FormularioModel;

        $post = Yii::$app->request->post();
        
        return $this->render('formulario', 
            ['model' => $formularioModel]); // Chamar o método render corretamente
    }
}


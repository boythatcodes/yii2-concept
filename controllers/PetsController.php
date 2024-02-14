<?php

namespace app\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use yii\web\Response;

class PetsController extends Controller
{
    public function actionGet()
    {
        $user = Yii::$app->user->identity;
        if(empty($user)){
            return $this->asJson(["result"=>0]);
        }

        $pets = (new Query())
            ->select(['id', "name", "status", "location", "imageFile"])
            ->from('pets')
            ->where(['id' => json_decode($user["pets"])])
            ->all();

        return $this->asJson(["result"=>1, 'pets' => $pets]);
    }

    public function actionUpdate()
    {
        $request = Yii::$app->request;
        if($request->isPost){
            $jsonData = Yii::$app->request->post("pets");
            $user = Yii::$app->user->identity;
            if(empty($user)){
                return $this->asJson(["result"=>0]);
            }
            if(empty($jsonData)){
                $jsonData = "[]";
            }else{
                $jsonData = json_encode(array_map('intval', $jsonData));
            }
            $user->pets = $jsonData;
            $user->save();
            return $this->asJson(["result"=>1]);
        }
        return $this->asJson(["result"=>0]);
    }


    public function actionSearch()
    {
        $query_param = Yii::$app->request->get("query");

        if(empty($query_param)){
            return $this->asJson(["result"=>0]);
        }

        $pets = (new Query())
            ->select(['id', "name", "status", "location", "imageFile"])
            ->from('pets')
            ->where(['like', 'name', $query_param])
            ->limit(3)
            ->all();

        return $this->asJson(["result"=>1, 'pets' => $pets]);
    }
}
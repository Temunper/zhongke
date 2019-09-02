<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/24
 * Time: 17:56
 */

namespace app\modules\frontend\controllers;


use app\models\News;
use app\models\Products;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class DataController extends Controller
{
    public $layout = false;

    //首页
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    //企业介绍
    public function actionCompany()
    {
        $this->layout = false;
        return $this->render('contact');
    }

    //产品介绍
    public function actionProduct()
    {
        $model = Products::find()->where(['status' => Products::STATUS_ACTIVE])->limit(3)->select('*')->all();
//        var_dump($model);die;
        $this->layout = false;
        return $this->render('cpjs', ['model' => $model]);
    }

    //美容洗护体验馆
    public function actionTyg()
    {
        $this->layout = false;
        return $this->render('tyg');
    }

    //招商加盟
    public function actionJoin()
    {
        $this->layout = false;
        return $this->render('join');
    }

    //新闻
    public function actionNews()
    {
        //2016
        $news_2016 = News::find()->where(['status' => News::STATUS_USING])->andWhere(['=', 'left(`year`,  4)', 2016]);
        $count = $news_2016->count();
        $pages_2016 = new Pagination(['totalCount' => $count]);
        $pages_2016->setPageSize(4);
        $model_2016 = $news_2016->offset($pages_2016->offset)->limit($pages_2016->limit)->all();

        //2017
        $news_2017 = News::find()->where(['status' => News::STATUS_USING])->andWhere(['=', 'left(`year`,  4)', 2017]);
        $count = $news_2017->count();
        $pages_2017 = new Pagination(['totalCount' => $count]);
        $pages_2017->setPageSize(4);
        $model_2017 = $news_2017->offset($pages_2017->offset)->limit($pages_2017->limit)->all();

        //2018
        $news_2018 = News::find()->where(['status' => News::STATUS_USING])->andWhere(['=', 'left(`year`,  4)', 2018]);
        $count = $news_2018->count();
        $pages_2018 = new Pagination(['totalCount' => $count]);
        $pages_2018->setPageSize(4);
        $model_2018 = $news_2018->offset($pages_2018->offset)->limit($pages_2018->limit)->all();

        //2019
        $news_2019 = News::find()->where(['status' => News::STATUS_USING])->andWhere(['=', 'left(`year`,  4)', 2019]);
        $count = $news_2019->count();
        $pages_2019 = new Pagination(['totalCount' => $count]);
        $pages_2019->setPageSize(4);
        $model_2019 = $news_2019->offset($pages_2019->offset)->limit($pages_2019->limit)->all();

        $this->layout = false;
        return $this->render('news', [
            'model_2016' => $model_2016, 'pages_2016' => $pages_2016,
            'model_2017' => $model_2017, 'pages_2017' => $pages_2017,
            'model_2018' => $model_2018, 'pages_2018' => $pages_2018,
            'model_2019' => $model_2019, 'pages_2019' => $pages_2019,
        ]);
    }

    //联系我们
    public function actionAbout()
    {
        $this->layout = false;
        return $this->render('about');
    }

    public function actionMap()
    {
        $this->layout = false;
        return $this->render('map');
    }

    //新闻内容
    public function actionNewscontent()
    {
//        var_dump(\Yii::$app->request->get('id'));die;
        $model = News::findOne(['id' => Yii::$app->request->get('id'), 'status' => News::STATUS_USING]);
        $this->layout = false;
        return $this->render('news01', ['model' => $model, 'msg' => '']);
    }

//    上下篇文章
    public function actionChange()
    {
        $news = News::findOne(['id' => Yii::$app->request->get('id'), 'status' => News::STATUS_USING]);
        Yii::$app->request->get('next') == 1 ? $option = '>' : $option = '<';
        $model = News::find()
            ->where(['year' => $news->year
                , 'status' => News::STATUS_USING])
            ->andWhere([$option, 'id', Yii::$app->request->get('id')])
            ->one();
        if ($model) {
            return $this->render('news01', ['model' => $model, 'msg' => '']);
        } else {
            $model = $news;
            $option == ">" ? $msg = '已经是最后一篇' : $msg = '已经是最前一篇';
            return $this->render('news01', ['model' => $model, 'msg' => $msg]);
        }
    }
}
<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Dashboard;
use backend\models\Add;
/**
 * DashboardController implements the CRUD actions for Testimonials model.
 */
class DashboardController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    /**
     * Lists all Testimonials models.
     * @return mixed
     */
    public function actionIndex()
    {
		if (Yii::$app->user->isGuest)		
		{		
			return $this->redirect(['site/login']);		
        }
        $dashboard = $this->loadModel();
        $add = new Add();
        return $this->render('index',[
            "current_joined_user"   => $dashboard->getOnlyCurrentMonthUser(),
            "total_user_this_month" => $dashboard->totalUserForCurrentMonth(),
            "get_lestest_adds"      => $add->getRecentlyUploadedAdds(),
            "get_most_viewed_adds"  => $add->getMostViewedAddsForDashboard(),
            "get_rank_user_posts"   => $add->heighestNumberAddsInDashBoard(),
        ]);
    }

    /**
     * get site overview data
     */

    public function actionOverview()
    {
        return $this->loadModel()->HomePageOverviewInJSON();
    }

    /**
     * different user data count for pie chart
     */
    public function actionGetusercount()
    {
        return $this->loadModel()->totaluserTypeInJSON();
    }

    /**
     * user status for pie chart
     */
    public function actionGetuserstatus()
    {
        return $this->loadModel()->getUserTypeinJSON();
    }
    
    /**
     * test action for testing
     */
    public function actionTest()
    {
        $model = new Add();

        echo "<pre>";
        print_r($model->heighestNumberAddsInDashBoard());
        echo "</pre>";


    }


    /**
     * load the required model
     */
    public function loadModel()
    {
        return new Dashboard();
    }


}
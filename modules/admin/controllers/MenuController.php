<?php

namespace app\modules\admin\controllers;

use app\models\Page;
use JetBrains\PhpStorm\ArrayShape;
use Throwable;
use Yii;
use app\models\Menu;
use app\modules\admin\models\MenuSearch;
use yii\db\Query;
use yii\db\StaleObjectException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
{
    #[ArrayShape(['access' => "array", 'verbs' => "array"])] public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'page-search',
                            'index',
                            'view',
                            'sortable',
                            'save-sort',
                            'create',
                            'update',
                            'delete',
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionSortable($lang)
    {
        $menus = Menu::find()->where(['language' => $lang])->orderBy(['position' => 'asc'])->all();
        $items = [];

        foreach ($menus as $key => $menu){
            $items[$key]['content'] = $menu->name;
            $items[$key]['disabled'] = false;
            $items[$key]['options']['id'] = $menu->id;
        }

        return $this->render('sortable', [
            'items' => $items,
            'lang' => $lang,
        ]);
    }

    public function actionSaveSort()
    {
        if(Yii::$app->request->post() && Yii::$app->request->isAjax)
        {
            $datas = Yii::$app->request->post('sort');
            foreach ($datas as $data)
            {
                $menu = Menu::findOne($data['id']);
                $menu->position = $data['position'];
                $menu->save();
            }
        }
    }

    #[ArrayShape(['results' => "mixed|string[]"])] public function actionPageSearch($q = null, $id = null): array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $out = ['results' => ['id' => '', 'text' => '']];

        if (!is_null($q)) {
            $query = new Query;
            $query->select('slug AS id, title AS text')
                ->from('page')
                ->where(['like', 'title', $q])
                ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        }
        return $out;
    }

    /**
     * Lists all Menu models.
     * @return string
     */
    public function actionIndex(): string
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id): string
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return Response|string
     */
    public function actionCreate(): Response|string
    {
        $model = new Menu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id): mixed
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

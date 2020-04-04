<?php

class ItemController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','admin','delete','upload', 'create', 'deleteImage'),
				'users'=>array('@'),
			),
			array('allow',
                'actions'=>array('detail'),
                'users'=>array('*'),
            ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     * @throws CHttpException
     */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ItemForm();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ItemForm']))
		{
			$model->attributes=$_POST['ItemForm'];
			if($model->save())
				$this->redirect(array('upload','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     * @throws CHttpException
     */
	public function actionUpdate($id)
	{
		$item=$this->loadModel($id);
		$model = new ItemForm();
		$model->attributes = $item->attributes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ItemForm']))
		{
			$model->attributes=$_POST['ItemForm'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     * @throws CDbException
     * @throws CHttpException
     */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ItemCustom');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ItemCustom('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ItemCustom']))
			$model->attributes=$_GET['ItemCustom'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ItemCustom the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ItemCustom::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ItemCustom $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-custom-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    /**
     * @param $id integer id of the item
     * @throws CHttpException
     */
	public function actionUpload($id)
    {
        $item = $this->loadModel($id);
        if ($item->created_by != Yii::app()->user->getName())
            throw new CHttpException(403, 'Access denied !!!');
	    $model = new ImageUploadForm();
	    $model->item_id = $id;
	    if (Yii::app()->request->isPostRequest && Yii::app()->request->isAjaxRequest)
        {
            $model->image = $_FILES['file_data'];
            $model->item_id = $id;
            if ($model->save())
            {
                echo CJSON::encode(array(
                    'filelink' => Yii::app()->baseUrl.'/'.$model->location,
                    'filename' => $model->filename
                ));
            }
        }
	    else
        {
            //load images for this item
            $images = ImagesCustom::model()->findAllByItemId($id);
            $this->render('upload',array(
                'model'=>$model,
                'images'=>$images
            ));
        }
    }

    /**
     * @param $id int id of the image
     * @throws CDbException
     */
    public function actionDeleteImage($id) {
	    if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
	        $img = ImagesCustom::model()->findByPk($_POST['key']);
	        if (!empty($img)) {
	            unlink($img->location);
	            $img->delete();
	            echo '{}';
            }
        }
    }

    /**
     * @param $id int id of the item
     * @throws CHttpException
     */
    public function actionDetail($id) {
        $this->layout='//layouts/shop';

        $model = $this->loadModel($id);
        $this->render('detail',array(
            'model'=>$model
        ));
    }
}

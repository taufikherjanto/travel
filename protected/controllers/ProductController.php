<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts_jalanhalal/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'datatravel', 'databusiness', 'datadauroh', 'dataumroh', 'test'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	// public function actionView($id)
	// {
	// 	$this->render('view',array(
	// 		'model'=>$this->loadModel($id),
	// 	));
	// }

	// /**
	//  * Creates a new model.
	//  * If creation is successful, the browser will be redirected to the 'view' page.
	//  */
	// public function actionCreate()
	// {
	// 	$model=new Travel;

	// 	// Uncomment the following line if AJAX validation is needed
	// 	// $this->performAjaxValidation($model);

	// 	if(isset($_POST['Travel']))
	// 	{
	// 		$model->attributes=$_POST['Travel'];
	// 		if($model->save())
	// 			$this->redirect(array('view','id'=>$model->id));
	// 	}

	// 	$this->render('create',array(
	// 		'model'=>$model,
	// 	));
	// }

	// /**
	//  * Updates a particular model.
	//  * If update is successful, the browser will be redirected to the 'view' page.
	//  * @param integer $id the ID of the model to be updated
	//  */
	// public function actionUpdate($id)
	// {
	// 	$model=$this->loadModel($id);

	// 	// Uncomment the following line if AJAX validation is needed
	// 	// $this->performAjaxValidation($model);

	// 	if(isset($_POST['Travel']))
	// 	{
	// 		$model->attributes=$_POST['Travel'];
	// 		if($model->save())
	// 			$this->redirect(array('view','id'=>$model->id));
	// 	}

	// 	$this->render('update',array(
	// 		'model'=>$model,
	// 	));
	// }

	// /**
	//  * Deletes a particular model.
	//  * If deletion is successful, the browser will be redirected to the 'admin' page.
	//  * @param integer $id the ID of the model to be deleted
	//  */
	// public function actionDelete($id)
	// {
	// 	$this->loadModel($id)->delete();

	// 	// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
	// 	if(!isset($_GET['ajax']))
	// 		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	// }

	// /**
	//  * Lists all models.
	//  */

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Travel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionTest()
	{
		// $model =new Travel('search');
	 //    if(isset($_GET['Travel']))
	 //        $model->attributes =$_GET['Travel'];

	 //    var_dump($model);
	 //    foreach($model as $row) {
	 //    	echo $row->judul;
	 //    }
		$this->layout=false;
		$criteria = new CDbCriteria(array(
			'order'=>'id'
		));

		if(isset($_GET['id_kategori']))
			$criteria->compare('id_kategori', $_GET['id_kategori']);
		$count = Travel::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);
		$model = Travel::model()->findAll($criteria);
		var_dump($model);
	}

	public function actionDatatravel()
	{
		$this->layout=false;
		$criteria = new CDbCriteria(array(
			'order'=>'id'
		));
		if(isset($_GET['id_region']))
			$criteria->compare('id_region', $_GET['id_region']);

		if(isset($_GET['id_negara']))
			$criteria->compare('id_negara', $_GET['id_negara']);

		if(isset($_GET['tanggal']))
			$criteria->compare('tanggal', $_GET['tanggal']);

		if(isset($_GET['tema']))
			$criteria->compare('tema', $_GET['tema']);

		$count = Travel::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);
		$model = Travel::model()->findAll($criteria);
		$this->renderPartial('datatravel', array(
			'model'=>$model,
			'pages'=>$pages
		), false, true);
	}

	public function actionDatabusiness()
	{
		$this->layout=false;
		$criteria = new CDbCriteria(array(
			'order'=>'id'
		));
		$count = Business::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);
		$model = Business::model()->findAll($criteria);
		$this->renderPartial('databusiness', array(
			'model'=>$model,
			'pages'=>$pages
		), false, true);
	}

	public function actionDatadauroh()
	{
		$this->layout=false;
		$criteria = new CDbCriteria(array(
			'order'=>'id'
		));
		$count = Dauroh::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);
		$model = Dauroh::model()->findAll($criteria);
		$this->renderPartial('datadauroh', array(
			'model'=>$model,
			'pages'=>$pages
		), false, true);
	}

	public function actionDataumroh()
	{
		$this->layout=false;
		$criteria = new CDbCriteria(array(
			'order'=>'id'
		));
		$count = Umroh::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);
		$model = Umroh::model()->findAll($criteria);
		$this->renderPartial('dataumroh', array(
			'model'=>$model,
			'pages'=>$pages
		), false, true);
	}

	/**
	 * Manages all models.
	 */
	// public function actionAdmin()
	// {
	// 	$model=new Travel('search');
	// 	$model->unsetAttributes();  // clear any default values
	// 	if(isset($_GET['Travel']))
	// 		$model->attributes=$_GET['Travel'];

	// 	$this->render('admin',array(
	// 		'model'=>$model,
	// 	));
	// }

	// *
	//  * Returns the data model based on the primary key given in the GET variable.
	//  * If the data model is not found, an HTTP exception will be raised.
	//  * @param integer $id the ID of the model to be loaded
	//  * @return Travel the loaded model
	//  * @throws CHttpException
	 
	// public function loadModel($id)
	// {
	// 	$model=Travel::model()->findByPk($id);
	// 	if($model===null)
	// 		throw new CHttpException(404,'The requested page does not exist.');
	// 	return $model;
	// }

	// /**
	//  * Performs the AJAX validation.
	//  * @param Travel $model the model to be validated
	//  */
	// protected function performAjaxValidation($model)
	// {
	// 	if(isset($_POST['ajax']) && $_POST['ajax']==='travel-form')
	// 	{
	// 		echo CActiveForm::validate($model);
	// 		Yii::app()->end();
	// 	}
	// }
}

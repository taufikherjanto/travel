<?php

class UmrohController extends Controller
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

		$level = User::model()->findAllByAttributes(array('role'=>1));
				
				foreach ($level as $key => $value) {
					$user_name[] = $value->username;
				}
		$level2 = User::model()->findAllByAttributes(array('role'=>2));
				
				foreach ($level2 as $key => $value2) {
					$user_name2[] = $value2->username;
				}

		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','view', 'detail','create','update','delete', 'admin'),
				'users'=>$user_name,
			),
			array('allow', // allow user to perform 'register' actions
				'actions'=>array('index','view', 'detail'),
				'users'=>$user_name2,
			),
			array('allow', // allow user to perform 'register' actions
				'actions'=>array('index','view', 'detail'),
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
	 */
	public function actionView($id)
	{
		$gallery = new UmrohGallery;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'gallery'=>$gallery->findAllByAttributes(array('gambar_id'=>$id))
		));
	}

	public function actionDetail($title_slug)
	{
		$lihat = Umroh::model()->findAllByAttributes(array('title_slug'=>$title_slug));
		$this->render('detail',array('lihat'=>$lihat));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Umroh;
		$model_gallery=array();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Umroh']))
		{
			$model->attributes=$_POST['Umroh'];
			$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Umroh']['judul']));
			// get image uploaded
			$uploadedFile=CUploadedFile::getInstance($model, 'gambar');
			$model->gambar=$uploadedFile;
			$model->id_kategori = 1;
			date_default_timezone_set('Asia/Jakarta');
			$model->tanggal_post=date("Y-m-d");
			$model->status_publish=1;
			$model->quota_active = $_POST['Umroh']['quota'];
			$model->viewer=0;
			if($model->save()) {
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/umroh/'.$uploadedFile);

				/*
				 * Multi upload
				 * File travel gallery
				 */
				$file_name=$_FILES['file']['name'];
				$file_tmp=$_FILES['file']['tmp_name'];
				$gambar_id = Yii::app()->db->getLastInsertId();

				for ($i = 0; $i < count($file_name); $i++) {
					if ($file_name[$i] != "") {
						$model_gallery[$i]=new UmrohGallery;
						$model_gallery[$i]->gambar_id=$gambar_id;
						$model_gallery[$i]->gambar=$file_name[$i];
						if ($model_gallery[$i]->save())
							move_uploaded_file($file_tmp[$i], "./images/umroh_gallery/".$file_name[$i]);
					}
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		$gambar_lama = $model->gambar;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Umroh']))
		{
			$model->attributes=$_POST['Umroh'];
			$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Umroh']['judul']));
			$uploadedFile=CUploadedFile::getInstance($model, 'gambar');
			if ($uploadedFile != null){
				$model->gambar=$uploadedFile;
			}
			else {
				$model->gambar=$gambar_lama;
			}
			if($model->save()) {

				if ($uploadedFile){
					@unlink(Yii::app()->basePath.'/../images/umroh/'.$gambar_lama);
					$uploadedFile->saveAs(Yii::app()->basePath.'/../images/umroh/'.$uploadedFile);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
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
		//$dataProvider=new CActiveDataProvider('Umroh');
		$model=new Umroh('search');
		$model->unsetAttributes(); //clear default value
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));
		if (isset($_GET['Umroh']))
			$model->attributes=$_GET['Umroh'];
		$this->render('index',array(
			//'dataProvider'=>$dataProvider,
			'dataProvider'=>$model->search(),
			'model'=>$model
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Umroh('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Umroh']))
			$model->attributes=$_GET['Umroh'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Umroh the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Umroh::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModelBySlug($title_slug)
	{
		$model=Umroh::model()->find('title_slug=:title_slug', array(':title_slug'=>$title_slug));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Umroh $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='umroh-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

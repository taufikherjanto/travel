<?php

class TravelController extends Controller
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
				'actions'=>array('index','view', 'detail'),
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
	public function actionView($id)
	{
		$gallery = new TravelGallery;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'gallery'=>$gallery->findAllByAttributes(array('id_travel'=>$id))
		));
	}

	public function actionDetail($title_slug)
	{
		$model=$this->loadModelBySlug($title_slug);
		$gallery=new TravelGallery;
		$this->render('detail',array(
			'model'=>$model,
			'gallery'=>$gallery->findAllByAttributes(array('id_travel'=>$model->id))
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Travel;
		$model_gallery=array();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Travel']))
		{
			$model->attributes=$_POST['Travel'];
			$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Travel']['judul']));
			// get image uploaded
			$uploadedFile=CUploadedFile::getInstance($model, 'gambar');
			$model->gambar=$uploadedFile;
			$model->id_kategori = 4;
			date_default_timezone_set('Asia/Jakarta');
			$model->tanggal_post=date("Y-m-d");
			$model->status_publish=1;
			$model->viewer=0;

			if($model->save()) {

				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/travel/'.$uploadedFile);

				/*
				 * Multi upload
				 * File travel gallery
				 */
				$file_name=$_FILES['file']['name'];
				$file_tmp=$_FILES['file']['tmp_name'];
				$id_travel = Yii::app()->db->getLastInsertId();

				for ($i = 0; $i < count($file_name); $i++) {
					if ($file_name[$i] != "") {
						$model_gallery[$i]=new TravelGallery;
						$model_gallery[$i]->id_travel=$id_travel;
						$model_gallery[$i]->gambar=$file_name[$i];
						if ($model_gallery[$i]->save())
							move_uploaded_file($file_tmp[$i], "./images/travel_gallery/".$file_name[$i]);
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$gambar_lama = $model->gambar;

		if(isset($_POST['Travel']))
		{
			$model->attributes=$_POST['Travel'];
			$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Travel']['judul']));
			$uploadedFile=CUploadedFile::getInstance($model, 'gambar');
			if ($uploadedFile != null){
				$model->gambar=$uploadedFile;
			}
			else {
				$model->gambar=$gambar_lama;
			}
			if($model->save()) {
				
				if ($uploadedFile){
					@unlink(Yii::app()->basePath.'/../images/travel/'.$gambar_lama);
					$uploadedFile->saveAs(Yii::app()->basePath.'/../images/travel/'.$uploadedFile);
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
		//$dataProvider=new CActiveDataProvider('Travel');
		$model=new Travel('search');
		$model->unsetAttributes(); //clear default value
		if (isset($_GET['Travel']))
			$model->attributes=$_GET['Travel'];
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
		$model=new Travel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Travel']))
			$model->attributes=$_GET['Travel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Travel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Travel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModelBySlug($title_slug)
	{
		$model=Travel::model()->find('title_slug=:title_slug', array(':title_slug'=>$title_slug));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Travel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='travel-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

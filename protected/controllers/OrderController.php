<?php

class OrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column2';

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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'detail', 'waiting', 'dp_lunas', 'waiting_pelunasan_dp', 'done'),
				'users'=>array('@'),
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
		$model=new OrderMaster;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrderMaster']))
		{
			$model->attributes=$_POST['OrderMaster'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['OrderMaster']))
		{
			$model->attributes=$_POST['OrderMaster'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('OrderMaster');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$criteria = new CDbCriteria(array(
			'order'=>'id DESC'
		));			// Tampilkan data order berdasarkan id_user pengguna

		$count = OrderMaster::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);

		$model = OrderMaster::model()->findAll($criteria);

		$this->render('admin',array(
			'model'=>$model,
			'pages'=>$pages,
		));
	}

	public function actionWaiting()
	{
		$criteria = new CDbCriteria(array(
			'order'=>'id DESC'
		));

		//where status_payment=1 (DP) OR status_payment=2 (Cash)
		$criteria->addInCondition('status_payment', array(1, 2), true);
		//where status_konfirmasi=0, konfirmasi belum diverifikasi
		$criteria->compare('status_konfirmasi', 0, true);

		$count = OrderMaster::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);

		$model = OrderMaster::model()->findAll($criteria);

		$this->render('waiting',array(
			'model'=>$model,
			'pages'=>$pages,
		));
	}

	public function actionDp_lunas()
	{
		$criteria = new CDbCriteria(array(
			'order'=>'id DESC'
		));

		//id_type_payment=1, tipe pembayaran DP
		$criteria->compare('id_type_payment', 1, true);
		//status_payment=1, bayar dp
		$criteria->compare('status_payment', 1, true);
		//status_konfirmasi=1, konfirmasi DP telah diverifikasi
		$criteria->compare('status_konfirmasi', 1, true);

		$count = OrderMaster::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);

		$model = OrderMaster::model()->findAll($criteria);

		$this->render('dp_lunas',array(
			'model'=>$model,
			'pages'=>$pages,
		));
	}

	public function actionWaiting_pelunasan_dp() {
		$criteria = new CDbCriteria(array(
			'order'=>'id DESC'
		));

		//id_type_payment=1, tipe pembayaran DP
		$criteria->compare('id_type_payment', 1, true);
		//status_payment=2, bayar cash (pelunasan dp)
		$criteria->compare('status_payment', 2, true);
		//status_konfirmasi=1, konfirmasi telah diverifikasi
		$criteria->compare('status_konfirmasi', 1, true);

		$count = OrderMaster::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);

		$model = OrderMaster::model()->findAll($criteria);

		$this->render('waiting_pelunasan_dp',array(
			'model'=>$model,
			'pages'=>$pages,
		));
	}

	public function actionDone()
	{
		$criteria = new CDbCriteria(array(
			'order'=>'id DESC'
		));

		//where status_konfirmasi=2, Lunas
		$criteria->compare('status_konfirmasi', 2, true);

		$count = OrderMaster::model()->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 2;
		$pages->applyLimit($criteria);

		$model = OrderMaster::model()->findAll($criteria);

		$this->render('done',array(
			'model'=>$model,
			'pages'=>$pages,
		));
	}

	public function actionDetail($id)
	{
		$data = $this->loadModel($id);
		$id_travel = $data->id_travel;
		$kategori = $data->id_kategori_travel;
		$bukti_pembayaran = Transaksi::model()->findAllByAttributes(array('id_om'=>$data->id));

		if ($kategori == 1) {
			$jenis = 'umroh';
			$produk = Umroh::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 2) {
			$jenis = 'dauroh';
			$produk = Dauroh::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 3) {
			$jenis = 'business';
			$produk = Business::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 4) {
			$jenis = 'travel';
			$produk = Travel::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}

		if (isset($_POST['OrderMaster'])) {
			$data->attributes=$_POST['OrderMaster'];
			var_dump($_POST['OrderMaster']);
			$data->save();
		}

		$this->render('detail',array('data'=>$data, 'jenis'=>$jenis, 'produk'=>$produk, 'bukti_pembayaran'=>$bukti_pembayaran));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return OrderMaster the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=OrderMaster::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param OrderMaster $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-master-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

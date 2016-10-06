<?php

class TransaksiController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'order', 'thanks', 'confirm', 'admin', 'finish'),
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
		$model=new OrderMaster('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OrderMaster']))
			$model->attributes=$_GET['OrderMaster'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Process order booking travel
	 *
	 */
	public function actionOrder($id = NULL, $kategori = NULL) {
		
		if ($id == NULL) throw new CHttpException(404,'The requested page does not exist.');
		if ($kategori == NULL) throw new CHttpException(404,'The requested page does not exist.');

		// condition kategori untuk mengambil tabel berdasarkan id_kategori
		if ($kategori == 1) {
			$jenis = 'umroh';
			$produk = Umroh::model()->findByAttributes(array('id'=>$id,'id_kategori'=>$kategori));
		}
		else if ($kategori == 2) {
			$jenis = 'dauroh';
			$produk = Dauroh::model()->findByAttributes(array('id'=>$id,'id_kategori'=>$kategori));
		}
		else if ($kategori == 3) {
			$jenis = 'business';
			$produk = Business::model()->findByAttributes(array('id'=>$id,'id_kategori'=>$kategori));
		}
		else if ($kategori == 4) {
			$jenis = 'travel';
			$produk = Travel::model()->findByAttributes(array('id'=>$id,'id_kategori'=>$kategori));
		}
		else {
			throw new CHttpException(404,'The requested page does not exist.');
		}

		// jika record product tidak ada, redirect ke 404
		if ($produk == null) throw new CHttpException(404,'The requested page does not exist.');

		$model=new OrderMaster;
		$user_ref=new UserRef;
		$user = User::model()->findByPk(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model, $user_ref);

		if(isset($_POST['OrderMaster'], $_POST['UserRef'])) {
			$model->attributes=$_POST['OrderMaster'];
			$user_ref->attributes=$_POST['UserRef'];

			$model->id_user=Yii::app()->user->id;
			$model->id_travel=$produk->id;
			$model->id_kategori_travel=$produk->id_kategori;
			$model->payment_code=rand(111,999);
			if ($model->id_type_payment == 1) {
				$model->payment=$produk->harga * 0.3;
			}
			else {
				$model->payment=$produk->harga;
			}
			$model->status_payment=0; // belum bayar
			$model->verifikasi_code=Yii::app()->getSecurityManager()->generateRandomString(10);

			date_default_timezone_set('Asia/Jakarta');
			$model->created_date=date('Y-m-d H:i:s');

			$user_ref->id_user=Yii::app()->user->id;
			$user_ref->created_date=date('Y-m-d H:i:s');

			$valid=$model->validate(array('id_type_payment'));
        	$valid=$user_ref->validate(array('nama_ref', 'tel_ref', 'alamat_ref')) && $valid;

        	if ($valid) {
        		if ($user_ref->save()) {
        			$model->id_user_ref=$user_ref->id;
        			if ($model->save()) {
        				// arahkan ke halaman petunjuk pembayaran (thanks)
        				$this->redirect(array('thanks', 'id'=>$model->id));
        			}
        		}
        	}
		}

		$this->render('order',array(
			'jenis'=>$jenis,
			'produk'=>$produk,
			'model'=>$model,
			'user_ref'=>$user_ref,
			'user'=>$user
		));
	}

	/**
	 * Thanks page after
	 * input order
	 *
	 */
	public function actionThanks($id)
	{	
		$data = $this->loadModel($id);
		$id_travel = $data->id_travel;
		$kategori = $data->id_kategori_travel;

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
		$this->render('thanks',array('data'=>$data, 'jenis'=>$jenis, 'produk'=>$produk));
	}

	public function actionConfirm($id)
	{
		$master=$this->loadModel($id); // Temukan id order_master, jika data order_master tidak ada redirect 404
		$model=new Transaksi;
		$model->scenario='create';

		if (isset($_POST['Transaksi'])) {
			$model->attributes=$_POST['Transaksi'];
			$uploadedFile=CUploadedFile::getInstance($model,'gambar');
			$model->gambar=$uploadedFile;
			$model->id_om=$id;

			date_default_timezone_set('Asia/Jakarta');
    		$model->updated=date("Y-m-d H:i:s");

			if ($model->save()) {
				//Update order_master
				$master->status_payment = 1;
				$master->last_update = $model->updated;
				$master->update();

				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/bukti/'.$uploadedFile);
            
				Yii::app()->user->setFlash('berhasil','Konfirmasi telah terkirim');
				$this->redirect(array('finish'));
			}
		}

		$this->render('confirm', array('model'=>$model));
	}

	/**
	 * Finish page, setelah konfirmasi pembayaran selesai
	 *
	 */
	public function actionFinish(){
		$this->render('finish');
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

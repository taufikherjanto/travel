<?php 

class UmrohController extends MyController
{


	//********************************************
	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete', 
		);
	}

	public function accessRules()
	{	
		$level = User::model()->findAllByAttributes(array('role'=>2));
		
		foreach ($level as $key => $value) {
			$user_name[] = $value->username;
		}


		//DISNI ACTION RULESNYA
		return array(
			array('allow', 
				'actions'=>array('create','list_umroh','umroh_update','delete','detail','index','umroh_status_nonaktif','umroh_aktif'),
				'users'=>$user_name,
			),
			array('allow', // allow user to perform 'register' actions
				'actions'=>array('create','list_umroh','umroh_update','delete','detail','index','umroh_status_nonaktif','umroh_aktif'),
				'users'=>array('*'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);


	}




	//*********************************************
	public function actionIndex()
	{	
		$criteria = new CDbCriteria(array('order'=>'tanggal desc'));
        
		$jumlah = Artikel::model()->count($criteria,array('order'=>'id asc')); 

		$halaman = new CPagination($jumlah); 

		$halaman->pageSize=3; 

		$halaman->applyLimit($criteria);


		$row = Artikel::model()->findAll($criteria,array('order'=>'id asc'));
		$this->render('index',array('row'=>$row,'halaman'=>$halaman));

	}

	public function actionDetail($title_slug)
	{
		$results = Umroh::model()->findAllByAttributes(array("title_slug"=>$title_slug));
		


		/*----------Untuk nambah rate----------------*/ 
		/* ------------------------------------------*/ 
		foreach ($results as $key => $value) {
			
			$v_id = $value["id"];
			$qty = 1;
			Yii::app()->db->createCommand()
		    ->update("umroh", 
		        array(
		            "viewer"=>new CDbExpression("viewer + $qty"),
		        ),
		        "id=:id",
		        array(":id"=>$v_id)
		    );
		}
		/* ---------------------------------------- */
		/* -----------------------------------------*/

		$this->render('detail', array('results'=>$results));
	}

 public function actionList_umroh()
{
$criteria = new CDbCriteria();

$jumlah = Umroh::model()->count($criteria); 

$halaman = new CPagination($jumlah); 

$halaman->pageSize=20; 

$halaman->applyLimit($criteria);

$count = Umroh::model()->findAll();

	  $row = Umroh::model()->findAll($criteria,array('order'=>'id asc'));
	  $this->render("list_umroh", array('halaman'=>$halaman,'ax'=>$row, 'total_lokasi'=>$count));
}
	

	public function actionCreate()
	{
		$model=new Umroh;
		if(isset($_POST['Umroh']))
		{
			$model->attributes=$_POST['Umroh'];
			$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Umroh']['judul']));
			$uploadedFile=CUploadedFile::getInstance($model,'gambar');
			//$model->bid = Yii::app()->bidang->id;
			$model->gambar = $uploadedFile;
			$model->id_kategori = 1;
			date_default_timezone_set('Asia/Jakarta');
			$model->tanggal_post = date("Y-m-d");
			$model->status_publish = 1;	
			$model->quota_active = $_POST['Umroh']['quota'];

			if($model->save()) {

			$uploadedFile->saveAs(Yii::app()->basePath.'/../images/umroh/'.$uploadedFile);
                
            /*------------MULTI UPLOAD---------------------*/
			$file_name = $_FILES["file"]["name"];
			$file_tmp = $_FILES["file"]["tmp_name"];

			$image_id = Yii::app()->db->getLastInsertId();

			for ($i=0; $i < count($file_name); $i++) { 
				if ($file_name[$i] != "") {
					$sql = "INSERT INTO umroh_gallery(gambar,gambar_id) values (:gambar, :gambar_id)";
					$parameters = array( ":gambar" => $file_name[$i] , ":gambar_id" => $image_id);
					Yii::app()->db->createCommand($sql)->execute($parameters);

					move_uploaded_file($file_tmp[$i], "./images/umroh_gallery/".$file_name[$i]);
				}
			}
			/*---------------*/
                
                
				Yii::app()->user->setFlash('berhasil','Data produk telah ditambah');
				$this->redirect(array('umroh/create'));
			}
		}

		$this->render('create',array('model'=>$model));
	}



		public function actionDelete($id)
    {
        if (Umroh::model()->deleteByPk($id)){
            Yii::app()->user->setFlash('Berhasil','Data berhasil di hapus');
            $this->redirect(array('umroh/list_umroh'));
        }
        else {
            Yii::app()->user->setFlash('gagal','Data gagal di hapus. ID#'.$id.'tidak ditemukan');
            $this->redirect(array('umroh/list_umroh'));
        }
       
    }


    public function actionUmroh_update($id)
    		{
			    $model = Umroh::model()->findByPk($id);

					if(isset($_POST['Umroh']))
					{

						$uploadedFile=CUploadedFile::getInstance($model,'gambar');

						$model->attributes = $_POST['Umroh'];
						$model->title_slug=strtolower(str_replace(" ", "-", $_POST['Umroh']['judul']));
						if($model->save()) {
							if (isset($uploadedFile)) {
	                            if($uploadedFile->name != "")  // check if uploaded file is set or not
    			                {
    			                    $model->gambar = $uploadedFile->name;
    			                    $uploadedFile->saveAs(Yii::app()->basePath.'/../images/umroh/'.$model->gambar);
                                    $model->save();
                                    Yii::app()->user->setFlash('Berhasil','Data berhasil di ubah');
    			                }
							}

							$this->redirect(array('umroh/list_umroh'));
						}else{

						}
					}

					$this->render('umroh_update',array(
						'dom'=>$model,
					));
           }

            public function actionUmroh_status_nonaktif($id)
		    {
		       $model = Umroh::model()->findByPk($id);
		       $model->status_publish = 0;
		       $model->save();
		       $this->redirect(array('umroh/list_umroh'));
		       
		    }

		    public function actionUmroh_aktif($id)
		    {
		       $model = Umroh::model()->findByPk($id);
		       $model->status_publish = 1;
		       $model->save();
		       $this->redirect(array('umroh/list_umroh'));
		       
		    }
	


}

?>
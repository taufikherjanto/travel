<?php

/**
 * This is the model class for table "order_master".
 *
 * The followings are the available columns in table 'order_master':
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_user_ref
 * @property integer $id_travel
 * @property integer $id_kategori_travel
 * @property integer $id_type_payment
 * @property integer $payment
 * @property string $payment_code
 * @property string $verifikasi_code
 * @property integer $status_payment
 * @property string $created_date
 * @property string $last_update
 */
class OrderMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_user_ref, id_travel, id_kategori_travel, id_type_payment, payment, payment_code, verifikasi_code, status_payment', 'required'),
			array('id_user, id_user_ref, id_travel, id_kategori_travel, id_type_payment, payment, status_payment, status_konfirmasi', 'numerical', 'integerOnly'=>true),
			array('payment_code, verifikasi_code', 'length', 'max'=>255),
			array('last_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_user, id_user_ref, id_travel, id_kategori_travel, id_type_payment, payment, payment_code, verifikasi_code, status_payment, created_date, last_update', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user_ref' => array(self::BELONGS_TO, 'UserRef', 'id_user_ref'),
			'type_payment' => array(self::BELONGS_TO, 'Payment', 'id_type_payment'),
			'user' => array(self::BELONGS_TO, 'User', 'id_user'),
			'kategori_travel' => array(self::BELONGS_TO, 'TravelKategori', 'id_kategori_travel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_user' => 'User',
			'id_user_ref' => 'User Ref',
			'id_travel' => 'Travel',
			'id_kategori_travel' => 'Id Kategori Travel',
			'id_type_payment' => 'Jenis Pembayaran',
			'payment' => 'Payment',
			'payment_code' => 'Payment Code',
			'verifikasi_code' => 'Verifikasi Code',
			'status_payment' => 'Status Payment',
			'status_konfirmasi' => 'Status Konfirmasi',
			'created_date' => 'Created Date',
			'last_update' => 'Last Update',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_user_ref',$this->id_user_ref);
		$criteria->compare('id_travel',$this->id_travel);
		$criteria->compare('id_kategori_travel',$this->id_kategori_travel);
		$criteria->compare('id_type_payment',$this->id_type_payment);
		$criteria->compare('payment',$this->payment);
		$criteria->compare('payment_code',$this->payment_code,true);
		$criteria->compare('verifikasi_code',$this->verifikasi_code,true);
		$criteria->compare('status_payment',$this->status_payment);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function get_travel($kategori, $id_travel) {
		if ($kategori == 1) {
			$produk = Umroh::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 2) {
			$produk = Dauroh::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 3) {
			$produk = Business::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}
		else if ($kategori == 4) {
			$produk = Travel::model()->findByAttributes(array('id'=>$id_travel,'id_kategori'=>$kategori));
		}

		return $produk;
	}

	public function get_status_pembayaran($id) {
		if ($id == 0) {
			$status = 'Belum Bayar';
		}
		else if ($id == 1) {
			$status = 'DP';
		}
		else if ($id == 2) {
			$status = 'Lunas';
		}

		return $status;
	}

	public function get_status_konfirmasi($id) {
		if ($id == 0) {
			$status = 'Belum dikonfirmasi';
		}
		else if ($id == 1) {
			$status = 'Konfirmasi DP telah diverifikasi, menunggu pelunasan';
		}
		else if ($id == 2) {
			$status = 'Pembayaran Lunas & konfirmasi telah diverifikasi';
		}

		return $status;
	}
}

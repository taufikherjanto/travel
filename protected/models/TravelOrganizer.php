<?php

/**
 * This is the model class for table "travel_organizer".
 *
 * The followings are the available columns in table 'travel_organizer':
 * @property integer $id
 * @property string $nama_travel_organizer
 * @property string $pemilik
 * @property string $no_telp
 * @property string $email
 * @property string $alamat
 * @property string $deskripsi_perusahaan
 * @property integer $status_perusahaan
 */
class TravelOrganizer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'travel_organizer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_travel_organizer, pemilik, no_telp, email, alamat, deskripsi_perusahaan, status_perusahaan', 'required'),
			array('status_perusahaan', 'numerical', 'integerOnly'=>true),
			array('nama_travel_organizer, pemilik, email', 'length', 'max'=>255),
			array('no_telp', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_travel_organizer, pemilik, no_telp, email, alamat, deskripsi_perusahaan, status_perusahaan', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_travel_organizer' => 'Nama Travel Organizer',
			'pemilik' => 'Pemilik',
			'no_telp' => 'No Telp',
			'email' => 'Email',
			'alamat' => 'Alamat',
			'deskripsi_perusahaan' => 'Deskripsi Perusahaan',
			'status_perusahaan' => 'Status Perusahaan',
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
		$criteria->compare('nama_travel_organizer',$this->nama_travel_organizer,true);
		$criteria->compare('pemilik',$this->pemilik,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('deskripsi_perusahaan',$this->deskripsi_perusahaan,true);
		$criteria->compare('status_perusahaan',$this->status_perusahaan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TravelOrganizer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

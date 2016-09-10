<?php

/**
 * This is the model class for table "ustad".
 *
 * The followings are the available columns in table 'ustad':
 * @property integer $id
 * @property string $nama_ustad
 * @property string $deskripsi_ustad
 * @property string $foto
 * @property string $email
 */
class Ustad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ustad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_ustad, deskripsi_ustad, foto, email', 'required'),
			array('nama_ustad, foto, email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_ustad, deskripsi_ustad, foto, email', 'safe', 'on'=>'search'),
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
			'nama_ustad' => 'Nama Ustad',
			'deskripsi_ustad' => 'Deskripsi Ustad',
			'foto' => 'Foto',
			'email' => 'Email',
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
		$criteria->compare('nama_ustad',$this->nama_ustad,true);
		$criteria->compare('deskripsi_ustad',$this->deskripsi_ustad,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ustad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

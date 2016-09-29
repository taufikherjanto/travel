<?php

/**
 * This is the model class for table "business".
 *
 * The followings are the available columns in table 'business':
 * @property integer $id
 * @property integer $id_kategori
 * @property string $judul
 * @property string $title_slug
 * @property string $desc
 * @property string $pendamping
 * @property string $jumlah_hari
 * @property integer $penerbangan
 * @property string $tanggal
 * @property string $harga
 * @property integer $quota
 * @property integer $quota_active
 * @property string $gambar
 * @property string $tanggal_post
 * @property integer $status_publish
 * @property string $viewer
 */
class Business extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'business';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc', 'required'),
			array('id_kategori, penerbangan, quota, quota_active, status_publish', 'numerical', 'integerOnly'=>true),
			array('judul, title_slug, pendamping, jumlah_hari, harga, gambar, tanggal_post, viewer', 'length', 'max'=>255),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kategori, judul, title_slug, desc, pendamping, jumlah_hari, penerbangan, tanggal, harga, quota, quota_active, gambar, tanggal_post, status_publish, viewer', 'safe', 'on'=>'search'),
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
			'id_kategori' => 'Id Kategori',
			'judul' => 'Judul',
			'title_slug' => 'Title Slug',
			'desc' => 'Desc',
			'pendamping' => 'Pendamping',
			'jumlah_hari' => 'Jumlah Hari',
			'penerbangan' => 'Penerbangan',
			'tanggal' => 'Tanggal',
			'harga' => 'Harga',
			'quota' => 'Quota',
			'quota_active' => 'Quota Active',
			'gambar' => 'Gambar',
			'tanggal_post' => 'Tanggal Post',
			'status_publish' => 'Status Publish',
			'viewer' => 'Viewer',
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
		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('title_slug',$this->title_slug,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('pendamping',$this->pendamping,true);
		$criteria->compare('jumlah_hari',$this->jumlah_hari,true);
		$criteria->compare('penerbangan',$this->penerbangan);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('harga',$this->harga,true);
		$criteria->compare('quota',$this->quota);
		$criteria->compare('quota_active',$this->quota_active);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('tanggal_post',$this->tanggal_post,true);
		$criteria->compare('status_publish',$this->status_publish);
		$criteria->compare('viewer',$this->viewer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Business the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "dauroh".
 *
 * The followings are the available columns in table 'dauroh':
 * @property integer $id
 * @property integer $id_kategori
 * @property string $judul
 * @property string $title_slug
 * @property string $desc
 * @property integer $lokasi
 * @property string $tanggal_berangkat
 * @property integer $id_pendamping
 * @property string $harga
 * @property integer $quota
 * @property integer $quota_active
 * @property string $gambar
 * @property string $tanggal_post
 * @property integer $status_publish
 * @property string $viewer
 */
class Dauroh extends CActiveRecord
{
	public $kategori_search;
	public $pendamping_search;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dauroh';
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
			array('lokasi, id_pendamping, quota, quota_active, status_publish', 'numerical', 'integerOnly'=>true),
			array('gambar', 'required', 'on'=>'create'),
			array('judul, title_slug, harga, gambar, tanggal_post, viewer', 'length', 'max'=>255),
			array('tanggal_berangkat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kategori, judul, title_slug, desc, lokasi, tanggal_berangkat, id_pendamping, harga, quota, quota_active, gambar, tanggal_post, status_publish, viewer', 'safe', 'on'=>'search'),
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
			'kategori' => array(self::BELONGS_TO, 'TravelKategori', 'id_kategori'),
			'pendamping' => array(self::BELONGS_TO, 'Pendamping', 'id_pendamping'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_kategori' => 'Kategori',
			'judul' => 'Judul',
			'title_slug' => 'Title Slug',
			'desc' => 'Desc',
			'lokasi' => 'Lokasi',
			'tanggal_berangkat' => 'Tanggal Berangkat',
			'id_pendamping' => 'Pendamping',
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

		$criteria->with = array('kategori', 'pendamping');
		$criteria->compare('kategori.jenis_travel', $this->kategori_search, true);
		$criteria->compare('pendamping.nama_pendamping', $this->pendamping_search, true);
		$criteria->compare('id',$this->id);
		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('title_slug',$this->title_slug,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('lokasi',$this->lokasi);
		$criteria->compare('tanggal_berangkat',$this->tanggal_berangkat,true);
		$criteria->compare('id_pendamping',$this->id_pendamping);
		$criteria->compare('harga',$this->harga,true);
		$criteria->compare('quota',$this->quota);
		$criteria->compare('quota_active',$this->quota_active);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('tanggal_post',$this->tanggal_post,true);
		$criteria->compare('status_publish',$this->status_publish);
		$criteria->compare('viewer',$this->viewer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'kategori_search'=>array(
		                'asc'=>'kategori.jenis_travel',
		                'desc'=>'kategori.jenis_travel DESC',
	            	),
					'pendamping_search'=>array(
			            'asc'=>'pendamping.nama_pendamping',
			            'desc'=>'pendamping.nama_pendamping DESC',
	            	),
	            	'*'
				),
			),
			'pagination'=>array(
            	'pageSize'=>5,
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dauroh the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

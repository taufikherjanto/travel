<?php

/**
 * This is the model class for table "travel".
 *
 * The followings are the available columns in table 'travel':
 * @property integer $id
 * @property integer $id_kategori
 * @property string $judul
 * @property string $title_slug
 * @property integer $id_region
 * @property integer $id_negara
 * @property string $tema
 * @property string $desc
 * @property string $tanggal_event
 * @property integer $harga
 * @property integer $quota
 * @property string $gambar
 * @property string $tanggal_post
 * @property integer $status_publish
 * @property integer $viewer
 */
class Travel extends CActiveRecord
{
	public $kategori_search;
	public $region_search;
	public $negara_search;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'travel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kategori,  judul, title_slug, id_region, id_negara, tema, desc, tanggal_event, harga, quota, tanggal_post, status_publish, viewer', 'required'),
			array('gambar', 'required', 'on'=>'create'),
			array('id_kategori,  id_region, id_negara, harga, quota, status_publish, viewer', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>100),
			array('title_slug, tema, gambar', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kategori,  judul, title_slug, id_region, id_negara, tema, desc, tanggal_event, harga, quota, gambar, tanggal_post, status_publish, viewer', 'safe', 'on'=>'search'),
			array('kategori_search, region_search, negara_search', 'safe', 'on'=>'search'),
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
			'region' => array(self::BELONGS_TO, 'Region', 'id_region'),
			'negara' => array(self::BELONGS_TO, 'Negara', 'id_negara'),
		);
	}

	/**x
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_kategori' => 'Travel Kategori',
			'judul' => 'Judul',
			'title_slug' => 'Title Slug',
			'id_region' => 'Region',
			'id_negara' => 'Negara',
			'tema' => 'Tema',
			'desc' => 'Deskripsi',
			'tanggal_event' => 'Tanggal Event',
			'harga' => 'Harga',
			'quota' => 'Quota',
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

		$criteria->with = array('kategori', 'region', 'negara');
		$criteria->compare('kategori.jenis_travel', $this->kategori_search, true);
		$criteria->compare('region.nama_region', $this->region_search, true);
		$criteria->compare('negara.nama_negara', $this->negara_search, true);
		$criteria->compare('id',$this->id);
		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('title_slug',$this->title_slug,true);
		$criteria->compare('id_region',$this->id_region);
		$criteria->compare('id_negara',$this->id_negara);
		$criteria->compare('tema',$this->tema,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('tanggal_event',$this->tanggal_event,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('quota',$this->quota);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('tanggal_post',$this->tanggal_post,true);
		$criteria->compare('status_publish',$this->status_publish);
		$criteria->compare('viewer',$this->viewer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'kategori_search'=>array(
		                'asc'=>'kategori.jenis_travel',
		                'desc'=>'kategori.jenis_travel DESC',
	            	),
	            	'region_search'=>array(
		                'asc'=>'region.nama_region',
		                'desc'=>'region.nama_region DESC',
	            	),
	            	'negara_search'=>array(
		                'asc'=>'negara.nama_negara',
		                'desc'=>'negara.nama_negara DESC',
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
	 * @return Travel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

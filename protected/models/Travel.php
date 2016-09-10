<?php

/**
 * This is the model class for table "travel".
 *
 * The followings are the available columns in table 'travel':
 * @property integer $id
 * @property string $nama_travel
 * @property integer $kategori_travel
 * @property integer $id_travel_organizer
 * @property string $deskripsi
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
	public $organizer_search;
	public $ustad_search;

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
			array('nama_travel, kategori_travel, id_travel_organizer, deskripsi, tanggal_event, harga, quota, tanggal_post, status_publish, viewer', 'required'),
			array('gambar', 'required', 'on'=>'create'),
			array('kategori_travel, id_travel_organizer, id_ustad, harga, quota, status_publish, viewer', 'numerical', 'integerOnly'=>true),
			array('nama_travel', 'length', 'max'=>100),
			array('gambar', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_travel, kategori_search, organizer_search, ustad_search, deskripsi, tanggal_event, harga, quota, gambar, tanggal_post, status_publish, viewer', 'safe', 'on'=>'search'),
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
			'kategori' => array(self::BELONGS_TO, 'TravelKategori', 'kategori_travel'),
			'organizer' => array(self::BELONGS_TO, 'TravelOrganizer', 'id_travel_organizer'),
			'ustad' => array(self::BELONGS_TO, 'Ustad', 'id_ustad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_travel' => 'Nama Travel',
			'kategori_travel' => 'Travel Kategori',
			'id_travel_organizer' => 'Travel Organizer',
			'id_ustad'=>'Ustad',
			'deskripsi' => 'Deskripsi',
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

		$criteria->with = array('organizer', 'kategori', 'ustad');
		$criteria->compare('kategori.jenis_travel', $this->kategori_search, true);
		$criteria->compare('organizer.nama_travel_organizer', $this->organizer_search, true);
		$criteria->compare('ustad.nama_ustad', $this->ustad_search, true);
		$criteria->compare('id',$this->id);
		$criteria->compare('nama_travel',$this->nama_travel,true);
		$criteria->compare('kategori_travel',$this->kategori_travel);
		$criteria->compare('id_travel_organizer',$this->id_travel_organizer);
		$criteria->compare('id_ustad', $this->id_ustad);
		$criteria->compare('deskripsi',$this->deskripsi,true);
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
	            'organizer_search'=>array(
	                'asc'=>'organizer.nama_travel_organizer',
	                'desc'=>'organizer.nama_travel_organizer DESC',
	            ),
	            'ustad_search'=>array(
	                'asc'=>'ustad.nama_ustad',
	                'desc'=>'ustad.nama_ustad DESC',
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

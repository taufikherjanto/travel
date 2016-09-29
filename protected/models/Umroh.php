<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $image
 */
class Umroh extends CActiveRecord 
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'umroh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kategori,judul,title_slug,desc,pendamping,jumlah_hari,penerbangan,tanggal,harga,quota,quota_active,gambar,tanggal_post,status_publish', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('gambar', 'file', 'types'=>'jpg, gif, png', 'safe' => false, "on" => "update", 'allowEmpty' => true),

		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
    {
        return array(
		    "panggil_lingkup"=>array(self::BELONGS_TO,'Lingkup','lingkup_id'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Hasil pencarian :',
			'user_id'=>'User',
			'description' => 'Description',
			'price' => 'Price',
			'image' => 'Image',
			'bidang_id'=>'Bidang',
			'lokasi_id'=>'Lokasi',
			'lingkup_id'=>'Lingkup',
			'kampus_id'=>'Kampus',
			'tanggal_post'=>'tanggal',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

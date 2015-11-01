<?php

/**
 * This is the model class for table "frenteaprovechamiento".
 *
 * The followings are the available columns in table 'frenteaprovechamiento':
 * @property integer $idfrenteAprovechamiento
 * @property string $nombreFrenteAprovechamiento
 * @property integer $idUsuario
 * @property integer $idProductos
 *
 * The followings are the available model relations:
 * @property Productos $idProductos0
 * @property Usuario $idUsuario0
 * @property Productos[] $productoses
 */
class Frenteaprovechamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'frenteaprovechamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idfrenteAprovechamiento, nombreFrenteAprovechamiento, idUsuario, idProductos', 'required'),
			array('idfrenteAprovechamiento, idUsuario, idProductos', 'numerical', 'integerOnly'=>true),
			array('nombreFrenteAprovechamiento', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idfrenteAprovechamiento, nombreFrenteAprovechamiento, idUsuario, idProductos', 'safe', 'on'=>'search'),
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
			'idProductos0' => array(self::BELONGS_TO, 'Productos', 'idProductos'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'productoses' => array(self::HAS_MANY, 'Productos', 'idFrente_Aprovechamientos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfrenteAprovechamiento' => 'Idfrente Aprovechamiento',
			'nombreFrenteAprovechamiento' => 'Nombre Frente Aprovechamiento',
			'idUsuario' => 'Id Usuario',
			'idProductos' => 'Id Productos',
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

		$criteria->compare('idfrenteAprovechamiento',$this->idfrenteAprovechamiento);
		$criteria->compare('nombreFrenteAprovechamiento',$this->nombreFrenteAprovechamiento,true);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('idProductos',$this->idProductos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Frenteaprovechamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idProductos
 * @property string $nombreProducto
 * @property double $costo
 * @property integer $idUsuario
 * @property integer $idFrente_Aprovechamientos
 *
 * The followings are the available model relations:
 * @property Frenteaprovechamiento[] $frenteaprovechamientos
 * @property Usuario $idUsuario0
 * @property Frenteaprovechamiento $idFrenteAprovechamientos
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProductos, nombreProducto, costo, idUsuario, idFrente_Aprovechamientos', 'required'),
			array('idProductos, idUsuario, idFrente_Aprovechamientos', 'numerical', 'integerOnly'=>true),
			array('costo', 'numerical'),
			array('nombreProducto', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProductos, nombreProducto, costo, idUsuario, idFrente_Aprovechamientos', 'safe', 'on'=>'search'),
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
			'frenteaprovechamientos' => array(self::HAS_MANY, 'Frenteaprovechamiento', 'idProductos'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'idFrenteAprovechamientos' => array(self::BELONGS_TO, 'Frenteaprovechamiento', 'idFrente_Aprovechamientos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProductos' => 'Id Productos',
			'nombreProducto' => 'Nombre Producto',
			'costo' => 'Costo',
			'idUsuario' => 'Id Usuario',
			'idFrente_Aprovechamientos' => 'Id Frente Aprovechamientos',
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

		$criteria->compare('idProductos',$this->idProductos);
		$criteria->compare('nombreProducto',$this->nombreProducto,true);
		$criteria->compare('costo',$this->costo);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('idFrente_Aprovechamientos',$this->idFrente_Aprovechamientos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

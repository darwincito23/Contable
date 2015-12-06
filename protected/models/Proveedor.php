<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property string $idProveedor
 * @property string $nombreProveedor
 * @property string $codigoProveedor
 * @property string $numeroContacto
 * @property string $direccion
 * @property string $NIT_CC
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdUsuario
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreProveedor, codigoProveedor', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombreProveedor, codigoProveedor, direccion, NIT_CC', 'length', 'max'=>255),
			array('numeroContacto', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProveedor, nombreProveedor, codigoProveedor, numeroContacto, direccion, NIT_CC, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'Proveedor_idProveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedor' => 'Id Tercero',
			'nombreProveedor' => 'Nombre Tercero',
			'codigoProveedor' => 'Codigo Tercero',
			'numeroContacto' => 'Numero Contacto',
			'direccion' => 'Direccion',
			'NIT_CC' => 'Nit Cc',
			'Usuario_idUsuario' => 'Usuario Id Usuario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idProveedor',$this->idProveedor,true);
		$criteria->compare('nombreProveedor',$this->nombreProveedor,true);
		$criteria->compare('codigoProveedor',$this->codigoProveedor,true);
		$criteria->compare('numeroContacto',$this->numeroContacto,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('NIT_CC',$this->NIT_CC,true);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
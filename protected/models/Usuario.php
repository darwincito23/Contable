<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $nombreUsuario
 * @property string $cedula
 * @property string $cargo
 * @property string $ocupacion
 * @property string $numeroContacto
 * @property string $contrasena
 *
 * The followings are the available model relations:
 * @property Frenteaprovechamiento[] $frenteaprovechamientos
 * @property Productos[] $productoses
 * @property Proveedor[] $proveedors
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreUsuario, cedula, cargo, ocupacion, numeroContacto, contrasena', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('nombreUsuario, cedula, cargo, ocupacion, contrasena', 'length', 'max'=>255),
			array('numeroContacto', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, nombreUsuario, cedula, cargo, ocupacion, numeroContacto, contrasena', 'safe', 'on'=>'search'),
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
			'frenteaprovechamientos' => array(self::HAS_MANY, 'Frenteaprovechamiento', 'Usuario_idUsuario'),
			'productoses' => array(self::HAS_MANY, 'Productos', 'Usuario_idUsuario'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'Usuario_idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'Usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nombreUsuario' => 'Nombre Usuario',
			'cedula' => 'Cedula',
			'cargo' => 'Cargo',
			'ocupacion' => 'Ocupacion',
			'numeroContacto' => 'Numero Contacto',
			'contrasena' => 'Contrasena',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('numeroContacto',$this->numeroContacto,true);
		$criteria->compare('contrasena',$this->contrasena,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
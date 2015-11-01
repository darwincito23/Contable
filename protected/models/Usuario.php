<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_Usuario
 * @property string $nombreUsuario
 * @property string $cedula
 * @property string $cargo
 * @property string $ocupacion
 * @property string $numeroConctacto
 *
 * The followings are the available model relations:
 * @property Cuentapuc[] $cuentapucs
 * @property Frenteaprovechamiento[] $frenteaprovechamientos
 * @property Productos[] $productoses
 * @property Proveedor[] $proveedors
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Usuario extends CActiveRecord
{
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
			array('id_Usuario, nombreUsuario, cedula, cargo, ocupacion, numeroConctacto', 'required'),
			array('id_Usuario', 'numerical', 'integerOnly'=>true),
			array('nombreUsuario, cargo, ocupacion', 'length', 'max'=>255),
			array('cedula', 'length', 'max'=>15),
			array('numeroConctacto', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Usuario, nombreUsuario, cedula, cargo, ocupacion, numeroConctacto', 'safe', 'on'=>'search'),
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
			'cuentapucs' => array(self::HAS_MANY, 'Cuentapuc', 'idUsuario'),
			'frenteaprovechamientos' => array(self::HAS_MANY, 'Frenteaprovechamiento', 'idUsuario'),
			'productoses' => array(self::HAS_MANY, 'Productos', 'idUsuario'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Usuario' => 'Id Usuario',
			'nombreUsuario' => 'Nombre Usuario',
			'cedula' => 'Cedula',
			'cargo' => 'Cargo',
			'ocupacion' => 'Ocupacion',
			'numeroConctacto' => 'Numero Conctacto',
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

		$criteria->compare('id_Usuario',$this->id_Usuario);
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('numeroConctacto',$this->numeroConctacto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

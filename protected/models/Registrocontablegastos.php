<?php

/**
 * This is the model class for table "registrocontablegastos".
 *
 * The followings are the available columns in table 'registrocontablegastos':
 * @property string $idRegistroContableGastos
 * @property string $fecha
 * @property double $valorRegistroContable
 * @property string $descripcion
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Cuentapuc[] $cuentapucs
 * @property Usuario $usuarioIdUsuario
 * @property Proveedor[] $proveedors
 */
class Registrocontablegastos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Registrocontablegastos the static model class
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
		return 'registrocontablegastos';
	}
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, valorRegistroContable, Usuario_idUsuario', 'required'),
			array('Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('valorRegistroContable', 'numerical'),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRegistroContableGastos, fecha, valorRegistroContable, descripcion, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'cuentapucs' => array(self::MANY_MANY, 'Cuentapuc', 'cuentapuc_has_registrocontablegastos(RegistroContableGastos_idRegistroContableGastos, CuentaPuc_idCuentaPuc)'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
			'proveedors' => array(self::MANY_MANY, 'Proveedor', 'registrocontablegastos_has_proveedor(RegistroContableGastos_idRegistroContableGastos, Proveedor_idProveedor)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRegistroContableGastos' => 'Id Registro Contable Gastos',
			'fecha' => 'Fecha',
			'valorRegistroContable' => 'Valor Registro Contable',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idRegistroContableGastos',$this->idRegistroContableGastos,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('valorRegistroContable',$this->valorRegistroContable);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);		


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
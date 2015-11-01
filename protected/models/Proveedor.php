<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $idProveedor
 * @property string $nombreProveedor
 * @property string $codigoProveedor
 * @property string $numeroContacto
 * @property string $direccion
 * @property string $nit_cc
 * @property integer $idUsuario
 * @property string $id_registro_contable_gastos
 *
 * The followings are the available model relations:
 * @property Registrocontablegastos $idRegistroContableGastos
 * @property Usuario $idUsuario0
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Proveedor extends CActiveRecord
{
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
			array('idProveedor, nombreProveedor, codigoProveedor, numeroContacto, direccion, nit_cc, idUsuario, id_registro_contable_gastos', 'required'),
			array('idProveedor, idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombreProveedor, codigoProveedor', 'length', 'max'=>255),
			array('numeroContacto, id_registro_contable_gastos', 'length', 'max'=>20),
			array('direccion', 'length', 'max'=>120),
			array('nit_cc', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProveedor, nombreProveedor, codigoProveedor, numeroContacto, direccion, nit_cc, idUsuario, id_registro_contable_gastos', 'safe', 'on'=>'search'),
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
			'idRegistroContableGastos' => array(self::BELONGS_TO, 'Registrocontablegastos', 'id_registro_contable_gastos'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'idProveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedor' => 'Id Proveedor',
			'nombreProveedor' => 'Nombre Proveedor',
			'codigoProveedor' => 'Codigo Proveedor',
			'numeroContacto' => 'Numero Contacto',
			'direccion' => 'Direccion',
			'nit_cc' => 'Nit Cc',
			'idUsuario' => 'Id Usuario',
			'id_registro_contable_gastos' => 'Id Registro Contable Gastos',
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

		$criteria->compare('idProveedor',$this->idProveedor);
		$criteria->compare('nombreProveedor',$this->nombreProveedor,true);
		$criteria->compare('codigoProveedor',$this->codigoProveedor,true);
		$criteria->compare('numeroContacto',$this->numeroContacto,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('nit_cc',$this->nit_cc,true);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('id_registro_contable_gastos',$this->id_registro_contable_gastos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

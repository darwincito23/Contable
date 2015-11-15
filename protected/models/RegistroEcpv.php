<?php

/**
 * This is the model class for table "registro_ecpv".
 *
 * The followings are the available columns in table 'registro_ecpv':
 * @property integer $idRegistro_ECPV
 * @property string $cantidad
 * @property double $CostoTotalUnitario
 * @property string $fecha
 * @property string $FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA
 * @property string $FrenteAprovechamiento_Productos_Productos_idProductos
 *
 * The followings are the available model relations:
 * @property ConsolidadoEcpv[] $consolidadoEcpvs
 * @property FrenteaprovechamientoProductos $frenteAprovechamientoProductosFrenteAprovechamientoIdFA
 * @property FrenteaprovechamientoProductos $frenteAprovechamientoProductosProductosIdProductos
 */
class RegistroEcpv extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RegistroEcpv the static model class
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
		return 'registro_ecpv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CostoTotalUnitario', 'numerical'),
			array('cantidad', 'length', 'max'=>45),
			array('FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA, FrenteAprovechamiento_Productos_Productos_idProductos', 'length', 'max'=>30),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRegistro_ECPV, cantidad, CostoTotalUnitario, fecha, FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA, FrenteAprovechamiento_Productos_Productos_idProductos', 'safe', 'on'=>'search'),
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
			'consolidadoEcpvs' => array(self::HAS_MANY, 'ConsolidadoEcpv', 'Registro ECPV_idRegistro SPV'),
			'frenteAprovechamientoProductosFrenteAprovechamientoIdFA' => array(self::BELONGS_TO, 'FrenteaprovechamientoProductos', 'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'),
			'frenteAprovechamientoProductosProductosIdProductos' => array(self::BELONGS_TO, 'FrenteaprovechamientoProductos', 'FrenteAprovechamiento_Productos_Productos_idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRegistro_ECPV' => 'Id Registro Ecpv',
			'cantidad' => 'Cantidad',
			'CostoTotalUnitario' => 'Costo Total Unitario',
			'fecha' => 'Fecha',
			'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA' => 'Frente Aprovechamiento Productos Frente Aprovechamiento Id Fa',
			'FrenteAprovechamiento_Productos_Productos_idProductos' => 'Frente Aprovechamiento Productos Productos Id Productos',
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

		$criteria->compare('idRegistro_ECPV',$this->idRegistro_ECPV);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('CostoTotalUnitario',$this->CostoTotalUnitario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$this->FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA,true);
		$criteria->compare('FrenteAprovechamiento_Productos_Productos_idProductos',$this->FrenteAprovechamiento_Productos_Productos_idProductos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
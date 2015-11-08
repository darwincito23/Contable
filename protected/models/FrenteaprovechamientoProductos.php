<?php

/**
 * This is the model class for table "frenteaprovechamiento_productos".
 *
 * The followings are the available columns in table 'frenteaprovechamiento_productos':
 * @property string $FrenteAprovechamiento_idFA
 * @property string $Productos_idProductos
 * @property double $CostoUnitario
 * @property string $Cantidad
 * @property double $CostoCantidad_CostoUnitario
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property ConsolidadoEstadoCostoProductoVendidoFaProductos[] $consolidadoEstadoCostoProductoVendidoFaProductoses
 * @property ConsolidadoEstadoCostoProductoVendidoFaProductos[] $consolidadoEstadoCostoProductoVendidoFaProductoses1
 */
class FrenteaprovechamientoProductos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FrenteaprovechamientoProductos the static model class
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
		return 'frenteaprovechamiento_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FrenteAprovechamiento_idFA, Productos_idProductos', 'required'),
			array('CostoUnitario, CostoCantidad_CostoUnitario', 'numerical'),
			array('FrenteAprovechamiento_idFA, Productos_idProductos, Cantidad', 'length', 'max'=>30),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FrenteAprovechamiento_idFA, Productos_idProductos, CostoUnitario, Cantidad, CostoCantidad_CostoUnitario, fecha', 'safe', 'on'=>'search'),
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
			'consolidadoEstadoCostoProductoVendidoFaProductoses' => array(self::HAS_MANY, 'ConsolidadoEstadoCostoProductoVendidoFaProductos', 'FA_Productos_idProductos'),
			'consolidadoEstadoCostoProductoVendidoFaProductoses1' => array(self::HAS_MANY, 'ConsolidadoEstadoCostoProductoVendidoFaProductos', 'FA_Productos_FA_idFA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FrenteAprovechamiento_idFA' => 'Frente Aprovechamiento Id Fa',
			'Productos_idProductos' => 'Productos Id Productos',
			'CostoUnitario' => 'Costo Unitario',
			'Cantidad' => 'Cantidad',
			'CostoCantidad_CostoUnitario' => 'Costo Cantidad Costo Unitario',
			'fecha' => 'Fecha',
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

		$criteria->compare('FrenteAprovechamiento_idFA',$this->FrenteAprovechamiento_idFA,true);
		$criteria->compare('Productos_idProductos',$this->Productos_idProductos,true);
		$criteria->compare('CostoUnitario',$this->CostoUnitario);
		$criteria->compare('Cantidad',$this->Cantidad,true);
		$criteria->compare('CostoCantidad_CostoUnitario',$this->CostoCantidad_CostoUnitario);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
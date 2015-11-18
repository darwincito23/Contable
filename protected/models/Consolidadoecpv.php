<?php

/**
 * This is the model class for table "consolidadoecpv".
 *
 * The followings are the available columns in table 'consolidadoecpv':
 * @property string $idConsolidado_Estado_Costo_Producto_Vendido
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $TotalCostoFA
 * @property string $Total_Cantidad_Producto
 * @property string $Total_Costo_Producto
 * @property string $Costo_Producto_Vendido_Final
 * @property integer $Registro_ECPV_idRegistro_ECPV
 *
 * The followings are the available model relations:
 * @property RegistroEcpv $registroECPVIdRegistroECPV
 */
class Consolidadoecpv extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Consolidadoecpv the static model class
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
		return 'consolidadoecpv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Registro_ECPV_idRegistro_ECPV', 'required'),
			array('Registro_ECPV_idRegistro_ECPV', 'numerical', 'integerOnly'=>true),
			array('TotalCostoFA, Total_Cantidad_Producto, Total_Costo_Producto, Costo_Producto_Vendido_Final', 'length', 'max'=>45),
			array('fecha_inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idConsolidado_Estado_Costo_Producto_Vendido, fecha_inicio, fecha_fin, TotalCostoFA, Total_Cantidad_Producto, Total_Costo_Producto, Costo_Producto_Vendido_Final, Registro_ECPV_idRegistro_ECPV', 'safe', 'on'=>'search'),
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
			'registroECPVIdRegistroECPV' => array(self::BELONGS_TO, 'RegistroEcpv', 'Registro_ECPV_idRegistro_ECPV'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idConsolidado_Estado_Costo_Producto_Vendido' => 'Id Consolidado Estado Costo Producto Vendido',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'TotalCostoFA' => 'Total Costo Fa',
			'Total_Cantidad_Producto' => 'Total Cantidad Producto',
			'Total_Costo_Producto' => 'Total Costo Producto',
			'Costo_Producto_Vendido_Final' => 'Costo Producto Vendido Final',
			'Registro_ECPV_idRegistro_ECPV' => 'Registro Ecpv Id Registro Ecpv',
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

		$criteria->compare('idConsolidado_Estado_Costo_Producto_Vendido',$this->idConsolidado_Estado_Costo_Producto_Vendido,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('TotalCostoFA',$this->TotalCostoFA,true);
		$criteria->compare('Total_Cantidad_Producto',$this->Total_Cantidad_Producto,true);
		$criteria->compare('Total_Costo_Producto',$this->Total_Costo_Producto,true);
		$criteria->compare('Costo_Producto_Vendido_Final',$this->Costo_Producto_Vendido_Final,true);
		$criteria->compare('Registro_ECPV_idRegistro_ECPV',$this->Registro_ECPV_idRegistro_ECPV);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
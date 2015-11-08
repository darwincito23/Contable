<?php

/**
 * This is the model class for table "consolidado_goa_gov".
 *
 * The followings are the available columns in table 'consolidado_goa_gov':
 * @property string $idConsolidado_GOA_GOV
 * @property string $fecha_Inicio
 * @property string $fecha_fin
 * @property double $Total
 * @property string $RegistroContableGastos_idRegistroContableGastos
 *
 * The followings are the available model relations:
 * @property Registrocontablegastos $registroContableGastosIdRegistroContableGastos
 */
class ConsolidadoGoaGov extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConsolidadoGoaGov the static model class
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
		return 'consolidado_goa_gov';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idConsolidado_GOA_GOV, RegistroContableGastos_idRegistroContableGastos', 'required'),
			array('Total', 'numerical'),
			array('idConsolidado_GOA_GOV, RegistroContableGastos_idRegistroContableGastos', 'length', 'max'=>30),
			array('fecha_Inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idConsolidado_GOA_GOV, fecha_Inicio, fecha_fin, Total, RegistroContableGastos_idRegistroContableGastos', 'safe', 'on'=>'search'),
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
			'registroContableGastosIdRegistroContableGastos' => array(self::BELONGS_TO, 'Registrocontablegastos', 'RegistroContableGastos_idRegistroContableGastos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idConsolidado_GOA_GOV' => 'Id Consolidado Goa Gov',
			'fecha_Inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'Total' => 'Total',
			'RegistroContableGastos_idRegistroContableGastos' => 'Registro Contable Gastos Id Registro Contable Gastos',
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

		$criteria->compare('idConsolidado_GOA_GOV',$this->idConsolidado_GOA_GOV,true);
		$criteria->compare('fecha_Inicio',$this->fecha_Inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('Total',$this->Total);
		$criteria->compare('RegistroContableGastos_idRegistroContableGastos',$this->RegistroContableGastos_idRegistroContableGastos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
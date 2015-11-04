<?php

/**
 * This is the model class for table "registrocontablegastos_has_proveedor".
 *
 * The followings are the available columns in table 'registrocontablegastos_has_proveedor':
 * @property string $RegistroContableGastos_idRegistroContableGastos
 * @property string $Proveedor_idProveedor
 *
 * The followings are the available model relations:
 * @property ConsolidadoGoaGovRegistrocontablegastosProveedor[] $consolidadoGoaGovRegistrocontablegastosProveedors
 * @property ConsolidadoGoaGovRegistrocontablegastosProveedor[] $consolidadoGoaGovRegistrocontablegastosProveedors1
 */
class RegistrocontablegastosHasProveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RegistrocontablegastosHasProveedor the static model class
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
		return 'registrocontablegastos_has_proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RegistroContableGastos_idRegistroContableGastos', 'required'),
			array('RegistroContableGastos_idRegistroContableGastos, Proveedor_idProveedor', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RegistroContableGastos_idRegistroContableGastos, Proveedor_idProveedor', 'safe', 'on'=>'search'),
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
			'consolidadoGoaGovRegistrocontablegastosProveedors' => array(self::HAS_MANY, 'ConsolidadoGoaGovRegistrocontablegastosProveedor', 'RegistroContableGastos_Proveedor_RidRegistroContableGastos'),
			'consolidadoGoaGovRegistrocontablegastosProveedors1' => array(self::HAS_MANY, 'ConsolidadoGoaGovRegistrocontablegastosProveedor', 'RegistroContableGastos_Proveedor_idProveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RegistroContableGastos_idRegistroContableGastos' => 'Registro Contable Gastos Id Registro Contable Gastos',
			'Proveedor_idProveedor' => 'Proveedor Id Proveedor',
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

		$criteria->compare('RegistroContableGastos_idRegistroContableGastos',$this->RegistroContableGastos_idRegistroContableGastos,true);
		$criteria->compare('Proveedor_idProveedor',$this->Proveedor_idProveedor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "cuentapuc".
 *
 * The followings are the available columns in table 'cuentapuc':
 * @property integer $idCuenta
 * @property string $nombreCuenta
 * @property string $codigoCuenta
 * @property integer $cuentaPadre
 * @property integer $idTipoGasto
 * @property string $id_registro_contable_gasto
 * @property integer $idUsuario
 *
 * The followings are the available model relations:
 * @property Tipogasto $idTipoGasto0
 * @property Registrocontablegastos $idRegistroContableGasto
 * @property Cuentapuc $cuentaPadre0
 * @property Cuentapuc[] $cuentapucs
 * @property Usuario $idUsuario0
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Cuentapuc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function searchCuentaPadre()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
    	$modelo =  new Cuentapuc;
		$criteria = new CDbCriteria();
		$criteria->select='nombreCuenta,codigoCuenta'	;
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);
		$array= $modelo->findall($criteria);
		$arr=array();
		foreach ($array as $key => $value) {
		$arr[]= $array[$key]->nombreCuenta."|".$array[$key]->codigoCuenta;
		}
		return $arr;
	}
	public function tableName()
	{
		return 'cuentapuc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreCuenta, codigoCuenta,, idTipoGasto,,', 'required'),
			array('idCuenta, cuentaPadre, idTipoGasto, idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombreCuenta, codigoCuenta', 'length', 'max'=>255),
			array('id_registro_contable_gasto', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCuenta, nombreCuenta, codigoCuenta, cuentaPadre, idTipoGasto, id_registro_contable_gasto, idUsuario', 'safe', 'on'=>'search'),
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
			'idTipoGasto0' => array(self::BELONGS_TO, 'Tipogasto', 'idTipoGasto'),
			'idRegistroContableGasto' => array(self::BELONGS_TO, 'Registrocontablegastos', 'id_registro_contable_gasto'),
			'cuentaPadre0' => array(self::BELONGS_TO, 'Cuentapuc', 'cuentaPadre'),
			'cuentapucs' => array(self::HAS_MANY, 'Cuentapuc', 'cuentaPadre'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'idCuentaPUC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCuenta' => 'Id Cuenta',
			'nombreCuenta' => 'Nombre Cuenta',
			'codigoCuenta' => 'Codigo Cuenta',
			'cuentaPadre' => 'Cuenta Padre',
			'idTipoGasto' => 'Id Tipo Gasto',
			'id_registro_contable_gasto' => 'Id Registro Contable Gasto',
			'idUsuario' => 'Id Usuario',
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

		$criteria->compare('idCuenta',$this->idCuenta);
		$criteria->compare('nombreCuenta',$this->nombreCuenta,true);
		$criteria->compare('codigoCuenta',$this->codigoCuenta,true);
		$criteria->compare('cuentaPadre',$this->cuentaPadre);
		$criteria->compare('idTipoGasto',$this->idTipoGasto);
		$criteria->compare('id_registro_contable_gasto',$this->id_registro_contable_gasto,true);
		$criteria->compare('idUsuario',$this->idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cuentapuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

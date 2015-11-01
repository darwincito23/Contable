<?php

/**
 * This is the model class for table "registrocontablegastos".
 *
 * The followings are the available columns in table 'registrocontablegastos':
 * @property string $fecha
 * @property string $descripcion
 * @property double $valor
 * @property string $idRegistroContable
 * @property integer $idCuentaPUC
 * @property integer $idProveedor
 * @property integer $idUsuario
 *
 * The followings are the available model relations:
 * @property Cuentapuc[] $cuentapucs
 * @property Proveedor[] $proveedors
 * @property Cuentapuc $idCuentaPUC0
 * @property Proveedor $idProveedor0
 * @property Usuario $idUsuario0
 */
class Registrocontablegastos extends CActiveRecord
{
	public static $USER="usuario";
	public static $PROV="proveedor";
	public static $CP="cuenta";
	public $def;


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
			array('fecha, descripcion, valor, idRegistroContable, idCuentaPUC, idUsuario', 'required'),
			array('idCuentaPUC, idProveedor, idUsuario', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('idRegistroContable', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fecha, descripcion, valor, idRegistroContable, idCuentaPUC, idProveedor, idUsuario', 'safe', 'on'=>'search'),
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
			'cuentapucs' => array(self::HAS_MANY, 'Cuentapuc', 'id_registro_contable_gasto'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'id_registro_contable_gastos'),
			'idCuentaPUC0' => array(self::BELONGS_TO, 'Cuentapuc', 'idCuentaPUC'),
			'idProveedor0' => array(self::BELONGS_TO, 'Proveedor', 'idProveedor'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha' => 'Fecha',
			'descripcion' => 'Descripcion',
			'valor' => 'Valor',
			'idRegistroContable' => 'Id Registro Contable',
			'idCuentaPUC' => 'Id Cuenta Puc',
			'idProveedor' => 'Id Proveedor',
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

		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('idRegistroContable',$this->idRegistroContable,true);
		$criteria->compare('idCuentaPUC',$this->idCuentaPUC);
		$criteria->compare('idProveedor',$this->idProveedor);
		$criteria->compare('idUsuario',$this->idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function scuenta()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
    	$modelo =  new Usuario;
		$criteria = new CDbCriteria();
		$criteria->select='id_Usuario,nombreUsuario'	;
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);
		$array= $modelo->findall($criteria);
		$arr=array();
		foreach ($array as $key => $value) {
		$arr[]= $array[$key]->id_Usuario."|".$array[$key]->nombreUsuario;
		}
		return $arr;		
	}
	public function sProv()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
    	$modelo =  new Proveedor;
		$criteria = new CDbCriteria();
		$criteria->select='idProveedor,nombreProveedor'	;
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);
		$array= $modelo->findall($criteria);
		$arr=array();
		foreach ($array as $key => $value) {
		$arr[]= $array[$key]->idProveedor."|".$array[$key]->nombreProveedor;
		}
		return $arr;		
	}
	public function sCu()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
    	$modelo =  new Cuentapuc;
		$criteria = new CDbCriteria();
		$criteria->select='idCuentaPuc,nombreCuentaPUC'	;
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);
		$array= $modelo->findall($criteria);
		$arr=array();
		foreach ($array as $key => $value) {
		$arr[]= $array[$key]->idCuentaPuc."|".$array[$key]->nombreCuentaPuc;
		}
		return $arr;		
	}
	public function sett($value)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
    	$modelo =  new User;
		$criteria = new CDbCriteria();
		$criteria->select='username';	;
		$criteria->condition = 'id=:id';
		$criteria->params = array(':id'=>$value);
		$array= $modelo->find($criteria);
		echo $array->username;
		
		return $array->username;		
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registrocontablegastos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

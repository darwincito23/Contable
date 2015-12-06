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
 * @property string $Proveedor_idProveedor
 * @property string $CuentaPuc_idCuentaPuc
 *
 * The followings are the available model relations:
 * @property ConsolidadoGoaGov[] $consolidadoGoaGovs
 * @property Cuentapuc $cuentaPucIdCuentaPuc
 * @property Proveedor $proveedorIdProveedor
 * @property Usuario $usuarioIdUsuario
 */
class Registrocontablegastos extends CActiveRecord
{
	public $nproveedor;
	public $cproveedor;
	public $cprovedor;
	public $ccuenta;
	public $ncuenta;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Registrocontablegastos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function obtenerCodigoNombre($type)
	{
		$criteria = new CDbCriteria();
		switch ($type) {
				case 'proveedor':
				$criteria->select='codigoProveedor,nombreProveedor'	;
				//$criteria->condition = 'id=:id';
				//$criteria->params = array(':id'=>$id);
				$array=Proveedor::model()->findall($criteria);
				$arr=array();
				foreach ($array as $key => $value) {
				$arr[]= $array[$key]->codigoProveedor.'<->'.$array[$key]->nombreProveedor;
				}
				
				return $arr;
			case 'cuentapuc':
				
				$criteria->select='codigoCuentaPuc,nombreCuentaPuc'	;
				//$criteria->condition = 'id=:id';
				//$criteria->params = array(':id'=>$id);
				$array=Cuentapuc::model()->findall($criteria);
				$arr=array();
				foreach ($array as $key => $value) {
				$arr[]= $array[$key]->codigoCuentaPuc.'<->'.$array[$key]->nombreCuentaPuc;
				}
				
				return $arr;
		}
	}
	public function obtenerUnCodigoNombre($type,$id)
	{
		$criteria = new CDbCriteria();
		switch ($type) {
				case 'proveedor':
				$criteria->select='codigoProveedor,nombreProveedor'	;
				$criteria->condition = 'idProveedor=:id';
				$criteria->params = array(':id'=>$id);
				$array=Proveedor::model()->find($criteria);
				return $array->codigoProveedor.'<->'.$array->nombreProveedor;
				
				
				
			case 'cuentapuc':
				
				$criteria->select='codigoCuentaPuc,nombreCuentaPuc'	;
				$criteria->condition = 'idCuentaPuc=:id';
				$criteria->params = array(':id'=>$id);
				$array=Cuentapuc::model()->find($criteria);
				$arr=array();
				return $array->codigoCuentaPuc.'<->'.$array->nombreCuentaPuc;
			}
	}
	public function obtenerCodigo($type,$id)
	{
		$criteria = new CDbCriteria();
		switch ($type) {
				case 'proveedor':
				$criteria->select='codigoProveedor'	;
				$criteria->condition ='idProveedor=:id';
				$criteria->params =array(':id'=>$id);
				$array=Proveedor::model()->find($criteria);
				return $array->codigoProveedor;
				
				
				
			case 'cuentapuc':
				
				$criteria->select='codigoCuentaPuc,nombreCuentaPuc'	;
				$criteria->condition = 'idCuentaPuc=:id';
				$criteria->params = array(':id'=>$id);
				$array=Cuentapuc::model()->find($criteria);
				$arr=array();
				return $array->codigoCuentaPuc;
			}
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registrocontablegastos';
	}

	public function findId($type,$value)
	{
		$criteria=new CDbCriteria();
		
		switch ($type) {
			case 'proveedor':
			$criteria->select='idProveedor';
			$criteria->condition='codigoProveedor=:codigoProveedor';
			$criteria->params=array(':codigoProveedor'=>$value);
			$modelo=Proveedor::model()->find($criteria);
			return $modelo->idProveedor;
			case 'cuentapuc':
			$criteria->select='idCuentaPuc';
			$criteria->condition='codigoCuentaPuc=:codigoCuentaPuc';
			$criteria->params=array(':codigoCuentaPuc'=>$value);
			$modelo=CuentaPuc::model()->find($criteria);
			return $modelo->idCuentaPuc;
		}
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, valorRegistroContable, Proveedor_idProveedor, CuentaPuc_idCuentaPuc', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('Usuario_idUsuario', 'numerical', 'integerOnly'=>true,'message'=>'Debe Introducir un valor Entero'),
			array('valorRegistroContable', 'numerical','message'=>'Debe ingresar un valor numérico'),
			array('Proveedor_idProveedor, CuentaPuc_idCuentaPuc', 'length', 'max'=>50),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cprovedor,ccuenta,idRegistroContableGastos,fecha,valorRegistroContable, descripcion,Usuario_idUsuario,Proveedor_idProveedor,CuentaPuc_idCuentaPuc', 'safe', 'on'=>'search'),
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
			'consolidadoGoaGovs' => array(self::HAS_MANY, 'ConsolidadoGoaGov', 'RegistroContableGastos_idRegistroContableGastos'),
			'cuentaPucIdCuentaPuc' => array(self::BELONGS_TO, 'Cuentapuc', 'CuentaPuc_idCuentaPuc'),
			'proveedorIdProveedor' => array(self::BELONGS_TO, 'Proveedor', 'Proveedor_idProveedor'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRegistroContableGastos' => 'Id',
			'fecha' => 'Fecha',
			'valorRegistroContable' => 'Valor',
			'descripcion' => 'Descripcion',
			'Usuario_idUsuario' => 'Id Usuario',
			'Proveedor_idProveedor' => 'Id Proveedor',
			'CuentaPuc_idCuentaPuc' => 'Id cuentapuc',
		);
	}

	public  function getListProveedor($type){
	switch ($type) {
		case 'nombre':
		return cHtml::listData(Proveedor::model()->findall(),'idProveedor','nombreProveedor');
			# code...
		case 'codigo':
		return cHtml::listData(Proveedor::model()->findall(),'idProveedor','codigoProveedor');
		
		default:
			# code...
			break;
	}
	}
	public  function getListCuentaPuc($type){
	switch ($type) {
		case 'nombre':
			# code...
		return cHtml::listData(Cuentapuc::model()->findall(),'idCuentaPuc','nombreCuentaPuc');
		
		case 'codigo':
			# code...
		return cHtml::listData(Cuentapuc::model()->findall(),'idCuentaPuc','codigoCuentaPuc');
	}
	
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

		$criteria->with=array('proveedorIdProveedor','cuentaPucIdCuentaPuc');
		$criteria->compare('idRegistroContableGastos',$this->idRegistroContableGastos,true);
		$criteria->compare('Proveedor_idProveedor',$this->cprovedor,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('valorRegistroContable',$this->valorRegistroContable);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);
		$criteria->compare('Proveedor_idProveedor',$this->Proveedor_idProveedor,true);
		$criteria->compare('CuentaPuc_idCuentaPuc',$this->CuentaPuc_idCuentaPuc,true);
		$criteria->compare('CuentaPuc_idCuentaPuc',$this->ccuenta,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			
		));
	}
}
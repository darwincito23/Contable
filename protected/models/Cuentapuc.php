<?php

/**
 * This is the model class for table "cuentapuc".
 *
 * The followings are the available columns in table 'cuentapuc':
 * @property string $idCuentaPuc
 * @property string $nombreCuentaPuc
 * @property string $codigoCuentaPuc
 * @property string $TipoGasto_idTipoGasto
 * @property string $CuentaPadre
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Cuentapuc $cuentaPadre
 * @property Cuentapuc[] $cuentapucs
 * @property Tipogasto $tipoGastoIdTipoGasto
 * @property Usuario $usuarioIdUsuario
 * @property Registrocontablegastos[] $registrocontablegastoses
 */
class Cuentapuc extends CActiveRecord
{
	//Prefijo variable de instancia que contiene el código de la cuenta Padre.
	public $prefijo;

	//hascuentapadre variable de instancia que contiene.
	public $hascuentapadre;	

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cuentapuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public  function getListCuentaPuc($type)
	{

		switch ($type) 
		{
			case 'nombre':
				# code...
			return cHtml::listData(Cuentapuc::model()->findall(),'idCuentaPuc','nombreCuentaPuc');
			
			case 'codigo':
				# code...
			return cHtml::listData(Cuentapuc::model()->findall(),'idCuentaPuc','codigoCuentaPuc');
		}
	}
	/**
	 * [obtenerUnCodigoNombre description] Función que recibe un parámetro $id de la cuenta padre
	 * y busca por ese id el código y el nombre de la cuentaPUC asociada a ese id.
	 * @param  [type] $id [description] Id de clave foranea de la cuenta Padre
	 * @return [type]  array   [description] array de datos con la estructura codigoCuentaPuc<->nombreCuentaPuc
	 */
	public function obtenerUnCodigoNombre($id)
	{
		$criteria = new CDbCriteria();
				
				$criteria->select='codigoCuentaPuc,nombreCuentaPuc';
				$criteria->condition = 'idCuentaPuc=:id';
				$criteria->params = array(':id'=>$id);
				$array=Cuentapuc::model()->find($criteria);
				//$arr=array();
				return $array->codigoCuentaPuc.'<->'.$array->nombreCuentaPuc;
			
	}

	public function obtenerCodigo($id)
	{
		$criteria = new CDbCriteria();			
				$criteria->select='codigoCuentaPuc'	;
				$criteria->condition = 'idCuentaPuc=:id';
				$criteria->params = array(':id'=>$id);
				$array=Cuentapuc::model()->find($criteria);
				return $array->codigoCuentaPuc;
			
	}
	/**
	 * [obtenerCodigoNombre description] Función que buscar por codigoCuentaPuc y nombreCuentaPuc
	 * @return [type] [description]
	 */
	public function obtenerCodigoNombre()
	{
		//Instancia criteria de la clase CDbCriteria()
		$criteria = new CDbCriteria();	
		//select codigoCuentaPuc,nombreCuentaPuc from cuentapuc	
		$criteria->select='codigoCuentaPuc,nombreCuentaPuc';
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);		
		//Busca los registros codigoCuentaPuc, nombreCuentaPuc en el modelo Cuentapuc y los guarda en $array
		$array=Cuentapuc::model()->findall($criteria);
		//$arr=array();
		//recorre el $array a través del FOREACH y agrega los registros a un arreglo arr[] 
		foreach ($array as $key => $value) 
		{
			//arreglo que guarda el codigo y el nombre y agrega el simbolo <-> entre ellos
			$arr[]=$array[$key]->codigoCuentaPuc.' / '.$array[$key]->nombreCuentaPuc;
		}
		
		return $arr;
	}
	/**
	 * [findId description]
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public function findId($value)
	{
		$criteria=new CDbCriteria();
		//select idCuentaPuc from cuentapuc where codigoCuentaPuc=value	
		$criteria->select='idCuentaPuc';
		$criteria->condition='codigoCuentaPuc=:codigoCuentaPuc';
		$criteria->params=array(':codigoCuentaPuc'=>$value);			
		$modelo=Cuentapuc::model()->find($criteria);
		return $modelo->idCuentaPuc;
		
	}

	public  function getTipoGasto(){
	
		return cHtml::listData(TipoGasto::model()->findall(),'idTipoGasto','nombreTipoGasto');	
		
	}

	/**
	 * @return string the associated database table name
	 */
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
			array('nombreCuentaPuc, codigoCuentaPuc, TipoGasto_idTipoGasto', 'required'),
			array('Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombreCuentaPuc, codigoCuentaPuc', 'length', 'max'=>255),
			array('TipoGasto_idTipoGasto', 'length', 'max'=>10),
			array('CuentaPadre', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idCuentaPuc, nombreCuentaPuc, codigoCuentaPuc, TipoGasto_idTipoGasto, CuentaPadre, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'cuentaPadre' => array(self::BELONGS_TO, 'Cuentapuc', 'CuentaPadre'),
			'cuentapucs' => array(self::HAS_MANY, 'Cuentapuc', 'CuentaPadre'),
			'tipoGastoIdTipoGasto' => array(self::BELONGS_TO, 'Tipogasto', 'TipoGasto_idTipoGasto'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
			'registrocontablegastoses' => array(self::HAS_MANY, 'Registrocontablegastos', 'CuentaPuc_idCuentaPuc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCuentaPuc' => 'Id Cuenta Puc',
			'nombreCuentaPuc' => 'Nombre Cuenta Puc',
			'codigoCuentaPuc' => 'Codigo Cuenta Puc',
			'TipoGasto_idTipoGasto' => 'Tipo Gasto Id Tipo Gasto',
			'CuentaPadre' => 'Cuenta Padre',
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
		$criteria->with=array('tipoGastoIdTipoGasto');
		$criteria->compare('idCuentaPuc',$this->idCuentaPuc,true);
		$criteria->compare('idCuentaPuc',$this->nombreCuentaPuc,true);
		$criteria->compare('idCuentaPuc',$this->codigoCuentaPuc,true);
		$criteria->compare('TipoGasto_idTipoGasto',$this->TipoGasto_idTipoGasto,true);
		$criteria->compare('CuentaPadre',$this->CuentaPadre,true);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
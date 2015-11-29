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
	//public $hascuentapadre;
	
	/**
	 * Devuelve el modelo estático de la clase AR especificada. 
	 * @param string $className active record class name.
	 * @return Cuentapuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	

	/**
	 * [getListCuentaPuc description] Esta función recibe un parametro $type (nombre,codigo) el cual se valida para determinar las acciones
	 * del switch y retorna una lista de nombres o de codigos segun sea el caso.
	 * uso: Vista admin de cuentapuc
	 * @param  [type] $type [description] nombre, codigo
	 * @return [type]       [description] lista de nombres, lista de códigos
	 */
	public  function getListCuentaPuc($type)
	{
		switch ($type) 
		{
			case 'nombre':
			//listData: Genera los datos adecuados para elementos HTML basados en listas.
			//listData(array $models, mixed $valueField, mixed $textField, mixed $groupField='')
			//lisData(lista de objetos del modelo, valor del campo, texto del campo)
			return cHtml::listData(Cuentapuc::model()->findall(),'idCuentaPuc','nombreCuentaPuc');
			
			case 'codigo':				
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
		//Instancia criteria de la clase CDbCriteria()
		$criteria = new CDbCriteria();
		//select codigoCuentaPuc,nombreCuentaPuc from cuentapuc where idCuentaPuc=$id
		$criteria->select='codigoCuentaPuc,nombreCuentaPuc'	;
		$criteria->condition = 'idCuentaPuc=:id';
		$criteria->params = array(':id'=>$id);
		//busca los registros codigoCuentaPuc,nombreCuentaPuc de cuentapuc
		$array=Cuentapuc::model()->find($criteria);
		//$arr=array();
		//retorna $array que contiene codigoCuentaPuc,nombreCuentaPuc concatenados con el simbolo / entre ellos
		return $array->codigoCuentaPuc.' / '.$array->nombreCuentaPuc;		
	}

	/**
	 * [obtenerCodigo description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function obtenerCodigo($id)
	{
		//Instancia criteria de la clase CDbCriteria()
		$criteria = new CDbCriteria();	
		//select codigoCuentaPuc from cuentapuc where idCuentaPuc=$id'	
		$criteria->select='codigoCuentaPuc';
		$criteria->condition ='idCuentaPuc=:id';
		$criteria->params = array(':id'=>$id);
		//busca los registros codigoCuentaPuc de cuentapuc
		$array=Cuentapuc::model()->find($criteria);
		//retorna el array que contiene codigoCuentaPuc
		return $array->codigoCuentaPuc;			
	}

	/**
	 * [obtenerCodigoNombre description] Función que busca codigoCuentaPuc, nombreCuentaPuc 
	 * y lo guarda en una variable $array que despues es recorrida a través de una FOREACH
	 * y guardada en un arreglo arr[] concatenando el codigo de cuenta puc y el nombre de la cuenta puc
	 * con un / entre ellos, despues se retorna el arreglo arr.
	 * Uso: En la vista Create->_form de cuentapuc
	 * @return [type] arr [description] arreglo que guarda codigoCuentaPuc / nombreCuentaPuc
	 */
	public function obtenerCodigoNombre()
	{
		//Instancia criteria de la clase CDbCriteria()
		$criteria = new CDbCriteria();	
		//select codigoCuentaPuc,nombreCuentaPuc from cuentapuc		
		$criteria->select='codigoCuentaPuc,nombreCuentaPuc'	;
		//$criteria->condition = 'id=:id';
		//$criteria->params = array(':id'=>$id);
		//Busca los registros codigoCuentaPuc, nombreCuentaPuc en el modelo Cuentapuc y los guarda en $array
		$array=Cuentapuc::model()->findall($criteria);
		//$arr=array();
		//recorre el $array a través del FOREACH y agrega los registros a un arreglo arr[] 
		foreach ($array as $key => $value) 
		{
			//arreglo que guarda el codigo y el nombre y agrega el simbolo <-> entre ellos
			$arr[]= $array[$key]->codigoCuentaPuc.' / '.$array[$key]->nombreCuentaPuc;
		}			
		return $arr;
	}
	/**
	 * [findId description] Esta función busca la idCuentaPuc y la guarda en al variable $modelo
	 * y retorna $modelo que contiene la idCuentaPuc
	 * Uso: en el Controlador CuentapucController
	 * @param  [type] $value [description] prefijo (codigoCuentaPuc)
	 * @return [type] $modelo [description] idCuentaPuc
	 */
	public function findId($value)
	{
		//Instancia criteria de la clase CDbCriteria()
		$criteria=new CDbCriteria();
		//select idCuentaPuc from cuentapuc where codigoCuentaPuc=value
		$criteria->select='idCuentaPuc';
		$criteria->condition='codigoCuentaPuc=:codigoCuentaPuc';
		$criteria->params=array(':codigoCuentaPuc'=>$value);
		//Busca los registros idCuentaPuc en el modelo Cuentapuc y los guarda en $modelo
		$modelo=Cuentapuc::model()->find($criteria);
		return $modelo->idCuentaPuc;		
	}

	/**
	 * [getTipoGasto description]Esta función retorna una lista de nombre de tipos de gastos desde el modelo TipoGasto.
	 * @return [type] [description]
	 */
	public  function getTipoGasto()
	{	
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
	 * @return array personalizado de etiquetas de atributos (name=>label)
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
	 * Recupera una lista de los modelos basados en las actuales condiciones de búsqueda / filtro.
	 * @return CActiveDataProvider el proveedor de datos que puede retornar los modelos basados
	 * en las condiciones de busqueda y filtros.
	 */
	public function search()
	{
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
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
	public $fAprovechamiento;
	public $nombreProducto;
	public $cantidadProducto;
	public $costoProducto;
	public $fsAprovechamiento;
	public $costoParcial;
	public $producto;
	public $frenteaprovechamiento;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Consolidadoecpv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public  function getListProductos(){
	
		return cHtml::listData(Productos::model()->findall(),'idProductos','nombreProducto');
		
	}
	public  function getListFrenteA(){
	
		return cHtml::listData(Frenteaprovechamiento::model()->findall(),'idFrenteAprovechamiento','nombreFrenteAprovechamiento');
		
	}
	public  function getListFap($id){
	$criteria=new CDbCriteria();
	$criteria->condition='id_FrenteAprovechamiento=:id';
	$criteria->params=array(':id'=>$id);
	$mod=FrenteaprovechamientoProductos::model()->findall($criteria);
	$listData=array();
			foreach($mod as $model)
			{
				$value=CHtml::value($model,'idFrenteAprovechamiento_Productos');
				$text=self::getProducto($model->Productos_idProductos);
				$listData[$value]=$text->nombreProducto;
			}
	return $listData;		
		
	}
	public function getProducto($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idProductos=:id';
		$criteria->params=array(':id'=>$id);
		return Productos::model()->find($criteria);
		
	}
	public function getFrenteP($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idFrenteAprovechamiento_Productos=:id';
		$criteria->params=array(':id'=>$id);
		$modelo=FrenteaprovechamientoProductos::model()->find($criteria);
		 return $modelo->CostoUnitario;
		
	}
	public function getFrenteN($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idFrenteAprovechamiento=:id';
		$criteria->params=array(':id'=>$id);
		$modelo=Frenteaprovechamiento::model()->find($criteria);
		 return $modelo->nombreFrenteAprovechamiento;
		
	}
	public function getProductoN($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idProductos=:id';
		$criteria->params=array(':id'=>$id);
		$modelo= Productos::model()->find($criteria);
		return $modelo->nombreProducto;
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
			array('Registro_ECPV_idRegistro_ECPV', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
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
	public function searchAll($fechai,$fechaf,$frente,$producto)
	{
		$fechai==''?$fechai=10000101:$fechai=intval(preg_replace('/-/','',$fechai));
		$fechaf==''?$fechaf=99991231:$fechaf=intval(preg_replace('/-/','',$fechaf));
		$frente==''?$frente='%':$frente=$frente;
		$producto==''?$producto='%':$producto=$producto;
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$registroEcpv=new RegistroEcpv;
		$criteria=new CDbCriteria;
		$criteria->with=array('frenteAprovechamientoProductosFrenteAprovechamientoIdFA');
		$criteria->condition='fecha BETWEEN :fi AND :ff AND frenteAprovechamientoProductosFrenteAprovechamientoIdFA.id_FrenteAprovechamiento like :idfrente 
								AND frenteAprovechamientoProductosFrenteAprovechamientoIdFA.Productos_idProductos like :idproducto';
		//$this->registroContableGastosIdRegistroContableGastos=Registrocontablegastos::model()->findAll($criteria);
		//$criteria->condition='registroContableGastosIdRegistroContableGastos.fecha > :fechai AND registroContableGastosIdRegistroContableGastos.fecha<:fechaf';
		$criteria->params=array(':idfrente'=>$frente,':fi'=>$fechai,':ff'=>$fechaf,':idproducto'=>$producto);
		//$criteria->with=array('registroContableGastosIdRegistroContableGastos');
		//$criteria->compare('registroContableGastosIdRegistroContableGastos.fecha',$this->fecha,true);
		//$criteria->compare('Proveedor_idProveedor',$this->proveedor,true);
		return new CActiveDataProvider($registroEcpv, array(
			'criteria'=>$criteria
		));
	}
	
	public function calcularTotal($fechai,$fechaf,$frente,$producto)
	{
		$fechai==''?$fechai=10000101:$fechai=intval(preg_replace('/-/','',$fechai));
		$fechaf==''?$fechaf=99991231:$fechaf=intval(preg_replace('/-/','',$fechaf));
		$frente==''?$frente='%':$frente=$frente;
		$producto==''?$producto='%':$producto=$producto;
		$registroEcpv=new RegistroEcpv;
		$criteria=new CDbCriteria;
		$criteria->with=array('frenteAprovechamientoProductosFrenteAprovechamientoIdFA');
		$criteria->condition='fecha BETWEEN :fi AND :ff AND frenteAprovechamientoProductosFrenteAprovechamientoIdFA.id_FrenteAprovechamiento like :idfrente 
								AND frenteAprovechamientoProductosFrenteAprovechamientoIdFA.Productos_idProductos like :idproducto';
		$criteria->params=array(':idfrente'=>$frente,':fi'=>$fechai,':ff'=>$fechaf,':idproducto'=>$producto);
		$registros=$registroEcpv->findAll($criteria);
		if($registros!==array())
		{
			$total=array('cantidad'=>0,'total'=>0);
		foreach ($registros as $key => $value) {
			$total['total']+=($registros[$key]->cantidad)*(self::getFrenteP($registros[$key]->FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA));
			$total['cantidad']+=$registros[$key]->cantidad;
		}
		return $total;
		}else{ 
		return 0;	
		}
	}
}
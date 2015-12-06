<?php

/**
 * This is the model class for table "registro_ecpv".
 *
 * The followings are the available columns in table 'registro_ecpv':
 * @property integer $idRegistro_ECPV
 * @property string $cantidad
 * @property double $CostoTotalUnitario
 * @property string $fecha
 * @property string $FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA
 * @property double $costo_Total_Parcial
 *
 * The followings are the available model relations:
 * @property ConsolidadoEcpv[] $consolidadoEcpvs
 * @property FrenteaprovechamientoProductos $frenteAprovechamientoProductosFrenteAprovechamientoIdFA
 */
class RegistroEcpv extends CActiveRecord
{
	public $date;
	public $cantidad;
	public $nombrep;
	public $costop;
	public $costopp;
	public $idProductos;
	public $costoParcial;
	public $frenteA;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RegistroEcpv the static model class.
	 */
	public  function getListFap($id)
	{
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

	public function getFrenteN($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idFrenteAprovechamiento=:id';
		$criteria->params=array(':id'=>$id);
		$modelo=Frenteaprovechamiento::model()->find($criteria);
		 return $modelo->nombreFrenteAprovechamiento;
		
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
	public function getProductoN($id){
		$criteria= new CDbCriteria;
		$criteria->condition='idProductos=:id';
		$criteria->params=array(':id'=>$id);
		$modelo= Productos::model()->find($criteria);
		return $modelo->nombreProducto;
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro_ecpv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad','required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('CostoTotalUnitario', 'numerical'),
			array('cantidad', 'length', 'max'=>45),
			array('FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA', 'length', 'max'=>30),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRegistro_ECPV, cantidad, CostoTotalUnitario, fecha, FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA, costo_Total_Parcial', 'safe', 'on'=>'search'),
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
			'consolidadoEcpvs' => array(self::HAS_MANY, 'ConsolidadoEcpv', 'Registro_ECPV_idRegistro SPV'),
			'frenteAprovechamientoProductosFrenteAprovechamientoIdFA' => array(self::BELONGS_TO, 'FrenteaprovechamientoProductos', 'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRegistro_ECPV' => 'Id Registro Ecpv',
			'cantidad' => 'Cantidad',
			'CostoTotalUnitario' => 'Costo Total Unitario',
			'fecha' => 'Fecha',
			'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA' => 'Frente Aprovechamiento Productos Frente Aprovechamiento Id Fa',
			'costo_Total_Parcial' => 'Costo Total Parcial',
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

		$criteria->compare('idRegistro_ECPV',$this->idRegistro_ECPV);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('CostoTotalUnitario',$this->CostoTotalUnitario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$this->FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchId($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.


		
		$this->with(array(
						'frenteAprovechamientoProductosFrenteAprovechamientoIdFA'=>array(
							'condition'=>'id_FrenteAprovechamiento=:id',
							'params'=>array(
								':id'=>$id)
							)
						))->findAll();

		$criteria=new CDbCriteria;
	$criteria->condition='frenteAprovechamientoProductosFrenteAprovechamientoIdFA.id_FrenteAprovechamiento=:id';
	$criteria->params=array(':id'=>$id);
	$criteria->with=array('frenteAprovechamientoProductosFrenteAprovechamientoIdFA');
		//$criteria->compare('cantidad',$this->cantidad,true);
		//$criteria->compare('CostoTotalUnitario',$this->CostoTotalUnitario);
		//$criteria->compare('fecha',$this->fecha,true);
		//$criteria->compare('FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$this->FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function calcularTotal($id)
	{
		$Registroecpv=new RegistroEcpv;
		$criteria=new CDbCriteria;
	    $criteria->condition='frenteAprovechamientoProductosFrenteAprovechamientoIdFA.id_FrenteAprovechamiento=:id';
	    $criteria->params=array(':id'=>$id);
	    $criteria->with=array('frenteAprovechamientoProductosFrenteAprovechamientoIdFA');
		$registros=$Registroecpv->findAll($criteria);
		if($registros!==array())
		{
			$total=0;
		foreach ($registros as $key => $value) {
			$total+=($registros[$key]->cantidad)*(self::getFrenteP($registros[$key]->FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA));
		}
		return $total;
		}else{ 
		return 0;	
		}
	}
}
<?php

/**
 * This is the model class for table "frenteaprovechamiento_productos".
 *
 * The followings are the available columns in table 'frenteaprovechamiento_productos':
 * @property string $idFrenteAprovechamiento_Productos
 * @property string $Productos_idProductos
 * @property double $CostoUnitario
 * @property string $id_FrenteAprovechamiento
 *
 * The followings are the available model relations:
 * @property Frenteaprovechamiento $idFrenteAprovechamiento
 * @property Productos $productosIdProductos
 * @property RegistroEcpv[] $registroEcpvs
 */
class Frenteaprovechamientoproductos extends CActiveRecord
{
	public $nombre;
	public $costo;

	public  function getListFa()
	{	
		return cHtml::listData(Frenteaprovechamiento::model()->findall(),'idFrenteAprovechamiento','nombreFrenteAprovechamiento');
	}

	public  function getListProductos()
	{
		return cHtml::listData(Productos::model()->findall(),'idProductos','nombreProducto');		
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Frenteaprovechamientoproductos the static model class
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
		return 'frenteaprovechamiento_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Productos_idProductos', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('CostoUnitario', 'numerical'),
			array('idFrenteAprovechamiento_Productos, Productos_idProductos, id_FrenteAprovechamiento', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFrenteAprovechamiento_Productos, Productos_idProductos, CostoUnitario, id_FrenteAprovechamiento', 'safe', 'on'=>'search'),
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
			'idFrenteAprovechamiento' => array(self::BELONGS_TO, 'Frenteaprovechamiento', 'id_FrenteAprovechamiento'),
			'productosIdProductos' => array(self::BELONGS_TO, 'Productos', 'Productos_idProductos'),
			'registroEcpvs' => array(self::HAS_MANY, 'RegistroEcpv', 'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFrenteAprovechamiento_Productos' => 'Id Frente Aprovechamiento Productos',
			'Productos_idProductos' => 'Productos Id Productos',
			'CostoUnitario' => 'Costo Unitario',
			'id_FrenteAprovechamiento' => 'Id Frente Aprovechamiento',
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
		$criteria->compare('idFrenteAprovechamiento_Productos',$this->idFrenteAprovechamiento_Productos,true);
		$criteria->compare('Productos_idProductos',$this->Productos_idProductos,true);
		$criteria->compare('CostoUnitario',$this->CostoUnitario);
		$criteria->compare('id_FrenteAprovechamiento',$this->id_FrenteAprovechamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchId($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition='id_FrenteAprovechamiento=:id';
		$criteria->params=array(':id'=>$id);
		$criteria->with=array('idFrenteAprovechamiento','productosIdProductos');
		$criteria->compare('idFrenteAprovechamiento_Productos',$this->idFrenteAprovechamiento_Productos,true);
		$criteria->compare('Productos_idProductos',$this->Productos_idProductos,true);
		$criteria->compare('CostoUnitario',$this->CostoUnitario);
		$criteria->compare('id_FrenteAprovechamiento',$this->id_FrenteAprovechamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
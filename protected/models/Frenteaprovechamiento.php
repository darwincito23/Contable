<?php

/**
 * This is the model class for table "frenteaprovechamiento".
 *
 * The followings are the available columns in table 'frenteaprovechamiento':
 * @property string $idFrenteAprovechamiento
 * @property string $nombreFrenteAprovechamiento
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdUsuario
 * @property Productos[] $productoses
 */
class Frenteaprovechamiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Frenteaprovechamiento the static model class
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
		return 'frenteaprovechamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreFrenteAprovechamiento', 'required','message'=>'Por favor Escriba un valor para: {attribute}.'),
			array('Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombreFrenteAprovechamiento', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFrenteAprovechamiento, nombreFrenteAprovechamiento, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
			'productoses' => array(self::MANY_MANY, 'Productos', 'frenteaprovechamiento_has_productos(FrenteAprovechamiento_idFrenteAprovechamiento, Productos_idProductos)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFrenteAprovechamiento' => 'Id Frente Aprovechamiento',
			'nombreFrenteAprovechamiento' => 'Nombre Frente Aprovechamiento',
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

		$criteria->compare('idFrenteAprovechamiento',$this->idFrenteAprovechamiento,true);
		$criteria->compare('nombreFrenteAprovechamiento',$this->nombreFrenteAprovechamiento,true);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
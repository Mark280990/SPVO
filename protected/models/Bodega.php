<?php

/**
 * This is the model class for table "bodega".
 *
 * The followings are the available columns in table 'bodega':
 * @property integer $id
 * @property integer $id_producto
 * @property integer $id_pedido
 * @property string $numero
 */
class Bodega extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bodega the static model class
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
		return 'bodega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_producto, id_pedido, numero', 'required'),
			array('id_producto, id_pedido', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_producto, id_pedido, numero', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_producto' => 'Id Producto',
			'id_pedido' => 'Id Pedido',
			'numero' => 'Numero',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('id_pedido',$this->id_pedido);
		$criteria->compare('numero',$this->numero,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property integer $id
 * @property integer $id_factura
 * @property integer $id_cliente
 * @property integer $id_user
 * @property integer $id_producto
 * @property integer $id_pedidocompra
 * @property integer $total
 */
class Compra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_factura, id_cliente, id_user, id_producto, id_pedidocompra, total', 'required'),
			array('id_factura, id_cliente, id_user, id_producto, id_pedidocompra, total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_factura, id_cliente, id_user, id_producto, id_pedidocompra, total', 'safe', 'on'=>'search'),
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
			'id_factura' => 'Id Factura',
			'id_cliente' => 'Id Cliente',
			'id_user' => 'Id User',
			'id_producto' => 'Id Producto',
			'id_pedidocompra' => 'Id Pedidocompra',
			'total' => 'Total',
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
		$criteria->compare('id_factura',$this->id_factura);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('id_pedidocompra',$this->id_pedidocompra);
		$criteria->compare('total',$this->total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
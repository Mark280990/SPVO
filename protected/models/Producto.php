<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id
 * @property integer $id_pedido
 * @property integer $id_provedores
 * @property integer $id_bodega
 * @property integer $id_pedidocompra
 * @property integer $id_compra
 * @property string $nombre
 * @property string $categoria
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pedido, id_provedores, id_bodega, id_pedidocompra, id_compra, nombre, categoria', 'required'),
			array('id_pedido, id_provedores, id_bodega, id_pedidocompra, id_compra', 'numerical', 'integerOnly'=>true),
			array('nombre, categoria', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_pedido, id_provedores, id_bodega, id_pedidocompra, id_compra, nombre, categoria', 'safe', 'on'=>'search'),
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
			'id_pedido' => 'Id Pedido',
			'id_provedores' => 'Id Provedores',
			'id_bodega' => 'Id Bodega',
			'id_pedidocompra' => 'Id Pedidocompra',
			'id_compra' => 'Id Compra',
			'nombre' => 'Nombre',
			'categoria' => 'Categoria',
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
		$criteria->compare('id_pedido',$this->id_pedido);
		$criteria->compare('id_provedores',$this->id_provedores);
		$criteria->compare('id_bodega',$this->id_bodega);
		$criteria->compare('id_pedidocompra',$this->id_pedidocompra);
		$criteria->compare('id_compra',$this->id_compra);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('categoria',$this->categoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
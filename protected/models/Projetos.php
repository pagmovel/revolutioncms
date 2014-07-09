<?php

/**
 * This is the model class for table "tb_projetos".
 *
 * The followings are the available columns in table 'tb_projetos':
 * @property integer $id
 * @property string $data_cadastro
 * @property string $projeto
 * @property string $data_inicio
 * @property string $data_conclusao
 * @property integer $id_cliente
 *
 * The followings are the available model relations:
 * @property Clientes $idCliente
 * @property ProjetosTarefas[] $projetosTarefases
 */
class Projetos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_projetos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_cadastro, projeto, data_inicio, data_conclusao, id_cliente', 'required'),
			array('id_cliente', 'numerical', 'integerOnly'=>true),
			array('projeto', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, data_cadastro, projeto, data_inicio, data_conclusao, id_cliente', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Clientes', 'id_cliente'),
			'projetosTarefases' => array(self::HAS_MANY, 'ProjetosTarefas', 'id_projeto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data_cadastro' => 'Data Cadastro',
			'projeto' => 'Projeto',
			'data_inicio' => 'Data Inicio',
			'data_conclusao' => 'Data Conclusao',
			'id_cliente' => 'Id Cliente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('projeto',$this->projeto,true);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_conclusao',$this->data_conclusao,true);
		$criteria->compare('id_cliente',$this->id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projetos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

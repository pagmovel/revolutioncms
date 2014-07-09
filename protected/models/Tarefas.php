<?php

/**
 * This is the model class for table "tb_projetos_tarefas".
 *
 * The followings are the available columns in table 'tb_projetos_tarefas':
 * @property string $observacao
 * @property integer $id
 * @property integer $id_projeto
 * @property string $inicio
 * @property string $termino
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property Tarefas $id0
 * @property Tarefas $projetosTarefas
 * @property Projetos $idProjeto
 */
class Tarefas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_projetos_tarefas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('observacao, id_projeto, descricao', 'required'),
			array('id_projeto', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>200),
			array('inicio, termino', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('observacao, id, id_projeto, inicio, termino, descricao', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Tarefas', 'id'),
			'projetosTarefas' => array(self::HAS_ONE, 'Tarefas', 'id'),
			'idProjeto' => array(self::BELONGS_TO, 'Projetos', 'id_projeto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'observacao' => 'Observacao',
			'id' => 'ID',
			'id_projeto' => 'Id Projeto',
			'inicio' => 'Inicio',
			'termino' => 'Termino',
			'descricao' => 'Descricao',
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

		$criteria->compare('observacao',$this->observacao,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('id_projeto',$this->id_projeto);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('termino',$this->termino,true);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tarefas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

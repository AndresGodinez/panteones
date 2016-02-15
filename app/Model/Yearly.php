<?php
App::uses('AppModel', 'Model');
/**
 * Yearly Model
 *
 * @property Perpetuity $Perpetuity
 */
class Yearly extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'year';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'year' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'receipt' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Perpetuity' => array(
			'className' => 'Perpetuity',
			'foreignKey' => 'perpetuity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

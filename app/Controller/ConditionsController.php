<?php
App::uses('AppController', 'Controller');
/**
 * Conditions Controller
 *
 * @property Condition $Condition
 * @property PaginatorComponent $Paginator
 */
class ConditionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Condition->recursive = 0;
		$this->set('conditions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Condition->exists($id)) {
			throw new NotFoundException(__('Datos Inválidos'));
		}
		$options = array('conditions' => array('Condition.' . $this->Condition->primaryKey => $id));
		$this->set('condition', $this->Condition->find('first', $options));
		/* 
		*/
		$this->loadModel('Perpetuity');
		$NombreTitular = $this->Perpetuity->find('all', 
			array(
				 'order' => 'Perpetuity.folio ',
				 'conditions'=>array('Perpetuity.condition_id'=>$id)
				 )
			);

		$this->set('titular',$NombreTitular);
		// $titulars = $this->Perpetuity->Titular->find('list');
		// $cementeries = $this->Perpetuity->Cementery->find('list');
		// $conditions = $this->Condition->find('first',$options);
		// $nameTitular= Perpetuity::hola();
		// $colors='Paco tooro';
		// $this->set(compact('conditions','colors'));
		// $this->set(compact('titulars', 'cementeries', 'conditions'));
		/* */
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Condition->create();
			if ($this->Condition->save($this->request->data)) {
				$this->Session->setFlash('Estatus Agregado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrio un problema','default',array('class'=>'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Condition->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Condition->save($this->request->data)) {
				$this->Session->setFlash('Impuesto Actualizado', 'default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No pudo ser actualizado','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Condition.' . $this->Condition->primaryKey => $id));
			$this->request->data = $this->Condition->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Condition->id = $id;
		if (!$this->Condition->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Condition->delete()) {
			$this->Session->setFlash('Estatus eliminado','default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('Estatus no pudo ser eliminado','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

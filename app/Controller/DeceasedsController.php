<?php
App::uses('AppController', 'Controller');
/**
 * Deceaseds Controller
 *
 * @property Deceased $Deceased
 * @property PaginatorComponent $Paginator
 */
class DeceasedsController extends AppController {

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
		$this->Deceased->recursive = 0;
		$this->set('deceaseds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deceased->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Deceased.' . $this->Deceased->primaryKey => $id));
		$this->set('deceased', $this->Deceased->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deceased->create();
			if ($this->Deceased->save($this->request->data)) {
				$this->Session->setFlash('Defunción Añadida', 'default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Defunción no pudo ser añadida', 'default',array('class'=>'alert alert-danger'));
			}
		}
		$perpetuities = $this->Deceased->Perpetuity->find('list');
		$this->set(compact('perpetuities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deceased->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deceased->save($this->request->data)) {
				$this->Session->setFlash('Defunción actualizada','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Defunción no puedo ser guardada','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Deceased.' . $this->Deceased->primaryKey => $id));
			$this->request->data = $this->Deceased->find('first', $options);
		}
		$perpetuities = $this->Deceased->Perpetuity->find('list');
		$this->set(compact('perpetuities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deceased->id = $id;
		if (!$this->Deceased->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deceased->delete()) {
			$this->Session->setFlash('Defunción eliminada','default',array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('Defunción no pudo ser eliminada','default',array('class'=>' alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

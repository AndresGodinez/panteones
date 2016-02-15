<?php
App::uses('AppController', 'Controller');
/**
 * Yearlies Controller
 *
 * @property Yearly $Yearly
 * @property PaginatorComponent $Paginator
 */
class YearliesController extends AppController {

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
		$this->Yearly->recursive = 0;
		$this->set('yearlies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Yearly->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Yearly.' . $this->Yearly->primaryKey => $id));
		$this->set('yearly', $this->Yearly->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Yearly->create();
			if ($this->Yearly->save($this->request->data)) {
				$this->Session->setFlash('Pago anual registrado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrio un error','default',array('class'=>'alert alert-danger'));
			}
		}
		$perpetuities = $this->Yearly->Perpetuity->find('list');
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
		if (!$this->Yearly->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Yearly->save($this->request->data)) {
				$this->Session->setFlash('Pago actualizado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Pago mantenimiento anual no pudo ser guardado','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Yearly.' . $this->Yearly->primaryKey => $id));
			$this->request->data = $this->Yearly->find('first', $options);
		}
		$perpetuities = $this->Yearly->Perpetuity->find('list');
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
		$this->Yearly->id = $id;
		if (!$this->Yearly->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Yearly->delete()) {
			$this->Session->setFlash('Pago eliminado','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('No se pudo eliminar el pago', 'default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Taxes Controller
 *
 * @property Tax $Tax
 * @property PaginatorComponent $Paginator
 */
class TaxesController extends AppController {

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
		$this->Tax->recursive = 0;
		$this->set('taxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tax->exists($id)) {
			throw new NotFoundException(__('Invalid tax'));
		}
		$this->loadModel('Record');
		$Record = $this->Record->find('all',
			array(
				'order'=>'name',
				'conditions'=>array('Record.tax_id'=>$id)
				)
			);
		$this->set('ingreso', $Record);
		$options = array('conditions' => array('Tax.' . $this->Tax->primaryKey => $id));
		$this->set('tax', $this->Tax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tax->create();
			if ($this->Tax->save($this->request->data)) {
				$this->Session->setFlash('Impuesto añadido','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Impuesto no pudo ser creado','default',array('class'=>'alert alert-danger'));
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
		if (!$this->Tax->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tax->save($this->request->data)) {
				$this->Session->setFlash('Impuesto Actualizado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ha ocurrido un error','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tax.' . $this->Tax->primaryKey => $id));
			$this->request->data = $this->Tax->find('first', $options);
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
		$this->Tax->id = $id;
		if (!$this->Tax->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tax->delete()) {
			$this->Session->setFlash('Impuesto Eliminado', 'default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrio un error', 'default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Titulars Controller
 *
 * @property Titular $Titular
 * @property PaginatorComponent $Paginator
 */
class TitularsController extends AppController {

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
		$this->Titular->recursive = 0;
		$this->set('titulars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Titular->exists($id)) {
			throw new NotFoundException(__('Datos Inválidos'));
		}
		$this->loadModel('Perpetuity');
		$perpetuidad=$this->Perpetuity->find('all',
			array(
				'order'=>'folio',
				'conditions'=>array('Perpetuity.titular_id'=>$id)
				)
			);
		$this->set('perpetuidades',$perpetuidad);
		$this->loadModel('Record');
		$pagos=$this->Record->find('all',
			array(
				'order'=>'tax_id',
				'conditions'=>array(
					'Record.titular_id'=>$id
					)
				)
			);
		$this->set('pagos',$pagos);
		$options = array('conditions' => array('Titular.' . $this->Titular->primaryKey => $id));
		$this->set('titular', $this->Titular->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Titular->create();
			if ($this->Titular->save($this->request->data)) {
				$this->Session->setFlash('Titular agregado','default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrio un error al guardar','default',array('class'=>'alert alert-danger'));
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
		if (!$this->Titular->exists($id)) {
			throw new NotFoundException('Datos invalidos','default',array('class'=>'alert alert-danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Titular->save($this->request->data)) {
				$this->Session->setFlash('Datos Actualizados','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrio un error al guardar','default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Titular.' . $this->Titular->primaryKey => $id));
			$this->request->data = $this->Titular->find('first', $options);
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
		$this->Titular->id = $id;
		if (!$this->Titular->exists()) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Titular->delete()) {
			$this->Session->setFlash('Titular eliminado','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrio un error','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

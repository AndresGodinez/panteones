<?php
App::uses('AppController', 'Controller');
/**
 * Cementeries Controller
 *
 * @property Cementery $Cementery
 * @property PaginatorComponent $Paginator
 */
class CementeriesController extends AppController {

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
		$this->Cementery->recursive = 0;
		$this->set('cementeries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cementery->exists($id)) {
			throw new NotFoundException(__('Dato inválido'));
		}
		$this->loadModel('Perpetuity');
		$NombreTitular = $this->Perpetuity->find('all', 
			array(
				 'order' => 'Perpetuity.folio ',
				 'conditions'=>array('Perpetuity.cementery_id'=>$id)
				 )
			);

		$this->set('titular',$NombreTitular);
		//
		$options = array('conditions' => array('Cementery.' . $this->Cementery->primaryKey => $id));
		$this->set('cementery', $this->Cementery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cementery->create();
			if ($this->Cementery->save($this->request->data)) {
				$this->Session->setFlash('Panteón agregado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El panteón no pudo ser agregado',array('class'=>'alert alert-danger'));
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
		if (!$this->Cementery->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cementery->save($this->request->data)) {
				$this->Session->setFlash('Panteón Actualizado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El panteón no pudo ser actualizado',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Cementery.' . $this->Cementery->primaryKey => $id));
			$this->request->data = $this->Cementery->find('first', $options);
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
		$this->Cementery->id = $id;
		if (!$this->Cementery->exists()) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cementery->delete()) {
			$this->Session->setFlash('Panteón eliminado','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrio un problema al eliminar','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

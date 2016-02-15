<?php
App::uses('AppController', 'Controller');
/**
 * Perpetuities Controller
 *
 * @property Perpetuity $Perpetuity
 * @property PaginatorComponent $Paginator
 */
class PerpetuitiesController extends AppController {

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
		$this->Perpetuity->recursive = 0;
		$this->set('perpetuities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Perpetuity->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Perpetuity.' . $this->Perpetuity->primaryKey => $id));
		$this->set('perpetuity', $this->Perpetuity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Perpetuity->create();
			if ($this->Perpetuity->save($this->request->data)) {
				$this->Session->setFlash('Alta Exitosa','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Perpetuidad no pudo ser guardada','default',array('class'=>'alert alert-danger'));
			}
		}
		$titulars = $this->Perpetuity->Titular->find('list');
		$cementeries = $this->Perpetuity->Cementery->find('list');
		$conditions = $this->Perpetuity->Condition->find('list');
		$this->set(compact('titulars', 'cementeries', 'conditions'));
	}
/**
 * Alta method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */	
public function alta($id_t=null) {
	if($id_t){
		if ($this->request->is('post')) 
		{
			$titulars = $this->Perpetuity->Titular->find('list');
			$cementeries = $this->Perpetuity->Cementery->find('list');
			$conditions = $this->Perpetuity->Condition->find('list');
			$this->set(compact('titulars', 'cementeries', 'conditions'));
			$this->Perpetuity->create();
			$this->request->data['Perpetuity']['titular_id']=$id_t;
			if(array_key_exists('folio', $this->request->data['Perpetuity']))
				{
				if ($this->Perpetuity->save($this->request->data)) 
					{
						$this->Session->setFlash('Perpetuidad Añadida','default',array('class'=>'alert alert-success'));
						return $this->redirect(array('action' => 'index'));
						} 
				else 
					{
						$this->Session->setFlash('Perpetuidad no pudo ser guardada','default',array('class'=>'alert alert-danger'));
					}
				}
			}
		}
	else
	{
		throw new NotFoundException('Datos inválidos');
	}
}


/*
Fin Alta
*/
/* Guardar Perpetuidad method
*/
	public function guardarP()
	{
		print_r($this->request->data);
	}
/*
*/
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Perpetuity->exists($id)) {
			throw new NotFoundException(__('Invalid perpetuity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Perpetuity->save($this->request->data)) {
				$this->Session->setFlash('Perpetuidad Actualizada','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Perpetuidad no pudo ser guardada','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Perpetuity.' . $this->Perpetuity->primaryKey => $id));
			$this->request->data = $this->Perpetuity->find('first', $options);
		}
		$titulars = $this->Perpetuity->Titular->find('list');
		$cementeries = $this->Perpetuity->Cementery->find('list');
		$conditions = $this->Perpetuity->Condition->find('list');
		$this->set(compact('titulars', 'cementeries', 'conditions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Perpetuity->id = $id;
		if (!$this->Perpetuity->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Perpetuity->delete()) {
			$this->Session->setFlash('Perpetuidad eliminada', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('Perpetuidad no pudo ser Eliminada','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

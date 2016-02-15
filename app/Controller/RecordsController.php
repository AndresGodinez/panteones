<?php
App::uses('AppController', 'Controller');
/**
 * Records Controller
 *
 * @property Record $Record
 * @property PaginatorComponent $Paginator
 */
class RecordsController extends AppController {

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
		$this->Record->recursive = 0;
		$this->set('records', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
		$this->set('record', $this->Record->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idTitular=null) {
		echo($idTitular);
			if ($this->request->is('post')) {
				$this->Record->create();

				if ($this->Record->save($this->request->data)) {
					$this->Session->setFlash('Ingreso registrado','default',array('class'=>'alert alert-success'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Ingreso no pudo ser ingresado', 'default',array('class'=>'alert alert-danger'));
					}
				}
				$titulars = $this->Record->Titular->find('list', 
					array(
						'order'=>'Titular.fullname',
						'conditions'=>array('Titular.id'=>$idTitular)
					));
				$taxes = $this->Record->Tax->find('list');
				$perpetuities = $this->Record->Perpetuity->find('list',
					array(
						'order'=>'Perpetuity.folio',
						'conditions'=>array('Titular.id'=>'$idTitular')
						)
					);
				$this->set(compact('titulars', 'taxes', 'perpetuities'));
	}

/*
metodo alta pago
*/
public function alta($idTitular=null) {
	if ($this->request->is('post')) {
		$titulars = $this->Record->Titular->find('list', 
			array(
				'order'=>'Titular.fullname',
				'conditions'=>array('Titular.id'=>$idTitular)
			));
		$taxes = $this->Record->Tax->find('list',
			array(
				'conditions'=>array('Tax.id !='=>1)
				)
			);
		$this->loadModel('Tax');
		$impuestos=$this->Tax->find('all');
		$this->set('impuestos',$impuestos);
		$perpetuities = $this->Record->Perpetuity->find('list',
			array(
				'order'=>'Perpetuity.folio',
				'conditions'=>array('Perpetuity.titular_id'=>$idTitular)
				)
			);
		$salariomin= $this->Record->Tax->findById(1);
		$this->set(compact('titulars', 'taxes', 'perpetuities','salariomin'));
		$this->Record->create();
		$this->request->data['Record']['prueba']="prueba";
		if(array_key_exists('amount', $this->request->data['Record']))
				{
				if ($this->Record->save($this->request->data)) {
					$this->Session->setFlash('Ingreso registrado','default',array('class'=>'alert alert-success'));
					return $this->redirect(array('action' => 'index'));
				} 
			else {
					$this->Session->setFlash('Ingreso no pudo ser ingresado', 'default',array('class'=>'alert alert-danger'));
				}
			}
	}else{
		throw new NotFoundException('Datos invalidos');
		
	}
}
/*
Fin Metodo Alta
*/

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash('Pago Actualizado','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No pudo ser actualizado','defautl',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
			$this->request->data = $this->Record->find('first', $options);
		}
		$titulars = $this->Record->Titular->find('list');
		$taxes = $this->Record->Tax->find('list');
		$perpetuities = $this->Record->Perpetuity->find('list');
		$this->set(compact('titulars', 'taxes', 'perpetuities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Record->id = $id;
		if (!$this->Record->exists()) {
			throw new NotFoundException(__('Invalid record'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Record->delete()) {
			$this->Session->setFlash('Ingreso eliminado','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ingreso no pudo ser eliminado','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

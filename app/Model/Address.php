<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 * @property Esschools $Esschools
 * @property Hsschools $Hsschools
 * @property Msschools $Msschools
 */
class Address extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Address';

        
         /**
     * jsonStreetList()
     * 
     * gets a list of Dearborn streets - to be fed to Ajax calls
     * 
     * @name    jsonStreetList()
     * @author Scott Tobias
     * @return json String $JSONStreets
     */
 
       
        public function jsonStreetNumList($StreetID){
        $StreetNumbers = $this->find('list',array(
                    'recursive' => -1,
                    'conditions' => array('Street_id' => $StreetID),
                    'fields' => array('id','Address'),
                    'order' => array('Address' => 'asc')
                )); 
        
            $sa = array();
            $streetList = array();
            foreach ($StreetNumbers as $key => $value) {
                $sa['label'] = $value; 
                $sa['value'] = $value;
                $sa['id'] = $key;
                array_push($streetList, $sa);   
            }
           return  $JSONStreets = json_encode($streetList);
       }  
        
        
        
        

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Esschools' => array(
			'className' => 'Esschools',
			'foreignKey' => 'esschools_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hsschools' => array(
			'className' => 'Hsschools',
			'foreignKey' => 'hsschools_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Msschools' => array(
			'className' => 'Msschools',
			'foreignKey' => 'msschools_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

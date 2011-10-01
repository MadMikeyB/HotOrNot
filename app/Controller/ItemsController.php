<?php
App::uses('Sanitize', 'Utility');
class ItemsController extends AppController {
    public $name = 'Items';
    public $uses = array('Item', 'Vote');
    
    
    public function index() {
        $this->set('title_for_layout', 'All Contenders');
        $this->set('items', $this->Item->find('all'));
    }
    
    function homepage() {
        $this->set('title_for_layout', 'Vote!');
        $items = $this->Item->find('all');
        $tags = array(); // init empty array
        foreach ($items as $item) {
            $item['Item']['tags'] = explode(',', $item['Item']['tags']); // explode "music, actress, tv show" into "music" "actress" "tv show"
            $tags[] = $item['Item']['tags'];
        }
        $rand_tag = array_rand($tags, 1);
        $randItem = $this->Item->find('all', array('conditions' => array('Item.tags LIKE' => trim('%'.$tags[$rand_tag]['0'].'%'))));
        shuffle($randItem);
        $this->set('items', $randItem);
        $this->set('votecountone', $this->Vote->find('count', array('conditions' => array('Vote.item_id' => $randItem['0']['Item']['id']))));
        $this->set('votecounttwo', $this->Vote->find('count', array('conditions' => array('Vote.item_id' => $randItem['1']['Item']['id']))));
        //debug($randItem);
        
        $top = $this->Vote->query("SELECT v.item_id, COUNT( item_id ) AS count
FROM votes AS v
GROUP BY v.item_id
ORDER BY count DESC 
LIMIT 5");
        $top_contenders = array();
        
        foreach ($top as $t) {
          $top_contenders[] = $this->Item->findById($t['v']['item_id']);  
        }
        
        $this->set('top', $top_contenders);
    }
    
    public function add() {
        $this->set('title_for_layout', 'Add Contender');
        if ($this->request->is('post')) {
            $this->request->data = Sanitize::clean($this->request->data);
            if ($this->Item->save($this->request->data)) {
                $this->flash('Item Added', '/items', '2');
            }
        }
    }
    
    public function top() {
        $top = $this->Vote->query("SELECT v.item_id, COUNT( item_id ) AS count
FROM votes AS v
GROUP BY v.item_id
ORDER BY count DESC 
LIMIT 5");
        $top_contenders = array();
        
        foreach ($top as $t) {
          $top_contenders[] = $this->Item->findById($t['v']['item_id']);  
        }
        
        $this->set('top', $top_contenders);
        
    }
    
    public function versus($one, $two) {
        $this->set('one', $this->Item->findById($one));
        $this->set('two', $this->Item->findById($two));
        $this->set('votecountone', $this->Vote->find('count', array('conditions' => array('Vote.item_id' => $one))));
        $this->set('votecounttwo', $this->Vote->find('count', array('conditions' => array('Vote.item_id' => $two))));
    }
}
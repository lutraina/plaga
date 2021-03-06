<?php
	class IndexController extends AppController{
		public $name = 'Index';
		
		public function beforeFilter(){
			parent::beforeFilter();
			
		}
		
		public function index(){
			$this->loadModel('Galeria');
			$this->loadModel('Slide');
			$this->loadModel('News');
			$this->loadModel('Regioes');
			$this->loadModel('Business');
			$this->loadModel('Auto');
			$this->loadModel('Imovei');
			$this->loadModel('Banner');
			
			
			//banner topo du header 
	    	$this->set('bannerTopo', $this->_getBanners('btopohome', 1 , 'home', 'first')); /*banner topo header 728x90*/
			$bannertopo = $this->_getBanners('btopohome', 1 , 'home', 'first');
			//debug($bannertopo);
			
			//regioes
			$this->set('regioes', $this->Regioes->find('all',array('limit'=>6,'order'=>array('Regioes.id'=>'ASC'))));
			debug($this->Regioes->find('all',array('limit'=>6,'order'=>array('Regioes.id'=>'ASC'))));
			
			
			//banner topo ao lado da busca
	    	$this->set('bannerOferecimento', $this->_getBanners('b1_tb', 1 , 'topo', 'first')); /*banner topo header 728x90*/
	    
	    
			//Galeria de fotos
			$this->set('galerias', $this->Galeria->find('all',array('conditions'=>array('Galeria.home'=>'sim'),'order'=>array('Galeria.modified'=>'DESC'))));
			
			//slide show
			$this->set('slides', $this->Slide->find('all',array('limit'=>3,'conditions'=>array('Slide.status'=>'sim'),'order'=>array('Slide.ordem'=>'ASC'))));
			
			//noticias
			$this->set('newshome', $this->News->find('all',array('limit'=>6,'order'=>array('News.id'=>'DESC'))));
			//debug($this->News->find('all',array('limit'=>6,'order'=>array('News.id'=>'DESC'))));
			
			//Gastronomia
			$this->set('gastronomiashome', $this->Business->find('all',array('limit'=>3,'conditions'=>array('Business.home'=>'sim','Business.type'=>'gastronomia'),'order'=>array('Business.id'=>'DESC'))));
			
			//Diversão
			$this->set('diversaohome', $this->Business->find('all',array('limit'=>3,'conditions'=>array('Business.home'=>'sim','Business.type'=>'diversao'),'order'=>array('Business.id'=>'DESC'))));
			
			//Diversão
			$this->set('bemestarhome', $this->Business->find('all',array('limit'=>3,'conditions'=>array('Business.home'=>'sim','Business.type'=>'bem-estar'),'order'=>array('Business.id'=>'DESC'))));
			
			//Autos
			$this->set('autos', $this->Auto->find('all',array('conditions'=>array('Auto.status'=>'sim', 'Auto.home'=>'sim'),'order'=>array('Auto.id'=>'DESC'))));
			$this->set('autosUltimos', $this->Auto->find('all',array('conditions'=>array('Auto.status'=>'sim', 'Auto.home'=>'nao'),'order'=>array('Auto.id'=>'DESC'))));
			//Autos
			$this->set('imoveis', $this->Imovei->find('all',array('conditions'=>array('Imovei.home'=>'sim', 'Imovei.home'=>'sim'),'order'=>array('Imovei.id'=>'DESC'))));
			$this->set('imoveisUltimos', $this->Imovei->find('all',array('conditions'=>array('Imovei.status'=>'sim', 'Imovei.home'=>'nao'),'order'=>array('Imovei.id'=>'DESC'))));
			
			
			
			/*
			 * Banner Horizontal Bloco Gastronomia [635 X 75]
			 * Ref.b2_bhbgh
			 */
			
			$this->set('banner_home_gastronomia', $this->_getBanners('b2_bhbgh', 1, '2', 'all')); /*Banner Horizontal Bloco Gastronomia [635 X 75]*/
			//debug($this->_getBanners('b2_bhbgh', 1, '2', 'first'));
			 
			 
			/*
			 * Banner Vertical Bloco Bem Estar [60 X 310]
			 * Ref. b3_bvbbe
			 */
			
			$this->set('banner_home_bem_estar',$this->_getBanners('b3_bvbbe', 1, '4', 'all')); /*Banner Vertical Bloco Bem Estar [60 X 310]*/
			//debug($this->_getBanners('b3_bvbbe', 1, 'home', 'all'));			
			
			
			/*
			 * Banner do bloco abaixo da vantagem do dia na home..
			 * 
			 * Referencia b4_bgb1
			 * */
			
			$this->set('banner_home_group_banners1',$this->_getBanners('b4_bgb1',3,'4','all'));/*banner lateral vertical ver*/		
		
			/*
			 * Banner do bloco abaix dos blocos galerias e agenda..
			 * 
			 * Referencia b4_bgb1
			 * */
			
			$this->set('banner_home_group_banners2',$this->_getBanners('b5_bgb2',4,'5','all'));/*banner lateral vertical ver*/
			
			 
		}		


		
		
}
	

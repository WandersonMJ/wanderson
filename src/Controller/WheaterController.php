<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;

class WheaterController extends AppController
{


	public function index(){
			$http = new Client();
  	  if ($this->request->is('post')) {
     		$data = $this->request->data;
     		
     		$response = $http->get('http://viacep.com.br/ws/'.$data['cep'].'/json/');
     		$response = json_decode($response->body, true);
     
        if(!empty($response['erro']) || empty($response)){
          $this->Flash->error('Cep invalido.');
        }else{
          $this->set('cep', $data['cep']);
          // pr($data);exit;
        	$logradouro = $response["logradouro"];
    			$localidade = $response['localidade'];
    			$this->set(compact('localidade', 'logradouro'));

    			$wheater = $http->get('https://api.hgbrasil.com/weather?key=76a74ba0&user_ip=remote');
    			$ip = $_SERVER['REMOTE_ADDR'];
    			$wheater = json_decode($wheater->body, true);
    			$temperatura = $wheater['results']['temp'];
    			$tempo = $wheater['results']['description'];
    			$humidade = $wheater['results']['humidity'];
    			$vento = $wheater['results']['wind_speedy'];
    			$this->set(compact('tempo', 'temperatura', 'humidade', 'vento'));
    
          $dados = [
          'ip' => $ip,
          'local' => $logradouro,
          'cidade' => $localidade,
          'cep' => $data['cep'],
          'temperatura' => $temperatura,
          'tempo' => $tempo,
          'humidade' => $humidade,
          'vento' => $vento
          ];

          $this->loadModel('Registers');
          $register = $this->Registers->newEntity($dados);
          $this->Registers->save($register);
  	   }
    }
  }
  public function history(){
      $this->loadModel('Registers');
      $query = $this->Registers->find('all',
      ['order'=>['created'=>'DESC']
      ]);
      $query->hydrate(false);
      $history  = $query->toArray();
      $this->set(compact('history'));

  }
}
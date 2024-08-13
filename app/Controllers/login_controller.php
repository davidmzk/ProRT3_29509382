<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
	public function index()
	{
		helper(['form','url']);

		$dato['titulo']='login';
		echo view('front/head_view',$dato);
		echo view('front/nav_view');
		echo view('Back/usuario/login');
		echo view('front/footer_view');

	}

	public function auth()
	{
		$session = session();
		$model = new usuario_Model(); 

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass');

		$data = $model->where('email',$email)->first();
		if($data){
			$pass = $data['pass'];
			$ba= $data['baja'];
			if ($ba =='SI'){
				$session->setFlashdata('msg','usuario dado de baja');
				return redirect()->to('/login_controller');
			}
		//se verifican los datos ingresados para iniciar, si cumple la verificación iinicia la session

			$verify_pass = password_verify($password, $pass);
		// password_verify determina los requisitos de configuración de la contraseña
			if ($verify_pass){
				$ses_data = [
					'id_usuario' => $data['id_usuario'],

				]
			}

		}


	}


}


 ?>
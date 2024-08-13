<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
	protected $table = 'usuarios'; 
	protected $primarykey = 'id_usuario';
	protected $allowedfields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja']; 

}

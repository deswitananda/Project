

    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    
    class Profil extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Profil_model');
            $this->load->library('session');
        }
    
        public function index()
        {
            check_login();
            check_role('user');
            $user_id = $this->session->userdata('user_id');
    
    
            $data['user'] = $this->Profil_model->getUserById($user_id);
            $data['content'] = 'user/profil';
            $this->load->view('template_user', $data);
        }
    
        public function update()
        {
            $user_id = $this->session->userdata('user_id');
    
            if (!$user_id) {
                echo json_encode(['status' => 'error', 'message' => 'User tidak ditemukan']);
                return;
            }
    
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
            ];
    
            if (!empty($this->input->post('password'))) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }
    
            $result = $this->Profil_model->updateUser($user_id, $data);
    
            if ($result) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error']);
            }
        }
    }
    

   
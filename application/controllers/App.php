<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	
	public function index()
	{
		// $tanggal1 = new DateTime("2017-10-07");
		// $tanggal2 = new DateTime();
		 
		// $perbedaan = $tanggal2->diff($tanggal1)->format("%a");

		// if ($perbedaan <= 0) {
		// 	echo "benar";
		// } else {
		// 	echo "salah";
		// } 


		// if ($this->session->userdata('username') == "") {
		// 	redirect('app/login');
		// }
		$data = array(
			'konten' => 'home',
            'judul' => 'Dashboard',
		);
		$this->load->view('v_index', $data);
	}

	public function login()
	{
		

		if ($this->input->post() == NULL) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$cek_user = $this->db->query("SELECT * FROM ms_user WHERE username='$username' and password='$password' ");
			if ($cek_user->num_rows() == 1) {
				foreach ($cek_user->result() as $row) {
					$sess_data['username'] = $row->username;
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			} else {
				?>
				<script type="text/javascript">
					alert('Username dan password kamu salah !');
					window.location="<?php echo base_url('app/login'); ?>";
				</script>
				<?php
			}

		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('app/login');
	}

	public function about()
	{

		$data = array(
			'konten' => 'about',
            'judul' => 'About Us',
		);
		$this->load->view('v_index', $data);
	}

	public function our()
	{

		$data = array(
			'konten' => 'our',
            'judul' => 'Our Address',
		);
		$this->load->view('v_index', $data);
	}
}

<?php

	function is_logged_in()
	{
		$ci = get_instance();
		if (!$ci->session->userdata('email')) {
			redirect('auth');
		}else{
			$role_id = $ci->session->userdata('userdata');
			$menu = $ci->uri->segment(1);
			$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
			$menu_id = $queryMenu['id'];
			$userAccess = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

			if ($userAccess->num_rows() > 1) {
				redirect('auth/blocked');
			}
		}
	}
	

    function tgl_grafik($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.'_'.$bulan;       
    }   

    function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Jan";
                        break;
                    case 2:
                        return "Feb";
                        break;
                    case 3:
                        return "Mar";
                        break;
                    case 4:
                        return "Apr";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Jun";
                        break;
                    case 7:
                        return "Jul";
                        break;
                    case 8:
                        return "Agu";
                        break;
                    case 9:
                        return "Sep";
                        break;
                    case 10:
                        return "Okt";
                        break;
                    case 11:
                        return "Nov";
                        break;
                    case 12:
                        return "Des";
                        break;
                }
            } 
?>
<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Mahasiswa_model extends CI_Model
{
	public function get_data()
	{
		$mhs = array(
			array(2001, 'Agas', 'Bagaskara', 'Laki-laki', 2019)
			, array(2002, 'Bagas', 'Choir', 'Laki-laki', 2019)
			, array(2003, 'Candi', 'Rama', 'Laki-laki', 2019)
			, array(2003, 'Dedi', 'Sumardi', 'Laki-laki', 2019)
			, array(2004, 'Edi', 'Mariyadi', 'Laki-laki', 2019)
		);

		return $mhs;
	}
}
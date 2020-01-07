<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getRole($status)
    {
        if ($status == 'user') {
            $this->db->where('role !=', 'admin');
        } else {
            $this->db->where('role !=', 'pembeli');
            $this->db->where('role !=', 'penjual');
        }

        $role = $this->db->get('user_role')->result();
        return $role;
    }

    public function getPengguna($limit, $start)
    {
        $this->db->join('user_role', 'pengguna.id_role = user_role.id_role');
        $this->db->order_by('pengguna.id_pengguna', 'DESC');
        $pengguna = $this->db->get('pengguna', $limit, $start)->result();
        return $pengguna;
    }

    public function getAdmin($limit, $start)
    {
        $this->db->join('user_role', 'admin.id_role=user_role.id_role');
        $admin = $this->db->get('admin', $limit, $start)->result();
        return $admin;
    }

    public function dataPengguna()
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'email'     => $post['email'],
            'password'  => $post['password'],
            'jk'        => $post['jk'],
            'no_hp'     => $post['no_hp'],
            'foto'      => 'default.png',
            'id_role'   => $post['role'],
        ];

        return $data;
    }

    public function prosesTambahUser()
    {
        $data = $this->dataPengguna();

        $tambah = $this->db->insert('pengguna', $data);
        return $tambah;
    }

    public function prosesTambahAdmin()
    {
        $data = $this->dataPengguna();

        $tambah = $this->db->insert('admin', $data);
        return $tambah;
    }
}

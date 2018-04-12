<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function login($login, $senha) {
        $this->db->select('login, senha');
        $this->db->from('usuario');
        $this->db->where('senha', $senha);
        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return 1;
        else:
            return NULL;
        endif;
    }

    public function partidas() {
        $this->db->select('partidas.idpartidas, a.escudo as time_um_escudo, b.escudo as time_dois_escudo, time_casa_gols as time_um_gols, time_fora_gols as time_dois_gols, data');
        $this->db->from('partidas');
        $this->db->join('times a', 'a.idtimes = partidas.time_casa_id');
        $this->db->join('times b', 'b.idtimes = partidas.time_fora_id');
        $this->db->order_by("idpartidas", "asc");

        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

    public function editar_partida($id){
        $this->db->select('partidas.idpartidas, a.nome as time_um, b.nome as time_dois, a.escudo as time_um_escudo, b.escudo as time_dois_escudo, time_casa_gols as time_um_gols, time_fora_gols as time_dois_gols, data');
        $this->db->from('partidas');
        $this->db->join('times a', 'a.idtimes = partidas.time_casa_id');
        $this->db->join('times b', 'b.idtimes = partidas.time_fora_id');
        $this->db->where('idpartidas', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

    public function salvar_partida($id = null, $time_um, $time_dois, $time_um_gols, $time_dois_gols){

        if ($id != null) {
            $data = array (
                'time_casa_gols' => $time_um_gols,
                'time_fora_gols' => $time_dois_gols
            );

            $this->db->set($data);
            $this->db->where('idpartidas', $id);
            $this->db->update('partidas');
        
        } else {
            $data = array (
                'time_um' => $time_um,
                'time_dois'=> $time_dois,
                'time_casa_gols' => $time_um_gols,
                'time_fora_gols' => $time_dois_gols
            );

            $this->db->insert('partidas', $data);
        }
    }

    public function times() {
    	$this->db->select('*');
        $this->db->from('times');
        $query = $this->db->get();
    	if ($query->num_rows() > 0):
    		return $query->result();
    	else:
    		return NULL;
    	endif;
    }

    public function editar_time($id){
        $this->db->select('*');
        $this->db->from('times');
        $this->db->where('idtimes', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

    public function salvar_time($nome, $escudo){
        $data = array (
            'nome' => $nome,
            'escudo' => $escudo
        );

        $this->db->insert('times', $data);
    }

    public function excluir_time($id){
        $this->db->where('idtimes', $id);
        $this->db->delete('times');
    }

    public function jogadores() {
        $this->db->select('*, jogadores.nome as jogador');
        $this->db->from('jogadores');
        $this->db->join('times', 'times.idtimes = jogadores.idjogadores');
        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

    public function cadastrar_jogador($nome, $escudo){
        $this->db->insert('');
    }

    public function editar_jogador($id){
        $this->db->select('*, jogadores.nome as jogador');
        $this->db->from('jogadores');
        $this->db->join('times', 'times.idtimes = jogadores.idjogadores');
        $this->db->where('idjogadores', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

}
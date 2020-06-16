<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class mUsers extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'a_users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamps = true;


    public function register($data)
    {
        $userdata = [
            "group_id" => '0',
            "email" => $data["email"],
            "password" => password_hash($data["password"], PASSWORD_ARGON2I),
            "name" => $data["name"],
            "company" => $data["company"],
            "is_backofficer" => '0',
            "status" => '0',
            "phone" => $data["phone"],
            "npwp" => $data["npwp"],
            "npwp_address" => $data["npwp_address"],
            "created_at" => Time::now(),
            "created_by" => $data["email"],
            "created_ip" => $_SERVER["REMOTE_ADDR"]
        ];
        if ($this->db->table($this->table)->insert($userdata)) {
            $user_id = $this->insertID();
            $addressdata = [
                "user_id" => $user_id,
                "default_renter" => "1",
                "name" => $data["company"],
                "pic" => $data["name"],
                "phone" => $data["phone"],
                "address" => $data["address"],
                "created_at" => Time::now(),
                "created_by" => $data["email"],
                "created_ip" => $_SERVER["REMOTE_ADDR"]
            ];
            $this->db->table("user_addresses")->insert($addressdata);
            $renterdata = [
                "user_id" => $user_id,
                "created_at" => Time::now(),
                "created_by" => $data["email"],
                "created_ip" => $_SERVER["REMOTE_ADDR"]
            ];
            $this->db->table("renters")->insert($renterdata);
            return true;
        }
        return false;
    }

    public function login_action($user_id)
    {
        $user = $this->where('id', $user_id)->first();
        $data = [
            "sign_in_count" => $user->sign_in_count + 1,
            "current_sign_in_at" => Time::now(),
            "last_sign_in_at" => $user->current_sign_in_at,
            "current_sign_in_ip" => $_SERVER["REMOTE_ADDR"],
            "last_sign_in_ip" => $user->current_sign_in_ip,
        ];
        if ($this->db->table($this->table)->update($data, array('id' => $user_id))) {
            $log_histories_data = [
                "user_id" => $user_id,
                "email" => $user->email,
                "x_mode" => 1,
                "log_at" => Time::now(),
                "log_ip" => $_SERVER["REMOTE_ADDR"]
            ];
            $this->db->table("a_log_histories")->insert($log_histories_data);
            return true;
        }
    }
}

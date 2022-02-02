<?php


namespace App\classes;


class user
{
    protected $user =[];
    public function getAllUser()
    {
        $this->user=[
            0 => [
                'name' => 'Sahabuddin',
                'mobile' => '111145',
                'Location' => 'Lalbagh'
            ],
            1 => [
                'name' => 'Tonmoy',
                'mobile' => '141145',
                'Location' => 'Rampura'
            ],
        ];
        return $this->user;
    }
}
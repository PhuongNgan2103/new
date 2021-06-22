<?php


namespace App\Model;


class StatusManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllStatus()
    {
        $sql = 'SELECT * FROM Status';
        $data = $this->dbConnect->query($sql);
        $status = [];
        foreach ($status as $item){
            $status[] = new Category($item['id'],$item['name']);
        }
        return $status;
    }
}
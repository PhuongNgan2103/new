<?php


namespace App\Controller;


use App\Model\StatusManager;
use App\Model\Status;

class StatusController
{
    protected $statusManager;

    public function __construct()
    {
        $this->statusManager = new StatusManager();
    }

    public function viewStatus()
    {
        $data = $this->statusManager->getAllStatus();
    }
}
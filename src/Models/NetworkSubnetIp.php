<?php

namespace AccessManager\Routers\Models;


use AccessManager\Base\Models\AdminBaseModel;

class NetworkSubnetIp extends AdminBaseModel
{
    public $timestamps = false;
    protected $fillable = [
        'subnet_id', 'user_id', 'address', 'assigned_on',
    ];
}
<?php

namespace AccessManager\Routers\Models;


use AccessManager\Base\Models\AdminBaseModel;

class NetworkSubnet extends AdminBaseModel
{
    public $timestamps = false;
    protected $fillable = [
        'subnet'
    ];
}
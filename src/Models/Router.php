<?php

namespace AccessManager\Routers\Models;


use AccessManager\Base\Models\AdminBaseModel;

class Router extends AdminBaseModel
{
    public $timestamps = false;
    protected $fillable = [
        'nasname', 'shortname', 'type', 'ports', 'secret', 'server', 'community', 'description',
    ];

}
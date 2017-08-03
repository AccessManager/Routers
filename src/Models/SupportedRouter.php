<?php

namespace AM3\Routers\Models;


use AccessManager\Base\Models\AdminBaseModel;

class SupportedRouter extends AdminBaseModel
{
    public $timestamps = false;
    protected $table = 'supported_router_types';
    protected $fillable = [
        'type', 'type_string',
    ];
}
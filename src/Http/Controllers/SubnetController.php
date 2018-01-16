<?php

namespace AccessManager\Routers\Http\Controllers;


use AccessManager\Base\Http\Controller\AdminBaseController;
use AccessManager\Routers\Models\NetworkSubnet;

class SubnetController extends AdminBaseController
{
    public function getIndex()
    {
        $subnets = NetworkSubnet::paginate(10);
        return view('Routers::network.subnet-index', compact('subnets'));
    }

    public function getAdd()
    {
        return view('Routers::network.subnet-add');
    }

    public function postAdd()
    {
        NetworkSubnet::add(request()->get('cidr'));
        return redirect()->route('subnet.index');
    }

    public function postDelete()
    {

    }
}
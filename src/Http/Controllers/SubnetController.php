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
        try{
            $subnet = NetworkSubnet::findOrFail(request()->id);
            $subnet->delete();
            return back();
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function getIpListJson( $subnet_id )
    {
        try{
            $subnet = NetworkSubnet::findOrFail($subnet_id);
            $free_ips_long = $subnet->IPs()->whereNull('user_id')->pluck('address', 'id');
            $free_ips = $free_ips_long->map(function($ip){
                return long2ip($ip);
            });

            return $free_ips;
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
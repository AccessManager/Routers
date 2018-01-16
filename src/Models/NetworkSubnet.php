<?php

namespace AccessManager\Routers\Models;


use AccessManager\Base\Models\AdminBaseModel;

/**
 * Class NetworkSubnet
 * @package AccessManager\Routers
 */
class NetworkSubnet extends AdminBaseModel
{
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'cidr'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function IPs()
    {
        return $this->hasMany(NetworkSubnetIp::class);
    }

    /**
     * This method extracts range of IP addresses from given CIDR
     * and inserts the same into database.
     *
     * @param $cidr
     */
    public static function add( $cidr )
    {

        \DB::transaction(function()use($cidr){
            $networkSubnet = new static([
                'cidr'  =>  $cidr,
            ]);
            $networkSubnet->saveOrFail();
            $network = \IPTools\Network::parse($cidr);

            $ip_addresses = [];
            foreach ($network as $ip )
            {
                $ip_addresses[] = [
                    'address'   =>  $ip->toLong(),
                ];
            }
            $networkSubnet->IPs()->createMany($ip_addresses);
        });
    }
}
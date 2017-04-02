<?php namespace Jab\Airports;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    /**
     * Register main navigation for this plugin
     * @return [type] [description]
     */
    public function registerNavigation()
    {
    	return [
            'airports' => [
                'label'       => 'jab.airports::lang.plugin.name',
                'url'         => Backend::url('jab/airports/airports'),
                'icon'        => 'icon-plane',
                'permissions' => ['jab.airports.manage_plugins'],
                'order'       => 400,

                'sideMenu' => [
                    'airports' => [
                        'label'       => 'jab.airports::lang.airport.menuName',
                        'icon'        => 'icon-plane',
                        'url'         => Backend::url('jab/airports/airports'),
                        'attributes'  => ['data-menu-item'=>'database'],
                        'permissions' => ['jab.airports.manage_plugins']
                    ]
                ]
            ]
		];
    }
}

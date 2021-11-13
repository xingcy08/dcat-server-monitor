<?php

namespace Xcy\DcatServerMonitor;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatServerMonitorServiceProvider extends ServiceProvider
{
    // 定义菜单
    protected $menu = [
        [
            'title' => '服务监控',
            'uri'   => 'xcyDcatAdmin/server',
            'icon'  => 'fa-server',
        ],
    ];

	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}

<?php


namespace Xcy\DcatServerMonitor\Http\Pages;


use Dcat\Admin\Admin;
use Illuminate\Contracts\Support\Renderable;

class ServerPage implements Renderable
{
    public static $js = [
        'https://unpkg.com/vue/dist/vue.js',
        'https://unpkg.com/element-ui/lib/index.js',
        'https://unpkg.com/axios/dist/axios.min.js',
        'https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js',
    ];

    public static $css = [
        'https://unpkg.com/element-ui/lib/theme-chalk/index.css',
    ];

    /**
     * @throws \Throwable
     */
    public function render()
    {
        Admin::js(static::$js);
        Admin::css(static::$css);

        return view('xcy.dcat-server-monitor::index')->render();
    }
}

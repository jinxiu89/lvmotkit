<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Yansongda\Pay\Pay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * 支付组件 容器
     * $this->app->singleton()往容器中注入一个单例对象,在第一次从容器中取对象时会调用回调函数生成对象并保存到容器中
     * $this->environment()获取当前的运行环境,线上环境会返回"production"
     * 日志级别也有所改变
     */
    public function register()
    {
        $this->app->singleton('alipay', function () {
            $config = config('pay.alipay');
            if (app()->environment() !== 'production') {
                $config['model'] = 'dev';
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            return Pay::alipay($config);
        });
        $this->app->singleton('wechat_pay', function () {
            $config = config('pay.wechat');
            if (app()->environment() !== 'production') {
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            return Pay::wechat($config);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

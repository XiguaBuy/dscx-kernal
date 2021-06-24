<?php

namespace App\Kernel\Repositories;

use App\Models\ShopConfig;
use App\Kernel\Repositories\Common\UrlRepository;
use Illuminate\Http\Request;

class Empower
{

    /**
     * 检测是否授权
     */
    public function getPoweredBy()
    {

    }

    /**
     * 过滤 http|https
     *
     * @param $url
     * @return mixed|string
     */
    private function trimHttp($url)
    {
        if (strpos($url, 'https://www.') !== false) {
            $url = str_replace('https://www.', '', $url);
        } elseif (strpos($url, 'http://www.') !== false) {
            $url = str_replace('http://www.', '', $url);
        } elseif (strpos($url, 'https://') !== false) {
            $url = str_replace('https://', '', $url);
        } elseif (strpos($url, 'http://') !== false) {
            $url = str_replace('http://', '', $url);
        }

        $arr = explode('/', $url);
        $url = $arr[0];
        $url = trim($url, '/');

        return $url;
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfocenterControllerNull extends Controller
{
    //

    function governmentnews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/government_news_content.php')->json();
        
        return view('government', ['data'=>$data]);
    }

    function sportsnews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/sports_news_content.php')->json();
        
        return view('sports', ['data'=>$data]);
    }

    function getlottoContent()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/get_lotto_content.php')->json();
        
        return view('getlotto', ['data'=>$data]);
    }

    function recommendednews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/recommended.php')->json();
        
        return view('recommended', ['data'=>$data]);
    }

    
    function adsbanner()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/ads_banner.php')->json();
        
        return view('ads', ['data'=>$data]);
    }

    function getnewsContent()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/get_news.php')->json();
        
        return view('getnews', ['data'=>$data]);
    }
}

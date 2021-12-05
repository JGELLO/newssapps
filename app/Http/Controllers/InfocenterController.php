<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class InfocenterController extends Controller
{
    // $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/tabloid_news_content.php')->json();

    // return view('newstabloid', ['data'=>$data]);

    // $data = json_decode(file_get_contents('https://api.cdu.com.ph/infocenter/promotional_banner.php'));

    // return view('test', compact('data'));

    function getallnews()
    {
        
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/get_all_news.php')->json();
        
        return view('index', ['data'=>$data]);
        
    }

    function tabloidnews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/tabloid_news_content.php')->json();
        
        return view('tabloid', ['data'=>$data]);
    }

    function entertainmentnews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/entertainment_news_content.php')->json();
        
        return view('entertainment', ['data'=>$data]);
    }

    function promotionalnews()
    {
        $data = Http::get('https://api.cdu.com.ph/infocenter/promotional_banner.php')->json();
        
        return view('promotional', ['data'=>$data]);
    }

}
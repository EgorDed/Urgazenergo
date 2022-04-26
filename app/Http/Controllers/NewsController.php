<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function news(){
        $news = News::orderBy('id', 'desc')->get();
        return view('pages.news', [
            'news' => $news
        ]);
    }

    public function tonews($id){
        $curent_news = News::where('id', $id)->first();
        return view('pages.news_item', [
            'curent_news' => $curent_news
        ]);
    }
}

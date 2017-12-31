<?php
namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Top\TopModel;

class TopController extends Controller
{
    /**
     * TOPページの表示
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        // 最新データ取得
        $model = new TopModel();
        $item = $model->getTopData();

        return view('top.top', ['items'=>$item]);
    }

}
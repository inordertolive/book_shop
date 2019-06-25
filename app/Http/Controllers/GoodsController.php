<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 商品的图片控制器
 * $push添加商品的路径 
 */
class GoodsController extends Controller
{
    
    public function AddGoods()
    {

        return view('Goods/AddGoods');
    }
    public function DoAddGoods(Request $request)
    {
        $push = $request->file('fff')->store('goods');
        echo asset('storage/'.$push);
    }
}

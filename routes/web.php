<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * 学生管理系统
 */
        Route::get('createstu','studentcc@createstudent');//谢尔省添加视图
        Route::post('dostudent','studentcc@dostudent');//谢尔省添加视图
        Route::get('studentlist','studentcc@studentlist');//学生列表展示
        Route::get('studentdelete','studentcc@studentdelete');//学生删除
        Route::get('studentupdate','studentcc@studentupdate');//学生修改
        Route::post('dostudentupdate','studentcc@dostudentupdate');//学生修改执行
/**
 *  以下前台操作
 */
        Route::get('/','IndexController@myshopindex');//前台首页
        Route::any('myshoplist','IndexController@myshoplist');  //前台商品列表
        Route::any('userlogin','IndexController@userlogin');  //前台用户登录
        Route::any('douserlogin','IndexController@douserlogin');  //前台用户登录
        Route::any('userregis','IndexController@userregis');  //前台用户注册
        Route::post('indexadduser','IndexController@adduser');  //前台用户注册
        Route::get('sess','IndexController@sess');  //用户登录状态查看
        Route::get('outuserlogin','IndexController@outuserlogin');  //用户退出登陆状态
        Route::get('indexproduct','IndexController@indexproduct');  //商品详情页
        Route::get('/checkcart','IndexController@checkcart');  //商品详情页
        Route::get('/addcart','IndexController@addcart');  //商品详情页
        Route::get('/addorder','IndexController@addorder');  //商品详情页
        Route::get('/orderlist','IndexController@orderlist');  //商品订单页面
        Route::get('/init','IndexController@init');  //商品订单页面AliPayController
        Route::get('/pay','pay\AliPayController@pay');  //商品订单页面
        Route::get('/return_url','pay\AliPayController@aliReturn');  //支付宝同步回调
        Route::post('/notify_url','pay\AliPayController@aliNotify');  //支付宝异步回调
        Route::get('/userorder','IndexController@userorder');  //商品订单页面

/**
 *  以下后台操作
 */
        Route::get('xxoo','WaresController@xxoo');
        Route::get('adminorder','WaresController@adminorder');//后台订单管理
Route::middleware('wares')->group(function(){
        Route::get('update','WaresController@update');
        Route::post('updatedo','WaresController@updatedo');
});
//未登录不能添加和查看商品
Route::middleware('login')->group(function(){
        Route::get('addgoodsweb','WaresController@addwaresview');//商品添加视图
        Route::any('addwares','WaresController@addwares');//商品添加
        Route::get('wareslistview','WaresController@wareslistview');//商品列表视图
        Route::get('delete','WaresController@delete');
});
        Route::post('DoAddGoods','GoodsController@DoAddGoods');//商品图片
//未登录不能进入后台
Route::middleware('admin')->group(function(){
        Route::get('/adduserinfo',['uses'=>'StudentController@index']);
        Route::any('/adduser','StudentController@insert'); //信息添加页面
        Route::any('/read','StudentController@read');//展示信息
        Route::get('/del/{id}','StudentController@delete');  //删除信息
        Route::get('/updateweb/{id}','StudentController@update'); //信息修改
        Route::post('/editweb','StudentController@edit');
});
        Route::get('/regis','StudentController@regis'); //注册
        Route::any('/regisweb','StudentController@addregis');
        Route::get('/login','StudentController@login');  //登录
        Route::post('/loginweb','StudentController@dologin');
        // Route::get('/init','StudentController@init');
        Route::any('/iii','WaresController@iii');   //清空用户缓存数据







    //基础路由
// Route::get('base1',function(){
//     return 'hellow';
// });
// Route::post('base2',function(){     //url解析不了post请求，只有get能解析
//     return 'hellow';
// });
//多请求路由   match指定用户
// Route::match(['get','post'],'multy1',function(){
//     return '多请求路由';
// });
// //any接收所有类型路由
// Route::any('multy2',function(){
//     return 'any接收所有请求';
// });
// //传参路由
// Route::get('user/{id}',function($id){  //在url中使用/号链接
//     return '这是你要展示的参数User---'.$id;
// });
// //如果每次传参不方便，可以给默认值。参数是可选的
// Route::get('user1/{name?}',function($name=null){
//     return '这是你要展示的参数User1---'.$name;
// });
// //如果每次传参不方便，可以给默认值。参数是可选的   //末尾可带表达式，用于判断筛选
// Route::get('user2/{name?}',function($name='我是默认值'){
//     return '这是你要展示的参数User2---'.$name;
// })->where('name','[A-Z]{3}');

//路由别名
// Laravel 的路由别名 并不是用于路由访问接口的，它只是用于程序获取路由信息的。
// Route::get('user/member',['as'=>'center',function(){
//     // return  '给路由起别名';
//     return route('center');
// }]);

//路由群组
// Route::group(['prefix'=>'ber'],function(){   //访问时要加上ber群组名
//         // 路由别名
//         // Laravel 的路由别名 并不是用于路由访问接口的，它只是用于程序获取路由信息的。
//         Route::get('user/member',['as'=>'center',function(){
//             return route('center');
//         }]);

//         //基础路由
//         Route::get('base1',function(){
//             return 'ber-hellow';
//         });
// });

//路由中输出视图

    // Route::get('view',function(){
    //     return view('enenenen');
    // });


// Route::get('/', function () {
//     return view('welcome');
// });

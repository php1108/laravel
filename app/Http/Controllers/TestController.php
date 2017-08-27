<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        //初始化
//        　　$ch = curl_init();
//        　　//设置选项，包括URL
//        　　curl_setopt($ch, CURLOPT_URL, "http://www.jb51.net");
//        　　curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        　　curl_setopt($ch, CURLOPT_HEADER, 0);
//        　　//执行并获取HTML文档内容
//        　　$output = curl_exec($ch);
//        　　//释放curl句柄
//        　　curl_close($ch);
//        　　//打印获得的数据
//        　　print_r($output);

    }
    public function getUrl(Request $request)
    {
        //匹配request/*的URL才能继续访问
//        if(!$request->is('request/*')){
//            abort(404);
//        }
        $uri = $request->path();
        $url = $request->url();

        $method = $request->method();
        echo '<br>';
        echo '<br>';
        echo $method;
        echo '<br>';
        echo $uri;
        echo '<br>';
        echo $url;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

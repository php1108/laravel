<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\MassLog;
use App\Article;
use App\UserSns;
use Validator;
use App\WechatToken;
//use EasyWeChat\Core\AccessToken;
use Config;
use DB;
use Mail;
//use App\Services\OSS;

class AdminArticleController extends Controller
{
    public function praiseNum(Request $request)
    {
        $article = new Article;
        $id = $request->id;
        $i = $request->i;
//        $sta = $request->sta;
        $sign = $request->sign;
        
//        if($sta == 1){
        if($sign){
                $praiseNum = $i + 1;
                 $result = $article->where('id', $id)->update(['praise_num' => $praiseNum]);
            if ($result) {
                $response = array(
                    'errno' => 0,
                    'errmsg' => 'success',
                    'data' => true,	
                );
            }else{
                $response = array(
                    'errno' => -1,
                    'errmsg' => 'fail',
                    'data' => false,	
                );
            }
            echo json_encode($response); 
        }else{
                $praiseNum = $i - 1;
                 $result = $article->where('id', $id)->update(['praise_num' => $praiseNum]);
            if ($result) {
                $response = array(
                    'errno' => 1,
                    'errmsg' => 'success',
                    'data' => true,	
                );
            }else{
                $response = array(
                    'errno' => -1,
                    'errmsg' => 'fail',
                    'data' => false,	
                );
            }
            echo json_encode($response); 
        }
            
                     
//        }
 
    }
     public function readNum(Request $request)
    {
        $article = new Article;
        $id = $request->id;
        $num = $request->readNum;
        
       
        $readNum = $num+1;
        $result = $article->where('id', $id)->update(['read_num' => $readNum]);
        if($result){
            echo 1;
        }

    }
    public function mall()
    {
        Mail::raw('邮件的内容',function ($message){
            $message->from('php1108@126.com','周文刚');
            $message->subject('主题');
            $message->to('916462392@qq.com');
        });
    }

}
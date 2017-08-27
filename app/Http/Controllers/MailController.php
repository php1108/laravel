<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function send()
    {
        $name = '王宝花';
        $flag = Mail::send('emails.testhtml', ['name' => $name, 'image' => '1'], function ($message) {
            $to = 'php1108@126.com';
            $message->to($to)->subject('邮件测试')->from("916462392@qq.com", "周文刚");
        });
        if ($flag) {
            echo '发送邮件成功，请查收！';
        } else {
            echo '发送邮件失败，请重试！';
        }
    }

    public function sendtext()
    {
        Mail::raw('你好，我是PHP程序！', function ($message) {
            $to = 'php1108@126.com';
            $message->to($to)->subject('纯文本信息邮件测试')->from("916462392@qq.com", "aaa");
        });
    }

    public function sendimg()
    {
        $name = '周文刚';
        $image = 'http://img05.tooopen.com/images/20150202/sy_80219211654.jpg';
        $flag = Mail::send('emails.test', ['name' => $name, 'imgPath' => $image, 'image' => '1'], function ($message) {
            $to = 'php1108@126.com';
            $message->to($to)->subject('网络图片网络图片网络图片网络图片网络图片网络图片')->from("php1108@126.com", "周文刚");
        });
        if ($flag) {
            echo '发送邮件成功，请查收！';
        } else {
            echo '发送邮件失败，请重试！';
        }
    }

    public function sendimg2()
    {
        $image = Storage::get('uploads/2017-01-19-13-08-57-5880ba6941615.png');
//        Storage::put('file.jpg', $image)    ;die;
//        $image = Storage::disk('uploads')->get('2017-01-19-13-08-57-5880ba6941615.png');
//        var_dump($image);die;
        $flag = Mail::send('emails.test', ['image' => $image, 'name' => '周文刚'], function ($message) {
            $to = 'php1108@126.com';
            $message->to($to)->subject('[本地图片测试]');
            $attachment = public_path('app/files/test.txt'); // 在邮件中上传附件
            $message->attach($attachment, ['as'=>"=?UTF-8?B?".base64_encode('中文文档')."?=.txt"]);


        });
        if ($flag) {
            echo '发送邮件成功，请查收！';
        } else {
            echo '发送邮件失败，请重试！';
        }
    }

    public function sendFile()
    {
        $name = '王宝花';
        $flag = Mail::send('emails.test', ['name' => $name, 'image' => '1'], function ($message) {
            $to = 'php1108@126.com';
            $message->to($to)->subject('邮件主题');
            $attachment = storage_path('app/files/test.txt'); // 在邮件中上传附件
            $message->attach($attachment, ['as' => '中文文档.txt']);
        });
    }
    public function queue(){

        $this->dispatch(new SendEmail('php1108@126.com'));
    }
}

<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use Log;
class SendEmail extends Job implements SelfHandling
{
    use InteractsWithQueue,Queueable,SerializesModels;
    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        //
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Log::info('已发送邮件'.$this->email);
//        Mail::raw('队列测试',function ($message){
//            $message->to($this->email);
//        });
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function SendMail(){
        $tieude = "Liên hệ tìm việc";
        $hoten = "Nguyễn Bá Thư";
        $email = "thunbph38195@fpt.edu.vn"; 
        $noidung = "FE88 nơi cung cấp tài chính uy tín nhanh chóng thuận lợi thủ tục nhanh chóng cho mọi nhà";

        // sendmail
        Mail::mailer()
        ->to($email)
        ->send(new SendMail($tieude, $hoten, $noidung));
        return "Gửi mail thành công";
    }

}

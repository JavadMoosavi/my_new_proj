<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Work;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\QueryException;

class Tracking extends Component
{

    public $tracking;

    public $recaptcha;
    public $captcha;

    public $result = "0";
    
    protected $rules = [
        
        'tracking' => 'required',
        'captcha' => 'accepted',
    ];

    protected $messages =

    [
        'tracking.required' => 'وارد کردن کد رهگیری ضروری است.',
        'captcha.accepted' => 'لطفا تایید کنید ربات نیستید',
    ];

    public function mount()
    {
        $this->result = "0";
    }

    public function trackData()
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=6Lf52zIaAAAAAE_P1Hi-Zngg_CAVsrQtZHwmBYN-&response=' . $this->recaptcha);
        //dd($response->json()['success'], $this->recaptcha);
        $this->captcha = $response->json()['success'];

        $this->validate();

        $count = Work::where('verifycode', '=', $this->tracking)->count();
        if($count > 0)
        {
            $this->result = "success";
        }
        else
        {
            $this->result = "fail";
        }
    }

    public function render()
    {
        return view('livewire.tracking');
    }
}

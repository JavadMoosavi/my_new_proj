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

class Kharazmi extends Component
{
    use WithFileUploads;

    public $stname;
    public $stmelli;
    public $stmobile;
    public $stemail;
    public $schoolname;
    public $title;
    public $lang;
    public $subj;
    public $tname;
    public $tmobile;
    public $tlink;

    public $userFileUpload;
    public $save_zip_file = null;

    public $recaptcha;
    public $captcha;

    protected $rules = [
        'stname' => 'required',
        'stmelli' => 'required|size:10|unique:App\Models\Work,stmelli',
        'stmobile' => 'required|size:11|starts_with:0',
        'stemail' => 'required|email',
        'schoolname' => 'required',
        'title' => 'required',
        'lang' => 'required',
        'subj' => 'required',
        'tname' => 'required',
        'tmobile' => 'required|size:11',
        'captcha' => 'required|accepted',
        //'tlink' => 'required',
    ];

    protected $messages =

    [
        'stname.required' => 'وارد کردن نام و نام خانوادگی ضروری است.',
        'stmelli.required' => 'وارد کردن کد ملی ضروری است.',
        'stmelli.size' => 'کد ملی باید 10 رقم باشد',
        'stmelli.unique' => 'این کد ملی قبلا ثبت شده است.',
        'stmobile.required' => 'وارد کردن موبایل ضروری است.',
        'stmobile.size' => 'شماره موبایل باید یازدهم رقم باشد',
        'stmobile.starts_with' => 'شماره موبایل با صفر شروع می شود',
        'stemail.required' => 'وارد کردن ایمیل ضروری است',
        'stemail.email' => 'فرمت ایمیل صحیح نیست',
        'schoolname.required' => 'درج نام مدرسه ضروری است.',
        'title.required' => 'درج عنوان ضروری است',
        'lang.required' => 'درج زبان برنامه نویسی ضروری است.',
        'subj.required' => 'موضوع اثر را انتخاب کنید',
        'tname.required' => 'درج نام رابط ضروری است',
        'tmobile.required' => 'درج موبایل رابط ضروری است',
        'tmobile.size' => 'شماره موبایل باید یازدهم رقم باشد',
        'userFileUpload.mimes' => 'فقط فرمت ZIP قابل قبول است',
        'userFileUpload.max' => 'حداکثر حجم فایل می تواند 30 مگابایت باشد.',
        'captcha.accepted' => 'لطفا تایید کنید ربات نیستید',
        'captcha.required' => 'لطفا تایید کنید ربات نیستید',
    ];

    public function saveData()
    {

        //G-recaptcha Verify
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=6Lf52zIaAAAAAE_P1Hi-Zngg_CAVsrQtZHwmBYN-&response=' . $this->recaptcha);
        //dd($response->json()['success'], $this->recaptcha);
        $this->captcha = $response->json()['success'];


        $this->validate();

        if ($this->userFileUpload) {
            $this->validate(['userFileUpload' => 'mimes:zip|max:30720',]);
            $this->save_zip_file = $this->userFileUpload->store('/', 'workFiles');
        }

        $verificationCode = Carbon::now()->timestamp . "-" . Hash::make(rand(100000, 999999));

        Mail::to($this->stemail)->send(new TestMail($this->stname, $this->title, $verificationCode));

        Work::create([
            'stname' => $this->stname,
            'stmelli' => $this->stmelli,
            'stmobile' => $this->stmobile,
            'stemail' => $this->stemail,
            'school' => $this->schoolname,
            'title' => $this->title,
            'lang' => $this->lang,
            'subject' => $this->subj,
            'teachername' => $this->tname,
            'teachermobile' => $this->tmobile,
            'filename' => $this->save_zip_file,
            'extfilename' => $this->tlink,
            'verifycode' => $verificationCode,
            'timestamp' => Carbon::now()->timestamp,
        ]);

        //Http::get('http://ippanel.com/class/sms/webservice/send_url.php?from=+98500010403760311&to=+98'.substr($this->stmobile, 1).'&msg=با تشکر - اثر شما در سیستم جشنواره ثبت شد&uname=09388371325&pass=faraz0921781350');

        session(['verificationCode' => $verificationCode]);
        return redirect()->to('/success');
    }


    public function render()
    {
        return view('livewire.kharazmi');
    }
}
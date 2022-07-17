<div>
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8" dir="rtl">

                    <div class="alert alert-danger" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        کاربر گرامی، به منظور کسب بهترین نتیجه در استفاده از این سیستم، لطفا موارد زیر را به دقت مطالعه کرده، سپس اقدام به تکمیل فرم و بارگذاری اثر نمایید.
                    </div>

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        برای ثبت آثار فقط از آخرین نسخه مرورگر گوگل کروم استفاده کنید.
                    </div>
                    </div>



                    <ul style="text-align: justify;">
                        <li>دقت داشته باشید، ثبت آثار تنها یک بار میسر است و امکان ویرایش یا تغییر پس از ثبت اثر به هیچ عنوان میسر نیست.</li>
                        <li>فایل های ارسالی می تواند حداکثر حجمی معادل 30 مگابایت داشته باشد و فایل های با حجم بیشتر آپلود نمی شود. در صورتی که حجم فایل پروژه شما بیش از مقدار مجاز است می بایست فایل را در یک آپلود سنتر با لینک مستقیم بارگذاری نمایید. سرویس ابرآروان پیشنهاد می گردد.</li>
                        <li>اگر فایل شما حجمی بیش از 30 مگابایت دارد، فایل شناسه اثر را در قالب ZIP در بخش اصلی بارگذاری کنید و لینک پروژه اصلی را در کادر انتهای صفحه درج کنید</li>
                        <li>در ثبت مشخصات نهایت دقت را مبذول دارید زیرا امکان ویرایش پس از ثبت وجود نخواهد داشت.</li>
                        <li>برای بارگذاری اثر، ابتدا فرم را تکمیل کنید، سپس فایل اثر را فقط با فرمت فشرده زیپ Zip بارگذاری نمایید، پس از رویت موفقیت آمیز بودن آپلود بر روی ثبت اطلاعات کلیک کنید تا مشخصات شما به همراه اثر در سیستم ثبت شود. یک ایمیل و پیامک تایید برای شما ارسال می شود. ممکن است به دلیل اختلال در سیستم پیامک، این امکان بر روی شبکه ایرانسل میسر نشود.</li>
                        <li>کد رهگیری به ایمیل شما ارسال می شود. پوشه اسپم را چک کنید.</li>
                        <li>دریافت کد رهگیری ثبت اثر به منزله بارگذاری کامل و ثبت اثر شماست.</li>
                    </ul>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">نام و نام خانوادگی دانش آموز</label>
                            <input type="text" class="form-control" id="name" wire:model.lazy="stname">
                            @error('stname') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="melli" class="form-label">کد ملی دانش آموز</label>
                            <input type="text" class="form-control" id="melli" wire:model.lazy="stmelli">
                            @error('stmelli') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="mobile" class="form-label">تلفن همراه دانش آموز</label>
                            <input type="text" class="form-control" id="mobile" placeholder="09123456789" wire:model.lazy="stmobile">
                            @error('stmobile') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">ایمیل دانش آموز</label>
                            <input type="email" class="form-control" id="email" wire:model.lazy="stemail">
                            @error('stemail') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="school" class="form-label">نام مدرسه</label>
                            <input type="text" class="form-control" id="school" wire:model.lazy="schoolname">
                            @error('schoolname') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="titles" class="form-label">عنوان اثر</label>
                            <input type="text" class="form-control" id="titles" wire:model.lazy="title">
                            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="language" class="form-label">زبان برنامه نویسی</label>
                            <input type="text" class="form-control" id="language" wire:model.lazy="lang">
                            @error('lang') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="subject" class="form-label">موضوع اثر</label>
                            <select class="form-select" aria-label="Default select example" id="subject" wire:model.lazy="subj">
                                <option selected>یک گزینه را انتخاب کنید</option>
                                <option value="1">وب سایت</option>
                                <option value="2">نرم افزار - کاربرد تلفن همراه</option>
                                <option value="3">نرم افزار - کاربرد ویندوز</option>
                                <option value="4">بازی تحت ویندوز</option>
                                <option value="5">بازی تلفن همراه</option>
                                <option value="6">سایر</option>
                            </select>
                            @error('subj') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="teacherName" class="form-label">نام و نام خانوادگی رابط</label>
                            <input type="text" class="form-control" id="teacherName" wire:model.lazy="tname">
                            @error('tname') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="teacherMobile" class="form-label">تلفن همراه رابط</label>
                            <input type="text" class="form-control" id="teacherMobile" wire:model.lazy="tmobile">
                            @error('tmobile') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <div x-data="{ isUploading : false , progress: 0, uploadSuccess : false }"
                                 x-on:livewire-upload-start="isUploading = true"
                                 x-on:livewire-upload-finish="isUploading = false; progress: 5; uploadSuccess = true"
                                 x-on:livewire-upload-error="isUploading = false"
                                 x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <label for="formFile" class="form-label text-danger">بارگذاری فایل اثر به همراه فایل PDF شناسه اثر- فقط فایل هایی با فرمت ZIP قابل بارگذاری است.</label>
                                <input class="form-control mb-3" wire:model="userFileUpload" type="file" id="formFile">
                                
                                <div x-show="isUploading" class="col-12 progress mt-3 mb-3">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" x-bind:style="`width:${progress}%`" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @error('userFileUpload') <span class="error text-danger">{{ $message }}</span> @enderror
                                <span x-show="uploadSuccess" class="text-primary mt-3">فایل با موفقیت بر روی سرور قرار گرفت</span>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="link" class="form-label">در صورتی که حجم فایل اثر بیش از 30 مگابایت است، فایل اثر را در یک آپلودسنتر مانند ابرآروان که دسترسی به فایل با لینک مستقیم میسر است، بارگذاری کرده و لینک آن را در کادر زیر درج کنید.</label>
                                <input type="text" class="form-control" id="link" wire:model.lazy="tlink">
                            </div>
                            <div class="col-12 mt-5" wire:ignore>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display(['data-callback'=>'onCallback']) !!}
                            </div>
                            <div class="col-12">
                            @error('captcha') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <p class="text-primary">با بارگذاری اثر و ثبت اطلاعات شرایط و قوانین مربوط به مسابقه را می پذیرم.</p>
                            </div>

                            <div class="col-12">
                                <button type="button" wire:click="saveData" class="btn btn-primary mt-4">ثبت اطلاعات</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    var onCallback = function(){
        @this.set('recaptcha', grecaptcha.getResponse());
    }
</script>
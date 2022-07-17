<div>
    <section id="reg">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8" dir="rtl">
                    <h3 class="mb-3">جهت پیگیری اثر خود کد رهگیری را وارد کنید</h3>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">کد رهگیری را وارد کنید</label>
                            <input type="text" class="form-control" id="name" wire:model.lazy="tracking">
                            @error('tracking') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 mt-5" wire:ignore>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display(['data-callback'=>'onCallback']) !!}
                        </div>
                        <div class="col-12">
                            @error('captcha') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 mt-2">

                            @if($result == "success")
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">تبریک! اثر شما ثبت شده است</h4>
                                <p>ضمن تشکر از شما بابت شرکت در جشنواره، اثر شما ثبت شده است.</p>
                            </div>
                            @endif

                            @if($result == "fail")
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">متاسفانه اثری یافت نشد!</h4>
                                <p>متاسفانه با کد رهگیری درج شده اثر در سیستم یافت نشد. مطمئن شوید کد رهگیری را به دقت وارد کرده اید و در صورت دریافت ایمیل کد را از صندوق ایمیل در کادر کپی و الصاق نمایید.</p>
                            </div>
                            @endif
                        </div>

                        <div class="col-12">
                            <button type="button" wire:click="trackData" class="btn btn-primary mt-4">بررسی اطلاعات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    var onCallback = function() {
        @this.set('recaptcha', grecaptcha.getResponse());
    }
</script>
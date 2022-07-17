<div>

    <section id="reg">
        <div class="container px-4">
            <div class="row gx-2 justify-content-center">

                @if($vCode)
                <div class="col-12 text-center">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading" dir="rtl">ثبت موفقیت آمیز بود!</h4>
                        <p dir="rtl">ضمن تشکر، اثر شما با موفقیت در سیستم ثبت شد.</p>
                        <hr>
                        <p class="mb-0" dir="rtl">کد رهگیری را برای پیگیری های بعدی یادداشت نمایید.</p>
                        <p class="mb-0">{{ $vCode }}</p>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
</div>
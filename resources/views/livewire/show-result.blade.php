<div>


    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead>
                <td>دانلود</td>
                <td>دانلود</td>
                <td>زبان</td>
                <td>عنوان اثر</td>
                <td>موضوع اثر</td>
                <td>ردیف</td>
            </thead>

            @foreach ($result as $detail)
            <tr>
                @if ($detail -> extfilename == null)
                <td> - </td>
                @else
                <td><a href="{{ $detail -> extfilename}}" target="_blank">دانلود</a></td>
                @endif


                <td>
                    <button class="btn btn-primary btn-sm" wire:click="downloadfile('{{ $detail -> filename }}')">
                        دانلود
                    </button>
                </td>

                <td>{{ $detail -> lang}}</td>
                <td>{{ $detail -> title}}</td>

                @if($detail -> subject == 1)
                <td>وب سایت</td>
                @elseif ($detail -> subject == 2)
                <td>نرم افزار - کاربرد تلفن همراه</td>
                @elseif ($detail -> subject == 3)
                <td>نرم افزار - کاربرد ویندوز</td>
                @elseif ($detail -> subject == 4)
                <td>بازی تحت ویندوز</td>
                @elseif ($detail -> subject == 5)
                <td>بازی تلفن همراه</td>
                @else
                <td>سایر</td>
                @endif

                <td>{{ $detail -> id}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
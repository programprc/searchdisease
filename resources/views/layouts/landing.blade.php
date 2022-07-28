
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ระบบค้นหาโรคจากอาการป่วย (Search disease)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css?v=3.2.0')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

<script nonce="93ef0e9f-9ef3-4edb-97ee-15b1033ba1fa">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
<div class="lockscreen-logo">
<a><b>ค้นหา</b></a>
</div>
<div >
    <form action="{{route('search')}}" method="GET">
        <div class="form-group" >
            <label>อาการโรค</label>
            <select class="select2 input-lg input-group-lg" multiple="multiple" name="symptom[]" value="{{old('symtomps')}}" data-placeholder="ค้นหาอาการโรค" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" required>
                @foreach ($symtomps as $symtomp)
                    <option value="{{$symtomp->id}}">{{$symtomp->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group text-right" >
            <button type="submit" class="btn btn-default" >ค้นหา</button>
        </div>
    </form>
</div>
    @if (count($diseases) > 0)
    <div class="row mt-4"  >
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>โรค</th>
                                <th style="width: 120px" class="text-right">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($diseases as $disease)
                                <tr>
                                    <td>{{$disease->name}}</td>
                                    <td class="text-right"><a href="{{$disease->link}}" class="btn btn-info btn-sm " target="_blank" >เพิ่มเติม</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    
</div>

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
    </script>

</body>
</html>

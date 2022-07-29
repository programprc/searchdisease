
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

<script nonce="3e727219-e007-4723-b9ce-6f2ae2231c60">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="{{route('index')}}" role="button"><i class="fas fa-home"></i></a>
</li>

</ul>

</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="{{route('index')}}" class="brand-link">
<span class="brand-text font-weight-light">ค้นหาโรคจากอาการป่วย</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">

<div class="info">
<a href="#" class="d-block">{{Auth::user()->name}} {{Auth::user()->lastname}}</a>
</div>
</div>



<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('symptomdisease.index')}}" class="nav-link {{starts_with(Route::currentRouteName(),'symptomdisease.index')?'active':''}}"><i class="nav-icon fas fa-cogs"></i><p>โรคและอาการ</p> </a>
        </li>
        <li class="nav-item">
            <a href="{{route('symptom.index')}}" class="nav-link {{starts_with(Route::currentRouteName(),'symptom.index')?'active':''}}"><i class="nav-icon fa fa-ambulance"></i><p>อาการ</p> </a>
        </li>
        <li class="nav-item">
            <a href="{{route('disease.index')}}" class="nav-link {{starts_with(Route::currentRouteName(),'disease.index')?'active':''}}"><i class="nav-icon fa fa-bed"></i><p>โรค</p> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="nav-icon fa fa-arrow-right"></i><p>ออกจากระบบ</p></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>

</div>

</aside>

<div class="content-wrapper">
    @yield('content')
</div>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
ระบบค้นหาโรคจากอาการป่วย
</div>

<strong>Copyright &copy; 2022 <a href="https://www.prc.ac.th/">โครงงาน Data science ม.3/4 โรงเรียนปริ้นส์รอยแยลส์วิทยาลัย</a>.</strong> All rights reserved.
</footer>
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

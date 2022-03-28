@extends('layouts.base')


@section('content')
<footer class="footer-area" style="background-color: #D3DCE3;">
    <div class="container mt-5 mb-4">
        <div class="row">
            
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h6 class="mb-2 text-info" style="text-decoration: underline; font-size: 18px;">East Africa</h6>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href="">South Sudan</a></li>
                        <li><a href="">Kenya</a></li>
                        <li><a href="">Uganda</a></li>
                        <li><a href="">Tanzania</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h6 class="mb-2 text-info" style="text-decoration: underline; font-size: 18px;">North Africa</h6>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href="">Algeria</a></li>
                        <li><a href="">Egypt</a></li>
                        <li><a href="">Tunisia</a></li>
                        <li><a href="">Morocco</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h6 class="mb-2 text-info" style="text-decoration: underline; font-size: 18px;">Southern Africa</h6>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href="">South Africa</a></li>
                        <li><a href="">Angola</a></li>
                        <li><a href="">Madagascar</a></li>
                        <li><a href="">Namibia</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f-service">
                    <div class="sec-title">
                        <h6 class="mb-2 text-info" style="text-decoration: underline; font-size: 18px;">West Africa</h6>
                    </div>
                    <ul class="list-unstyled service-list">
                        <li><a href="">Nigeria</a></li>
                        <li><a href="">Ghana</a></li>
                        <li><a href="">Siera Leone</a></li>
                        <li><a href="">Burkina Faso</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .service-list li {
        margin-bottom: 4px !important;
    }
</style>
@endsection
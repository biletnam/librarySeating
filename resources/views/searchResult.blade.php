@extends('master')

@section('title', '查询结果')
@section('content')

<img src="{{asset('images/library.jpg')}}" width ="100%"/>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
        <h2 align = "center">Search</h2>
</div>
<div class="weui-cells">
    <div class="weui-cell">
				<form action="seatSearch" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div>
                        <label for="">Search by Seat Code</label>
                        <input type-"text" name="seatCode"/>
                        <!-- <button type="submit">查询</button> -->
                        <button class="weui-btn weui-btn_mini weui-btn_primary" type="submit">查询</button>
                        <!-- <button class="btn btn-primary" type="submit">查询</button> -->
                    </div>
                </form>
    </div>
</div>

@if(!empty($searchResult))
    <div class="weui-cells">
        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Seat Code</p>
            </div>
            <div class="weui-cell__ft">{{$searchResult->seat_code}}</div>
        </div>

        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Description</p>
            </div>
            <div class="weui-cell__ft">{{$searchResult->seat_desc}}</div>
        </div>

        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Created Time</p>
            </div>
            <div class="weui-cell__ft">{{$searchResult->created_at}}</div>
        </div>
        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Created By</p>
            </div>
            <div class="weui-cell__ft">{{$searchResult->created_by}}</div>
        </div>

        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Holder Name</p>
            </div>

        </div>

        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>Held Until</p>
            </div>

        </div>

        <div class="weui-cell">
            <div class="weui-cell__bd">
                <p>QR Code</p>
            </div>
            <img src="{{asset($searchResult->qrcode)}}"/>
        </div>
    </div>
    @endif

<div class="button-sp-area">

	<a href="/seatAdmin" class="weui-btn weui-btn_plain-primary">返回首页</a>
    <!-- <a href="javascript:;" class="weui-btn weui-btn_plain-primary">按钮</a> -->
    <!-- <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" align="center">按钮</a> -->
    
</div>
@section('my-js')

@endsection
@extends('web::layouts.master')
@section('content')
    <main id="content" class="mt-13">
        <div class="bg-gray-200 space-bottom-3">
            <div class="container">
                <div class="py-5 py-lg-7">
                    <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Đặt hàng không thành công</h6>
                </div>
                <div class="max-width-890 mx-auto">
                    <div class="bg-white pt-6 border">
                        <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1"><?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?></h6>

                        <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                            <button class="button alt btn btn-dark btn-block rounded-0 py-4" type="submit"><a href="{{route('home')}}">Quay lại trang chủ</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('msgLang.msgOlaUsu', ['user' => Auth::user() -> name])}}
                        {{trans_choice('msgLang.msgNtf', 0, ['number' => 0])}}
                    </div>
                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('welcome')}}" class="btn btn-primary">{{__('msgLang.btnVol')}}</a>    
                        <a href="{{route('pedido.index')}}" class="btn btn-primary">{{__('msgLang.lblMntPed')}}</a>
                        <a href="#" class="btn btn-primary">{{__('msgLang.lblMntEnd')}}</a>
                        <a href="#" class="btn btn-primary">{{__('msgLang.lblMntPrf')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

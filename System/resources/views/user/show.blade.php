@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Detail Data User</b>
                </div>
                <div class="card-body">
                    <h4>{{$user->nama}}</h4>
                    <hr>
                    <p>
                        {{"@".$user->username}} |
                        Email : {{$user->email}}
                    </p>
                    <p>
                        No WhatsApp : {{$user->detail->no_whatsapp}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

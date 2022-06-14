@extends('layouts.app')
@section('content')
    <h1>Your order status</h1>
<h2>{{env('LARAVEL_ECHO_PORT')}}</h2>
    <div id="notification"></div>
    <div id="status"></div>
@endsection
@section('javascript')
    <script>
        window.laravel_echo_port=6001;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Socket-Id': window.Echo.socketId()
            }
        });
    </script>
    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel')
            .listen('.UserEvent', (data) => {
                i++;
                $("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
            });

        window.Echo.private("order")
            .listen('.SendStatus',(e)=>{
                i++;
                $("#status").append('<div class="alert alert-info">'+i+'.'+data.title+'</div>')
            })
    </script>
@endsection
@extends('layouts.master')

@section('title' , 'علیرضا وحدانی | به زودی ...')

@section('content')
    <div class="content">
        <h3>به زودی محتوا قرار میگیرد ...</h3>
    </div>

    <script>
        setTimeout(function () {
            location.replace('/');
        }, 3000);
    </script>
@endsection

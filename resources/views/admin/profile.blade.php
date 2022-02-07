@extends('layouts.admin')
@section('title') Изменение profile @endsection
@section('header')
    <h1 class="h2">Изменение профиля пользователя</h1>
@endsection
@section('content')
                @if(Session::has('MSG'))
                    <div class="alert alert-danger">
                    {{Session::get('MSG')}}
                    </div>
                @endif
    <form action="#" method="post">
        @csrf
        
                @if($errors->has('name'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('email') as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif
                <input class="form-control" name="name" placeholder="name" value="{{$user->name}}"> <br>
                
                @if($errors->has('email'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('email') as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif
                <input class="form-control" name="email" placeholder="e-mail" value="{{$user->email}}"> <br>
                <h6>Признак администратора</h6>
                @if($errors->has('is_admin'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('is_admin') as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif
                <input class="form-control" name="is_admin" placeholder="is_admin" value="{{$user->is_admin}}"> <br>

                @if($errors->has('password'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('password') as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif
                <input class="form-control" name="password" type="password" placeholder="Текущий пароль" > <br>

                @if($errors->has('newPassword'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('newPassword') as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif
                <input class="form-control" name="newPassword" type="newPassword" placeholder="Новый пароль" > <br>
                <button class="form-control" type="submit"> Изменить
                </button>
    </form>
@endsection
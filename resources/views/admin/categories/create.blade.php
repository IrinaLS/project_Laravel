@extends('layouts.admin')

@section ('title') Добавить категорию
@endsection

@section ('header')
<h1 class="h2">Добавить категорию</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          
           </div>
        </div>
@endsection

@section('content')
@include ('inc.message')
    <div>
        <form method="post" action="{{ route('admin.categories.store')}}">
        @csrf
            <div class="form-group">
                <label for="title">Наименование категории</label>
                <input type="text" class="form-control" value="{{ old('title') }}" id="title" name="title" required>
                @error('title') <strong style="color:red;">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание категории</label>
                <textarea class="form-control" value="{{ old('description') }}" name="description" id="description"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success" style="float: right;">Сохранить</button>
        </form>
    </div>
@endsection
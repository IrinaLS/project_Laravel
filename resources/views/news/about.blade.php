@extends ('layouts.main')

@section('title')
	О нас @parent
@endsection

@section('header')
	<div class="row py-lg-5">
		<div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light">О нас</h1>
		</div>
	</div>
@endsection

@section('content')

<div class="card">
  <div class="card-header">
  Категории 
  </div>
  <div class="card-body">
    <a href="{{route('news.category')}}" class="btn btn-primary">Перейти на страницу категорий</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
  Все новости
  </div>
  <div class="card-body">
    <a href="{{route('news.index')}}" class="btn btn-primary">Перейти на страницу всех новостей</a>
  </div>
</div>
    	
@endsection
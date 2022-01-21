@extends ('layouts.main')

@section('title')
{{$newsItem->title}}
@endsection

@section('header')
	<div class="row py-lg-5">
		<div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light"> Автор: {{ $newsItem->author }} </h1>
		</div>
	</div>
@endsection

@section('content')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      {{$newsItem->title }}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p class="card-text">{!! $newsItem->description!!}</p>
         
      </div>
    </div>
  </div> 
</div>


<a href="<?=route('news.index', [])?>"> Вернуться к списку новостей</a>

@endsection
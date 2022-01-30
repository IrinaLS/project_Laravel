@extends ('layouts.main')

@section('title')
	Список категорий @parent
@endsection

@section('header')
	<div class="row py-lg-5">
		<div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light">Список категорий</h1>
		</div>
	</div>
@endsection

@section('content')
<div class="accordion" id="accordionExample">    

@forelse($categoriesList as $categoryItem)

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      {{$categoryItem->title}}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      {{$categoryItem->description}}
      <br>
      <a href="{{route('news.oneCategoryNews', ['id' => $categoryItem->id])}}"  type="button" class="btn btn-sm btn-outline-secondary">Смотреть новости этой категории</a>
      </div>
    </div>
  </div>  
@empty 
<h1>Категорий нет</h1>
@endforelse
{{ $categoriesList->links() }}
</div>
@endsection


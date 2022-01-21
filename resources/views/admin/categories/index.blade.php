@extends('layouts.admin')

@section ('title') Список категорий
@endsection

@section ('header')
<h1 class="h2">Список категорий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href= "{{route('admin.categories.create')}} "
            type="button" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>
           </div>
        </div>
@endsection

@section ('content')
<div class="table-responsive">
@forelse($categoriesList as $categoryItem)

<div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    {{$categoryItem->title}}
    {{$categoryItem->description}}
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <strong>This is the first item's accordion body.</strong> 
      It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
    </div>
  </div>
</div>  
@empty 
<h1>Категорий нет</h1>
@endforelse
</div>
@endsection
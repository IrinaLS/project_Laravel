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
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <strong>Описание</strong> 
      {{$categoryItem->description}}
      <br>
      <strong>Количество новостей</strong> 
      {{$categoryItem->news->count()}}
      <br>
      <a href="{{ route('admin.categories.edit', ['category' => $categoryItem]) }}">Редактирование</a> &nbsp;
      <br>
      <a href="javascript:;" style="color:red;">Удаление</a>
    </div>    
  </div>
</div>  
@empty 
<h1>Категорий нет</h1>
@endforelse
{{ $categoriesList->links() }}
</div>
@endsection
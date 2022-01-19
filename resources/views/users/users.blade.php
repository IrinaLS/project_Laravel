@extends ('layouts.main')

@section('title')
	Список новостей @parent
@endsection

@section('content')
@if($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
  <div class="container">
    <main>
      <div class="row g-5">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Напишите нам</h4>
          <form class="needs-validation" method="post" action="#">
              @csrf
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Ваше имя</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" name="firstName" value="{{ old('firstName') }}" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Ваша фамилия</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" name="lastName" value="{{ old('lastName') }}" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>    

                <div class="form-group">
                  <label for="description">Ваше сообщение</label>
                  <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                </div>                
                              
              </div>
              <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить</button>
          </form>
        </div>
      </div>

      <div class="row g-5">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Сделайте заказ</h4>
          <form class="needs-validation" method="post" action="#">
              @csrf
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Ваше имя</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" name="firstName" value="{{ old('firstName') }}" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Ваша фамилия</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" name="lastName" value="{{ old('lastName') }}" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>    

                <div class="form-group">
                  <label for="description">Укажите категорию заказа (что необходимо)</label>
                  <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                </div>                
                   
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="phone" class="form-label">Телефон<span class="text-muted"></span></label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+7 (654) 456 23 32">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                        
                <div class="col-md-5">
                  <label for="country" class="form-label">Страна</label>
                  <select class="form-select" id="country" name="country">
                    <option value="">Выбрать...</option>
                    <option>Россия</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
              </div>
              <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить</button>
          </form>
        </div>
      </div>
    </main>     
  </div>
  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>    
@endsection
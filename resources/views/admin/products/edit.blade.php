@extends('layouts.admin_layout')

@section('title','Редактировать товар')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">


                    <h1 class="m-0">Редактировать товар - {{$products['title']}}</h1>



                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>{{ session('success') }}</h5>
        </div>
    @endif



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">

                <div class="card-body">
                    <div class="form-group">
                        <label>Изображение</label>
                        <div class="col-6">
                            <img src="/{{$products['image']}}" class="product-image text-center" alt="Product Image">
                        </div>
                    </div>
                </div>


                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.update',$products['id'])}}" method="POST" enctype="multipart/form-data" >

                    @method('PUT')
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="title" value="{{$products['title']}}" class="form-control" placeholder="Введите название вашего товара" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                            <label>Стоимость</label>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <label for="price-1">Розничная цена</label>
                                        <input type="text" value="{{$products['wholesale']}}" name="wholesale" class="form-control" id="price-1" placeholder="Розница">
                                    </div>
                                    <div class="col-4">
                                        <label for="price-2">Оптовая цена</label>
                                        <input type="text" value="{{$products['retail']}}" name="retail" class="form-control" id="price-2" placeholder="Опт">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="cat_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}" @if($category['id'] == $products['cat_id']) selected
                                        @endif>{{$category['title']}}</option>
                                @endforeach
                            </select>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label>Описание продукта</label>--}}
{{--                            <textarea name="descr" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}

{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>Назначение</label>--}}
{{--                            <textarea name="purpose" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                               {{$products['purpose']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>РЕКОМЕНДУЕМЫЕ ОСНОВАНИЯ</label>--}}
{{--                            <textarea name="recommend" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['recommend']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>УСЛОВИЯ ПРОВЕДЕНИЯ РАБОТ</label>--}}
{{--                            <textarea name="conditions" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['conditions']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>ПОДГОТОВКА ОСНОВАНИЯ</label>--}}
{{--                            <textarea name="lead_up" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['lead_up']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>ПРИГОТОВЛЕНИЕ РАСТВОРНОЙ СМЕСИ</label>--}}
{{--                            <textarea name="preparation" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['preparation']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>ПОРЯДОК РАБОТЫ</label>--}}
{{--                            <textarea name="method_works" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['method_works']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>УСЛОВИЯ ХРАНЕНИЯ</label>--}}
{{--                            <textarea name="keeping" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                {{$products['keeping']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label>ГАРАНТИЯ ИЗГОТОВИТЕЛЯ</label>--}}
{{--                            <textarea name="guaranty" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;">--}}
{{--                                 {{$products['guaranty']}}--}}
{{--                            </textarea>--}}
{{--                        </div>--}}
                    </div>
                    <!-- /.card-body -->
                    <div class="form-group">
                        <div class="wrapper">
                            <div class="preview"></div>
                            <label class="file">
                                <input type="file"  name="image" accept="image/jpeg,image/png" >
                                <span>Добавить изображение</span>
                            </label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary start">Изменить</button>
                    </div>
                </form>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection



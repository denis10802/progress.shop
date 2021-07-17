@extends('layouts.admin_layout')

@section('title','Редактировать товар')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">


                    <h1 class="m-0">Редактировать товар - {{$products->title}}</h1>



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




                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.update',$products['id'])}}" method="POST" enctype="multipart/form-data">

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
                                        <input type="text" value="{{$products['wholesale']}}" name="retail" class="form-control" id="price-1" placeholder="Розница">
                                    </div>
                                    <div class="col-4">
                                        <label for="price-2">Оптовая цена</label>
                                        <input type="text" value="{{$products['retail']}}" name="wholesale" class="form-control" id="price-2" placeholder="Опт">
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

                        <div class="form-group">
                            <label>Описание продукта</label>
                            <textarea name="descr" class="form-control" rows="10" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; ">
                                {{$products['descr']}}
                            </textarea>
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



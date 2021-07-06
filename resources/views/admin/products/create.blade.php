@extends('layouts.admin_layout')

@section('title','Добавить товар')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
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
                <form action="{{ route('product.store' )}}" method="POST" enctype="multipart/form-data" >
                    <div class="card-body">
                        <div class="form-group">
                            @csrf
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                        <label>Стоимость</label>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <label for="price-1">Розничная цена</label>
                                    <input type="text" name="wholesale" class="form-control" id="price-1" placeholder="Розница">
                                </div>
                                <div class="col-4">
                                    <label for="price-2">Оптовая цена</label>
                                    <input type="text" name="retail" class="form-control" id="price-2" placeholder="Опт">
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="cat_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Описание продукта</label>
                            <textarea name="descr" class="form-control" rows="9" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
                        </div>

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
                        <button type="submit" class="btn btn-primary start">Добавить</button>
                    </div>
                </form>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection




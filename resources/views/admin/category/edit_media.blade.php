@extends('layouts.admin_layout')

@section('title', 'Изменить изображение')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменить изображение - {{$category->title}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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


{{--            {{route('category.update',$category['id'])}}--}}
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('updateImageCategory',$category->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div class="card-body">
                        <div class="form-group">
                            <label>Изображение</label>
                            <div class="col-6">
                                <img src="{{Storage::url($category->image)}}" class="product-image text-center" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <div class="wrapper">
                                <div class="preview"></div>
                                <label class="file">
                                    <input type="file" name="image" accept="image/jpeg,image/png" >
                                    <span>Добавить изображение</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.admin_layout')

@section('title','Добавить технические характеристики')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить технические характеристики - для {{$product->title}}</h1>
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


    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">

                <form action="{{route('addSpecification')}}" method="POST">


                    @csrf

                    <input type="hidden" name="product_id" value="{{$product->id}}" class="form-control" >

                    <div class="card-success">
                        <div class="card-header">
                            <h3 class="card-title">Технические характеристики</h3>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 70%">
                                        Название
                                    </th>
                                    <th style="width: 30%">
                                        Значение
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <input name="name_param" type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="col-6">
                                            <input type="text" name="param" class="form-control" placeholder="" value="">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary start">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 55%">
                        Название
                    </th>
                    <th style="width: 15%">
                        Значение
                    </th>

                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>


                <tbody>
                @foreach($specifications as $specification)
                <tr>


                    <td>
                        {{$specification['name_param']}}

                    </td>
                    <td>
                        {{$specification['param']}}
                    </td>

                    <td class="project-actions text-right">

                        <a  href="{{route('updateFormSpecification',$specification['id'])}}" class="btn btn-success btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Изменить
                        </a>


                            <a  href="{{route('delete',$specification['id'])}}" class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>
                                Удалить
                            </a>

                        </form>
                    </td>

                </tr>
                @endforeach
                </tbody>




            </table>
                </div>

            </div>
        </div>
    </section>


@endsection

@extends('layouts.admin_layout')

@section('title','Добавить описания товарам')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить описание - для {{$product->title}}</h1>
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

                <form action="{{route('addDescription')}}" method="POST">


                    @csrf

                    <input type="hidden" name="product_id" value="{{$product->id}}" class="form-control" >

                    <div class="card-success">

                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 30%">
                                        Название
                                    </th>
                                    <th style="width: 70%">
                                        Значение
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <input name="name_descr" type="text" class="form-control" placeholder="" value="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="col-12">
                                            <textarea name="descr" class="form-control" rows="5" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; ">

                            </textarea>
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
                            <th style="width: 20%">
                                Название
                            </th>
                            <th style="width: 50%">
                                Описание
                            </th>

                            <th style="width: 30%">
                            </th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($descriptions as $description)
                            <tr>


                                <td>
                                    {{$description['name_descr']}}

                                </td>
                                <td>
                                    {{$description['descr']}}
                                </td>

                                <td class="project-actions text-right">

                                    <a  href="{{route('updateForm',$description['id'])}}" class="btn btn-success btn-sm">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить
                                    </a>

                                    <a  href="{{route('delete',$description['id'])}}" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i>
                                        Удалить
                                    </a>
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

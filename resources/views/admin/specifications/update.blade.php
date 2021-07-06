@extends('layouts.admin_layout')

@section('title','Изменить характеристику')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Изменить характеристику</h1>
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

                <form action="{{route('update',$specification['id'])}}" method="POST">


                    @csrf





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
                                            <input name="name_param" type="text" class="form-control" placeholder="" value="{{$specification['name_param']}}">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="col-6">
                                            <input type="text" name="param" class="form-control" placeholder="" value="{{$specification['param']}}">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary start">Обновить</button>
                    </div>
                </form>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

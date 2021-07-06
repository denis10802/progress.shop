@extends('layouts.admin_layout')

@section('title', 'Все товары')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Спецификации</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Все товары</h3>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 55%">
                            Название
                        </th>
                        <th style="width: 15%">
                            Дата добавления
                        </th>

                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($products as $product)
                        <tr>

                            <td>
                                {{$product->title}}
                            </td>
                            <td>
                                {{$product->created_at}}
                            </td>

                            <td class="project-actions text-right">

                                <a  href="{{route('create',$product->id)}}" class="btn btn-success btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Изменить
                                </a>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>




                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection

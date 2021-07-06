@extends('layouts.admin_layout')

@section('title', 'Все товары')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все товары</h1>
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

                    <th style="width: 30%">
                        Категория
                    </th>
                    <th style="width: 30%">
                        Название
                    </th>
                    <th style="width: 15%">
                        Дата добавления
                    </th>

                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>


                    <tbody>
                    @foreach($products as $product)
                    <tr>

                        <td>
                            {{ $product->category->title }}


                        </td>

                        <td>
                            {{$product['title']}}
                        </td>
                        <td>
                            {{$product['created_at']}}
                        </td>

                        <td class="project-actions text-right">


                            <a  href="{{ route('product.edit', $product['id']) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Изменить
                            </a>
                            <form action="{{route('product.destroy', $product['id'])}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >
                                <i class="fas fa-trash">
                                </i>
                                Удалить
                            </button>
                            </form>
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


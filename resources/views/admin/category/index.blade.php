@extends('layouts.admin_layout')

@section('title', 'Все категории')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 5%">
                            ID
                        </th>

                        <th>
                           Название
                        </th>

                        <th style="width: 40%">
                        </th>

                    </tr>
                    </thead>
                    @foreach($categories as $category)
                    <tbody>
                    <tr>
                        <td>
                            {{$category['id']}}
                        </td>
                        <td>
                            {{$category['title']}}
                        </td>


                        <td class="project-actions text-right">

                            <a class="btn btn-info btn-sm" href="{{route('category.edit',$category['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <a class="btn btn-success btn-sm" href="{{route('SettingImageCategory',$category['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Изменить изображение
                            </a>

                            <form action="{{route('category.destroy', $category['id'])}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                    <i class="fas fa-trash"></i>
                                    Удалить
                                </button>

                            </form>
                        </td>
                    </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection

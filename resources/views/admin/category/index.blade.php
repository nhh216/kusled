@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh mục</h1>
            </div><!-- /.col -->
            <a class="btn-card-header btn btn-primary" href="{{  route('admin.category.create')  }}">Thêm mới</a>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="card w-100">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a class="icon-action" href="{{ route('admin.category.edit', $category->id) }}">
                                    <i class="fas fa-tools" title="Sửa"></i>
                                </a>
                                <a class="icon-action" href="{{ route('admin.category.delete', $category->id) }}" onclick="return confirmDelete()">
                                    <i class="fas fa-trash" title="Xóa"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Thuộc tính sản phẩm</h1>
            </div><!-- /.col -->
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
                        @foreach($attributes as $index => $attribute)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $attribute->text }}</td>
                            <td>
                                <a class="icon-action" href="{{ route('admin.attribute.edit', $attribute->id) }}">
                                    <i class="fas fa-tools" title="Sửa"></i>
                                </a>
                                <a class="icon-action" href="{{ route('admin.attribute.delete', $attribute->id) }}" onclick="return confirmDelete()">
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

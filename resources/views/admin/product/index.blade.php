@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Sản Phẩm</h1>
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
                            <th>Trạng thái</th>
                            <th>Tên</th>
                            <th>Mã sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Khuyến mại (%)</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->status ? 'Đang hoạt động' : '' }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>
                                <a class="icon-action" href="{{ route('admin.product.edit', $product->id) }}">
                                    <i class="fas fa-tools" title="Sửa"></i>
                                </a>
                                <a class="icon-action" href="{{ route('admin.product.delete', $product->id) }}" onclick="return confirmDelete()">
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

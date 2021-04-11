@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Thương hiệu</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title label-card-title">Sửa thương hiệu</h3>
                            <button type="submit" class="btn btn-light btn-card-header">Sửa</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên thương hiệu <code>*</code></label>
                                        <input
                                            name="name"
                                            type="text"
                                            class="form-control rounded-0"
                                            id="exampleInputRounded0"
                                            value="{{ $brand->name }}"
                                            required
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ảnh <code></code></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 show-image">
                                    <div class="image-wrapper" id="image-wrapper-0">
                                        <img id="img-0" src="{{ $brand->image }}" class="img-preview" alt="image"/>
                                        <input
                                            name="images[]"
                                            type="file"
                                            onchange="document.getElementById('img-0').src = window.URL.createObjectURL(this.files[0])"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </form>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

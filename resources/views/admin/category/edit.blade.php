@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh mục</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title label-card-title">Sửa danh mục</h3>
                                <button type="submit" class="btn btn-light btn-card-header">Sửa</button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên <code>*</code></label>
                                            <input
                                                name="name"
                                                value="{{ old('name', isset($category->name) ? $category->name : null) }}"
                                                type="text"
                                                class="form-control rounded-0"
                                                id="exampleInputRounded0"
                                                required
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Loại <code>*</code></label>
                                            <select name="type" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                <option
                                                    value="{{ \App\Models\Category::TYPE_PRODUCT }}"
                                                    {{ $category->type == \App\Models\Category::TYPE_PRODUCT ? 'selected':'' }}>
                                                    Sản phẩm</option>
                                                <option
                                                    value="{{ \App\Models\Category::TYPE_POST }}"
                                                    {{ $category->type == \App\Models\Category::TYPE_POST ? 'selected':'' }}>
                                                    Bài viết</option>
                                            </select>
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

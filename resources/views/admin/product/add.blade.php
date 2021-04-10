@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" xmlns="">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sản phẩm</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title label-card-title">Thêm mới sản phẩm</h3>
                            <button type="submit" class="btn btn-light btn-card-header">Thêm mới</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Trạng thái sản phẩm <code>*</code></label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input name="status" type="checkbox" id="checkboxPrimary1"
                                                               checked>
                                                        <label class="font-weight-400" for="checkboxPrimary1">Hoạt
                                                            động</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Danh mục <code>*</code></label>
                                                <select name="category_id" class="custom-select rounded-0"
                                                        id="exampleSelectRounded0">
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên <code>*</code></label>
                                                <input name="name" type="text" class="form-control rounded-0"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mã sản phẩm <code>*</code></label>
                                                <input name="code" type="text" class="form-control rounded-0"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giá <code>*</code></label>
                                                <input
                                                    name="price"
                                                    type="number"
                                                    class="form-control rounded-0"
                                                    min="0"
                                                    value="0"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                    required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Khuyến mại (%) <code>*</code></label>
                                                <input
                                                    name="discount"
                                                    type="number"
                                                    class="form-control rounded-0"
                                                    pattern="[0-9]*"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                    required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thuộc tính sản phẩm <code></code></label>
                                            <div class="action-img">
                                                <a class="btn btn-success btn-circle .btn-sm btn-action-img"
                                                   id="add-product-attribute" title="Thêm thuộc tính">
                                                    <i class="white-text fas fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-product-attribute">
                                    <div class="col-md-12 attribute-wrapper" id="product-attribute-0">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả tóm tắt <code></code></label>
                                        <textarea name="short_desc" class="form-control "
                                                  id="short_desc"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả chi tiết <code></code></label>
                                        <textarea name="full_desc" class="form-control "
                                                  id="full_desc"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ảnh <code></code></label>
                                        <div class="action-img">
                                            <a class="btn btn-success btn-circle .btn-sm btn-action-img"
                                               id="add-img" title="Thêm ảnh">
                                                <i class="white-text fas fa-plus"></i>
                                            </a>
                                            <a class="btn btn-danger btn-circle .btn-sm" id="delete-img"
                                               title="Xóa ảnh">
                                                <i class="white-text fas fa-minus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 show-image">
                                    <div class="image-wrapper" id="image-wrapper-0">
                                        <img id="img-0" class="img-preview" alt="image"/>
                                        <input
                                            name="images[]"
                                            type="file"
                                            onchange="document.getElementById('img-0').src = window.URL.createObjectURL(this.files[0])"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </form>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        CKEDITOR.replace('short_desc', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });

        CKEDITOR.replace('full_desc', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
@endpush

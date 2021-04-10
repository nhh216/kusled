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
                                        <div class="row">
                                            <div class="col-md-5 ">
                                                <div class="form-group">
                                                    <label>Tên thuộc tính sản phẩm<code>*</code></label>
                                                    <div class="autocomplete" style="width:300px;">
                                                        <input id="myInput" type="text" name="myCountry" placeholder="Country">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Thuộc tính sản phẩm <code>*</code></label>
                                                    <input name="name" type="text" class="form-control rounded-0"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Xóa</label>
                                                    <a class="btn btn-danger btn-circle"
                                                       id="delete-product-attribute"
                                                       onclick="removeProductAttribute('product-attribute-0')"
                                                       title="Xóa thuộc tính">
                                                        <i class="white-text fas fa-minus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
            </div>
        </form>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
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
    <script src="{{ asset('admin/js/product.js') }}"></script>
@endpush

@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
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
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title label-card-title">sửa sản phẩm</h3>
                            <button type="submit" class="btn btn-light btn-card-header">Sửa</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái sản phẩm <code>*</code></label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input
                                                            name="status"
                                                            type="checkbox"
                                                            id="checkboxPrimary1"
                                                            @if($product->status) checked @endif
                                                        >
                                                        <label class="font-weight-400 mg-b-15" for="checkboxPrimary1">Hoạt động</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hiện thị trên trang chủ <code>*</code></label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-primary d-inline">
                                                        <input
                                                            name="show_to_home"
                                                            type="checkbox"
                                                            id="show_to_home"
                                                            @if($product->show_to_home) checked @endif
                                                        >
                                                        <label class="font-weight-400 mg-b-15" for="show_to_home">Hiện thị</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Danh mục <code>*</code></label>
                                                <select name="category_id" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category->id }}"
                                                            @if($product->category_id == $category->id) selected @endif
                                                        >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên <code>*</code></label>
                                                <input name="name" type="text" class="form-control rounded-0" value="{{ $product->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mã sản phẩm <code>*</code></label>
                                                <input name="code" type="text" class="form-control rounded-0" value="{{ $product->code }}" required>
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
                                                    value="{{ $product->price }}"
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
                                                    value="{{ $product->discount }}"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                    required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body" id="attributes">
                                    <div class="row" id="row-select">
                                        <div class="col-md-12">
                                            <div class="form-group multiple-select-wrapper">
                                                <label>Thuộc tính sản phẩm <code>*</code></label>
                                                <select id="multi-select" multiple>
                                                    @foreach($attributes as $index => $attribute)
                                                        <option
                                                            value="{{ $attribute->key }}"
                                                            @if(in_array($attribute->key, $keyAttrsSelected)) selected @endif
                                                        >
                                                            {{ $attribute->text }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả tóm tắt <code></code></label>
                                        <textarea name="short_desc" class="form-control " id="short_desc">
                                            {{ $product->short_desc }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả chi tiết <code></code></label>
                                        <textarea name="full_desc" class="form-control " id="full_desc">
                                    {{ $product->full_desc }}
                                </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ảnh <code></code></label>
                                        <div class="action-img">
                                            <a class="btn btn-success btn-circle .btn-sm btn-action-img" id="add-img" title="Thêm ảnh">
                                                <i class="white-text fas fa-plus"></i>
                                            </a>
                                            <a class="btn btn-danger btn-circle .btn-sm" id="delete-img" title="Xóa ảnh">
                                                <i class="white-text fas fa-minus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $images = \App\Models\Image::where('product_id', $product->id)->get();
                                ?>
                                <div class="col-md-12 show-image">
                                            @if(!isset($images) || count($images) == 0)
                                                <div class="image-wrapper" id="image-wrapper-0">
                                                    <img id="img-0" class="img-preview" alt="image" />
                                                    <input
                                                        name="images[]"
                                                        class="input-img"
                                                        type="file"
                                                        onchange="document.getElementById('img-0').src = window.URL.createObjectURL(this.files[0])"
                                                    >
                                                </div>
                                            @else
                                                @foreach($images as $key => $image)
                                                    <div class="image-wrapper" id="image-wrapper-{{ $key }}">
                                                        <img id="img-{{ $key }}" src="{{ $image->link }}" class="img-preview" alt="image" />
                                                        <input
                                                            name="images[]"
                                                            class="input-img"
                                                            type="file"
                                                            onchange="document.getElementById('img-{{ $key }}').src = window.URL.createObjectURL(this.files[0])"
                                                        >
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                <input type="hidden" id="arrSrcImg" name="arrSrcImg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('styles')
    <link href="{{ asset('admin/css/example-styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/demo-styles.css') }}" rel="stylesheet" />
    <style>
        .multiple-select-wrapper {
            display: grid;
        }
        .multi-select-button:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('admin/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('admin/js/multiple-select.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        CKEDITOR.replace( 'short_desc', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );

        CKEDITOR.replace( 'full_desc', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );

        $(function(){
            $('#multi-select').multiSelect();

            var arrAttr = '<?php echo $arrAttr; ?>'
            var valueAttrsSelected = '<?php echo $valueAttrsSelected; ?>'
            arrAttr = JSON.parse(arrAttr)
            valueAttrsSelected = JSON.parse(valueAttrsSelected)
            loadMultipleSelect(arrAttr, valueAttrsSelected)
        });
    </script>
@endpush

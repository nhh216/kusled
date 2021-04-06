@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ảnh hệ thống</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form action="{{ route('image-config.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title label-card-title">Thêm mới ảnh</h3>
                                    <button type="submit" class="btn btn-light btn-card-header">Thêm mới</button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Tên <code>*</code></label>
                                                        <input name="name" type="text" class="form-control rounded-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Loại <code>*</code></label>
                                                        <select name="type" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                            <option value="{{ \App\Models\ImageConfig::TYPE_SLIDER }}">Ảnh Slider</option>
                                                            <option value="{{ \App\Models\ImageConfig::TYPE_BANNER }}">Ảnh Banner</option>
                                                            <option value="{{ \App\Models\ImageConfig::TYPE_LOGO }}">Ảnh Logo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Mô tả ngắn cho ảnh <code>*</code></label>
                                                        <input name="desc" type="text" class="form-control rounded-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                        <label>Chọn Ảnh <code>*</code></label>
                                                        <input type="file"
                                                               name="file"
                                                               onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <img id="blah"
                                                         alt="your image"
                                                         width="300"
                                                         height="300" />
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
        <script type="javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#imageInput").change(function() {
                console.log(123)
                readURL(this);
            });
        </script>
    </div>
@endsection

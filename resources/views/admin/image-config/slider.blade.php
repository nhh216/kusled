<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('image-config.store') }}"
              method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title label-card-title">Chỉnh sửa ảnh Slider</h3>
                            <button type="submit" class="btn btn-light btn-card-header">Cập nhật</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
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
                                                <label>Chọn Ảnh 1<code>*</code></label>
                                                <input type="file"
                                                       name="file"
                                                       onchange="document.getElementById('slide1').src = window.URL.createObjectURL(this.files[0])">
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
                                                <label>Chọn Ảnh 2<code>*</code></label>
                                                <input type="file"
                                                       name="file"
                                                       onchange="document.getElementById('slide2').src = window.URL.createObjectURL(this.files[0])">
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
                                                <label>Chọn Ảnh 3<code>*</code></label>
                                                <input type="file"
                                                       name="file"
                                                       onchange="document.getElementById('slide3').src = window.URL.createObjectURL(this.files[0])">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-9">
                                            <img id="slide1"
                                                 class="mt-2"
                                                 alt="your image"
                                                 width="400"
                                                 height="150"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-9">
                                            <img id="slide2"
                                                 class="mt-2"
                                                 alt="your image"
                                                 width="400"
                                                 height="150"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-9">
                                            <img id="slide3"
                                                 class="mt-2"
                                                 alt="your image"
                                                 width="400"
                                                 height="150"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </form>
    </div>
</section>

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
                            <h3 class="card-title label-card-title">Chỉnh sửa chia sẻ - Kích thước  1200 * 630 </h3>
                            <button type="submit" class="btn btn-light btn-card-header">Cập nhật</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <input hidden name="type" value="FAVICON">
                                        <input hidden name="id" value="{{ $favicon->id }}">
                                        <input hidden name="name" value="{{ $favicon->name }}">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Chọn ảnh<code>*</code></label>
                                                <input type="file"
                                                       name="file"
                                                       onchange="document.getElementById('favicon').src = window.URL.createObjectURL(this.files[0])">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-9">
                                            <img id="favicon"
                                                 class="mt-2"
                                                 src="{{asset($favicon->link)}}"
                                                 alt="your image"
                                                 width="600"
                                                 height=315/>
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

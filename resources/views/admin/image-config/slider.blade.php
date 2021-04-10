<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('image-config.store') }}"
              method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input hidden name="type" value="SLIDER">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title label-card-title">Chỉnh sửa ảnh Slider</h3>
                            <button type="submit" class="btn btn-light btn-card-header">Cập nhật</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    @foreach ($sliders as $key => $slider)
                                        <input name="link[]" value="{{ $slider->link }}" hidden>
                                        <input name="id[]" value="{{ $slider->id }}" hidden>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Tên Slide <code>*</code></label>
                                                    <input name="name[]" value="{{ $slider->name }}" class="form-control rounded-0" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Mô tả ngắn cho ảnh <code>*</code></label>
                                                    <input name="desc[]" value="{{ $slider->desc }}" type="text" class="form-control rounded-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Chọn Ảnh 1<code>*</code></label>
                                                    <input type="file"
                                                           name="file-{{ $slider->id }}"
                                                           name="file-{{ $slider->id }}"
                                                           onchange="document.getElementById('slide{{$key}}').src = window.URL.createObjectURL(this.files[0])">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    @foreach ($sliders as $key => $image )
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-9">
                                                <img id="slide{{$key}}"
                                                     class="mt-2 ml-10"
                                                     src="{{asset($image->link)}}"
                                                     alt="your image"
                                                     width="400"
                                                     height="150"/>
                                            </div>
                                        </div>
                                    @endforeach
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

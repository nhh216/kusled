@extends('admin.layout.master')
@section('content')
<!-- Main content -->

    <!-- Config slider -->
        @include('admin.image-config.slider')
    <!-- End config slider -->

    <!-- Config logo -->
      @include('admin.image-config.logo')
    <!-- End config logo -->

    <!-- Config banner -->
    @include('admin.image-config.banner')
    <!-- End config banner -->

    <!-- Config meta -->
    @include('admin.image-config.meta')
    <!-- End config meta -->

    <!-- Config favicon -->
    @include('admin.image-config.favicon')
    <!-- End config favicon -->

<!-- /.content -->
@endsection

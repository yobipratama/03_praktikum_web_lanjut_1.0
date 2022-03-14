@extends('app')

@section('title')
    vacayhome
@endsection
@section('content')
            <section class="image-head-wrapper">
                <div class="inner-wrapper">
                    <h1>Gallery</h1>
                </div>
            </section>
            <div class="clearfix"></div>

            <section class="gallery-block">
                <div class="container">
                    <div class="row">
                        <div class="grid hover-effect">
                            <div class="grid-sizer"></div>
                            <div class="grid-item percent37 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery1-1.jpg" data-lightbox="example-1"><img src="images/gallery1.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent25 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery2-2.jpg" data-lightbox="example-1"><img src="images/gallery2.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent37 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery3-3.jpg" data-lightbox="example-1"><img src="images/gallery3.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent25 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery4-4.jpg" data-lightbox="example-1"><img src="images/gallery4.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent37 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery5-5.jpg" data-lightbox="example-1"><img src="images/gallery5.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent20 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery6-6.jpg" data-lightbox="example-1"><img src="images/gallery6.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent20 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery7-7.jpg" data-lightbox="example-1"><img src="images/gallery7.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                            <div class="grid-item percent20 gallery-image">
                                <a class="example-image-link img-responsive" href="images/gallery8-8.jpg" data-lightbox="example-1"><img src="images/gallery8.png" class="img-responsive" alt="gallery1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('js')
<script>
    $('#gallery').addClass('active');
</script>
@endsection

<section class="mb-5 mt-5">
    <h3 class="text-uppercase py-5 text-center text-dark fw-bold" style="font-size: 1.5rem;">Testimonials</h3>
    <div class="demo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 block-3">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                        <!-- Testimonial 1 -->
                        @foreach ($testimonys as $testimony)
                        <div class="testimonial p-4 text-center bg-light shadow-sm rounded">
                            <div class="testimonial-icon mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                    <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                                </svg>
                            </div>
                            <p class="description mb-3">
                               {!! $testimony->description !!}
                            </p>
                            <h5 class="title">{{ $testimony->name }}</h5>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


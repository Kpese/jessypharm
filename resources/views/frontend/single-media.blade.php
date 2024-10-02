@extends('frontend.layouts.app')

@section('content')

            {{-- <div class="empty-space col-xs-b55 col-sm-b95"></div>
            <div class="relative Outerdiv" data-aos="zoom-out">
                <div class="simple-article large grey">
                    <div class="overlay-title">
                        <div class="h2 TitlePage"><b>Our products</b></div>
                    </div>

                    <img class="TitleImage" src="img/inners/products2.jpg" alt="" style="object-position: 0 22%;" />
                </div>
                <div class="empty-space col-xs-b55 col-sm-b20"></div>
            </div> --}}




    {{-- <div class="row half opp" style="margin-top: 180px">
        <div class="bg" data-aos="fade-right" style="background-image: url('{{ asset('blogs/'.$blog->image) }}'); background-position: 60%;">
        </div>

                <div class="col-sm-6 col-xs-b30 col-sm-b0 text-boredr minheight" data-aos="fade-left">

                    <div class="title-line"><span></span></div>
                    <div class="h2 small"><b>{{ $blog->title }}</b></div>
                    <div class="empty-space col-xs-b55 col-sm-b10"></div>

                    <div class="simple-article text-light grey">
                        <h6 class="text-light">{{ $blog->created_at->format('dS F, Y') }}</h6>
                        <div class="empty-space col-xs-b55 col-sm-b20"></div>
                    {!! $blog->description !!}
                    </div>

                </div>


    </div> --}}

    <div class="container blog-container" style="margin-top: 180px">
        <h1 class="display-6 mb-4" style="color: #fb923c;">{{ $blog->title }}</h1>

        <div class="card shadow-sm p-4">
          <!-- Blog Image -->
          <img src="{{ asset('blogs/'.$blog->image) }}" alt="Blog Image" class="blog-image rounded">

          <!-- Blog Meta Info -->
          <div class="mt-4 mb-5">
            <p class="blog-meta">
              <strong>Created By:</strong> Admin | <strong>Date:</strong> {{ $blog->created_at->format('dS F, Y') }}
            </p>
          </div>

          <!-- Blog Content -->
          <div class="blog-content">
            {!! $blog->description !!}
          </div>

          <!-- Social Links -->
          <div class="mt-4">
            <h5>Share this post:</h5>
            <div class="social-links">
                <p class=" p-2" style="font-size:1.1rem; color:rgb(78, 0, 248);">
                  <span class=" ml-5 mr-3">
                    <a href="whatsapp://send?text=Check out this new product from Jessy Pharmacy: {{route('blog.single', $blog->slug) }}" class="text-dark" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp text-primary" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                  </svg></a>
                  </span>

                  <span class="mr-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('blog.single', $blog->slug) }}" class="social-icon facebook text-primary" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook text-primary" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></a>
                  </span>

                  <span>
                     <a href="https://twitter.com/intent/tweet?url={{route('blog.single', $blog->slug) }}&text=Check%20out%20this%20amazing%20blog%20post%20on%20JessyPharmacy" class="social-icon twitter" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x text-primary" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a>
                  </span>


                    </p>
                  </div>
            </div>
          </div>
        </div>
      </div>

    <div class="empty-space col-xs-b55 col-sm-b100" style="margin-bottom: 100px"></div>



@endsection

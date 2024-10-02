@extends('frontend.layouts.app')

@section('content')

            <div style="margin-top: 40px" class="empty-space col-xs-b55 col-sm-b95"></div>
            <div class="relative Outerdiv mb-4" data-aos="zoom-out">
                <div class="simple-article large grey">
                    <div class="overlay-title">
                        <div class="h2 TitlePage"><b>Our Media</b></div>
                    </div>

                    <img class="TitleImage" src="{{ asset('/frontend/images/media.jpg') }}" alt="" style="object-position: 0 22%;" />
                </div>
                <div class="empty-space col-xs-b55 col-sm-b20"></div>
            </div>



    <div class="container">

        <div class="empty-space col-xs-b55 col-sm-b80"></div>


                <div class="row ac-N">
                @foreach($blog as $item)
                    <div class="col-md-12">
                        <div class="left-right-entry style-1 new-view clearfix">
                            <div class="right" data-aos="fade-right">
                                <div class="entry full-size" style="background-image: url('{{ asset('blogs/'. $item->image) }}');"></div>
                            </div>
                            <div class="left" data-aos="fade-left">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <div class="cell-view">
                                            <div class="simple-article border-left grey">
                                                <a href="eventsdetails85e7.html?ev=1954">
                                                    <h3><b>{{$item->title}}</b></h3>
                                                </a>
                                                <h6>{{ $item->created_at->format('dS F, Y ') }}</h6>
                                                <div class="empty-space col-xs-b15"></div>
                                                <p>
                                                {!! Str::limit($item->description, 200,)  !!}
                                                </p>
                                                <br>
                                                <a class="mouseover-simple" href="{{ route('blog.single', $item->slug) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{$blog->links()}}
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>


    </div>


@endsection

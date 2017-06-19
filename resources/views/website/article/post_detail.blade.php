@extends('layouts/website')


@section('content')
  <section id="main-blog" class="main-blog-section">
     <div class="container">
        <div class="row">
           <div class="col-md-8">
              <div class="row">
                 <div class="main-blg-pic pt35">
                    <img src="{{ url('photos/1/original/'.$post->image)}}" class="img-responsive" alt="image">
                 </div>
                 <div class="row">

                    <div class="col-sm-9">
                       <div class="row">
                          <div class="blog-img-text ml15">
                             <div class="blg-nws-head pb60">
                                <div class="blg-tag pt30">
                                   <a class="tag" href="#">{{$post->category->name}}</a>
                                </div>
                                <div class="blg-text mt15">
                                   <a class="nws-link" href="#">{{$post->title}}</a>
                                </div>
                                <ul class="nws-meta mt15">
                                   <li> <a href="#"><i class="icofont icofont-clock-time"></i>  {{$post->created_at->toFormattedDateString()}}</a> </li>
                                   <li class="pull-right"> <a href="#"><i class="icofont icofont-brand-whatsapp"></i> 23</a> </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="blog-text-content mt15">

                   <div class="blog-paragraph">
                     {!! $post->html_content !!}
                   </div>

                 </div>
                 <div class="comment-area mt10">

                 </div>

              </div>
           </div>
           <div class="col-md-4">

           </div>
        </div>
     </div>
  </section>
@endsection

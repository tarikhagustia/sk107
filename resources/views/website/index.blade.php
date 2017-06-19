@extends('layouts/website')


@section('content')
<section id="latest-news" class="latest-news-section pt50">
   <div class="container">
      <div class="col-md-8">
         <div class="row">
            <div class="latest-content">
               <div class="nws-tab pull-right mt15">
                  <div class="section-title">
                     <h2 class="title">blog terbaru</h2>
                  </div>

                        <div class="row">
                          @foreach ($posts as $key => $post)
                            <div class="tab-img-text mt25">
                              <div class="col-sm-6">
                                 <div class="tab-img snip1206">
                                    <img src="{{ url('photos/1/small/'.$post->image)}}" alt="image">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="ls-nws-content pb25">
                                    <div class="ls-nws-tag-2">
                                       <a class="tag" href="#">{{$post->category->name}}</a>
                                       <h2 class="ls-nws-title mt20"><a class="nws-link" href="{{url('article/'.$post->slug)}}">{{$post->title}}</a></h2>
                                    </div>
                                    <ul class="nws-meta mt10">
                                       <li> <a href="#"><i class="icofont icofont-clock-time"></i> {{$post->created_at->toFormattedDateString()}}</a> </li>
                                       <li> <a href="#"><i class="icofont icofont-open-eye"></i> 23</a> </li>
                                    </ul>
                                    <p class="mt15">{{$post->meta_description}}</p>
                                 </div>
                              </div>
                           </div>
                          @endforeach
                        </div>
               </div>
            </div>
            {{ $posts->links() }}
            {{-- <div class="nws-load-icon mt30">
               <a href="#"><i class="icofont icofont-spinner-alt-5"></i></a>
            </div> --}}
         </div>
      </div>
      <div class="col-md-4">
         <div class="side-nws pl50">
            <div class="add-img">
               <img src="img/add-img.jpg" alt="image">
            </div>
            <div class="side-nws-content mt70">
               <div class="section-title">
                  <h2 class="title">Top 6 Foto</h2>
               </div>
               <div class="trending-content">
                  <div class="trend-content pt25">
                     <div class="trend-img mr25">
                        <img src="img/tren-1.jpg" alt="image">
                        <span>1</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
                  <div class="trend-content pt20">
                     <div class="trend-img mr25">
                        <img src="img/tren-2.jpg" alt="image">
                        <span>2</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
                  <div class="trend-content pt20">
                     <div class="trend-img mr25">
                        <img src="img/tren-3.jpg" alt="image">
                        <span>3</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
                  <div class="trend-content pt20">
                     <div class="trend-img mr25">
                        <img src="img/tren-4.jpg" alt="image">
                        <span>4</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
                  <div class="trend-content pt20">
                     <div class="trend-img mr25">
                        <img src="img/tren-5.jpg" alt="image">
                        <span>5</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
                  <div class="trend-content pt20">
                     <div class="trend-img mr25">
                        <img src="img/tren-6.jpg" alt="image">
                        <span>6</span>
                     </div>
                     <div class="trend-text pt10">
                        <p class="trend-title">fashion</p>
                        <a class="nws-link" href="#">Hacks to make your holday better</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="top-stories" class="top-stories-section">
   <div class="container">
      <div class="section-title">
         <h2 class="title">Cerita Liburan</h2>
      </div>
      <div class="top-nws pt35">
         <div class="top-nws-pic stories-slide">
           @foreach ($stories->post as $key => $post)
             <div class="top-slide-content">
               <div class="nws-gallery-pic">
                  <img src="{{asset('photos/1/small/'.$post->image)}}" alt="image">
                  <div class="pic-tag">
                     <a class="tag" href="{{url('article/'.$post->slug)}}">{{$post->category->name}}</a>
                  </div>
               </div>
               <div class="link mt20">
                  <a class="nws-link" href="{{url('article/'.$post->slug)}}"> {{$post->title}}</a>
               </div>
            </div>
           @endforeach
         </div>
      </div>
   </div>
</section>
<div id="single-news" class="single-news-section">
   <div class="container">
      <div class="row">
         <div class="col-sm-8">
            <div class="single-pic snip1206">
               <img src="img/single-pic-1.jpg" alt="image">
            </div>
         </div>
         <div class="col-sm-4">
            <div class="single-text">
               <div class="single-tag">
                  <a class="tag" href="#">celebrity</a>
               </div>
               <div class="single-link mt30">
                  <a class="nws-link" href="#"> Sure, Queenstown Backyard Runners Run Together. But That’s Just the Beginning of Their Story!</a>
               </div>
               <div class="single-share">
                  <ul class="share">
                     <li><a href="#"><i class="icofont icofont-brand-whatsapp"></i> 25</a></li>
                     <li><a href="#"><i class="icofont icofont-share"></i>155</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="single-news-1" class="single-news-section-1 mt30 pt30">
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <div class="single-text">
               <div class="single-tag">
                  <a class="tag" href="#">celebrity</a>
               </div>
               <div class="single-link mt30">
                  <a class="nws-link" href="#">Former Australian PM Julia Gillard: "Hillary, I know what you’re up against"</a>
               </div>
               <div class="single-share">
                  <ul class="share">
                     <li><a href="#"><i class="icofont icofont-brand-whatsapp"></i> 25</a></li>
                     <li><a href="#"><i class="icofont icofont-share"></i>155</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-sm-8">
            <div class="single-pic snip1206">
               <img src="img/single-pic-2.jpg" alt="image">
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

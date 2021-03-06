@extends('layouts.master')

@section('content')

<div class="breadcrumb-container">
   
</div><!-- /.breadcrumb-container -->


            <div class="main-container">
                <div class="article-container">
                    <div class="top-container">
                        <div class="heading">
                            <h1 class="blog--title is--padded-top-40 is--plum">{!! $blog->title !!}</h1>
                            <h2 class="blog--excerpt is--black">{!! $blog->series !!}</h2>
                            <p class="date is--black">Created on:  <span><i class="fa fa-calendar" aria-hidden="true"></i></span> {!! date('F d, Y', strtotime($blog->created_at)) !!} </p>
                            <p class="date is--black">Updated on:  <span><i class="fa fa-calendar" aria-hidden="true"></i></span> {!! date('F d, Y', strtotime($blog->updated_at)) !!} </p>  
                            
                            <div id="featured-image">
                                <img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="featured" alt="Learn Blockchain | Public Transport | Inclusion and Diversity">
                            </div><!-- /.featured-image -->

                            <p class="is--white is--lower">@markdown($blog->body)</p>
                            <div class="tag-container">
                                @unless($blog->tags->isEmpty())
                                    <ul class="tag--centre">
                                        @foreach($blog->tags as $tag)
                                            <a href="{{ url('/blogs', $blog->id) }}"><button class="btn-tag">{{ $tag->name }}</button></a>
                                        @endforeach
                                    </ul>
                                @endunless
                            </div><!-- /.tag-container -->
                            <div class="comment-container">
                                <a href="#comments"><i class="fa fa-comment-o fa-3x" aria-hidden="true"></i></a>
                            </div><!-- /.comment-container -->
                        </div><!-- /.heading -->
                        
                    </div><!-- /.top-container -->


                    <div class="bottom-container">
                        <h2 id="comments"></h2>
                            <div class="discus-box">
                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                    /*
                                    var disqus_config = function () {
                                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    */
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document, s = d.createElement('script');
                                        s.src = 'https://www-ormrepo-co-uk.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();


                                </script>

                            </div><!-- /.discus-box -->

                        <div class="social-container">
                            <div class="social-buttons is--margin-t25">
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-575c2d11e407df7a"></script>
                            </div><!-- /.social-buttons -->
                        </div><!-- /.social-container -->
                    </div><!-- /.bottom-container -->

                    <div class="button-container">

                            <div class="previous">
                                @if($previous)
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to( 'blogs/' . $previous->id ) }}"><i class="fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>

                                @endif
                            </div><!-- /.previous -->

                            <div class="next">
                                @if($next)
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to( 'blogs/' . $next->id ) }}"><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>

                                @endif
                            </div><!-- /.next -->


                    </div><!-- /.button-container -->
                    <div class="back-to-top">
                        <a href="#top">Jump to top</a>
                    </div><!-- /.back-to-top -->
                </div><!-- /.article-container -->
            </div><!-- /.main-container -->


@stop

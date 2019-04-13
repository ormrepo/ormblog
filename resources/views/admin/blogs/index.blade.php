@extends('layouts.app')

@section('meta-title', 'Transport & Logistics Blog | London UK | Logistics | Transport')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('admin.blogs.index') !!}
</div><!-- /.breadcrumb-container -->

    <!-- Page Content -->
    <a name="introduction"></a>
    <div class="hero">
        <div class="first-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-slider">
                        <div class="collection">
                            <div class="logo-header">
                                <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                                <div class="statement">

                                </div><!-- /.statement -->
                            </div><!-- /.logo-heading -->

                        </div><!-- /.collection -->
                    </div><!-- .intro-slider -->


                    <div class="columns is-gapless is-multiline animated rotateInDownLeft">
                        <div class="column is-one-quarter box-is-beige is-flex is-one">
                            <div class="name-column">
                                <h6 class="box--name">Sehinde Raji</h6>
                                <h6 class="box--title">Web Developer</h6>
                            </div><!-- /.name-column -->
                        </div><!-- /.column is-one-quarter box-is-beige is-flex-bottom is-one-->

                        <div class="column is-one-quarter is-grey is-flex is-two has-text-centered">
                            <div class="arrow">
                                <span><i class="fa fa-minus fa-1x" aria-hidden="true"></i>
                                <a href="https://twitter.com/ormrepo" class="twitter"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                                <i class="fa fa-minus fa-1x" aria-hidden="true"></i></span>
                                <h6 class="social--text">Follow @ormrepo
                                    for more information</h6>
                            </div><!-- /.arrow -->
                        </div><!-- /.column is-one-quarter is-grey is-flex is-two has-text-centered-->

                        @foreach ($blogs as $blog)
                           
                            @if($blog->id == 44)
                                <div class="column is-one-quarter is-dark-grey is-flex is-forty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-eight-->     
                            @elseif($blog->id == 45)
                                <div class="column is-one-quarter is-grey is-flex is-forty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-forty-nine--> 
                            @elseif($blog->id == 46)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-->
                            @elseif($blog->id == 47)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-one-->
                            @elseif($blog->id == 48)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-two-->
                            @elseif($blog->id == 49)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-three-->
                            @elseif($blog->id == 50)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-four-->          
                            @elseif($blog->id == 51)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-five-->
                            @elseif($blog->id == 52)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Quintin Gellar from Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-six--> 
                            @elseif($blog->id == 53)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-seven--> 
                            @elseif($blog->id == 54)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-eight-->             
                            @elseif($blog->id == 55)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-nine-->
                            
                            @elseif($blog->id == 56)
                                <div class="column is-one-quarter is-grey is-flex is-sixty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixty--> 
                            
                            @elseif($blog->id == 57)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Legacy Airline Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixty-one-->     

                            @elseif($blog->id == 58)
                                <div class="column is-one-quarter is-light-grey is-flex is-sixty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Legacy Airline Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-sixty-two-->    

                            @elseif($blog->id == 59)
                                <div class="column is-one-quarter is-grey is-flex is-sixty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Electricity Pylon Photo by Pexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixty-three--> 

                            @elseif($blog->id == 60)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Photo Courtesy of TFL @ Edgware Station"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixty-four-->
                                
                            @elseif($blog->id == 61)
                                <div class="column is-one-quarter is-light-grey is-flex is-sixty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a man with his luggage courtesy of Plexels "></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-sixty-five-->

                            @elseif($blog->id == 62)
                                <div class="column is-one-quarter is-grey is-flex is-sixty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Photo Courtesy of TFL @ Edgware Station"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixty-six-->

                            @elseif($blog->id == 63)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a jet engine Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixty-seven-->   
                            @elseif($blog->id == 64)
                                <div class="column is-one-quarter is-light-grey is-flex is-sixty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Photo Courtesy of TFL @ Edgware Station"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-sixty-eight-->   
                            @elseif($blog->id == 65)
                                <div class="column is-one-quarter is-grey is-flex is-sixty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a Quantas plane"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixty-nine--> 


                             @elseif($blog->id == 66)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a jet engine Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixty-eight-->   
                            @elseif($blog->id == 67)
                                <div class="column is-one-quarter is-light-grey is-flex is-sixty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Photo Courtesy of TFL @ Edgware Station"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-sixty-nine-->   
                            @elseif($blog->id == 68)
                                <div class="column is-one-quarter is-grey is-flex is-seventy">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seventy-->
                            @elseif($blog->id == 69)
                                <div class="column is-one-quarter is-light-grey is-flex is-seventy-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A Light Bulb Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-seventy-one-->
                            @elseif($blog->id == 70)
                                <div class="column is-one-quarter is-grey is-flex is-seventy-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seventy-two--> 
                            @elseif($blog->id == 71)
                                <div class="column is-one-quarter is-dark-grey is-flex is-seventy-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-seventy-three--> 

                            @elseif($blog->id == 72)
                                <div class="column is-one-quarter is-light-grey is-flex is-seventy-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-seventy-four-->
                            @elseif($blog->id == 73)
                                <div class="column is-one-quarter is-grey is-flex is-seventy-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-seventy-three-->        
                            @elseif($blog->id == 74)
                                <div class="column is-one-quarter is-grey is-flex is-seventy-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('admin/blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Photo Courtesy of Plexels"></a>
                                        </div>
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('admin/blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seventy-five-->                                                                                             
                            @endif

                        @endforeach
                    </div><!-- /.columns is-gapless is-multiline animated rotateInDownLeft -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero -->

    </div><!-- /.content-section-c -->

@endsection


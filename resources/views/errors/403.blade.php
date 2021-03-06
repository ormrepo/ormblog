@extends('layouts.master')

@section('meta-title', 'Http forbidden exception')

@section('content')

    <a name="introduction"></a>

    <div class="hero">
        <div class="first-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-slider">
                        <div class="centered">
                            <h1 class="is--uppercase is--centered is--beige">Oops! Http is forbidden....</h1>
                        </div><!-- /.centered -->

                        <div class="hero-container">
                            <div class="logo-header">
                                <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                            </div><!-- /.logo-heading -->

                            <div class="statement">
                                <p class="tagline">We will empower you for all your customers needs</p>
                            </div><!-- /.statement -->



                        </div><!-- /.hero-container -->

                        <div class="exceptions">
                            <div class="links-container">
                                <h2 class="is--padded-b20">Try going back to our links to find what you were looking for:</h2>
                                <ul class="list-inline">
                                    <li class="footer-menu-divider">&sdot;</li>
                                    <li><a href="/" class="foot-links">Home</a></li>
                                    <li class="footer-menu-divider"></li>
                                    <li><a href="/login" class="foot-links">Login</a>
                                    </li>
                                    <li class="footer-menu-divider">&sdot;</li>
                                    <li><a href="/register" class="foot-links">Register</a>
                                    </li>
                                    <li class="footer-menu-divider">&sdot;</li>
                                </ul>
                            </div><!-- /.links-container -->
                        </div><!-- /exceptions -->

                    </div><!-- .intro-slider -->

                </div>
            </div>
        </div>
    </div>

@endsection


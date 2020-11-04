@extends('app.layouts.master')


@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a  href="/">صفحه اصلی</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>درباره تطابق</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div style="direction: rtl; text-align: right" class="col-lg-12">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post">
                            <div class="post-image">

                            </div>


                            <div class="post-content">
                                {!! $blog->body !!}
                            </div>
                        </article>

                    </div>
                </div>


            </div>

        </div>

    </div>
@stop
@extends('index-main')
@section('csscontent')
    
@endsection
@section('content')
            <!-- mian-area -->
            <main>

                <!-- breadcrumb-area -->
                <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
                    <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb-content">
                                    <h2 class="title">Blog Details</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{Route('index')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumb-area-end -->
    
                <!-- blog-details-area -->
                <section class="blog-details-area pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="blog-details-wrap">
                                    <div class="blog-details-thumb">
                                        <img src="assets/img/blog/blog_details01.jpg" alt="">
                                    </div>
                                    <div class="blog-details-content">
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-user"></i> By <a href="{{route('blog-details')}}">Admin</a></li>
                                                <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                                <li><i class="far fa-comments"></i>05</li>
                                                <li><i class="far fa-eye"></i>1,526 VIEWS</li>
                                            </ul>
                                        </div>
                                        <h2 class="title">Building worker help each other with at construction site</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it as layout. The point of using Lorem Ipsum is that it has a more normal distribution.Collaboratively pontificat bleed aedge resources with inexpensive methodologies globally initiate multidisciplinary compatible architectures as our aspiteously repurpose leading edge growth strategies</p>
                                        <blockquote>
                                            <p>Which Podcasts Should Web Designer And Developers Be Listening To Ultimate Digital Clean our
                                            Checklist Prepare eadable when content of a page when looking at its layout.</p>
                                            <cite>David H. Molina</cite>
                                        </blockquote>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it as layout. The point of using Lorem Ipsum is that it has a more normal distribution.</p>
                                        <div class="bd-inner-img-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="assets/img/blog/blog_details02.jpg" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="bd-inner-content">
                                                        <p>The point of using Lorm Ipsum is that it has a our more normal our distribution Collaboratively pontificat bleed edge as resources with inexpensive thje methodologie
                                                        sglobally initiate multidisciplinary.</p>
                                                        <ul class="list-wrap">
                                                            <li><i class="fas fa-check-circle"></i>Information Tecaccumulation of technologies</li>
                                                            <li><i class="fas fa-check-circle"></i>Autonomous house with its garden and office</li>
                                                            <li><i class="fas fa-check-circle"></i>Self-expression through decor and art</li>
                                                            <li><i class="fas fa-check-circle"></i>Regular update monitoring</li>
                                                            <li><i class="fas fa-check-circle"></i>Functional minimalism</li>
                                                            <li><i class="fas fa-check-circle"></i>Regular update monitoring</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in a our some form, by injected humour, or randomised words which don't look even slightly believable. If you are going our as to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle the of text. All the Lorem Ipsum generators on the Internet tend.</p>
                                        <div class="blog-details-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="post-tags">
                                                        <h5 class="title">Tag:</h5>
                                                        <ul class="list-wrap">
                                                            <li><a href="#">#Construction</a></li>
                                                            <li><a href="#">#Roofing Service</a></li>
                                                            <li><a href="#">#Roofing</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="blog-post-share">
                                                        <h5 class="title">Share:</h5>
                                                        <ul class="list-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pev-next-post-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="post-item">
                                                    <div class="post-inner">
                                                        <div class="thumb">
                                                            <a href="{{route('blog-details')}}"><img src="assets/img/blog/pb_post_img01.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <h2 class="title"><a href="{{route('blog-details')}}">Portrait smiling professional engineer laptop</a></h2>
                                                            <span><i class="far fa-calendar-alt"></i>22 Jan 2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-btn">
                                                        <a href="{{route('blog-details')}}"><i class="fas fa-arrow-left"></i>Prev</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="post-item next-post-item">
                                                    <div class="post-inner">
                                                        <div class="thumb">
                                                            <a href="{{route('blog-details')}}"><img src="assets/img/blog/pb_post_img02.jpg" alt=""></a>
                                                        </div>
                                                        <div class="content">
                                                            <h2 class="title"><a href="{{route('blog-details')}}">Full shot man with helmet sitting on roof</a></h2>
                                                            <span><i class="far fa-calendar-alt"></i>22 Jan 2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-btn next-btn">
                                                        <a href="{{route('blog-details')}}"><i class="fas fa-arrow-right"></i>next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-wrap">
                                        <h4 class="comments-wrap-title">Comments (04)</h4>
                                        <div class="latest-comments">
                                            <ul class="list-wrap">
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comment_avatar01.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h6 class="name">
                                                                    Abubokkor Siddik
                                                                    <a href="#" class="comment-reply-link"><i class="fas fa-reply"></i>Reply</a>
                                                                </h6>
                                                                <span class="date">September 6, 2023</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus ultrices.</p>
                                                        </div>
                                                    </div>
                                                    <ul class="list-wrap children">
                                                        <li>
                                                            <div class="comments-box">
                                                                <div class="comments-avatar">
                                                                    <img src="assets/img/blog/comment_avatar02.png" alt="">
                                                                </div>
                                                                <div class="comments-text">
                                                                    <div class="avatar-name">
                                                                        <h6 class="name">
                                                                            Admin
                                                                            <a href="#" class="comment-reply-link"><i class="fas fa-reply"></i>Reply</a>
                                                                        </h6>
                                                                        <span class="date">September 6, 2023</span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus ultrices.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comment_avatar03.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h6 class="name">
                                                                    Elliot Alderson
                                                                    <a href="#" class="comment-reply-link"><i class="fas fa-reply"></i>Reply</a>
                                                                </h6>
                                                                <span class="date">September 6, 2023</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comment_avatar04.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h6 class="name">
                                                                    Enanath Jhon
                                                                    <a href="#" class="comment-reply-link"><i class="fas fa-reply"></i>Reply</a>
                                                                </h6>
                                                                <span class="date">September 6, 2023</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus eget ultrices pretium.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Write Your Comment</h3>
                                        <form class="comment-form" action="#">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="Name *">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-grp">
                                                        <input type="email" placeholder="Email *">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-grp">
                                                        <input type="url" placeholder="Website*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-grp">
                                                <textarea name="message" placeholder="Comment *"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-two">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-10">
                                <aside class="blog-sidebar">
                                    <div class="blog-widget">
                                        <div class="sidebar-search">
                                            <h4 class="widget-title">Search</h4>
                                            <form action="#">
                                                <input id="search" type="text" placeholder="Search">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="blog-widget">
                                        <h4 class="widget-title">Categories</h4>
                                        <div class="categories-list">
                                            <ul class="list-wrap">
                                                <li><a href="#">Business Consulting <span>(05)</span></a></li>
                                                <li><a href="#">Financial Investment <span>(07)</span></a></li>
                                                <li><a href="#">IT Consultations <span>(03)</span></a></li>
                                                <li><a href="#">Digital Analytics <span>(04)</span></a></li>
                                                <li><a href="#">Payment Processing <span>(02)</span></a></li>
                                                <li><a href="#">Software Solutions <span>(09)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-widget">
                                        <h4 class="widget-title">Recent News</h4>
                                        <div class="rc-post-wrap">
                                            <div class="rc-post-item">
                                                <div class="rc-post-thumb">
                                                    <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post01.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="{{route('blog-details')}}">Aerial view of a private house with on roof</a>
                                                    </h5>
                                                    <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                                </div>
                                            </div>
                                            <div class="rc-post-item">
                                                <div class="rc-post-thumb">
                                                    <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post02.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="{{route('blog-details')}}">Medium shot men working on roof presentation</a>
                                                    </h5>
                                                    <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                                </div>
                                            </div>
                                            <div class="rc-post-item">
                                                <div class="rc-post-thumb">
                                                    <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post03.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="{{route('blog-details')}}">Free photo cute family a roof above their head</a>
                                                    </h5>
                                                    <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-widget">
                                        <h4 class="widget-title">Popular Tags</h4>
                                        <div class="tag-list-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Construction</a></li>
                                                <li><a href="#">Roofing</a></li>
                                                <li><a href="#">Repairer</a></li>
                                                <li><a href="#">Maintenance</a></li>
                                                <li><a href="#">Remodeling</a></li>
                                                <li><a href="#">Roof</a></li>
                                                <li><a href="#">Roofing Service</a></li>
                                                <li><a href="#">Consulting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-widget widget-bg" data-background="assets/img/blog/widget_bg.jpg">
                                        <h4 class="widget-title">Need Help</h4>
                                        <div class="sidebar-content">
                                            <h4 class="title">Beautiful red brick house with decorative lights</h4>
                                            <p>Sit amet consectetur adipiscing elseds do eius mod tempor incididunt</p>
                                            <a href="{{route('contact')}}" class="btn btn-two">Contact Us</a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog-details-area-end -->
    
            </main>
            <!-- mian-area-end -->
@endsection
@section('jscontent')
    
@endsection

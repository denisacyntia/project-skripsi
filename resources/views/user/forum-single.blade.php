@extends('layouts.app')

@section('content')
    <div class="forum-single" id="forum-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 entries">
                    <div class="entry entry-single" data-aos="fade-right">
                        <div class="entry-heading">
                            <img  src="assets/images/user.png">
                            <h4>Anonymous</h4>
                            <p>Keluarga</p>
                        </div>
                        <div class="entry-content">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                            </p>
                            <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                            </p>
                        </div>
                    </div>
                    <div class="forum-comments" data-aos="fade-up">
                        <div id="comment" class="comment clearfix">
                            <img src="assets/images/user/1.jpg" class="comment-img  float-left" alt="">
                            <h5><a href="">Georgia Reader</a> </h5>
                            <time datetime="2020-01-01">01 Jan, 2020</time>
                            <p>
                                Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                            </p>
                            <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                            </p>
                        </div><!-- End comment -->
                        <div class="reply-form">
                            <form action="">
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>{{--End Reply Comment--}}
                    </div>{{--Forum Comment--}}

                </div>{{--Col--}}
                <div class="col-lg-5">
                    <div class="sidebar" data-aos="fade-left">

                        <h3 class="sidebar-title">Forum Terkait</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/images/user.png" alt="">
                                <h4><a href="/forum-single">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/images/user.png" alt="">
                                <h4><a href="/forum-single">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/images/user.png" alt="">
                                <h4><a href="/forum-single">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/images/user.png" alt="">
                                <h4><a href="/forum-single">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/images/user.png" alt="">
                                <h4><a href="/forum-single">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>
                        </div>
                    </div>{{--Col--}}
                </div>
            </div>
        </div>
    </div>

@endsection
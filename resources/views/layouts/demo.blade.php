@extends('layouts.master')

@section('content')

<div class="content">

<div class="row">
<div class="col-md-3">
    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a3.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Mike Smith</span> </small>
                    <br/>
                    <small class="text-muted">21.03.2015, 06:45 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Article about new design</h4></a>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum...
            </p>
            <p>
                Praesent eget euismod nibh. Fusce ac tellus eu nisl lobortis maximus ac eget sapien. Nulla malesuada mauris non nulla imperdiet ullamcorper.
            </p>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 22 comments
                </span>
            <i class="fa fa-eye"> </i> 142 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a5.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">John Wilkins</span> </small>
                    <br/>
                    <small class="text-muted">17.05.2015, 10:25 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Cras eleifend</h4></a>
            <p>
                Donec malesuada diam sit amet arcu suscipit, nec lacinia nulla aliquet. Nullam non pellentesque ligula. Integer semper nulla ut nulla tristique, nec rhoncus sem mollis.
            </p>
            <p>
                Praesent eget euismod nibh. Fusce ac tellus eu nisl lobortis maximus ac eget sapien. Nulla malesuada mauris non nulla imperdiet ullamcorper.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 8 comments
                </span>
            <i class="fa fa-eye"> </i> 22 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a6.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">John Wilkins</span> </small>
                    <br/>
                    <small class="text-muted">22.12.2015, 04:17 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Vivamus eu rutrum metus</h4></a>
            <p>
                Duis ut iaculis ipsum, et viverra risus. Sed et risus fermentum, tempor ante vitae, faucibus libero. Curabitur ut cursus diam, at accumsan nibh.
                Cras feugiat iaculis massa vitae facilisis. Phasellus vestibulum nulla sed leo facilisis, sit amet sollicitudin leo porta.
            </p>
            <p>
                Aenean aliquet, nibh vitae auctor commodo, justo odio rutrum lorem, a suscipit massa justo at purus. Suspendisse ullamcorper eros est, in finibus justo dignissim nec.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 59 comments
                </span>
            <i class="fa fa-eye"> </i> 167 views
        </div>
    </div>

</div>

<div class="col-md-3">
    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a1.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Mark Word</span> </small>
                    <br/>
                    <small class="text-muted">22.04.2015, 10:15 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Many desktop publishing packages</h4></a>
            <p>
                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            <p>
                Aenean aliquet, nibh vitae auctor commodo, justo odio rutrum lorem, a suscipit massa justo at purus. Suspendisse ullamcorper eros est, in finibus justo dignissim nec.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 56 comments
                </span>
            <i class="fa fa-eye"> </i> 144 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a7.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Selena Jackson</span> </small>
                    <br/>
                    <small class="text-muted">01.02.2015, 10:40 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Cras eleifend quam ipsum</h4></a>
            <p>
                Donec nec nunc tempor, pulvinar lacus id, molestie nulla. Nam accumsan accumsan ex, non porta orci cursus ac. Pellentesque et pharetra libero.
            </p>
            <p>
                Nam sollicitudin ornare tincidunt. Nulla sit amet urna vitae lectus scelerisque sodales. Sed semper condimentum egestas.
            </p>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 32 comments
                </span>
            <i class="fa fa-eye"> </i> 98 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a4.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Anna Smith</span> </small>
                    <br/>
                    <small class="text-muted">10.07.2015, 02:12 am</small>
                </div>
            </div>
        </div>
        <div class="panel-image">
            <img class="img-responsive" src="images/p1.jpg" alt="">
            <div class="title">
                <a href="blog_details.html"> <h4>Standard chunk of Lorem Ipsum</h4></a>
                <small>Even slightly believable</small>
            </div>
        </div>
        <div class="panel-body">
            <p>
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <p>
                Nam sollicitudin ornare tincidunt. Nulla sit amet urna vitae lectus scelerisque sodales. Sed semper condimentum egestas.
            </p>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 10 comments
                </span>
            <i class="fa fa-eye"> </i> 62 views
        </div>
    </div>

</div>

<div class="col-md-3">
    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a2.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">John Jackson</span> </small>
                    <br/>
                    <small class="text-muted">11.10.2015, 11:46 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Latin professor at Hampden-Sydney College</h4></a>
            <p>
                Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
            </p>
            <p>
                Duis diam ipsum, ullamcorper in imperdiet eu, venenatis ac felis. Phasellus interdum tellus sed leo fringilla, id ornare nulla mollis.
            </p>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 66 comments
                </span>
            <i class="fa fa-eye"> </i> 250 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a8.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Selena Jackson</span> </small>
                    <br/>
                    <small class="text-muted">16.02.2015, 08:34 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Sed laoreet pulvinar mauris</h4></a>
            <p>
                Aliquam varius, odio nec facilisis convallis, nulla augue efficitur enim, eu iaculis urna nisi id erat. Sed iaculis orci id diam porttitor, nec sagittis dui sodales. Quisque in libero erat. Etiam luctus
            </p>
            <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ullamcorper nisl risus, a scelerisque dui hendrerit nec.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 10 comments
                </span>
            <i class="fa fa-eye"> </i> 183 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a5.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">John Wilkins</span> </small>
                    <br/>
                    <small class="text-muted">17.05.2015, 10:25 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Cras eleifend</h4></a>
            <p>
                Donec malesuada diam sit amet arcu suscipit, nec lacinia nulla aliquet. Nullam non pellentesque ligula. Integer semper nulla ut nulla tristique, nec rhoncus sem mollis.
            </p>
            <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ullamcorper nisl risus, a scelerisque dui hendrerit nec.
            </p>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 8 comments
                </span>
            <i class="fa fa-eye"> </i> 22 views
        </div>
    </div>

</div>

<div class="col-md-3">
    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a4.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Anna Smith</span> </small>
                    <br/>
                    <small class="text-muted">10.07.2015, 02:12 am</small>
                </div>
            </div>
        </div>
        <div class="panel-image">
            <img class="img-responsive" src="images/p1.jpg" alt="">
            <div class="title">
                <a href="blog_details.html"> <h4>Standard chunk of Lorem Ipsum</h4></a>
                <small>Even slightly believable</small>
            </div>
        </div>
        <div class="panel-body">
            <p>
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <p>
                Etiam aliquam elit vestibulum, convallis risus at, rutrum ex. Aliquam erat volutpat. Morbi blandit nisi a magna vestibulum, eget volutpat risus sodales.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 10 comments
                </span>
            <i class="fa fa-eye"> </i> 62 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a3.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Mike Smith</span> </small>
                    <br/>
                    <small class="text-muted">21.03.2015, 06:45 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Article about new design</h4></a>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum...
            </p>
            <p>
                Praesent at sodales lectus. Donec et viverra est. Sed eu est fermentum felis placerat pretium sit amet sed ligula. Morbi nec faucibus odio.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 22 comments
                </span>
            <i class="fa fa-eye"> </i> 142 views
        </div>
    </div>

    <div class="hpanel blog-box">
        <div class="panel-heading">
            <div class="media clearfix">
                <a class="pull-left">
                    <img src="images/a1.jpg" alt="profile-picture">
                </a>
                <div class="media-body">
                    <small>Created by: <span class="font-bold">Mark Word</span> </small>
                    <br/>
                    <small class="text-muted">22.04.2015, 10:15 pm</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <a href="blog_details.html"> <h4>Many desktop publishing packages</h4></a>
            <p>
                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            <p>
                Nunc pellentesque dui nisi, vel convallis quam malesuada ornare. Nunc ac purus velit. Cras aliquet porta sodales. Proin blandit ornare bibendum.
            </p>
            <a href="blog_details.html" class="btn btn-primary btn-xs">Read more</a>
        </div>
        <div class="panel-footer">
                <span class="pull-right">
                    <i class="fa fa-comments-o"> </i> 56 comments
                </span>
            <i class="fa fa-eye"> </i> 144 views
        </div>
    </div>

</div>
</div>

    </div>
    @stop

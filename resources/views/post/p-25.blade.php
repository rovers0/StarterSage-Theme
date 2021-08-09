@php
    $cat = get_the_category($post->ID);
@endphp
<div class="col-md-4">
    <div class="articles__thumb">
        <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="">
            <span>
                <img src="{!!wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' )!!}" alt="" title="">
            </span>
        </a>
    </div>
    <div class="articles__info">
        <a href="{{ home_url("/category//") }}{!! $cat[0]->slug  !!}">{{$cat[0]->name}}</a>
        <h3 class="articles__title">
            <a href="{{ home_url('/') }}{!! $post->post_name  !!}" rel="bookmark" title="">
                {!! $post->post_title  !!}
            </a>
        </h3>
    </div>
</div>


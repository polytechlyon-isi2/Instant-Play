@include('imports.header')
<div class="main">
    <div class="content">
        <div class="content_top">
            @include('imports.content_top')
        </div>
        <div class="content_bottom">
            <div class="wrap">
                <div class="content-bottom-left">
                    @include('imports.content-bottom-left')
                </div>
                <div class="content-bottom-right">
                    <h3>Browse All Products</h3>
                    @yield('content')

                    <div class="product-articles">
                        <h3>Browse All Articles</h3>
                        <ul>
                            @yield('articles')
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@include('imports.footer')


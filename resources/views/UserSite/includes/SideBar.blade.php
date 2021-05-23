<div class="row">
    <section id="my-menu" class="" style="display: block;">
        <div class="bot-menu">
            <div class="nav-menu" style="min-width: 200px;">
                        <span class="title long" style="font-size: 1.6rem;text-transform: uppercase;color: #fff;background-color: #d92b32;padding: 4px;text-align: center;width: 100%;display: block;">
                            Danh mục sản phẩm</span>
                <ul class="my-ul ul-main">
                    @foreach($categories as $category)
                        <li class="li-main">
                            <a href="/danh-muc-san-pham/{{ $category->slug }}_{{ $category->id }}" class="a-main makeup">
                                <span>{{ $category->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="layout"></div>
            </div>
        </div>
    </section>
</div>

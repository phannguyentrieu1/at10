<x-home-layout>
    <section id="home-collections">
        <div class="wrapper">
            <div class="inner">
                <div class="section-title">
                    <h2>Sản Phẩm Của Chúng Tôi</h2>
                </div>
                <div class="section-content">
                    <div class="tab"><button id="defaultOpenTab"
                            class="tablinks active" onclick="openTabs(event,'tab_20')">Hoa
                            quả</button><button class="tablinks "
                            onclick="openTabs(event,'tab_21')">Thực phẩm
                            khô</button><button class="tablinks "
                            onclick="openTabs(event,'tab_19')">Rau hữu cơ</button></div>
                    <div id="tab_20" class="tabcontent" style="display: block;">
                        <div class="woocommerce columns-4 ">
                            <div class="grid-uniform md-mg-left-10 products columns-4">

                                @foreach ($hoaQua as $hq)
                                    <x-food-card :food="$hq" />
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div id="tab_21" class="tabcontent" style="display: none;">
                        <div class="woocommerce columns-4 ">
                            <div class="grid-uniform md-mg-left-10 products columns-4">
                                @foreach ($huuCo as $hc)
                                    <x-food-card :food="$hc" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="tab_19" class="tabcontent" style="display: none;">
                        <div class="woocommerce columns-4 ">
                            <div class="grid-uniform md-mg-left-10 products columns-4">
                                @foreach ($thucPhamKho as $tpk)
                                    <x-food-card :food="$tpk" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>

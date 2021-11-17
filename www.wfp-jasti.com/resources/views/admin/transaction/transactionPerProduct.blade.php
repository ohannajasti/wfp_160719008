@php
$titlePage = 'Category';
@endphp

@extends('admin.layouts.app', ['activePage' => 'transaction', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master
        Data","Transaction"],"breadcrump_href"=>['','transaction.index']])

        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i>Left Tabs
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <li class="active">
                                    <a href="#{{ $produk->name }}" tabindex="-1"
                                        data-toggle="tab">{{ $produk->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="tab-content">
                        @if ($products->count() > 0)
                        @foreach ($products as $product)
                        <div class="tab-pane active" id="{{ $produk->name }}">
                            <p>Transaksi</p>
                            
                        </div>
                        @endforeach
                    @endif

                        <div class="tab-pane fade" id="tab_6_2">
                            <p>
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                                four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft
                                beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                                labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit
                                sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean
                                shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown,
                                tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab_6_3">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                                Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown.
                                Pitchfork sustainable tofu synth chambray yr.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab_6_4">
                            <p>
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.
                                Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf
                                salvia freegan, sartorial keffiyeh echo park vegan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Header -->
<div id="top" class="barra-dourada-top"></div>
<div class="cabecalho-home">
{{--<div class="cabecalho{{ isset($home) ? '-home' : '' }}">--}}
    <div class="container">
        @if (isset($home))
            <div class="row row-eq-height">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                         <div class="col-xs-12 col-sm-12 col-md-12 visible-xs visible-sm visible-md ">
                             <img src="/templates/mv/svg/logo-alo-alerj-branca.svg" class="alolerj-logo-home img-responsive"/>
                         </div>
                        <div class="hidden-xs hidden-sm hidden-md col-lg-2">
                            <a href="/">
                                <object type="image/svg+xml" data="/templates/mv/svg/logo-alerj-monocromatica.svg" class="alerj-logo">
                                    Alerj Logo <!-- fallback image in CSS -->
                                </object>
                            </a>
                        </div>
                        <div class="hidden-xs hidden-sm hidden-md col-sm-3">
                            <img src="/templates/mv/svg/logo-alo-alerj.svg" class="alolerj-logo img-responsive" alt="AloAlerj">
                        </div>

                        <div class="hidden-xs hidden-sm  hidden-md col-lg-6">@include('partials.telefones-uteis')</div>
                    </div>
                    <div class="sidebar-right-top hidden-xs hidden-sm hidden-md col-lg-3 text-center">@yield('sidebar-name')</div>
            </div>
        @else
            <div class="row row-eq-height">
                <div class="col-xs-12 col-sm-12 col-md-12 visible-xs visible-sm visible-md">
                    <img src="/templates/mv/svg/logo-alo-alerj-branca.svg" class="alolerj-logo-home img-responsive"/>
                </div>
                <div class="hidden-xs hidden-sm hidden-md col-lg-9">
                    <div class="col-md-2 col-lg-2">
                        <a href="/">
                            <img src="/templates/mv/svg/logo-alerj-monocromatica.svg" alt="" class="alerj-logo visible-lg visible-md">
                            <img src="/templates/mv/svg/logo-alerj-monocromatica_fio-branco.svg" alt="" class="alerj-logo hidden-lg hidden-md">
                            {{--<object type="image/svg+xml" data="/templates/mv/svg/logo-alerj-monocromatica.svg" class="alerj-logo">--}}
                        {{--Alerj Logo <!-- fallback image in CSS -->--}}
                        {{--</object>--}}
                        </a>
                    </div>
                    <div class="col-md-7 col-lg-7">@yield('page-name')</div>
                    <div class="col-lg-3">@include('partials.telefones-uteis')</div>
                </div>
                <div class="sidebar-right-top hidden-xs hidden-sm hidden-md col-lg-3 text-center">@yield('sidebar-name')</div>
            </div>
        @endif
    </div>
</div>
<!-- End Header -->

<!DOCTYPE html>
<html lang="nl">

<head>
    @include('includes.head')
    @yield('head')
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <div id="topbar">
            <div id="topbar-ubuntufan"></div>
            <div id="topbar-menu">
                <div id="topbar-clock"></div>
            </div>
            @include('includes.clock')
        </div>
        <div id="dashbar" class="hidden-xs">
            <div id="iconen"></div>
            <div id="iconen-pb-wrapper">
                <div id="iconen-prullenbak"></div>
            </div>
        </div>

    </div>
</div>

<div class="container">

    <div class="row">
        <div id="programbar" class="minderbreed">
            <div id="barbuttons"></div>
            <div id="barname"></div>
        </div>
    </div>

    @include('includes.menu')

    <div class="row">
        <div class="container-uf minderbreed">

            <div class="col-xs-12 col-sm-8 col-md-9">
                @yield('content')
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 aside-border">
                <aside>
                    @include("includes.side")
                </aside>
            </div>

        </div>
    </div>

    @include('includes.scripts')

    <div class="row">
        <footer class="minderbreed">
            @include("includes.footer")
        </footer>
    </div>

</div>

</body>

</html>
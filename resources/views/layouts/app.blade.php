<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title')</title>

    @stack('third_party_css')

    @stack('page_css')

</head>
    <body class="hold-transition sidebar-mini layout-fixed">

        @stack("content.header")

        @stack("content.main")

        @stack("content.footer")

        @stack("page_js")

        @stack("third_party_js")

    </body>
</html>



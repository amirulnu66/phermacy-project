<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41035904-17"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-41035904-17');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="QuillPro is multipurpose Bootstrap 4 Admin Dashboard Template that allows you build and launch your projects in the quickest time possible.">
    <meta name="author" content="Base5Builder">
    <link rel="icon" href="assets/img/favicon.png">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="{{ URL::to('/assets/fonts/batch-icons/css/batch-icons.css') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap/mdb.min.css') }}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="{{ URL::to('/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/hamburgers/hamburgers.css') }}">

    <!-- CSS - REQUIRED - END -->

    <!-- CSS - OPTIONAL - START -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::to('/assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    
    <!-- CSS - DEMO - START -->
    <!-- CSS - DEMO - END -->

    <!-- CSS - OPTIONAL - END -->

    <!-- QuillPro Styles -->
    <link rel="stylesheet" href="{{ URL::to('/assets/css/quillpro/quillpro.css') }}">

    @yield('style')
</head>


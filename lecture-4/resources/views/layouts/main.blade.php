<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Laravel App")</title>

    <link rel="stylesheet" href="/css/someGlobal.css">
    {{-- Head stacks (To push some styles and scripts) --}}
    @stack("head")
    @stack("scripts-head")
</head>
<body>
    {{-- Main section --}}
    <div class="container">
        @yield("body")
    </div>
    
    {{-- Footer stacks (To push some styles and scripts) --}}
    @stack("scripts")
    
</body>
</html>
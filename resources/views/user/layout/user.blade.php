<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.shared.head')

</head>

<body>

    @include('user.shared.header')


    @yield('user_content')

    @include('user.shared.footer')

    @include('user.shared.script')
</body>

</html>

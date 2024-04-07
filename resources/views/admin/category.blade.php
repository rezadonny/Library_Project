<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        {{-- @include('admin.body') --}}

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
        Category
        </div>
    </div>
</div>


        @include('admin.footer')
</body>

</html>

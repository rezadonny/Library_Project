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
                    <div>
                        
                        {{-- Bagian untuk menampilkan pesan input berhasil -Start --}}
                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                    <button type='button' class="close" data-dismiss='alert' aria-hidden="true">
                                        x
                                    </button>
                                </div>
                            @endif
                        </div>
                        {{-- Bagian untuk menampilkan pesan input berhasil -End --}}


                        <h1>Add Category</h1>

                        <form class="text-center" action="{{ url('add_category') }}" method="post">
                            {{-- add_category adalah fungsi post pada controller admin --}}

                            @csrf {{-- untuk melindungi web dari serangan penetrasi celah keamanan web --}}

                            <span style="padding-right: 15px;">

                                <label class="form-label text-center">Add Category</label>
                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip=""
                                    data-bs-placement="right" required="" name="category" title="Isikan category">
                            </span>

                            <button class="btn btn-primary text-center" type="submit">Add Category</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        @include('admin.footer')
</body>

</html>

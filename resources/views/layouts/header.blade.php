<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
                <h1>Dashboard</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('pizzas.create')}}" class="btn-solid-lg">CREATE AN ORDER</a>
                </div>
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
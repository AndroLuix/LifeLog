@include('components.doctype')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" <body>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <h3>{{ session('success')}}</h3>
                            </div>
                        @endif


                        <form action="{{ route('registration') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">





                                    <div class="row">
                                        <div class="col-md-10 mb-1">

                                            <div class="form-outline">
                                                <input type="email" id="emailAddress" name="email"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="emailAddress">Email</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-10 mb-1 pb-1">
                                            <div class="form-outline">
                                                <input type="password" id="password" name="password"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="password">Password</label>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 mb-1 pb-1">
                                            <div class="form-outline">
                                                <input type="password" id="repeatPassword" name="password_confirmation"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="repeatPassword">Repeat Password</label>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="mt-1 pt-1">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
@include('components.bootstrapJs')

</html>

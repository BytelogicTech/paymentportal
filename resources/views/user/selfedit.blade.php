@include('header')

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      
                        <!-- /.card-header -->
                        <!-- form start -->





                        <div class="card-body">
                            <form method="POST" action="{{ url('user/selfupdate') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{$user->id}}" />


                                <div class="row">
                                    <div class="col-md-6">
                                    <b>   <h3> Your Profile </h3>

                                        </b>
                                        <hr>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{$user->first_name}}" required autocomplete="first_name" autofocus>

                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                      

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{$user->last_name}}" required autocomplete="last_name" autofocus>

                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input id="country" type="country" class="form-control" name="country" value="{{$user->country}}" autocomplete="email" autofocus>

                                                @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input id="website" type="website" class="form-control" name="website" value="{{$user->website}}" autocomplete="website" autofocus>

                                                @error('website')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Customer Support Number</label>
                                                <input id="phone" type="text" class="form-control" name="phone" value="{{$user->phone}}"  autocomplete="phone" autofocus>

                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="logo">Your Logo</label>
                                                <input id="logo" type="file" class="form-control" name="logo" value="{{$user->logo}}"  autocomplete="logo" autofocus>

                                                @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                      <b><h3> Change Password </h3>
                                    </b>
                                        <hr>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" onChange="onChange()" placeholder="New Password" class="form-control" name="password" autocomplete="password" autofocus>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="confirm_password">Repeat Password</label>
                                                <input id="confirm" type="password" onChange="onChange()" placeholder="Repeat Password" class="form-control" name="confirm" autocomplete="confirm" autofocus>

                                                @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row mb-0">
                                            <div class="col-md-3 offset-md-3">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update') }}
                                                </button>
                                            </div>
                                        </div>



                                    </div>





                                </div>

                        </div>

                        </form>
                    </div>
                </div>
                <!-- /.card -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@include('footer')

<script>
    $(function() {
        $('.select2').select2()
    });
</script>

<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    function onChange() {
        const password = document.querySelector('input[name=password]');
        const confirm = document.querySelector('input[name=confirm]');
        if (confirm.value === password.value) {
            confirm.setCustomValidity('');
        } else {
            confirm.setCustomValidity('Passwords do not match');
        }
    }
</script>
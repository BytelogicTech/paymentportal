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
                    <h1>Payout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payout</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Add New payout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <div class="card-body">
                    <form method="POST" action="{{ url('payout/store') }}">
                        @csrf

                        

                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name*</label>
                                            <input id="first_name" type="text" placeholder="Enter FIrst Name" class="form-control" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name*</label>
                                            <input id="last_name" type="text" placeholder="Enter Last Name" class="form-control" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                            
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email*</label>
                                            <input id="email" type="email" placeholder="Enter Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                              
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone No</label>
                                            <input id="phone" type="text" placeholder="Enter Phone No." class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                              
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea id="address" type="textarea" placeholder="Enter Address" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>
                                            
     
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="role">User Role*</label>
                                            <select class="select2 form-control" name="role" required>
                                                <option value="" disabled selected>Please Select One</option>                                            
                                                <option value="merchant admin">Merchant Admin</option>
                                                <option value="merchant view-only">Merchant View-Only</option>
                                                
                                            </select>
                                              
                                            @error('role')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password*</label>
                                            <input id="password" type="password" onChange="onChange()" placeholder="Enter Password" class="form-control" name="password" value="" required autocomplete="password" autofocus>
                                              
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password*</label>
                                            <input id="confirm" type="password" onChange="onChange()" placeholder="Enter Password" class="form-control" name="confirm" value="" required autocomplete="confirm" autofocus>
                                              
                                            @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror

                                        </div>
                                    </div>
                                    
                                    

                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Parent Merchant*</label>
                                            <select class="select2 form-control" name="merchant_fk_id">
                                                <option value="" disabled selected>Please Select One</option>
                                                
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                            </div>
                                       <div class="form-group">
                                            <center>
                                                <p>Status</p>
                                                <input type="checkbox" checked data-toggle="switch" data-handle-width="100" data-on-text="Activated" data-off-text="Deactivated" name="enable_mail_for_customers">
                                            </center>

                                        </div>

                                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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




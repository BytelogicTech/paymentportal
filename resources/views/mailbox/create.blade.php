@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mailbox</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mailbox</li>
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
                            <h3 class="card-title">Send Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('mailbox/store')}}" method="POST">
                            <div class="card-body">
                                @csrf



                                

                              

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="description">To*</label>
                                            
                                            @if(Auth::user()->role=="Admin")
                                            <select class="form-control" name="mail_to">
                                                <option value="" selected disabled>Select User</option>
                                                @foreach($merchant_superadmin_users as $user)
                                                <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                                                @endforeach
                                            </select>
                                        @else
                                        <label>Admin</label> 
                                        <input type="hidden" value="{{$admin_id}}" name="mail_to"/>
                                     

                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="description">Subject*</label>
                                            <input type="text" class="form-control" name="subject"> 
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="description">Message*</label>
                                            <textarea placeholder="Message" class="form-control" name="message" rows="4" cols="50"></textarea>
                                            
                                        </div>
                                    </div>
                                </div>



                                <!-- /.card -->



                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                        </form>
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


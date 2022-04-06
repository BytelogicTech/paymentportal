@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Users</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <a href="{{url('user/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new user </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($users as $user)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
            <a href="{{url('user/edit/'.$user->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            @if(Auth::user()->role=="Admin")

            <a href="{{url('user/delete/'.$user->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
        @endif
          </td>
    </tr>
    @endforeach


</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @include('footer')

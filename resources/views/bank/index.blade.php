@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Banks</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All Banks</li>
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
                <a href="{{url('bank/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new bank </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Bank Name</th>
                    <th>Baneficiary Name</th>
                    <th>Country</th>
                    <th>Status</th>
                  
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($banks as $bank)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$bank->bank_name}}</td>
        <td>{{$bank->beneficiary_name}}</td>
        <td>{{$bank->country}}</td>
        <td>
          @if($bank->status==1)
            <label class="text-success"> Active</label>
            @else
            <label class="text-danger"> Inactive</label>
          @endif
        </td>
      
        <td>
            <a href="{{url('bank/edit/'.$bank->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            @if(Auth::user()->role=="Admin")           
            <a href="{{url('bank/delete/'.$bank->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

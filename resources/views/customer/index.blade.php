@include('header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All Customers</li>
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
                <a href="{{url('customer/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add New Customers </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Parent Merchant</th>
                    <th>Created By</th>
                    <th>Created On</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($customers as $customer)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{@$merchantpluck[$customer->merchant_fk_id]}}</td>
        <td>{{@$userpluck[$customer->created_by]}}</td>
        <td>{{$customer->created_at}}</td>
        <td>
          @if($customer->status==1)
            <label class="text-success"> Active</label>
            @else
            <label class="text-danger"> Inactive</label>
          @endif
        </td>
        <td>
            <a href="{{url('customer/edit/'.$customer->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            <a href="{{url('customer/delete/'.$customer->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

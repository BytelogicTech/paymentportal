@include('header')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          @include('flash')
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

              <div class="col-md-6">
                <form action="{{url('customer/search')}}" method="post">
                  @csrf
                  @if(Auth::user()->role=="Admin")

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Merchant Name:</label>
                      <select class="select2 form-control" name="merchant_fk_id" id="merchant_fk_id">
                        <option value="" selected >Select Merchant</option>
                        @foreach($merchants as $merchant)
                        <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  @endif

                  @if(Auth::user()->role=="Admin")


                  <div class="card-header">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>

                  </div>
                  @endif

                </form>
              </div>


              <table id="example1" class="table table-bordered table-hover">

                <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    @if(Auth::user()->role=="Admin")

                    <th>Parent Merchant</th>
                    @endif
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
                  @if(Auth::user()->role=="Admin")
                  <td>{{@$merchantpluck[$customer->merchant_fk_id]}}</td>
                  @endif
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
                    @if(Auth::user()->role=="Admin")
                    <a href="{{url('customer/delete/'.$customer->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

<script>
  $('#merchant_fk_id').val('{{$merchant_fk_id}}');
</script>





<script>
  $(function() {
    $('.select2').select2()
  });
</script>
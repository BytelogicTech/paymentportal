@include('header')

<!-- DataTables -->





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>merchants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All merchants</li>
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
                <a href="{{url('merchant/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new merchant </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Merchant Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($merchants as $merchant)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$merchant->merchant_name}}</td>
        <td>{{$merchant->email}}</td>
        <td>{{$merchant->Country}}</td>
        <td>{{@$userpluck[$merchant->created_by]}}</td>
        <td>
          @if($merchant->status==1)
            <label class="text-success"> Activated</label>
            @else
            <label class="text-danger"> Deactivated</label>
          @endif
        </td>
        <td>
            <a href="{{url('merchant/edit/'.$merchant->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            @if(Auth::user()->role=="Admin")

            <a href="{{url('merchant/delete/'.$merchant->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

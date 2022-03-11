@include('header')

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                    <th>Secondary Email</th>
                    <th>Invoice Email</th>
                    <th>Payout Notification Email</th>
                    <th>Settlement Notification Email</th>
                    <th>Upload Logo</th>
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($merchants as $merchant)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$merchant->merchant_name}}</td>
        <td>{{$merchant->secondary_email}}</td>
        <td>{{$merchant->invoice_email}}</td>
        <td>{{$merchant->payout_notification_email}}</td>
        <td>{{$merchant->settlement_notification_email}}</td>
        <td>
          @if($merchant->status==1)
            <label class="text-success"> Active</label>
            @else
            <label class="text-danger"> Inactive</label>
          @endif
        </td>
        <td><img src="{{asset('/images/'.$merchant->upload_logo)}}" style="width:50px;"/></td>
        <td>
            <a href="{{url('merchant/edit/'.$merchant->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            <a href="{{url('merchant/delete/'.$merchant->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

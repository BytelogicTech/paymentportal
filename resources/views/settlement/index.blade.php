@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Settlements</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All settlements</li>
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
                <a href="{{url('settlement/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new settlement </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Merchant Name</th>
                    <th>Beneficiary Name</th>
                    <th>Currency</th>
                    <th>Settlement Amount</th>
                    <th>Date Paid</th>
                    <th>Status</th>
                    <th>Created BY</th>
                    <th>Created On</th>
                    <th>Actions</th>                  
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($settlements as $settlement)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{@$merchantpluck[$settlement->merchant_fk_id]}}</td>
        <td>{{@$customerpluck[$settlement->customer_fk_id]}}</td>
        <td>{{@$bankaccountpluk[$settlement->bank_account_to_fk_id]}}</td>
        <td>{{$settlement->settlement_amount}}</td>
        <td>{{$settlement->bank_processing_charges}}</td>
        <td>{{$settlement->status_of_settlement}}</td>
        <td>{{$settlement->date_paid}}</td>
        <td>{{@$userpluck[$settlement->created_by]}}</td>
        <td>{{$settlement->created_at}}</td>
        <td>
            <a href="{{url('settlement/edit/'.$settlement->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            <a href="{{url('settlement/delete/'.$settlement->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
        <td>
          @if($settlement->upload_invoice)
          <a class="btn btn-primary" href="{{asset('public/invoice/'.$settlement->upload_invoice)}}" target="_blank"><i class="fa fa-download"></i></a>
          @else
          No Invoice
          @endif

          @if($settlement->upload_reciept)
          <a class="btn btn-default" href="{{asset('public/pop/'.$settlement->upload_reciept)}}" target="_blank">POP</a>
          @else
         | No payment Proof
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

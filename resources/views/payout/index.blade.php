@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Payouts</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All Payouts</li>
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
                <a href="{{url('payout/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new payout </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Merchant Name</th>
                    <th>Customer Name</th>
                    <th>Currency</th>
                    <th>Payout Amount</th>
                    <th>Bank Charges</th>
                    <th>Status</th>
                    <th>Date Paid</th>
                    <th>Created BY</th>
                    <th>Created On</th>
                    <th>Actions</th>
                    <th>Download</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($payouts as $payout)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{@$merchantpluck[$payout->merchant_fk_id]}}</td>
        <td>{{@$customerpluck[$payout->customer_fk_id]}}</td>
        <td>{{@$bankaccountpayoutpluk[$payout->bank_account_to_fk_id]}}</td>
        <td>{{$payout->payout_amount}}</td>
        <td>{{$payout->bank_processing_charges}}</td>
        <td>{{$payout->status_of_payout}}</td>
        <td>{{$payout->date_paid}}</td>
        <td>{{@$userpluck[$payout->created_by]}}</td>
        <td>{{$payout->created_at}}</td>
        <td>
            <a href="{{url('payout/edit/'.$payout->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            <a href="{{url('payout/delete/'.$payout->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
        <td>
          @if($payout->upload_invoice)
          <a class="btn btn-primary" href="{{asset('public/invoice/'.$payout->upload_invoice)}}" target="_blank"><i class="fa fa-download"></i></a>
          @else
          No Invoice
          @endif

          @if($payout->upload_reciept)
          <a class="btn btn-default" href="{{asset('public/pop/'.$payout->upload_reciept)}}" target="_blank">POP</a>
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

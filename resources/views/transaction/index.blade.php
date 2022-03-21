@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Transactions</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All Transactions</li>
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
                <a href="{{url('transaction/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new transaction </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Merchant Name</th>
                    <th>Invoice Number</th>
                    <th>Customer Name</th>
                    <th>Currency</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Amount Recieved</th>
                    <th>Date Recieved</th>
                    <th>Created By</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($transactions as $transaction)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{@$merchantpluck[$transaction->merchant_fk_id]}}</td>
        <td>{{$transaction->invoice_number}}</td>
        <td>{{@$customerpluck[$transaction->customer_fk_id]}}</td>
        <td>{{@$bankaccountpluk[$transaction->bank_account_fk_id]}}</td>
        <td>{{$transaction->product_price}}</td>
        <td>{{$transaction->status_of_transaction}}</td>
        <td>{{$transaction->amount_recieved}}</td>
        <td>{{$transaction->date_recieved}}</td>
        <td>
            <a href="{{url('transaction/edit/'.$transaction->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            <a href="{{url('transaction/delete/'.$transaction->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

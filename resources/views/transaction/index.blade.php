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

              <form action="{{url('transaction/search')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                @if(Auth::user()->role=="Admin")
                  <div class="col-md-3">
                    
                    <label for="description">Merchant Name</label>
                    <select name="merchant_fk_id" class="form-control" id="merchant_fk_id">
                      <option value="" selected>Select Merchant</option>
                      @foreach($merchants as $merchant)
                      <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  @else
                  <input type="hidden" name="merchant_fk_id" value="{{Auth::user()->merchant_fk_id}}" />
                    @endif

                  <div class="col-md-3">
                    <label for="name">Invoie Number</label>
                    <input type="text" name="invoice_number" id="invoice_number" class="form-control">
                  </div>

                  <div class="col-md-3">
                    <label for="description">Customer</label>
                    <select name="customer_fk_id" class="form-control" id="customer_fk_id">
                      <option value="" selected>Please Select One</option>
                      @if(Auth::user()->role=="Merchant Admin")
                      @foreach($customers as $customer)
                      <option value="{{$customer->id}}">{{$customer->first_name}}</option>
                      @endforeach
                      @endif
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="description">Bank Paid From</label>
                    <select class="select2 form-control" name="bank_account_fk_id" id="bank_account_fk_id">
                      <option value="" selected>Please Select One</option>
                      @foreach($bankaccounts as $bankaccount)
                      <optgroup label="{{$bankaccount[0]->bank_name}}">
                        @foreach($bankaccount as $item)
                        <option value="{{$item->bank_accountsid}}">{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                        @endforeach
                      </optgroup>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-3">
                    <label for="description">Currency</label>
                    <select name="currency" class="form-control" id="currency">
                      <option value="" selected>Please Select One</option>
                      @foreach(config('constants.currency_list') as $key=> $currency1)
                      <option value="{{$key}}">{{$key}}</option>
                      @endforeach

                    </select>
                  </div>

                  <div class="col-md-4">
                    <label>Amount Received Between</label>
                    <div class="input-daterange input-group">
                      <input type="text" class="form-control m-input" name="transaction_amount_from" id="transaction_amount_from" placeholder="From" data-col-index="4">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                      </div>
                      <input type="text" class="form-control m-input" name="transaction_amount_to" id="transaction_amount_to" placeholder="To" data-col-index="4">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label>Date Received Between</label>
                    <div class="input-daterange input-group">
                      <input type="date" class="form-control m-input bootdatepicker" name="date_paid_from" id="date_paid_from" placeholder="From" data-col-index="11">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                      </div>
                      <input type="date" class="form-control m-input bootdatepicker" name="date_paid_to" id="date_paid_to" placeholder="To" data-col-index="11">
                    </div>
                  </div>


                </div>


                <div class="row">
                  <div class="col-md-3">
                    <label for="description">Status</label>
                    <select name="status_of_transaction" class="form-control" id="status_of_transaction">
                      <option value="" selected>Please Select One</option>
                      <option value="New">New</option>
                      <option value="Recieved">Recieved</option>
                      <option value="Recieved">Recieved</option>
                      <option value="Canceled">Canceled</option>

                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="description">Type</label>
                    <select name="type_of_transaction" class="form-control" id="type_of_transaction">
                      <option value="" selected>Select Type</option>
                      <option value="C2B">C2B</option>
                      <option value="B2B">B2B</option>
                    </select>
                  </div>
                </div>


                <hr>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                <button type="reset" class="btn btn-danger">X Reset</button>
              </form>
            </div>

            <table id="example1" class="table table-bordered table-hover">

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
                  <th>Created At</th>
                  <th>Actions</th>
                  <th>Download</th>
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
                <td>{{$transaction->created_at}}</td>
                <td>
                  <a href="{{url('transaction/edit/'.$transaction->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
                  @if(Auth::user()->role=="Admin")
                  <a href="{{url('transaction/delete/'.$transaction->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  @endif
                </td>

                <td>
                  @if($transaction->upload_signed_invoice)
                  <a class="btn btn-primary" href="{{asset('public/invoice/'.$transaction->upload_signed_invoice)}}" target="_blank"><i class="fa fa-download"></i></a>
                  @else
                  No Invoice
                  @endif

                  @if($transaction->proof_of_payment)
                  <a class="btn btn-default" href="{{asset('public/pop/'.$transaction->proof_of_payment)}}" target="_blank">POP</a>
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

<script>
  $('#merchant_fk_id').val('{{$merchant_fk_id}}');
</script>

<script>
  $('#customer_fk_id').val('{{$customer_fk_id}}');
</script>

<script>
  $('#status_of_transaction').val('{{$status_of_transaction}}');
</script>

<script>
  $('#type_of_transaction').val('{{$type_of_transaction}}');
</script>

<script>
  $('#currency').val('{{$currency}}');
</script>

<script>
  $('#bank_account_fk_id').val('{{$bank_account_fk_id}}');
</script>

<script>
  $('#transaction_amount_from').val('{{$transaction_amount_from}}');
</script>

<script>
  $('#transaction_amount_to').val('{{$transaction_amount_to}}');
</script>

<script>
  $('#date_paid_from').val('{{$date_paid_from}}');
</script>

<script>
  $('#date_paid_to').val('{{$date_paid_to}}');
</script>

<script>
  $('#invoice_number').val('{{$invoice_number}}');
</script>

<script>
  $('#merchant_fk_id').change(function() {
    $('#customer_fk_id').html('');
    var merchant_fk_id = $(this).val();

    $.ajax({
      type: 'POST',
      url: "{{url('getcustomers_bymerchant')}}",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {
        merchant_fk_id: merchant_fk_id
      },
      success: function(data) {

        var options = '<option value="" >Please Select One</option> ';
        $.each(data, function(i, value) {
          options += '<option value=' + value["id"] + '>' + value["first_name"] + '</option>';
        });
        //console.log(data);
        $('#customer_fk_id').html(options);
      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
    });

  });
</script>
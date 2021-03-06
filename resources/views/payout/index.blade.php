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

              <form action="{{url('payout/search')}}" method="post">
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
                    <label for="name">Payout Request ID</label>
                    <input type="text" name="reference_id" id="reference_id" class="form-control">
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
                    <label>Currency</label>
                    <select class="form-control select2" style="width: 100%;" name="currency" id="currency">
                      <option value="" selected>Please Select One</option>
                      @foreach(config('constants.currency_list') as $key=> $currency1)
                      <option value="{{$key}}">{{$key}}</option>
                      @endforeach
                    </select>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-3">
                    <label>Payout Amount Between:</label>
                    <div class="input-daterange input-group">
                      <input type="text" class="form-control m-input" name="payout_amount_from" id="payout_amount_from" placeholder="From" data-col-index="4">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                      </div>
                      <input type="text" class="form-control m-input" name="payout_amount_to" id="payout_amount_to" placeholder="To" data-col-index="4">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label>Status</label>
                    <select class="form-control" name="status_of_payout" id="status_of_payout">
                      <option value="" selected>Select Status</option>
                      <option value="New">New</option>
                      <option value="Processing">Processing</option>
                      <option value="Paid">Paid</option>
                      <option value="Hold">Hold</option>
                      <option value="Canceled">Canceled</option>
                      <option value="Returned">Returned</option>
                      <option value="Rejected">Rejected</option>

                    </select>
                  </div>
                  <div class="col-md-3">
                    @if(Auth::user()->role=="Admin")
                    <label for="description">Bank Paid From</label>
                    <select class="select2 form-control" name="bank_account_from_fk_id" id="bank_account_from_fk_id">
                      <option value="">Please Select One</option>
                      @foreach($bankaccounts as $bankaccount)
                      <optgroup label="{{$bankaccount[0]->bank_name}}">
                        @foreach($bankaccount as $item)
                        <option value="{{$item->bank_accountsid}}">{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                        @endforeach
                      </optgroup>
                      @endforeach
                    </select>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label>Date Paid Between:</label>
                    <div class="input-daterange input-group">
                      <input type="date" class="form-control m-input bootdatepicker" name="date_paid_from" id="date_paid_from" placeholder="From" data-col-index="11">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                      </div>
                      <input type="date" class="form-control m-input bootdatepicker" name="date_paid_to" id="date_paid_to" placeholder="To" data-col-index="11">
                    </div>
                  </div>


                </div>



                <hr>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                <button type="reset" class="btn btn-danger">X Reset</button>
              </form>
            </div>


            <hr>


            <table id="example1" class="table table-bordered table-hover">

              <thead>
                <tr>
                  <th>Sr.</th>
                  @if(Auth::user()->role=="Admin")
                  <th>Merchant Name</th>
                  @endif
                  <th>Customer Name</th>
                  <th>Currency</th>
                  <th>Payout Amount</th>
                  <th>Bank Charges</th>
                  <th>Status</th>
                  <th>Date Paid</th>
                  <th>Created BY</th>
                  <th>Created On</th>
                  @if(Auth::user()->role=="Admin")
                  <th>Actions</th>
                  @endif
                  <th>Download</th>
                </tr>
              </thead>


              @php $count=0; @endphp
              @foreach($payouts as $payout)

              @php $count++; @endphp
              <tr>
                <td>{{$count}}</td>
                @if(Auth::user()->role=="Admin")
                <td>{{@$merchantpluck[$payout->merchant_fk_id]}}</td>
                @endif
                <td>{{@$customerpluck[$payout->customer_fk_id]}}</td>
                <td>{{@$bankaccountpayoutpluk[$payout->bank_account_to_fk_id]}}</td>
                <td>{{$payout->payout_amount}}</td>
                <td>{{$payout->bank_processing_charges}}</td>
                <td>{{$payout->status_of_payout}}</td>
                <td>{{$payout->date_paid}}</td>
                <td>{{@$userpluck[$payout->created_by]}}</td>
                <td>{{$payout->created_at}}</td>
                @if(Auth::user()->role=="Admin")
                <td>
                  <a href="{{url('payout/edit/'.$payout->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
                  @if(Auth::user()->role=="Admin")

                  <a href="{{url('payout/delete/'.$payout->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  @endif
                </td>
                @endif
                <td>
                  @if($payout->upload_invoice)
                  <a class="btn btn-primary" href="{{asset('public/invoice/'.$payout->upload_invoice)}}" target="_blank"><i class="fa fa-download"></i></a>
                  @else
                  No Invoice
                  @endif

                  @if($payout->upload_reciept)
                  <a class="btn btn-default" href="{{asset('public/pop/'.$payout->upload_reciept)}}" target="_blank">POP</a>
                  @else
                  No payment Proof
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
  $('#currency').val('{{$currency}}');
</script>

<script>
  $('#status_of_payout').val('{{$status_of_payout}}');
</script>

<script>
  $('#bank_account_from_fk_id').val('{{$bank_account_from_fk_id}}');
</script>

<script>
  $('#payout_amount_from').val('{{$payout_amount_from}}');
</script>

<script>
  $('#payout_amount_to').val('{{$payout_amount_to}}');
</script>

<script>
  $('#date_paid_from').val('{{$date_paid_from}}');
</script>

<script>
  $('#date_paid_to').val('{{$date_paid_to}}');
</script>

<script>
  $('#reference_id').val('{{$reference_id}}');
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
    $('#customer_fk_id').val('{{$customer_fk_id}}');
  });
</script>
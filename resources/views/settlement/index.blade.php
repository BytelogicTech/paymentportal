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
              <form action="{{url('settlement/search')}}" method="post">
                @csrf
                <div class="row">
                @if(Auth::user()->role=="Admin")

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Merchant Name:</label>
                      <select class="select2 form-control" name="merchant_fk_id" id="merchant_fk_id">
                        <option value="" selected>Select Merchant</option>
                        @foreach($merchants as $merchant)
                        <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  @endif

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Settlement Amount Between:</label>
                      <div class="input-daterange input-group">
                        <input type="text" class="form-control m-input bootdatepicker" name="settlement_amount_from" id="settlement_amount_from" placeholder="From" data-col-index="11">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                        </div>
                        <input type="text" class="form-control m-input bootdatepicker" name="settlement_amount_to" id="settlement_amount_to" placeholder="To" data-col-index="11">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
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

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="description">Status:</label>
                      <select class="form-control" name="status_of_settlement" id="status_of_settlement">
                      <option value="" selected>Please Select One</option>
                        <option value="New">New</option>
                        <option value="Processing">Processing</option>
                        <option value="Paid">Paid</option>
                        <option value="Canceled">Canceled</option>
                        <option value="Returned">Returned</option>
                      </select>
                    </div>
                  </div>
                </div>

            </div>

            <div class="card-header">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
            </div>

            </form>

            <hr>

            <table id="example1" class="table table-bordered table-hover">

              <thead>
                <tr>
                  <th>Sr.</th>
                  @if(Auth::user()->role=="Admin")

                  <th>Merchant Name</th>
                  @endif
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
                @if(Auth::user()->role=="Admin")

                <td>{{@$merchantpluck[$settlement->merchant_fk_id]}}</td>
                @endif
                <td>{{@$bankaccountpayoutbnamepluk[$settlement->bank_account_to_fk_id]}}</td>
                <td>{{@$bankaccountpayoutpluk[$settlement->bank_account_to_fk_id]}}</td>
                <td>{{$settlement->settlement_amount}}</td>
                <td>{{$settlement->date_paid}}</td>
                <td>{{$settlement->status_of_settlement}}</td>
                <td>{{@$userpluck[$settlement->created_by]}}</td>
                <td>{{$settlement->created_at}}</td>
                <td>
                @if(Auth::user()->role=="Admin")

                  <a href="{{url('settlement/edit/'.$settlement->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
                  @endif
                  <a href="{{url('settlement/view/'.$settlement->id)}}" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i>
                  </a>
                  @if(Auth::user()->role=="Admin")

                  <a href="{{url('settlement/delete/'.$settlement->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
  $('#status_of_settlement').val('{{$status_of_settlement}}');
</script>


<script>
  $('#settlement_amount_from').val('{{$settlement_amount_from}}');
</script>


<script>
  $('#settlement_amount_to').val('{{$settlement_amount_to}}');
</script>

<script>
  $('#date_paid_from').val('{{$date_paid_from}}');
</script>

<script>
  $('#date_paid_to').val('{{$date_paid_to}}');
</script>

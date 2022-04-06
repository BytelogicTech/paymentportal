@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Payout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                        <li class="breadcrumb-item active">Payout</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Payout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('payout/store')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf



                                <div class="row">
                                    @if(Auth::user()->role=="Admin")
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Parent Merchant*</label>
                                            <select class="select2 form-control" name="merchant_fk_id" required id="merchant_fk_id">
                                                <option value="" selected>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @else
                                    <input type="hidden" name="merchant_fk_id" value="{{Auth::user()->merchant_fk_id}}" />
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Customer*</label>
                                            <select class=" form-control" name="customer_fk_id" required id="customer_fk_id">
                                                <option value="" selected>Please Select One</option>
                                                @if(Auth::user()->role=="Merchant Admin")
                                                @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->first_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer To*</label>
                                            <select class="form-control" name="bank_account_to_fk_id" required id="bank_account_to_fk_id">
                                                <option value="" selected>Please Select One</option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Payment Amount*</label>
                                            <input type="number" placeholder="Enter Payment Amount" class="form-control" name="payout_amount" required />

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Remarks / Purpose of Payment</label>
                                            <textarea placeholder="Remarks / Purpose of Payment" class="form-control" name="remarks"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Reference Id</label>
                                            <input type="text" placeholder="Enter Reference Id" class="form-control" name="reference_id" />

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Upload Invoice</label>
                                            <input type="file" class="form-control" name="upload_invoice">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Upload Payout Confirmation Receipt</label>
                                            <input type="file" class="form-control" name="upload_reciept">
                                        </div>
                                    </div>

                                    @if(Auth::user()->role=="Admin")
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer From</label>
                                            <select class="select2 form-control" name="bank_account_from_fk_id">
                                                <option value="" Selected>Please Select One</option>
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

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Status of Payout</label>
                                            <select class="select2 form-control" name="status_of_payout">
                                                <option value="New" selected>New</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Hold">Hold</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Returned">Returned</option>
                                                <option value="Rejected">Rejected</option>

                                            </select>
                                        </div>
                                    </div>
                                    @endif







                                </div>



                                <!-- /.card -->



                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form>
                    </div>
                    <!-- /.card -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@include('footer')

<script>
    $(function() {
        $('.select2').select2()
    });
</script>

<script>
    $('#merchant_fk_id').change(function() {
        $('#customer_fk_id').html('');
        $('#bank_account_to_fk_id').html('');
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


<script>
    $('#customer_fk_id').change(function() {
        $('#bank_account_to_fk_id').html('');
        var customer_fk_id = $(this).val();


        $.ajax({
            type: 'POST',
            url: "{{url('getpayout_bycustomer')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                customer_fk_id: customer_fk_id
            },
            success: function(data) {

                var options = '<option value="" disabled selected>Please Select One</option> ';
                $.each(data, function(i, value) {
                    options += '<option value=' + value["id"] + '>' + value["beneficiary_name"] + '-' + value["currency"] + '-' + value["account_number"] + '</option>';
                });
                // console.log(data);
                $('#bank_account_to_fk_id').html(options);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });

    });
</script>
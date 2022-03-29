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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('payout/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                            <input type="hidden" name="id" value="{{$payout->id}}">
                           


                            <div class="row">
                                <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Parent Merchant*</label>
                                            <select class="select2 form-control" name="merchant_fk_id" value="{{$payout->merchant_fk_id}}" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}" @if($merchant->id == $payout->merchant_fk_id) selected @endif>{{$merchant->first_name}}</option>
                                                @endforeach
                                            </select>

                                            
                                        </div>
                                </div>

                                <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Customer*</label>
                                            <select class="select2 form-control" name="customer_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($customers as $customer)
                                                <option value="{{$customer->id}}" @if($customer->id == $payout->customer_fk_id) selected @endif>{{$customer->first_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>

                                <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer To*</label>
                                            <select class="select2 form-control" name="bank_account_to_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($bankaccounts as $bankaccount)
                                                <optgroup label="{{$bankaccount[0]->bank_name}}">
                                                    @foreach($bankaccount as $item)
                                                    <option value="{{$item->bank_accountsid}}" @if($item->bank_accountsid == $payout->bank_account_to_fk_id) selected @endif>{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                    

                               
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Benificiary Name*</label>
                                            <input type="text" placeholder="Enter Benificiary Name" class="form-control" name="payout_amount" value="{{$payout->bank_account_from_fk_id}}" required />

                                        </div>
                                    </div>
                                    

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Beneficiary Nickname</label>
                                            <input type="text" placeholder="Enter Beneficiary Nickname" class="form-control" name="" value="{{$payout->bank_account_from_fk_id}}">
                                                                                                                               
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Beneficiary Address</label>
                                            <input type="text" placeholder="Enter Beneficiary Address" class="form-control" name="" value="{{$payout->bank_account_from_fk_id}}"/>

                                        </div>
                                    </div>

                                    
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Name</label>
                                            <input type="text" placeholder="Enter Bank Name" class="form-control" name="" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Address</label>
                                            <input type="text" placeholder="Enter Bank Address" class="form-control" name="" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Country</label>
                                            <input type="text" placeholder="Enter Bank Country" class="form-control" name="" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Swift</label>
                                            <input type="text" placeholder="Enter Bank Swift" class="form-control" name="upload_reciept" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Currency</label>
                                            <input type="text" placeholder="Currency" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Remarks</label>
                                            <input type="text" placeholder="Remarks" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Name</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Name" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Address</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Address" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Intermediary Bank Swift Code</label>
                                            <input type="text" placeholder="Intermediary Bank Swift Code" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Intermediary Remarks</label>
                                            <input type="text" placeholder="Enter Bank Swift" class="form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Payout Amount *</label>
                                            <input type="text" placeholder="Enter Payout Amount" class="form-control" name="payout_amount" value="{{$payout->payout_amount}}">
                                        </div>
                                    </div>


                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Remarks / Purpose of Payment</label>
                                            <input type="text" placeholder="Remarks / Purpose of Payment" class="form-control" name="remarks" value="{{$payout->remarks}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Notes (SPS Internal)</label>
                                            <input type="text" placeholder="Notes (SPS Internal)" class="form-control" name="notes" value="{{$payout->notes}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Reference ID</label>
                                            <input type="text" placeholder="Reference ID" class="form-control" name="reference_id" value="{{$payout->reference_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Upload Invoice</label>
                                            <input type="file" class="form-control" name="upload_invoice" value="{{$payout->upload_invoice}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Processing Charges *</label>
                                            <input type="text" placeholder="Bank Processing Charges" class="form-control" name="bank_processing_charges" value="{{$payout->bank_processing_charges}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Date Paid</label>
                                            <input type="date" class="form-control" name="date_paid" value="{{$payout->date_paid}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8">
                                    <label for="description">Status Of Payment</label>
                                    <select class="select2 form-control" name="bank_account_to_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                <option value="New">New</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Hold">Hold</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Returned">Returned</option>
                                                <option value="Rejected">Rejected</option>
                                    </select>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Amount Returned</label>
                                            <input type="text" placeholder="0"class="form-control" name="amount_returned" value="{{$payout->amount_returned}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8">
                                    <label for="description">Bank From</label>
                                    <select class="select2 form-control" name="bank_account_to_fk_id" required>
                                      <option value="" disabled selected>Please Select One</option>
                                      @foreach($bankaccounts as $bankaccount)
                                                <optgroup label="{{$bankaccount[0]->bank_name}}">
                                                    @foreach($bankaccount as $item)
                                                    <option value="{{$item->bank_accountsid}}" @if($item->bank_accountsid == $payout->bank_account_to_fk_id) selected @endif>{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                    </select>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Rejected/On Hold Remarks</label>
                                            <textarea type="text" class="form-control" name="remarks">{{$payout->remarks}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Upload Payout Confirmation Receipt</label>
                                            <input type="file" class="form-control" name="upload_reciept" value="{{$payout->upload_reciept}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Upload Extra Document 1</label>
                                            <input type="file" class="form-control" name="upload_extra_document" value="{{$payout->upload_extra_document}}">
                                        </div>
                                    </div>
                                </div>



                                <!-- /.card -->



                                <button type="submit" class="btn btn-primary">Update</button>
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


<!-- //////////      Ajax function for Table Reload in Payout edit      ///////////// -->

<script>
    $('#bank_account_to_fk_id').change(function() {
        $('#table_div').html('');
        var bank_account_to_fk_id = $(this).val();


        $.ajax({
            type: 'POST',
            url: "{{url('gettable_bybank_fk_id')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                bank_account_to_fk_id: bank_account_to_fk_id
            },
            success: function(data) {

                
                var table = "";
                $.each(data, function(i, value) {
                    
                    table += '<table id=' + value["id"] + 'class="hide table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">' +
                        '<tbody>' +
                        '<tr>' +
                        '<td>Beneficiary Name</td>' +
                        '<td>' + value["beneficiary_name"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Beneficiary Nickname</td>' +
                        '<td>' + value["beneficiary_nickname"] + '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '</table>';
                });
                console.log(data);
                
                $('#table_div').html(table);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });

    });

    $('#bank_account_to_fk_id').change(function() {
        var bank_account_to_fk_id = $(this).val();
        $('#' + bank_account_to_fk_id).removeClass('hide');
    });
</script>


<!-- //////////      Ajax function 2nd for Table Reload in Payout edit      ///////////// -->
<script>
    $('#bank_account_to_fk_id').change(function() {
        $('#table_div').html('');
        var bank_account_to_fk_id = $(this).val();


        $.ajax({
            type: 'POST',
            url: "{{url('gettable_bybank_fk_id')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                bank_account_to_fk_id: bank_account_to_fk_id
            },
            success: function(data) {

                var options = '<option value="" disabled selected>Please Select One</option> ';
                var table = "";
                $.each(data, function(i, value) {
                    options += '<option value=' + value["id"] + '>' + value["beneficiary_name"] + '-' + value["currency"] + '-' + value["account_number"] + '</option>';
                    table += '<table id=' + value["id"] + 'class="hide table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">' +
                        '<tbody>' +
                        '<tr>' +
                        '<td>Remarks</td>' +
                        '<td>' + value["remarks"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Pauout Amount</td>' +
                        '<td>' + value["payout_amount"] + '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '</table>';
                });
                console.log(data);
                
                $('#table_div').html(table);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });

    });

    $('#bank_account_to_fk_id').change(function() {
        var bank_account_to_fk_id = $(this).val();
        $('#' + bank_account_to_fk_id).removeClass('hide');
    });
</script>



<!-- //////////      Ajax function 3nd for Table Reload in Payout edit      ///////////// -->

<script>
    $('#bank_account_to_fk_id').change(function() {
        $('#table_div').html('');
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
                var table = "";
                $.each(data, function(i, value) {
                    options += '<option value=' + value["id"] + '>' + value["beneficiary_name"] + '-' + value["currency"] + '-' + value["account_number"] + '</option>';
                    table += '<table id=' + value["id"] + 'class="hide table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">' +
                    '<tbody>' +
                        '<tr>' +
                        '<td>Beneficiary Name</td>' +
                        '<td>' + value["beneficiary_name"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Beneficiary Nickname</td>' +
                        '<td>' + value["beneficiary_nickname"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Beneficiary Address</td>' +
                        '<td>' + value["beneficiary_address"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Beneficiary Country</td>' +
                        '<td>' + value["beneficiary_country"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Bank Name</td>' +
                        '<td>' + value["bank_name"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Bank Branch</td>' +
                        '<td>' + value["bank_branch"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Bank Address</td>' +
                        '<td>' + value["bank_address"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Bank Country</td>' +
                        '<td>' + value["bank_country"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Bank Swift</td>' +
                        '<td>' + value["bank_swift"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Acc No / IBAN</td>' +
                        '<td>' + value["account_number"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Currency</td>' +
                        '<td>' + value["currency"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Remarks</td>' +
                        '<td>' + value["remarks"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Remarks</td>' +
                        '<td>' + value["remarks"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Intermediary Bank name</td>' +
                        '<td>' + value["intermediary_bank_name"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Intermediary Bank Address</td>' +
                        '<td>' + value["intermediary_bank_address"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Intermidiary Bank Swift Code</td>' +
                        '<td>' + value["intermediary_bank_swift_code"] + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td>Intermidiary Remarks</td>' +
                        '<td>' + value["intermediary_bank_deatails_remarks"] + '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '</table>';
                });
                console.log(data);
                
                $('#table_div').html(table);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });

    });

    $('#bank_account_to_fk_id').change(function() {
        var bank_account_to_fk_id = $(this).val();
        $('#' + bank_account_to_fk_id).removeClass('hide');
    });
</script>







           <!-- search Function -->

           public function search(Request $request)
    {
        $merchant_fk_id = $request->merchant_fk_id;
        $customer_fk_id = $request->customer_fk_id;
        $status_of_payout = $request->status_of_payout;
        $bank_paid_from = $request->bank_paid_from;
        $currency = $request->currency;

        $payouts = payout::query();

        if($merchant_fk_id!=null)
        {
            $payouts = $payouts->where('merchant_fk_id',$merchant_fk_id);
        }
        if($request->payout_request_id!=null)
        {
            $payouts = $payouts->where('reference_id',$request->payout_request_id);
        }
        if($customer_fk_id!=null)
        {
            $payouts = $payouts->where('customer_fk_id',$customer_fk_id);
        }
        if($request->currency!=null)
        {
            $payouts = $payouts->where('currency',$currency);
        }
       

        if($request->payout_amount_from!=null)
        {
            $payouts = $payouts->where('payout_amount','>=',$request->payout_amount_from);
        }
        if($request->payout_amount_to!=null)
        {
            $payouts = $payouts->where('payout_amount','<=',$request->payout_amount_to);
        }

        if($request->date_paid_from!=null)
        {
            $payouts = $payouts->where('date_paid','>=',$request->date_paid_from);
        }
        if($request->date_paid_to!=null)
        {
            $payouts = $payouts->where('date_paid','<=',$request->date_paid_to);
        }
        if($status_of_payout!=null)
        {
            $payouts = $payouts->where('status_of_payout',$status_of_payout);
        }
        if($bank_paid_from!=null)
        {
            $payouts = $payouts->where('bank_paid_from',$bank_paid_from);
        }

        $payouts = $payouts->get();
        $merchants = merchant::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        $bankaccountpayoutpluk = bank_account_payouts::pluck('currency', 'id');
        $userpluck = User::pluck('first_name', 'id');

        return view('payout/index', compact('payouts','merchants','merchantpluck','customerpluck','bankaccountpluk','userpluck','bankaccountpayoutpluk','merchant_fk_id'));

    }
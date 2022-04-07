@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Edit Payout - {{$payout->payout_amount}} </h1>                
            </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
<<<<<<< HEAD
                        
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('payout/index')}}">All Payouts</a></li>

                     

                        <li class="breadcrumb-item active" >Edit Payout - {{$payout->merchant_fk_id}}</li>
=======
                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('payout/index')}}">All Payouts</a></li>
                        <li class="breadcrumb-item active" >Edit Payout - {{$payout->payout_amount}}</li>

>>>>>>> 3d96ad11b34f1822705fc53f9d848c78903268e3
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
                                            <select class="select2 form-control" name="merchant_fk_id" id="merchant_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}" @if($merchant->id==$payout->merchant_fk_id) selected @endif>{{$merchant->merchant_name}}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Customer*</label>
                                            <select class="select2 form-control" name="customer_fk_id" id="customer_fk_id" required>
                                                <option value="customer_fk_id" disabled selected>Please Select One</option>
                                                @foreach($customers as $customer)
                                                <option value="{{$customer->id}}" @if($customer->id==$payout->customer_fk_id) selected @endif>{{$customer->first_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer To*</label>
                                            <select class="select2 form-control" name="bank_account_to_fk_id" id="bank_account_to_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($bank_account_payouts as $bank_account_payout)
                                                <option value="{{$bank_account_payout->id}}" @if($bank_account_payout->id==$payout->bank_account_to_fk_id) selected @endif>{{$bank_account_payout->bank_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-8">

                                        <div class="tb-customer-accounts" style="margin-top: 20px;" id="table_div">
                                            <table class="table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                                <tbody>
                                                    <tr>
                                                        <td>Beneficiary Name</td>
                                                        <td>{{$bank_account_payout_existing->beneficiary_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beneficiary Nickname</td>
                                                        <td>{{$bank_account_payout_existing->beneficiary_nickname}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beneficiary Address</td>
                                                        <td>{{$bank_account_payout_existing->beneficiary_address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td>{{$bank_account_payout_existing->bank_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Branch</td>
                                                        <td>{{$bank_account_payout_existing->bank_branch}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Address</td>
                                                        <td>{{$bank_account_payout_existing->beneficiary_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Country</td>
                                                        <td>{{$bank_account_payout_existing->bank_country}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Swift</td>
                                                        <td>{{$bank_account_payout_existing->bank_swift}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acc No/IBAN</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Currency</td>
                                                        <td>{{$bank_account_payout_existing->currency}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Remarks</td>
                                                        <td>{{$bank_account_payout_existing->remarks}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Name</td>
                                                        <td>{{$bank_account_payout_existing->intermediary_bank_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Address</td>
                                                        <td>{{$bank_account_payout_existing->intermediary_bank_address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Swift Code</td>
                                                        <td>{{$bank_account_payout_existing->bank_swift}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Remarks</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                            <label for="description">Bank Processing Charges*</label>
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
                                        <select class="form-control" name="status_of_payout" value="{{$payout->status_of_payout}}" required>
                                            <option value="New" @if($payout->status_of_payout == 'New') selected @endif>New</option>
                                            <option value="Processing" @if($payout->status_of_payout == 'Processing') selected @endif>Processing</option>
                                            <option value="Paid" @if($payout->status_of_payout == 'Paid') selected @endif>Paid</option>
                                            <option value="Hold" @if($payout->status_of_payout == 'Hold') selected @endif>Hold</option>
                                            <option value="Canceled" @if($payout->status_of_payout == 'Canceled') selected @endif>Canceled</option>
                                            <option value="Returned" @if($payout->status_of_payout == 'Returned') selected @endif>Returned</option>
                                            <option value="Rejected" @if($payout->status_of_payout == 'Rejected') selected @endif>Rejected</option>

                                        </select>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Amount Returned</label>
                                            <input type="text" placeholder="0" class="form-control" name="amount_returned" value="{{$payout->amount_returned}}">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="description">Bank Account To Transform From</label>
                                        <select class="select2 form-control" name="bank_account_from_fk_id" value="{{$payout->bank_account_from_fk_id}}" required>
                                            <option value="" disabled selected>Please Select One</option>
                                            @foreach($bankaccounts as $bankaccount)
                                            <optgroup label="{{$bankaccount[0]->bank_name}}">
                                                @foreach($bankaccount as $item)
                                                <option value="{{$item->bank_accountsid}}" @if($item->bank_accountsid == $payout->bank_account_from_fk_id) selected @endif>{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                                                @endforeach
                                            </optgroup>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Rejected/On Hold Remarks</label>
                                            <textarea class="form-control" name="rejected_onhold_remarks">
                                            {{$payout->rejected_onhold_remarks}}
                                            </textarea>
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

<style>
    .hide {
        display: none;
    }
    .show{
    display: block;        
    }
</style>
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
                // console.log(data);
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
                    table += '<table id=' + value["id"] + ' class=" table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">' +
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
                $('#bank_account_to_fk_id').html(options);
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

<script>
    $('#bank_account_to_fk_id').change(function() {
        $('#table_div').html('');
        var customer_pk_id = $(this).val();


        $.ajax({
            type: 'POST',
            url: "{{url('getpayout_bycustomer_table')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                customer_pk_id: customer_pk_id
            },
            success: function(data) {

                var options = '<option value="" disabled selected>Please Select One</option> ';
                var table = "";
                $.each(data, function(i, value) {
                    options += '<option value=' + value["id"] + '>' + value["beneficiary_name"] + '-' + value["currency"] + '-' + value["account_number"] + '</option>';
                    table += '<table id='+value["id"]+' class=" table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand border="1" ">' +
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

    
</script>



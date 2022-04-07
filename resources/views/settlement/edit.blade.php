@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Settlement - {{$settlement->settlement_amount}} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
<<<<<<< HEAD
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('settlement/index')}}">All Settlements</a></li>
                    <li class="breadcrumb-item active" >Edit Settlement - {{$settlement->merchant_fk_id}}</li>
=======
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url('settlement/index')}}">All Settlements</a></li>

                        <li class="breadcrumb-item active">Edit Settlement - {{$settlement->settlement_amount}}</li>

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

                        <form action="{{url('settlement/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="id" value="{{$settlement->id}}">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Parent Merchant*</label>
                                        <select class="select2 form-control" name="merchant_fk_id" required id="merchant_fk_id">
                                            <option value="" disabled selected>Please Select One</option>
                                            @foreach($merchants as $merchant)
                                            <option value="{{$merchant->id}}" @if($merchant->id==$settlement->merchant_fk_id)selected @endif>{{$merchant->first_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer To*</label>
                                            <select class="select2 form-control" name="bank_account_to_fk_id" id="bank_account_to_fk_id" required>
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($bank_account_payouts as $bank_account_payout)
                                                <option value="{{$bank_account_payout->id}}" @if($bank_account_payout->id==$settlement->bank_account_to_fk_id) selected @endif>{{$bank_account_payout->bank_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Settlement Amount *</label>
                                            <input type="number" placeholder="Enter Settlement Amount " class="form-control" name="settlement_amount" required value="{{$settlement->settlement_amount}}" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Upload Settlement Invoice</label>
                                        <input type="file" placeholder="Choose File" class="form-control" name="upload_settlement_invoice" value="{{$settlement->upload_settlement_invoice}}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks / Purpose of Transfer</label>
                                            <textarea placeholder="Remarks / Purpose of Transfer" class="form-control" name="remarks">
                                            {{$settlement->remarks}}
                                            </textarea>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Reference ID</label>
                                            <input type="text" placeholder="Enter Reference ID" class="form-control" name="reference_id" value="{{$settlement->reference_id}}" />
                                        </div>
                                    </div>
                                </div>


                                <!-- Bootstrap Switch -->
                                <center>
                                    <p>RR Settlement?</p>
                                    <input type="checkbox" checked data-toggle="switch" data-handle-width="100" data-on-text="YES" data-off-text="NO" name="rr_settlement">

                                </center>

                                <div class="col-md-6">
                                </div>

                                <!-- /.card -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="description">Bank Account To Transform From</label>
                                        <select class="select2 form-control" name="bank_account_from_fk_id" value="{{$settlement->bank_account_from_fk_id}}" required>
                                            <option value="" disabled selected>Please Select One</option>
                                            @foreach($bankaccounts as $bankaccount)
                                            <optgroup label="{{$bankaccount[0]->bank_name}}">
                                                @foreach($bankaccount as $item)
                                                <option value="{{$item->bank_accountsid}}" @if($item->bank_accountsid == $settlement->bank_account_from_fk_id) selected @endif>{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                                                @endforeach
                                            </optgroup>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="description">Status Of Settlement</label>
                                        <select class="form-control" name="status_of_settlement" value="{{$settlement->status_of_settlement}}">
                                            <option value="New" @if($settlement->status_of_settlement == 'New') selected @endif>New</option>
                                            <option value="Processing" @if($settlement->status_of_settlement == 'Processing') selected @endif>Processing</option>
                                            <option value="Paid" @if($settlement->status_of_settlement == 'Paid') selected @endif>Paid</option>
                                            <option value="Hold" @if($settlement->status_of_settlement == 'Hold') selected @endif>Hold</option>
                                            <option value="Canceled" @if($settlement->status_of_settlement == 'Canceled') selected @endif>Canceled</option>
                                            <option value="Returned" @if($settlement->status_of_settlement == 'Returned') selected @endif>Returned</option>
                                            <option value="Rejected" @if($settlement->status_of_settlement == 'Rejected') selected @endif>Rejected</option>

                                        </select>
                                    </div>
                                </div>


                                <br />
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

<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>

<script>
    $('#merchant_fk_id').change(function() {
        $('#bank_account_to_fk_id').html('');
        var merchant_fk_id = $(this).val();

        $.ajax({
            type: 'POST',
            url: "{{url('getpayouts_bymerchant')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                merchant_fk_id: merchant_fk_id
            },
            success: function(data) {
                console.log(data);

                var options = '<option value="" >Please Select One</option> ';
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
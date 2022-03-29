@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settlements</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
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
                            <h3 class="card-title">Add New Settlement</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{url('settlement/store')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Parent Merchant*</label>
                                        <select class="select2 form-control" name="merchant_fk_id" required id="merchant_fk_id">
                                            <option value="" disabled selected>Please Select One</option>
                                            @foreach($merchants as $merchant)
                                            <option value="{{$merchant->id}}">{{$merchant->first_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer To*</label>
                                            <select class="form-control" name="bank_account_to_fk_id" required id="bank_account_to_fk_id">
                                                <option value="" disabled selected>Please Select One</option>
                                           

                                            </select>
                                        </div>
                                    </div>

                                    


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Settlement Amount *</label>
                                            <input type="text" placeholder="Enter Settlement Amount " class="form-control" name="settlement_amount" required />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Upload Settlement Invoice</label>
                                        <input type="file" placeholder="Choose File" class="form-control" name="upload_settlement_invoice" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks / Purpose of Transfer</label>
                                            <textarea placeholder="Remarks / Purpose of Transfer" class="form-control" name="remarks"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Reference ID</label>
                                            <input type="text" placeholder="Enter Reference ID" class="form-control" name="reference_id"/>
                                        </div>
                                    </div>
                                </div>


                                <!-- Bootstrap Switch -->
                                <center>
                                    <p>RR Settlement?</p>
                                    <input type="checkbox" checked data-toggle="switch" data-handle-width="100" data-on-text="YES" data-off-text="NO" name="rr_settlement">

                                </center>

                                <!-- /.card -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Account To Transfer From*</label>
                                            <select class="select2 form-control" name="bank_account_from_fk_id">
                                                <option>Please Select One</option>
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
                                            <label for="description">Status of Settlement</label>
                                            <select class="form-control" name="status_of_settlement">

                                                <option value="New">New</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Returned">Returned</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <br />
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
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>

<script>
    $('#merchant_fk_id').change(function(){
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
                    options+= '<option value='+value["id"]+'>'+value["beneficiary_name"]+'</option>';
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








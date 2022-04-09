@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaction</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Transaction</li>
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
                            <h3 class="card-title">Add New transaction</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('transaction/store')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf

                                <div class="row">
                                @if(Auth::user()->role=="Admin")
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Invoice Date*</label>
                                            <input type="date" placeholder="Enter Invoice Date" class="form-control" name="invoice_date" required />

                                        </div>
                                    </div>
                                    @endif

                                    @if(Auth::user()->role=="Admin")
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Parent Merchant*</label>
                                            <select class="select2 form-control" name="merchant_fk_id" id="merchant_fk_id" required>
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
 
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank To*</label>
                                            <select name="bank_account_fk_id" class="select2 form-control" required>
                                                <option value="" selected>Select Bank Account</option>

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
                                            <label for="description">Customer*</label>
                                            <select class="select2 form-control" name="customer_fk_id"id="customer_fk_id" required>
                                                <option value="" selected>Please Select One</option>
                                                @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->first_name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Product Name*</label>
                                            <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" required> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Product Price*</label>
                                            <input type="number" class="form-control" name="product_price" placeholder="Enter Product Price" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks</label>
                                            <input type="textarea" class="form-control" name="remarks">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Reference ID</label>
                                            <input type="text" class="form-control" name="reference_id" placeholder="Enter Reference Id">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Upload Signed Invoice</label>
                                            <input type="file" class="form-control" name="upload_signed_invoice">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                @if(Auth::user()->role=="Admin")
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Date Recieved</label>
                                            <input type="date" class="form-control" name="date_recieved" placeholder="Enter Date of Amount Recieved">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Amount Recieved</label>
                                            <input type="text" class="form-control" name="amount_recieved" placeholder="Enter Amount Recieved">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Status of Transaction</label>
                                            <select class="select2 form-control" name="status_of_transaction">
                                                <option>New</option>
                                                <option>Recieved</option>
                                                <option>Canceled</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Type of Transaction</label>
                                            <select class="select2 form-control" name="type_of_transaction">
                                                <option>C2B</option>
                                                <option>B2B</option>
                                            </select>
                                        </div>
                                    </div>
                                    @else
                                    <input type="date" class="form-control" name="invoice_date" placeholder="Enter Date of Amount Recieved" value="<?php echo date("Y-m-d"); ?>">
                                    <input type="hidden" class="form-control" name="amount_recieved" placeholder="Enter Amount Recieved" value="0">
                                    <input type="hidden" class="form-control" name="status_of_transaction" placeholder="Enter Amount Recieved" value="New">
                                    <input type="hidden" class="form-control" name="type_of_transaction" placeholder="Enter Amount Recieved" value="C2B">

                                    @endif
                                </div>

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
    $('#merchant_fk_id').change(function(){
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
                    options+= '<option value='+value["id"]+'>'+value["first_name"]+'</option>';
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




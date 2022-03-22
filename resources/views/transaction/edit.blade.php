@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Transaction - {{$transaction->product_name}} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('transaction/index')}}">All Transactions</a></li>

                     

                        <li class="breadcrumb-item active" >Edit Transaction - {{$transaction->product_name}}</li>
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





                        <form action="{{url('transaction/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Invoice Date*</label>
                                            <input type="hidden" name="id" value="{{$transaction->id}}">
                                            <input type="date" placeholder="Enter Invoice Date" class="form-control" name="invoice_date" required value="{{$transaction->invoice_date}}" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Parent Merchant*</label>
                                            <select class="select2 form-control" name="merchant_fk_id" value="{{$transaction->merchant_fk_id}}">
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}" @if($merchant->id == $transaction->merchant_fk_id) selected @endif>{{$merchant->merchant_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank To*</label>
                                            <select name="bank_account_fk_id" class="select2 form-control" value="{{$transaction->bank_account_fk_id}}">
                                                <option>Select Bank Account</option>

                                                @foreach($bankaccounts as $bankaccount)
                                                <optgroup label="{{$bankaccount[0]->bank_name}}">
                                                    @foreach($bankaccount as $item)
                                                    
                                                    <option value="{{$item->bank_accountsid}}" @if ($item->bank_accountsid == $transaction->bank_account_fk_id) selected @endif>{{$item->beneficiary_name}} - {{$item->currency}} - ({{$item->account_number}}) </option>
                                                     
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Customer*</label>
                                            <select class="select2 form-control" name="customer_fk_id" value="{{$transaction->customer_fk_id}}">
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($customers as $customer)
                                                <option value="{{$customer->id}}" @if($customer->id == $transaction->customer_fk_id) selected @endif>{{$customer->first_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Product Name*</label>
                                            <input type="text" class="form-control" name="product_name"  value="{{$transaction->product_name}}" placeholder="Enter Product Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Product Price*</label>
                                            <input type="text" class="form-control" name="product_price" value="{{$transaction->product_price}}" placeholder="Enter Product Price">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks</label>
                                            <input type="text" class="form-control" name="remarks" value="{{$transaction->remarks}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Reference ID</label>
                                            <input type="text" class="form-control" name="reference_id" placeholder="Enter Reference Id" value="{{$transaction->reference_id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Upload Signed Invoice</label>
                                            <input type="file" class="form-control" name="upload_signed_invoice" value="{{$transaction->upload_signed_invoice}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Payment Proof</label>
                                            <input type="file" class="form-control" name="proof_of_payment">
                                        </div>
                                    </div>
                                    

                                    


                                    
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Date Recieved</label>
                                            <input type="date" class="form-control" name="date_recieved" placeholder="Enter Date of Amount Recieved" value="{{$transaction->date_recieved}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Amount Recieved</label>
                                            <input type="text" class="form-control" name="amount_recieved" placeholder="Enter Amount Recieved" value="{{$transaction->amount_recieved}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Status of Transaction</label>
                                            <select class="select2 form-control" name="status_of_transaction" value="{{$transaction->status_of_transaction}}">
                                                <option value="new" @if($transaction->status_of_transaction == 'new') selected @endif>New</option>
                                                <option value="recieved" @if($transaction->status_of_transaction == 'recieved') selected @endif>Recieved</option>
                                                <option value="canceled" @if($transaction->status_of_transaction == 'canceled') selected @endif>Canceled</option>
                                                <option value="refunded" @if($transaction->status_of_transaction == 'refunded') selected @endif>Refunded</option>
                                                
                                                
                                                
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Type of Transaction</label>
                                            <select class="select2 form-control" name="type_of_transaction" value="{{$transaction->type_of_transaction}}">
                                    
                                                <option value="C2B" @if($transaction->type_of_transaction == 'C2B') selected @endif>C2B</option>
                                                <option value="B2B" @if($transaction->type_of_transaction == 'B2B') selected @endif>B2B</option>
                                                
                                            </select>
                                        </div>
                                    </div>

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




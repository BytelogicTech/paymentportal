@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adjustments
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Other Adjustments</li>
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
                            <h3 class="card-title">Other Adjustments


                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('adjustment/other_adjustments_store')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Merchant *</label>
                                            <select class="select2 form-control" name="merchant_fk_id" required id="merchant_fk_id">
                                                <option value="" disabled selected>Please Select One</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Type</label>
                                            <select class="form-control" name="type">
                                                <option value="Other Adjustment" selected>Other Adjustment</option>
                                                <option value="Processing">Processing</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Adjustment Type</label>
                                            <select class="form-control" name="adjustment_type">
                                                <option value="Debit" selected>Debit</option>
                                                <option value="Credit">Credit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                <div class="col-md-6">
                                        <label>Currency From *</label>
                                        <select class="form-control" style="width: 100%;" name="currency" required>
                                            <option value="" selected disabled>Please Select One</option>
                                            @foreach(config('constants.currency_list') as $key=> $currency)
                                            <option value="{{$key}}">{{$key}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Amount *</label>
                                            <input type="text" placeholder="Enter Amount From" class="form-control" name="amount" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks</label>
                                            <textarea placeholder="Remarks" class="form-control" name="remarks"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.card -->
                                <br />
                                <button type="submit" class="btn btn-primary">Recalculate</button>
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
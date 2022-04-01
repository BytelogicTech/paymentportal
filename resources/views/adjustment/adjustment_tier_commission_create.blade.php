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
                            <h3 class="card-title">Tier Commission

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('adjustment/adjustment_tier_commission_store')}}" method="POST" enctype="multipart/form-data">
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
                                            <label for="description">Date From *</label>
                                            <input type="date" placeholder="Enter Date From" class="form-control" name="date_from" required />
                                        </div>
                                    </div>
                             

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Date To *</label>
                                            <input type="date" placeholder="Enter Date To" class="form-control" name="date_to" required />
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Incoming Percentage</label>
                                            <input type="text" placeholder="Enter Incoming Percentage" class="form-control" name="incoming_percentage" required />
                                        </div>
                                    </div>
                             

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">RR Percentage</label>
                                            <input type="text" placeholder="Enter RR Percentage" class="form-control" name="rr_percentage" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Payout Percentage</label>
                                            <input type="text" placeholder="Enter Payout Percentage" class="form-control" name="payout_percentage" required />
                                        </div>
                                    </div>
                             

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">B2B Percentage</label>
                                            <input type="text" placeholder="Enter B2B Percentage" class="form-control" name="b2b_percentage" required />
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
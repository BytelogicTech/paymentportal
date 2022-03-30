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

                        <form action="{{url('settlement/view')}}" method="POST" enctype="multipart/form-data">
                        
                            <div class="card-body">
                            
                               
                                <h4><b>Settlement Details</b></h4>
                            <div class="col-md-4">
                                        <div class="tb-customer-accounts" style="margin-top: 20px;">
                                            <table class="table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>Settlement Request ID</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Merchant Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Settlement Amount</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td></td>
                                                    </tr>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <h4><b>Settlement Bank Details</b></h4>
                            <div class="col-md-4">
                                        <div class="tb-customer-accounts" style="margin-top: 20px;">
                                            <table class="table tbl-customer-accounts table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>Beneficiary Name</td>
                                                        <td></td>

                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beneficiary Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beneficiary Address</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Branch </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Address</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Country</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Swift</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acc No/IBAN</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Currency</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Remarks</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Purpose of Transfer</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Address</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Bank Swift Code</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediary Remarks</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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










@include('header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                    <h1>Edit Settlement Account - {{$settlementaccount->beneficiary_name}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">                   
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('settlementaccount/index')}}">All Settlement Accounts</a></li>
                        <li class="breadcrumb-item active" >Edit Settlement Account - {{$settlementaccount->beneficiary_name}}</li>
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
                            <h3 class="card-title">Add Settlement Account</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{url('settlementaccount/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="id" value="{{$settlementaccount->id}}">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Parent Merchant*</label>
                                        <select class="select2 form-control" name="merchant_fk_id" required id="merchant_fk_id">
                                            <option value="" disabled selected>Please Select One</option>
                                            @foreach($merchants as $merchant)
                                            <option value="{{$merchant->id}}" @if($merchant->id==$settlementaccount->merchant_fk_id)selected @endif>{{$merchant->first_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="beneficiary_name">Beneficiary Name</label>
                                            <input type="text" placeholder="Enter Beneficiary Name " class="form-control" name="beneficiary_name" value="{{$settlementaccount->beneficiary_name}}" />
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="beneficiary_nickname">Beneficiary Nickname</label>
                                            <input type="text" placeholder="Enter Beneficiary Nickname" class="form-control" name="beneficiary_nickname" value="{{$settlementaccount->beneficiary_nickname}}" />
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="beneficiary_address">Beneficiary Address</label>
                                        <input type="text" placeholder="Enter Beneficiary Address " class="form-control" name="beneficiary_address" value="{{$settlementaccount->beneficiary_address}}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bank_name">Bank Name</label>
                                            <input type="text" placeholder="Enter Bank Name " class="form-control" name="bank_name" value="{{$settlementaccount->bank_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bank_branch">Bank Branch</label>
                                            <input type="text" placeholder="Enter Bank Branch" class="form-control" name="bank_branch" value="{{$settlementaccount->bank_branch}}" />
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bank_address">Bank Address</label>
                                            <input type="text" placeholder="Enter Bank Address" class="form-control" name="bank_address" value="{{$settlementaccount->bank_address}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>

                                            <select class="form-control select2" name="bank_country" value="{{$settlementaccount->bank_country}}" id="bank_country">
                                                <option value="" selected disabled>Please Select One</option>
                                                @foreach(config('constants.countryar') as $bank_country)
                                                <option value="{{$bank_country}}" @if($bank_country==$settlementaccount->bank_country) selected @endif>{{$bank_country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bank_swift">Bank SWIFT</label>
                                            <input type="text" placeholder="Enter Bank SWIFT" class="form-control" name="bank_swift" value="{{$settlementaccount->bank_swift}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account_number">Account Number/IBAN</label>
                                            <input type="text" placeholder="Enter Account Number" class="form-control" name="account_number" value="{{$settlementaccount->account_number}}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control select2" name="currency" value="{{$settlementaccount->currency}}">
                                                <option value="" selected disabled>Please Select One</option>
                                                <option value="USD" @if($settlementaccount->currency == 'USD') selected @endif >USD</option>
                                                <option value="EUR" @if($settlementaccount->currency == 'EUR') selected @endif>EUR</option>
                                                <option value="GBP" @if($settlementaccount->currency == 'GBP') selected @endif>GBP</option>
                                                <option value="DZD" @if($settlementaccount->currency == 'DZD') selected @endif>DZD</option>
                                                <option value="AED" @if($settlementaccount->currency == 'EUR') selected @endif>AED</option>
                                                <option value="ARP" @if($settlementaccount->currency == 'EUR') selected @endif>ARP</option>
                                                <option value="AUD" @if($settlementaccount->currency == 'AUD') selected @endif>AUD</option>
                                                <option value="ATS" @if($settlementaccount->currency == 'EUR') selected @endif>ATS</option>
                                                <option value="BSD" @if($settlementaccount->currency == 'EUR') selected @endif>BSD</option>
                                                <option value="BBD" @if($settlementaccount->currency == 'EUR') selected @endif>BBD</option>
                                                <option value="BEF" @if($settlementaccount->currency == 'EUR') selected @endif>BEF</option>
                                                <option value="BMD" @if($settlementaccount->currency == 'EUR') selected @endif>BMD</option>
                                                <option value="BRR" @if($settlementaccount->currency == 'EUR') selected @endif>BRR</option>
                                                <option value="BGN" @if($settlementaccount->currency == 'EUR') selected @endif>BGN</option>
                                                <option value="CAD" @if($settlementaccount->currency == 'EUR') selected @endif>CAD</option>
                                                <option value="CLP" @if($settlementaccount->currency == 'EUR') selected @endif>CLP</option>
                                                <option value="CNY" @if($settlementaccount->currency == 'EUR') selected @endif>CNY</option>
                                                <option value="CYP" @if($settlementaccount->currency == 'EUR') selected @endif>CYP</option>
                                                <option value="CSK" @if($settlementaccount->currency == 'EUR') selected @endif>CSK</option>
                                                <option value="DKK" @if($settlementaccount->currency == 'EUR') selected @endif>DKK</option>
                                                <option value="NLG" @if($settlementaccount->currency == 'EUR') selected @endif>NLG</option>
                                                <option value="XCD" @if($settlementaccount->currency == 'EUR') selected @endif>XCD</option>
                                                <option value="EGP" @if($settlementaccount->currency == 'EUR') selected @endif>EGP</option>
                                                <option value="FJD" @if($settlementaccount->currency == 'EUR') selected @endif>FJD</option>
                                                <option value="FIM" @if($settlementaccount->currency == 'EUR') selected @endif>FIM</option>
                                                <option value="FRF" @if($settlementaccount->currency == 'EUR') selected @endif>FRF</option>
                                                <option value="DEM" @if($settlementaccount->currency == 'EUR') selected @endif>DEM</option>
                                                <option value="XAU" @if($settlementaccount->currency == 'EUR') selected @endif>XAU</option>
                                                <option value="GRD" @if($settlementaccount->currency == 'EUR') selected @endif>GRD</option>
                                                <option value="HKD" @if($settlementaccount->currency == 'EUR') selected @endif>HKD</option>
                                                <option value="HUF" @if($settlementaccount->currency == 'EUR') selected @endif>HUF</option>
                                                <option value="ISK" @if($settlementaccount->currency == 'EUR') selected @endif>ISK</option>
                                                <option value="INR" @if($settlementaccount->currency == 'EUR') selected @endif>INR</option>
                                                <option value="IDR" @if($settlementaccount->currency == 'EUR') selected @endif>IDR</option>
                                                <option value="IEP" @if($settlementaccount->currency == 'EUR') selected @endif>IEP</option>
                                                <option value="ILS" @if($settlementaccount->currency == 'EUR') selected @endif>ILS</option>
                                                <option value="ITL" @if($settlementaccount->currency == 'EUR') selected @endif>ITL</option>
                                                <option value="JMD" @if($settlementaccount->currency == 'EUR') selected @endif>JMD</option>
                                                <option value="JPY" @if($settlementaccount->currency == 'EUR') selected @endif>JPY</option>
                                                <option value="JOD" @if($settlementaccount->currency == 'EUR') selected @endif>JOD</option>
                                                <option value="KRW" @if($settlementaccount->currency == 'EUR') selected @endif>KRW</option>
                                                <option value="LBP" @if($settlementaccount->currency == 'EUR') selected @endif>LBP</option>
                                                <option value="LUF" @if($settlementaccount->currency == 'EUR') selected @endif>LUF</option>
                                                <option value="MYR" @if($settlementaccount->currency == 'EUR') selected @endif>MYR</option>
                                                <option value="MXP" @if($settlementaccount->currency == 'EUR') selected @endif>MXP</option>
                                                <option value="NLG" @if($settlementaccount->currency == 'EUR') selected @endif>NLG</option>
                                                <option value="NZD" @if($settlementaccount->currency == 'EUR') selected @endif>NZD</option>
                                                <option value="NOK" @if($settlementaccount->currency == 'EUR') selected @endif>NOK</option>
                                                <option value="PKR" @if($settlementaccount->currency == 'EUR') selected @endif>PKR</option>
                                                <option value="XPD" @if($settlementaccount->currency == 'EUR') selected @endif>XPD</option>
                                                <option value="PHP" @if($settlementaccount->currency == 'EUR') selected @endif>PHP</option>
                                                <option value="XPT" @if($settlementaccount->currency == 'EUR') selected @endif>XPT</option>
                                                <option value="PLZ" @if($settlementaccount->currency == 'EUR') selected @endif>PLZ</option>
                                                <option value="PTE" @if($settlementaccount->currency == 'EUR') selected @endif>PTE</option>
                                                <option value="ROL" @if($settlementaccount->currency == 'EUR') selected @endif>ROL</option>
                                                <option value="RUR" @if($settlementaccount->currency == 'EUR') selected @endif>RUR</option>
                                                <option value="SAR" @if($settlementaccount->currency == 'EUR') selected @endif>SAR</option>
                                                <option value="XAG" @if($settlementaccount->currency == 'EUR') selected @endif>XAG</option>
                                                <option value="SGD" @if($settlementaccount->currency == 'EUR') selected @endif>SGD</option>
                                                <option value="SKK" @if($settlementaccount->currency == 'EUR') selected @endif>SKK</option>
                                                <option value="ZAR" @if($settlementaccount->currency == 'EUR') selected @endif>ZAR</option>
                                                <option value="KRW" @if($settlementaccount->currency == 'EUR') selected @endif>KRW</option>
                                                <option value="ESP" @if($settlementaccount->currency == 'EUR') selected @endif>ESP</option>
                                                <option value="XDR" @if($settlementaccount->currency == 'EUR') selected @endif>XDR</option>
                                                <option value="SDD" @if($settlementaccount->currency == 'EUR') selected @endif>SDD</option>
                                                <option value="SEK" @if($settlementaccount->currency == 'EUR') selected @endif>SEK</option>
                                                <option value="CHF" @if($settlementaccount->currency == 'EUR') selected @endif>CHF</option>
                                                <option value="TWD" @if($settlementaccount->currency == 'EUR') selected @endif>TWD</option>
                                                <option value="THB" @if($settlementaccount->currency == 'EUR') selected @endif>THB</option>
                                                <option value="TTD" @if($settlementaccount->currency == 'EUR') selected @endif>TTD</option>
                                                <option value="TRL" @if($settlementaccount->currency == 'EUR') selected @endif>TRL</option>
                                                <option value="VEB" @if($settlementaccount->currency == 'EUR') selected @endif>VEB</option>
                                                <option value="ZMK" @if($settlementaccount->currency == 'EUR') selected @endif>ZMK</option>
                                                <option value="EUR" @if($settlementaccount->currency == 'EUR') selected @endif>EUR</option>
                                                <option value="XCD" @if($settlementaccount->currency == 'EUR') selected @endif>XCD</option>
                                                <option value="XDR" @if($settlementaccount->currency == 'EUR') selected @endif>XDR</option>
                                                <option value="XAG" @if($settlementaccount->currency == 'EUR') selected @endif>XAG</option>
                                                <option value="XAU" @if($settlementaccount->currency == 'EUR') selected @endif>XAU</option>
                                                <option value="XPD" @if($settlementaccount->currency == 'EUR') selected @endif>XPD</option>
                                                <option value="XPT" @if($settlementaccount->currency == 'EUR') selected @endif>XPT</option>
                                                <option value="BTC" @if($settlementaccount->currency == 'EUR') selected @endif>BTC</option>
                                                <option value="BTC/EUR" @if($settlementaccount->currency == 'EUR') selected @endif>BTC/EUR</option>
                                                <option value="BTC/USD" @if($settlementaccount->currency == 'EUR') selected @endif>BTC/USD</option>
                                                <option value="USDT" @if($settlementaccount->currency == 'EUR') selected @endif>USDT</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="remarks">Remarks</label>
                                            <input type="text" placeholder="Enter Remarks" class="form-control" name="remarks" value="{{$settlementaccount->remarks}}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="intermediary_bank_name">Intermediary Bank Name (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Name" class="form-control" name="intermediary_bank_name" value="{{$settlementaccount->intermediary_bank_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="intermediary_bank_address">Intermediary Bank Address (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank Address" class="form-control" name="intermediary_bank_address" value="{{$settlementaccount->intermediary_bank_address}}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="intermediary_bank_swift">Intermediary Bank SWIFT (Optional)</label>
                                            <input type="text" placeholder="Enter Intermediary Bank SWIFT" class="form-control" name="intermediary_bank_swift" value="{{$settlementaccount->intermediary_bank_swift}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="intermediary_bank_details_remarks">Intermediary Bank Details Remarks (Optional)</label>
                                            <input type="text" placeholder="Enter Remarks" class="form-control" name="intermediary_bank_details_remarks" value="{{$settlementaccount->intermediary_bank_details_remarks}}" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="upload_bank_statement">Upload Bank Statement/Bank Account Confirmation Letter *</label>
                                        <input type="file" class="form-control" name="upload_bank_statement" value="{{$settlementaccount->upload_bank_statement}}" >
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
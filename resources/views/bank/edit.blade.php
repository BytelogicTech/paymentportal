@include('header')

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Bank Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('bankaccountupdate')}}" method="post">

                @csrf

                <input type="hidden" name="bankaccountid" id="id_edit" />
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Currency*</label>
                                <input type="text" readonly name="currency" id="currency_edit" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="account_number">Account Number/IBAN:</label>
                                <input id="account_number_edit" type="text" placeholder="Enter Account Number" class="form-control" name="account_number" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname">Nickname:</label>
                                <input id="nickname_edit" type="text" placeholder="Enter Account Nickname" class="form-control" name="nick_name" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bank_charges">Bank Charges:</label>
                                <input id="bank_charges_edit" type="number" placeholder="Enter Bank Charges" required class="form-control" name="bank_charges" required />
                            </div>
                        </div>

                    </div>




                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <h1>Edit Bank - {{$bank->beneficiary_name}}</h1>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('bank/index')}}">All Banks</a></li>
                        <li class="breadcrumb-item active">Edit Bank - {{$bank->beneficiary_name}}</li>
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
                            <h3 class="card-title">Edit Bank</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->





                        <form action="{{url('bank/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="id" value="{{$bank->id}}" />

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Baneficiary Name*</label>
                                            <input type="text" placeholder="Enter Baneficiary Name" class="form-control" name="beneficiary_name" required value="{{$bank->beneficiary_name}}" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Beneficiary Address*</label>
                                            <input type="text" placeholder="Enter Baneficiary Address" class="form-control" name="beneficiary_address" required value="{{$bank->beneficiary_address}}" />
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Bank Nickname:</label>
                                        <input type="text" placeholder="Enter Bank Nickname" class="form-control" name="bank_nickname" value="{{$bank->bank_nickname}}" />
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Name*</label>
                                            <input type="text" placeholder="Enter Bank Name" class="form-control" name="bank_name" required value="{{$bank->bank_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Bank Address*</label>
                                            <input type="text" placeholder="Enter Bank Address Name" class="form-control" name="bank_address" required value="{{$bank->bank_address}}" />
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zipcode">Zip Code:</label>
                                            <input type="text" placeholder="Enter Zip Code" class="form-control" name="zip_code" value="{{$bank->zip_code}}" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country*</label>

                                            <select class="form-control select2" style="width: 100%;" name="country" required value="{{$bank->country}}" id="country">
                                                <option value="" selected disabled>Please Select One</option>
                                                @foreach(config('constants.countryar') as $country)
                                                <option value="{{$country}}" @if($country==$bank->country) selected @endif>{{$country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered table-hover">

                                    <thead>
                                        <tr class="alert-primary">
                                            <th>Currency</th>
                                            <th>Account No./IBAN</th>
                                            <th>Nickname</th>
                                            <th>Bank Charges</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bankaccounts as $bankaccount)
                                        <tr>
                                            <td>{{$bankaccount->currency}}</td>
                                            <td>{{$bankaccount->account_number}}</td>
                                            <td>{{$bankaccount->nick_name}}</td>
                                            <td>{{$bankaccount->bank_charges}}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-warning btn-sm" data-bankaccountid="{{$bankaccount->id}}" data-currency="{{$bankaccount->currency}}" data-account_number="{{$bankaccount->account_number}}" data-nickname="{{$bankaccount->nick_name}}" data-bank_charges="{{$bankaccount->bank_charges}}">
                                                    <i class="far fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('bankaccountdestroy/'.$bankaccount->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div id="bank_accounts" style="margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Currency</label>
                                                <select class="form-control" style="width: 100%;" name="currency[]">
                                                    <option value="" selected disabled>Please Select One</option>
                                                    @foreach(config('constants.currency_list') as $key=> $currency)
                                                    <option value="{{$key}}">{{$key}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="account_number">Account Number/IBAN:</label>
                                                <input type="text" placeholder="Enter Account Number" class="form-control" name="account_number[]" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nickname">Nickname:</label>
                                                <input type="text" placeholder="Enter Account Nickname" class="form-control" name="nickname[]" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nickname">Bank Charges:</label>
                                                <input type="number" placeholder="Enter Bank Charges" class="form-control" name="bank_charges[]" />
                                            </div>
                                        </div>

                                    </div>
                                </div>




                                <div class="text-center">
                                    <a href="javascript:void(0);" name="add" id="add_accounts" class="btn btn-success"><i class="fa fa-plus"></i> Add More</a>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="swift_code">Swift Code*</label>
                                        <input type="text" placeholder="Enter Swift Code" class="form-control" name="swift_code" required value="{{$bank->swift_code}}" />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Remarks</label>
                                            <textarea placeholder="Invoice Remarks" class="form-control" name="remarks">{{$bank->remarks}}</textarea>

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name">Company Name*</label>
                                            <input type="text" placeholder="Enter Company Name" class="form-control" name="company_name" required value="{{$bank->company_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_email">Company Email:</label>
                                            <input type="email" placeholder="Enter Company Email" class="form-control" name="company_email" value="{{$bank->company_email}}" />
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prefix">Prefix(for invoice number)*</label>
                                            <input type="text" placeholder="Enter Prefix for invoice number" class="form-control" name="prefix" required value="{{$bank->prefix}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="declaration_content">Declaration Contenet:</label>
                                            <input type="text" placeholder="Add Declaration Content" class="form-control" name="declaration_content" value="{{$bank->declaration_content}}" />
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instructions_title">Instructions Title(for invoice):</label>
                                            <input type="text" placeholder="Enter Title for instructions" class="form-control" name="instructions_title" value="{{$bank->instructions_title}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instructions_content">Instructions Content:</label>
                                            <input type="text" placeholder="Add Instructions Content" class="form-control" name="instructions_content" value="{{$bank->instructions_content}}" />
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <label for="logo">Upload Logo:</label>
                                            <input type="file" placeholder="Choose File" class="form-control" name="logo" value="{{$bank->logo}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <img src="{{asset('public/images/'.$bank->logo)}}" style="width:200px;" />
                                        </div>
                                    </div>
                                </div>


                                <center>
                                    <p>Status</p>
                                    <input type="checkbox" @if($bank->status==1) checked @endif data-toggle="switch" data-handle-width="100" data-on-text="Activated" data-off-text="Deactivated" name="status">

                                </center>



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




<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {
        var i = 1;
        $('#add_accounts').click(function() {
            i++;
            $('#bank_accounts').append('  <div class="row" id="row' + i + '">' +
                '<div class="col-md-2">' +
                '<div class="form-group">' +
                '<label>Currency</label>' +
                '<select class="form-control select2" style="width: 100%;" name="currency[]" required>' +
                '<option value="" selected disabled>Please Select One</option>' +
                '<option value="USD">USD</option>' +
                '<option value="EUR">EUR</option>' +
                '<option value="GBP">GBP</option>' +
                '<option value="DZD">DZD</option>' +
                '<option value = "AED" >AED</option>' +
                '<option value = "ARP" >ARP</option>' +
                '<option value = "AUD" >AUD</option>' +
                '<option value = "ATS" > ATS </option>' +
                '<option value = "BSD" > BSD </option>' +
                '<option value = "BBD" > BBD </option>' +
                '<option value = "BEF" > BEF </option>' +
                '<option value = "BMD" > BMD </option>' +
                '<option value = "BRR" > BRR </option>' +
                '<option value = "BGN" > BGN </option>' +
                '<option value = "CAD" > CAD </option>' +
                '<option value = "CLP" > CLP </option> ' +
                '<option value = "CNY" > CNY </option> ' +
                '<option value = "CYP" > CYP </option> ' +
                '<option value = "CSK" > CSK </option> ' +
                '<option value = "DKK" > DKK </option> ' +
                '<option value = "NLG" > NLG </option> ' +
                '<option value = "XCD" > XCD </option> ' +
                '<option value = "EGP" > EGP </option> ' +
                '<option value = "FJD" > FJD </option> ' +
                '<option value = "FIM" > FIM </option> ' +
                '<option value = "FRF" > FRF </option> ' +
                '<option value = "DEM" > DEM </option> ' +
                '<option value = "XAU" > XAU </option> ' +
                '<option value = "GRD" > GRD </option> ' +
                '<option value = "HKD" > HKD </option> ' +
                '<option value = "HUF" > HUF </option> ' +
                '<option value = "ISK" > ISK </option> ' +
                '<option value = "INR" > INR </option> ' +
                '<option value = "IDR" > IDR </option> ' +
                '<option value = "IEP" > IEP </option> ' +
                '<option value = "ILS" > ILS </option> ' +
                '<option value = "ITL" > ITL </option> ' +
                '<option value = "JMD" > JMD </option> ' +
                '<option value = "JPY" > JPY </option> ' +
                '<option value = "JOD" > JOD </option> ' +
                '<option value = "KRW" > KRW </option> ' +
                '<option value = "LBP" > LBP </option> ' +
                '<option value = "LUF" > LUF </option> ' +
                '<option value = "MYR" > MYR </option> ' +
                '<option value = "MXP" > MXP </option> ' +
                '<option value = "NLG" > NLG </option> ' +
                '<option value = "NZD" > NZD </option> ' +
                '<option value = "NOK" > NOK </option> ' +
                '<option value = "PKR" > PKR </option>' +
                '<option value = "XPD" > XPD </option> ' +
                '<option value = "PHP" > PHP </option> ' +
                '<option value = "XPT" > XPT </option> ' +
                '<option value = "PLZ" > PLZ </option> ' +
                '<option value = "PTE" > PTE </option> ' +
                '<option value = "ROL" > ROL </option> ' +
                '<option value = "RUR" > RUR </option> ' +
                '<option value = "SAR" > SAR </option> ' +
                '<option value = "XAG" > XAG </option> ' +
                '<option value = "SGD" > SGD </option> ' +
                '<option value = "SKK" > SKK </option> ' +
                '<option value = "ZAR" > ZAR </option> ' +
                '<option value = "KRW" > KRW </option>' +
                '<option value = "ESP" > ESP </option> ' +
                '<option value = "XDR" > XDR </option> ' +
                '<option value = "SDD" > SDD </option> ' +
                '<option value = "SEK" > SEK </option> ' +
                '<option value = "CHF" > CHF </option> ' +
                '<option value = "TWD" > TWD </option> ' +
                '<option value = "THB" > THB </option> ' +
                '<option value = "TTD" > TTD </option> ' +
                '<option value = "TRL" > TRL </option> ' +
                '<option value = "VEB" > VEB </option> ' +
                '<option value = "ZMK" > ZMK </option> ' +
                '<option value = "EUR" > EUR </option> ' +
                '<option value = "XCD" > XCD </option> ' +
                '<option value = "XDR" > XDR </option> ' +
                '<option value = "XAG" > XAG </option>' +
                '<option value = "XAU" > XAU </option> ' +
                '<option value = "XPD" > XPD </option> ' +
                '<option value = "XPT" > XPT </option> ' +
                '<option value = "BTC" > BTC </option> ' +
                '<option value = "BTC/EUR" > BTC / EUR </option> ' +
                '<option value = "BTC/USD" > BTC / USD </option> ' +
                '<option value = "USDT" > USDT </option>' +
                '</select>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label for="account_number">Account Number/IBAN:</label>' +
                '<input type="text" placeholder="Enter Account Number" class="form-control" name="account_number[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label for="nickname">Nickname:</label>' +
                '<input type="text" placeholder="Enter Account Nickname" class="form-control" name="nickname[]" required/>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label for="nickname">Bank Charges:</label>' +
                '<input type="number" placeholder="Enter Account Nickname" class="form-control" name="bank_charges[]" required/>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-1">' +
                '<label> Remove </label>' +
                '<a href="javascript:void(0);" name="remove" id="' + i + '" class="btn btn-danger btn-remove form-control remove_btn"><i class="fa fa-minus"></i></a>' +
                '</div>' +
                '</div> ');

            $('.btn-remove').click(function() {
                var btnid = $(this).attr('id');
                $('#row' + btnid).remove();
            });

        });

    });
</script>
<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>

<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {



        $('#modal-default').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var bankaccountid = button.data('bankaccountid');
            var currency = button.data('currency');
            var account_number = button.data('account_number');
            var nickname = button.data('nickname');
            var bank_charges = button.data('bank_charges');



            var modal = $(this)
            modal.find('#currency_edit').val(currency);
            modal.find('#account_number_edit').val(account_number);
            modal.find('#nickname_edit').val(nickname);
            modal.find('#bank_charges_edit').val(bank_charges);
            modal.find('#id_edit').val(bankaccountid);
        });


    });
</script>

<script>
    $(function() {
        $('.select2').select2()
    });
</script>
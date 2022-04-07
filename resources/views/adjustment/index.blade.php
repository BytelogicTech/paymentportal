@include('header')



<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Adjustment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('adjustmentupdate')}}" method="post">

                @csrf

                <input type="hidden" name="adjustmentid" id="id_edit" />
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="remarks">Remarks:</label>
                                <input id="remarks_edit" type="text" placeholder="Edit Remarks" class="form-control" name="remarks" />
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
    </div>
</div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @include('flash')
                    <h1>Adjustments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                        <li class="breadcrumb-item active">View All Adjustments
                        </li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h5> Adjustments List </h5>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <form action="{{url('adjustment/search')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Merchant Name:</label>
                                            <select class="select2 form-control" name="merchant_fk_id" id="merchant_fk_id">
                                                <option value="" selected>Select Merchant</option>
                                                @foreach($merchants as $merchant)
                                                <option value="{{$merchant->id}}">{{$merchant->merchant_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="description">Type</label>
                                            <select class="form-control" name="type" id="type">
                                                <option value="" selected>Please Select One</option>
                                                <option value="Other Adjustment">Other Adjustment</option>
                                                <option value="RR Adjustment">RR Adjustment</option>
                                                <option value="Currency Conversion">Currency Conversion</option>
                                                <option value="Tier Commission">Tier Commission</option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Added Between:</label>
                                            <div class="input-daterange input-group">
                                                <input type="date" class="form-control m-input bootdatepicker" name="date_added_from" id="date_added_from" placeholder="From" data-col-index="11">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="la la-ellipsis-h">...</i></span>
                                                </div>
                                                <input type="date" class="form-control m-input bootdatepicker" name="date_added_to" id="date_added_from" placeholder="To" data-col-index="11">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label>Currency</label>
                                        <select class="form-control select2" style="width: 100%;" name="currency" id="currency">
                                            <option value="" selected>Please Select One</option>
                                            @foreach(config('constants.currency_list') as $key=> $currency)
                                            <option value="{{$key}}">{{$key}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                        </div>

                        <div class="card-header">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
                        </div>

                        </form>

                        <hr>

                        <table id="example1" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Merchnat Name</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                    <th>Created By</th>
                                    <th>Created On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            @php $count=0; @endphp
                            @foreach($adjustments as $adjustment)

                            @php $count++; @endphp
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{@$merchantpluck[$adjustment->merchant_fk_id]}}</td>
                                <td>{{$adjustment->type}}</td>
                                <td>{{$adjustment->details}}</td>
                                <td>{{@$userpluck[$adjustment->created_by]}}</td>
                                <td>{{$adjustment->created_at}}</td>

                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-warning btn-sm" data-adjustmentid="{{$adjustment->id}}" data-remarks="{{$adjustment->remarks}}">
                                        <i class="far fa-edit" aria-hidden="true"></i>
                                    </a>
                                    @if(Auth::user()->role=="Admin")

                                    <a href="{{url('adjustment/delete/'.$adjustment->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    @endif
                                </td>

                            </tr>
                            @endforeach


                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@include('footer')
<script>
    $('[data-toggle="switch"]').bootstrapSwitch();
</script>


<script>
    $(function() {
        $('.select2').select2()
    });
</script>



<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {



        $('#modal-default').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var adjustmentid = button.data('adjustmentid');
            var remarks = button.data('remarks');


            var modal = $(this)
            modal.find('#remarks_edit').val(remarks);
            modal.find('#id_edit').val(adjustmentid);
        });


    });
</script>
<script>
    $('#merchant_fk_id').val('{{$merchant_fk_id}}');
</script>

<script>
    $('#type').val('{{$type}}');
</script>

<script>
    $('#date_added_from').val('{{$date_added_from}}');
</script>

<script>
    $('#date_added_to').val('{{$date_added_to}}');
</script>

<script>
    $('#currency').val('{{$currency}}');
</script>
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
            <form action="{{url('')}}" method="post">

                @csrf

                <input type="hidden" name="mailboxid" id="id_edit" />
                <div class="modal-body">

                 

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="remarks">Subject:</label>
                                <input id="subject_edit" type="text" class="form-control" name="subject" readonly/>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="remarks">Message:</label>
                                <textarea id="message_edit" name="message" class="form-control" rows="4" cols="50" readonly></textarea>
                                
                            </div>
                        </div>

             
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="{{url('mailbox/create')}}" class="btn btn-primary btn-sm"> Reply</a>
                    
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
                    <h1>Inbox</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
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
                            <a href="{{url('mailbox/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Send Message To Admin </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="{{url('mailbox/search')}}" method="post">
                                @csrf
                                <div class="row">

                                    <hr>

                            </form>
                        </div>


                        <hr>


                        <table id="example1" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            @php $count=0; @endphp
                            @foreach($mailboxes as $mailbox)

                            @php $count++; @endphp

                            <tr>
                                <td>{{@$userpluck[$mailbox->from_id]}}</td>
                                <td>{{@$userpluck[$mailbox->to_id]}}</td>
                                <td>{{$mailbox->subject}}</td>
                                <td>{{$mailbox->created_at}}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-warning btn-sm" data-mailboxid="{{$mailbox->id}}" data-subject="{{$mailbox->subject}}" data-message="{{$mailbox->message}}">
                                        <i class="far fa-eye" aria-hidden="true"></i>
                                    </a>
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

<script type="text/javascript">
    // wordofday Edit
    $(document).ready(function() {



        $('#modal-default').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var mailboxid = button.data('mailboxid');
            var subject = button.data('subject');
            var message = button.data('message');


            var modal = $(this)
            modal.find('#subject_edit').val(subject);
            modal.find('#message_edit').val(message);
            modal.find('#id_edit').val(mailboxid);
        });


    });
</script>
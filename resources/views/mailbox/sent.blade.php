@include('header')






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @include('flash')
                    <h1>Sent Emails</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('mailbox/index')}}">All Inboxes</a></li>
                        <li class="breadcrumb-item active">Sent</li>
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
                                <td></td>
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
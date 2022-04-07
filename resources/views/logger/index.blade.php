@include('header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @include('flash')
                    <h1>Logger</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">View All Loggers</li>
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
                            <h5>Logger</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="col-md-6">

                            </div>


                            <table id="example1" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Item Id</th>
                                        <th>Module</th>
                                        <th>Action</th>
                                        <th>Action By</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                
                                @php $count=0; @endphp
                                @foreach($logger as $logg)

                                @php $count++; @endphp
                                <tr>
                                    <td>{{$logg->id}}</td>
                                    <td>{{$logg->itemid}}</td>
                                    <td>{{$logg->module}}</td>
                                    <td>{{$logg->action}}</td>
                                    <td>{{@$userpluck[$logg->created_by]}}</td>
                                    <td>{{$logg->created_at}}</td>
                                    
                                   
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
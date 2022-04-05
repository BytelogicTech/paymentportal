@include('header')




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @include('flash')
            <h1>Settlement Accounts</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">View All settlements</li>
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
                <a href="{{url('settlementaccount/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i> Add new settlement </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    @if(Auth::user()->role=="Admin")

                    <th>Merchant Name</th>
                    @endif
                    <th>Beneficiary Name</th>
                    <th>Beneficiary Nickname</th>
                    <th>Bank Name</th>
                    <th>Currency</th>
                    <th>Account Number</th>
                    <th>Actions</th>                  
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($settlementaccounts as $settlementaccount)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        @if(Auth::user()->role=="Admin")

        <td>{{@$merchantpluck[$settlementaccount->merchant_fk_id]}}</td>
        @endif
        <td>{{$settlementaccount->beneficiary_name}}</td>
        <td>{{$settlementaccount->beneficiary_nickname}}</td>    
        <td>{{$settlementaccount->bank_name}}</td>      
        <td>{{$settlementaccount->currency}}</td>      
        <td>{{$settlementaccount->account_number}}</td>      
        <td>
            <a href="{{url('settlementaccount/edit/'.$settlementaccount->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit" aria-hidden="true"></i></a>
            @if(Auth::user()->role=="Admin")
            <a href="{{url('settlementaccount/delete/'.$settlementaccount->id)}}" onclick="return confirm('Are you sure, you want to delete it?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

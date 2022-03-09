@include('header')

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<a href="{{url('create')}}">Add New Category</a>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2"  class="table table-bordered table-hover">

                 <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>


    @php $count=0; @endphp
    @foreach($categories as $category)

    @php $count++; @endphp
    <tr>
        <td>{{$count}}</td>
        <td>{{$category->name}}</td>
        <td><img src="{{asset('/images/'.$category->photo)}}" style="width:50px;"/></td>
        <td>{{$category->description}}</td>
        <td>
            <a href="{{url('edit/'.$category->id)}}">Edit</a>
            <a href="{{url('delete/'.$category->id)}}" onclick="return confirm('Are you sure, you want to delete it?')">Delete</a>
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
  <script src="{{asset('/public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('/public/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('/public/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/public/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
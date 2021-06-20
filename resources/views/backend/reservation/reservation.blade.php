@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Reservation Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Reservation</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Reservation list

              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Person</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allreservation as $key=>$reservation)
                  <tr>
                    <td>{{$key+1}}</td>
                      <td>{{$reservation->name}}</td>
                      <td>{{$reservation->email}}</td>
                      <td>{{$reservation->phone}}</td>
                      <td>{{$reservation->date_and_time}}</td>
                      <td>{{$reservation->person}}</td>
                      <td>
                        
                        @if($reservation->status==true)
                        <span class="label label-info"> Confirmed</span>
                        @else
                        <span class="label label-danger">Not Confirmed</span>
                        @endif
                      </td>
                      <td>
                        <a title="edit" id="edit" class="btn btn-sm btn-primary" href="{{route('reservations.edit',$reservation->id)}}"> <i class="fa fa-edit"> </i> </a>
                        <a title="delete" id="delete" class="btn btn-sm btn-danger" href="{{route('reservation.delete',$reservation->id)}}"> <i class="fa fa-trash"> </i></a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
$(function(){
  $(document).on('click','#edit',function(e){
  e.preventDefault();
var link = $(this).attr("href");
        Swal.fire({
          title: 'Did you verified the Customer ?',
          text: " over Phone!",
          icon: 'info',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Confirmed Customer!'
        }).then((result) => {
          if (result.isConfirmed) {
          window.location.href = link;
            Swal.fire(
              'Confirmed!',
              'Customer Confirmed',
              'success'
            )
          }
        })

  });
});

</script>

<script type="text/javascript">
$(function(){
  $(document).on('click','#delete',function(e){
  e.preventDefault();
var link = $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "delete data!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
          window.location.href = link;
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })

  });
});

</script>

@endsection

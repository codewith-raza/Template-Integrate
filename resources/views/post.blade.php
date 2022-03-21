@extends('layouts.app')


@section('mainsection')
<!--main contents start-->
<main class="main-content">
        <!--page title start-->
        <div class="page-title">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-8">
                        <h4 class="mb-0"> Post
                        </h4>
                        <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                            <li class="breadcrumb-item active">Posts</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <div class="btn-group float-right ml-2">
                            <button class="btn btn-primary btn-sm  mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Settings
                            </button>
                            
                        </div>

                        <div class="btn-group float-right">
                            <button class="btn btn-danger btn-sm  mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quick Action
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--page title end-->
    @section('content')
    <div class="container-fluid">
      <div class="row mt-5">
          <div class="col-md-10 offset-md-1">
              <table id="table" class="table table-bordered">
                <thead>
                  <tr>
                    <th width="30px">#</th>
                    <th>Title</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <tbody id="tablecontents">
                  @foreach($posts as $post)
                    <tr class="row1" data-id="{{ $post->id }}">
                      <td class="pl-3"><i class="fa fa-sort"></i></td>
                      <td>{{ $post->title }}</td>
                      <td>{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>
                    </tr>
                  @endforeach
                </tbody>                  
              </table>
        </div>
      </div>
    </div>
  </main>
<!--main contents end-->
@endsection
@endsection


@push('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $("#table").DataTable();

        $( "#tablecontents" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
        });

        function sendOrderToServer() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('tr.row1').each(function(index,element) {
            order.push({
              id: $(this).attr('data-id'),
              position: index+1
            });
          });

          $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "{{ url('post-sortable') }}",
                data: {
              order: order,
              _token: token
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            }
          });
        }
      });
    </script>

@endpush
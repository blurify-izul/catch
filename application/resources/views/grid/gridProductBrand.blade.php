@extends('template.header')


@section('page_heading')
<!--Content Title -->
<div id="content-header">
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Data Master</a>
        <a href="#" class="current">Product Brand</a>
    </div>
</div>
<!-- End Content Title -->
@endsection


@section('content')
<div class="container-fluid">
  <div class="row-fluid">
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-desktop"></i> </span>
                <h5>Product Brand Data</h5>                
            </div>

            <div class="widget-content nopadding"> 
                <table class="table table-bordered data-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Brand Id</th>
                            <th>Brand Name</th>
                        </tr>
                    </thead>               
                </table>
            </div>
        </div>
  </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="{{ asset('public') }}/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{ asset('public') }}/js/datatables.checkboxes.js"></script>

<script>

    var table = $('.data-table').DataTable( {
        ajax: {
            type: "POST",
            url: "{{url('/')}}/productbrand/ajaxdata",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        },
        
        columns: [               
            { data: "id" },
            { data: "name" }
        ],
        
        "order": [[ 0, "asc" ]],
        "bSortCellsTop": true,
        "pageLength" : 50,
        "searching": true,
        "aLengthMenu": [[50, 100, 300, -1], [50, 100, 300, "All"]],
        "bJQueryUI": true
    });

   
    if($('.dataTables_empty').length){
        $('.dataTables_empty').html("No data");
    }


    $(".excelBtn").on("click", function() {
        table.button( '.buttons-csv' ).trigger();
    });

</script> 
@endsection
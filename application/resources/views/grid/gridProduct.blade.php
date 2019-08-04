@extends('template.header')


@section('page_heading')
<!--Content Title -->
<div id="content-header">
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Data Master</a>
        <a href="#" class="current">Product</a>
    </div>
</div>
<!-- End Content Title -->
@endsection


@section('content')
<div class="container-fluid">
  <div class="row-fluid">
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-desktop"></i> </span>
                <h5>Product Data</h5>                
            </div>

            <div class="widget-content nopadding"> 
                <table class="table table-bordered data-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Product ID</th>
                            <th>Product Title</th>                            
                            <th>Product Sub Title</th>                          
                            <th>Category</th>                            
                            <th>Thumbnail</th>                            
                            <th>Created At</th>
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
            url: "{{url('/')}}/product/ajaxdata",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        },
        columnDefs: [ 
        { 
            "targets": 5, 
            "data": 'creator', 
            "render": function (dt, type, row ) { 
                return "<img src='"+row.thumbnail+"' style='width:80px; height:auto'><br><label class='label label-info' onclick=\"window.open('"+row.url+"')\">Click for Detail</label>"; 
            },
            className: 'text-right'
        }],
        columns: [               
            { data: "brand.name" },
            { data: "id" },
            { data: "title" },
            { data: "subtitle" },
            { data: "category" },
            { data: "thumbnail" },
            { data: "created_at" }
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
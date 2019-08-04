@extends('template.header')


@section('page_heading')
<!--Content Title -->
<div id="content-header">
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Data Master</a>
        <a href="#" class="current">Shipping Address</a>
    </div>
</div>
<!-- End Content Title -->
@endsection


@section('content')
<div class="container-fluid">
  <div class="row-fluid">
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-desktop"></i> </span>
                <h5>Shipping Address Data</h5>                
            </div>

            <div class="widget-content nopadding"> 
                <table class="table table-bordered data-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Street</th>                            
                            <th>Suburb</th>                            
                            <th>State</th>                          
                            <th>Post Code</th>
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
            url: "{{url('/')}}/shippingaddress/ajaxdata",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        },
        
        columnDefs: [ 
        { 
            "targets": 1, 
            "data": 'creator', 
            "render": function (dt, type, row ) { 
                return row.customer.first_name+' '+row.customer.last_name; 
            }
        },
        { 
            "targets": -1, 
            "data": 'creator', 
            "render": function (dt, type, row ) { 
                return "<button class=\"btn-success btn-mini\"  onclick=\"popUp('{{url('/')}}/showmap/"+row.customer_id+"', '90%', '1200px')\"><i class=\"icon icon-search icon-white\"></i> <span>"+row.postcode+" (show map)</span></button>"; 
                 
            }
        }],
        columns: [               
            { data: "customer_id" },
            { data: "customer.firstname" },
            { data: "street" },
            { data: "suburb" },
            { data: "state" },
            { data: "postcode" }
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
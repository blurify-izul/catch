@extends('template.header')


@section('page_heading')
<!--Content Title -->
<div id="content-header">
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Data Master</a>
        <a href="#" class="current">Customer</a>
    </div>
</div>
<!-- End Content Title -->
@endsection


@section('content')
<div class="container-fluid">
  <div class="row-fluid">
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-desktop"></i> </span>
                <h5>Customer Data</h5>                
            </div>

            <div class="widget-content nopadding"> 
                <table class="table table-bordered data-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>                            
                            <th>Email</th>                          
                            <th>Phone</th>
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
            url: "{{url('/')}}/customer/ajaxdata",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        },
        columnDefs: [ 
        { 
            "targets": 3, 
            "data": 'creator', 
            "render": function (dt, type, row ) { 
                return "<a href=\"mailto:"+row.email+"\">"+row.email+"</span></a>"; 
            }
        },
        {
            "targets": 4, 
            "data": 'creator', 
            "render": function (dt, type, row ) { 
                return "<button class=\"btn-success btn-mini\"  onclick=\"window.open('tel:"+row.phone+"')\"><i class=\"icon icon-phone icon-white\"></i> <span>"+row.phone+"</span></button>"; 
            }
        }],

        columns: [               
            { data: "id" },
            { data: "first_name" },
            { data: "last_name" },
            { data: "email" },
            { data: "phone" }
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
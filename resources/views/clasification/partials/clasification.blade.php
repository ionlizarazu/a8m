
<div class="wrapper">
    <!-- details-image -->
    <!-- content -->
    <div class="details-content">
        <div class="page-header">
        <h1>Sailkapena</h1>
        </div>
        <div class="about-content">
        <div role="tabpanel">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <?php $i=0; ?>
            @foreach($years as $year)
                <li><a id="tab{{$i}}" role="tab" data-toggle="tab">{{ $year["urtea"] }}</a></li>
            <?php $i++; ?>    
            @endforeach  

          </ul>
        </div>
        <table class="table table-hover table-bordered table-striped"  cellspacing="0" width="100%" >
            <thead>
            <tr>
                <th>Sailkapena</th>
                <th>Denbora</th>
                <th>Dortsala</th>
                <th>Izena</th>
                <th>Abizenak</th>
                <th>Herria</th>
                <th>Sexua</th>
                <th>Kategoria</th>
            </tr>
            </thead>
        </table>
    </div>    
</div>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 
<script>
getYearJSON = function(year) {

      $('table.table').DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        pageLength: 50,
        scrollX: true,
        ajax: {
            url: 'sailkapena/getData',
            type: 'GET',
            data: function (d) {
                d.year = year
            }
        },
        dom: 'Bfrtip',
        buttons: [
            {'extend':'copy','text':'Kopiatu','className':'btn btn-primary btn-sg'},
            {'extend':'csv','text':'csv','className':'btn btn-primary btn-sg'},
            {'extend':'excel','text':'excel','className':'btn btn-primary btn-sg'},
            {'extend':'pdf','text':'pdf','className':'btn btn-primary btn-sg'},
            {'extend':'print','text':'Inprimatu','className':'btn btn-primary btn-sg'}
        ],
        language: {
            search: "Bilatu",
            processing: "Prestatzen...",
            paginate: {
              previous:"Aurrekoa",
              next:"Hurrengoa"
            },
            info: "Erakutsiak _START_, _END_ etatik. Denera _TOTAL_ ",
            lengthMenu: "Erakutsi _MENU_erregistroak orrika",
            zeroRecords: "Ez da ezer aurkitu",
            info: "_PAGE_. orria _PAGES_etik",
            infoEmpty: "Ez dago erregistrorik eskuragarri,",
            infoFiltered: "_MAX_ erregistrotatik filtratuta"

        },
        columnDefs: [ {
            targets: [ 3 ],
            orderData: [ 3, 0 ]
        },{
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        }, {
            targets: [ 5 ],
            orderData: [ 5, 0 ]
        }, {
            targets: [ 6 ],
            orderData: [ 6, 0 ]
        },{
            targets: [ 7 ],
            orderData: [ 7, 0 ]
        }
         ],
        columns: [
                {data: 'sailkapena', name: 'sailkapena'},
                {data: 'denbora', name: 'denbora'},
                {data: 'dortsala', name: 'dortsala'},
                {data: 'izena', name: 'izena'},
                {data: 'abizenak', name: 'abizenak'},
                {data: 'herria', name: 'herria'},
                {data: 'sexua', name: 'sexua'},
                {data: 'kategoria', name: 'kategoria'},
        ]
    });
}; 
$(document).ready(function() {
    //first time
    var year=$(".nav-tabs li:first").text();
    $(".nav-tabs li:first").addClass("active");
    getYearJSON(year);
    $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
        //not first time
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
        year=e.target.innerText;
        getYearJSON(year);
    } );
});
</script>
    </div>
    </div>                      
    @include('footer.partners') 
</div>
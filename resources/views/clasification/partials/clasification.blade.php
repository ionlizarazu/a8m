
<div class="wrapper">
    <!-- details-image -->
    <!-- content -->
    <div class="details-content">
        <div class="page-header">
        <h1>Sailkapena</h1>
        </div>
        <h3>2018ko Otsailaren 18an, Antzuolako 8 Miliak lasterketa</h3>
        <div class="about-content">
        <table  class="table table-hover table-bordered table-striped datatable">
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
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 
<script>
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 50,
        ajax: 'sailkapena/getData',
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        language: {
            search: "Bilatu",
            buttons: {
                copy: 'Kopiatu',
                print:'Inprimatu'
            },
            paginate: {
              previous:"Aurrekoa",
              next:"Hurrengoa"
            },
            info: "Erakutsiak _START_, _END_ etatik. Denera _TOTAL_ "

        },
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
});
</script>
    </div>
    </div>                      
    @include('footer.partners') 
</div>
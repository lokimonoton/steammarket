
<a href="sales/addcustomerlist"  class="btn btn-danger">Tambah</a></br>
&nbsp
<table id="table1" class="table">
    <thead>
        <tr>
        <th>action</th>
        <th>ID Customer</th>
        <th>Nama Customer</th>
        <th>Division</th>
        <th>City</th>
        <th>Active</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><button type="button" class="btn ">Update</button>
        <button type="button" class="btn ">Delete</button>
        </td>
        <td>B18290</td>
        <td>Tono</td>
        <td>Gudang Garam</td>
        <td>Malang</td>
        <td>active</td>
    </tr>        
    </tbody>

</table>

<script type="text/javascript" >
 $(function () {
        $("#table1").DataTable( {
        "order": [[ 1, "desc" ]],
        "aoColumns": [ { "bSortable": false },  null,  null,  null,  null,  null  ]
    } );
     
          
        });

       
    
</script>
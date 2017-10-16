
<a href="sales/addpurchaseorder"  class="btn btn-danger">Tambah</a></br>
&nbsp
<table id="table1" class="table">
    <thead>
        <tr>
        <th>action</th>
        <th>PO Date</th>
        <th>PO Number</th>
        <th>Vendor</th>
        <th>Total Amount</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><button type="button" class="btn ">Update</button>
        <button type="button" class="btn ">Delete</button>
        </td>
        <td>B18290</td>
        <td>16627</td>
        <td>Gudang Garam</td>
        <td>12</td>
        <td>Input</td>
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
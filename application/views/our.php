<table class="table table-bordered">
	<thead>
		<tr>
			<th>Branch Name</th>
			<th>Branch Address</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$sql = $this->db->query("SELECT branch_name, branch_address, branch_phone
							   FROM ms_branch
							   WHERE active = '1'
							   ORDER BY branch_id");
		foreach ($sql->result() as $row) {
		 ?>
		<tr>
			<td><?php echo $row->branch_name; ?></td>
			<td><?php echo $row->branch_address; ?></td>
			<td><?php echo $row->branch_phone; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
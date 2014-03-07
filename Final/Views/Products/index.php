
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
    <style>
    	.main{
    		margin-top: 20px;
    	}
    </style>
    
    <p class="main">This is the Products Section my eCommerce project.</p>
	<h2>
		List of Products
	</h2>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Picture_Url</th>
				
			</tr>
		</thead>
		<tbody>
			
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['Name']?></td>
					<td><?=$row['Price']?></td>
					<td><?=$row['Description']?></td>
					<td><?=$row['Picture_Url']?></td>
					
				</tr>
			<? endforeach; ?>
			
		</tbody>
	</table>
	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
		    $(function(){
		    	
		    ${".table").dataTable();
		    
		    })
		</script>
	<? } ?>
	


<style>
    .dataTables_filter input{
        width: 580px !important;
        height: 50px !important;
        margin-left: 8px !important;
        border-radius: 100px !important;
        border-width: 4px !important;
        border-color: black !important;
        font-size: 16px !important;
        margin-right: 0px;

    }
    .dataTables_wrapper .dataTables_filter input::-webkit-search-cancel-button {
        -webkit-appearance: button !important;
    }
    table.scrollTable {
        border: 1px solid #963;
    }
    thead.fixedHeader {
        display: block;
    }
    thead.fixedHeader tr {
        background: #c96;
    }
    thead.fixedHeader tr th {
        width: 500px;
        border-bottom: none;
    }
    tbody.scrollContent {
        display: block;
        height: 562px;
        overflow: auto;
    }
    tbody.scrollContent td {
        border-right: 1px solid black;
        height: 45px;
        width: 800px;
    }
	</style>
	<?php
	
	* view file
	
	<table id="product-list" class="table table-bordered scrollTable" cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead class="fixedHeader">
			<tr class="alternateRow">
				<th>Poduct</th>
				<th>Price</th>
			</tr>
			</thead>
			<tbody class="scrollContent">
				<tr class="normalRow">
					<td>Product One</td>
					<td> 20</td>
				</tr>
			</tbody>
	</table>		
	
								
	<script>							
		$(document).ready(function() {
        var oTable=  $('#product-list').DataTable({
            "paging": false,
            "oLanguage": { "sSearch": "" },
            'bInfo': false,
            "columnDefs": [
                { "orderable": false, "targets": 1 }
            ]

        })

    });	
	</script>
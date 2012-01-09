<div class="sample-container">

	{{ if items_exist == false }}
		<p>There are no items.</p>
	{{ else }}
		<div class="sample-data">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<th>{{ helper:lang line="sample:name" }}</th>
					<th>{{ helper:lang line="sample:slug" }}</th>
				</tr>
				<!-- Here we loop through the $items array -->
				{{ items }}
				<tr>
					<td>{{ name }}</td>
					<td>{{ slug }}</td>
				</tr>
				{{ /items }}
			</table>
		</div>
	
		{{ pagination:links }}
	
	{{ endif }}
	
</div>
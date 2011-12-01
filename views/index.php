<div class="sample-container">

	{if '{pyro:empty}'}
		<p>There are no items.</p>
	{else}
		<div class="sample-data">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<th>{pyro:helper:lang line="sample.name"}</th>
					<th>{pyro:helper:lang line="sample.slug"}</th>
				</tr>
				<!-- Here we loop through the $items array -->
				{pyro:items}
				<tr>
					<td>{name}</td>
					<td>{slug}</td>
				</tr>
				{/pyro:items}
			</table>
		</div>
	
		{pyro:template:partial name="pagination"}
	
	{/if}
	
</div>
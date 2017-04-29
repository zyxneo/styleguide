<?php require_once('top.php'); ?>
	<h1>Button</h1>

	<h3>Button tags</h3>
	<a class="btn btn-default" href="#" role="button">Link</a>
	<button class="btn btn-default" type="submit">Button</button>
	<input class="btn btn-default" type="button" value="Input"/>
	<input class="btn btn-default" type="submit" value="Submit"/>
	
	<h3>Options</h3>
	<!-- Standard button -->
	<button type="button" class="btn btn-default">Default</button>

	<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
	<button type="button" class="btn btn-primary">Primary</button>

	<!-- Indicates a successful or positive action -->
	<button type="button" class="btn btn-success">Success</button>

	<!-- Contextual button for informational alert messages -->
	<button type="button" class="btn btn-info">Info</button>

	<!-- Indicates caution should be taken with this action -->
	<button type="button" class="btn btn-warning">Warning</button>

	<!-- Indicates a dangerous or potentially negative action -->
	<button type="button" class="btn btn-danger">Danger</button>

	<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
	<button type="button" class="btn btn-link">Link</button>
	
	<h3>Sizes</h3>
	<p>
		<button type="button" class="btn btn-primary btn-lg">Large button</button>
		<button type="button" class="btn btn-default btn-lg">Large button</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary">Default button</button>
		<button type="button" class="btn btn-default">Default button</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-sm">Small button</button>
		<button type="button" class="btn btn-default btn-sm">Small button</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
		<button type="button" class="btn btn-default btn-xs">Extra small button</button>
	</p>

	<h3>All button states</h3>
	<table>
		<thead>
			<tr>
				<th>normal</th>
				<th>hover</th>
				<th>active</th>
				<th>disabled</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><button type="button" class="btn btn-default">Default</button></td>
				<td><button type="button" class="btn btn-default hover">Default</button></td>
				<td><button type="button" class="btn btn-default active">Default</button></td>
				<td><button type="button" class="btn btn-default" disabled="disabled">Default</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-primary">Primary</button></td>
				<td><button type="button" class="btn btn-primary hover">Primary</button></td>
				<td><button type="button" class="btn btn-primary active">Primary</button></td>
				<td><button type="button" class="btn btn-primary" disabled="disabled">Primary</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-success">Success</button></td>
				<td><button type="button" class="btn btn-success hover">Success</button></td>
				<td><button type="button" class="btn btn-success active">Success</button></td>
				<td><button type="button" class="btn btn-success" disabled="disabled">Success</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-info">Info</button></td>
				<td><button type="button" class="btn btn-info hover">Info</button></td>
				<td><button type="button" class="btn btn-info active">Info</button></td>
				<td><button type="button" class="btn btn-info" disabled="disabled">Info</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-warning">Warning</button></td>
				<td><button type="button" class="btn btn-warning hover">Warning</button></td>
				<td><button type="button" class="btn btn-warning active">Warning</button></td>
				<td><button type="button" class="btn btn-warning" disabled="disabled">Warning</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-danger">Danger</button></td>
				<td><button type="button" class="btn btn-danger hover">Danger</button></td>
				<td><button type="button" class="btn btn-danger active">Danger</button></td>
				<td><button type="button" class="btn btn-danger" disabled="disabled">Danger</button></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-link">Link</button></td>
				<td><button type="button" class="btn btn-link hover">Link</button></td>
				<td><button type="button" class="btn btn-link active">Link</button></td>
				<td><button type="button" class="btn btn-link" disabled="disabled">Link</button></td>
			</tr>
		</tbody>
	<table>
	
	<h3>All button states with anchor tag</h3>
	<table>
		<thead>
			<tr>
				<th>normal</th>
				<th>hover</th>
				<th>active</th>
				<th>disabled</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a class="btn btn-default" href="#" role="button">Default</a></td>
				<td><a class="btn btn-default hover" href="#" role="button">Default</a></td>
				<td><a class="btn btn-default active" href="#" role="button">Default</a></td>
				<td><a class="btn btn-default" href="#" role="button" disabled="disabled">Default</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-primary" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary hover" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary active" href="#" role="button">Primary</a></td>
				<td><a class="btn btn-primary" href="#" role="button" disabled="disabled">Primary</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-success" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success hover" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success active" href="#" role="button">Success</a></td>
				<td><a class="btn btn-success" href="#" role="button" disabled="disabled">Success</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-info" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info hover" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info active" href="#" role="button">Info</a></td>
				<td><a class="btn btn-info" href="#" role="button" disabled="disabled">Info</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-warning" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning hover" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning active" href="#" role="button">Warning</a></td>
				<td><a class="btn btn-warning" href="#" role="button" disabled="disabled">Warning</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-danger" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger hover" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger active" href="#" role="button">Danger</a></td>
				<td><a class="btn btn-danger" href="#" role="button" disabled="disabled">Danger</a></td>
			</tr>
			<tr>
				<td><a class="btn btn-link" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link hover" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link active" href="#" role="button">Link</a></td>
				<td><a class="btn btn-link" href="#" role="button" disabled="disabled">Link</a></td>
			</tr>
		</tbody>
	<table>
	
<?php require_once('bottom.php'); ?>
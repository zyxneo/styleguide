<?php require_once('top.php'); ?>
	<h1>Form</h1>
	
	<h3>Elements</h3>
	<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form -->
	<table>
		<thead>
			<tr>
				<th scope="col">Element</th>
				<th scope="col">Example</th>
				<th scope="col">Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>&lt;button&gt;</code></td>
				<td>
					<button name="button">Click me</button>
				</td>
				<td>The <code>button</code> element represents a clickable button.</td>
			</tr>
			<tr>
				<td><code>&lt;datalist&gt;</code></td>
				<td>
					<input list="browsers" />
					<datalist id="browsers">
						<option value="Chrome">
						<option value="Firefox">
						<option value="Internet Explorer">
						<option value="Opera">
						<option value="Safari">
					</datalist>
				</td>
				<td>The <code>datalist</code> element contains a set of <code>&lt;option&gt;</code> elements that represent the possible options for the value of other form elements.</td>
			</tr>
			<tr>
				<td><code>&lt;fieldset&gt;</code></td>
				<td rowspan="3">
					<form action="test.php" method="post">
						<fieldset>
							<input type="text" name="input" placeholder="placeholder">
						</fieldset>
					</form>
				</td>
				<td>The fieldset is used to group several form elements within a form.</td>
			</tr>
			<tr>
				<td><code>&lt;form&gt;</code></td>
				<td>The <code>form</code> element represents a section of document that contains interactive element that enables a user to submit information to a web server.</td>
			</tr>
			<tr>
				<td><code>&lt;input&gt;</code></td>
				<td>The&nbsp; <code>input</code> element is used to create interactive controls for forms.</td>
			</tr>
			<tr>
				<td><code>&lt;label&gt;</code></td>
				<td>
					<label>label</label>
				</td>
				<td>The <code>label</code> element represents a caption for an item in a user interface</td>
			</tr>
			<tr>
				<td><code>&lt;legend&gt;</code></td>
				<td>
					<legend>legend</legend>
				</td>
				<td>The <code>legend</code> element represents a caption for the content of its parent <code>&lt;fieldset&gt;</code>.</td>
			</tr>
			<tr>
				<td><code>&lt;meter&gt;</code></td>
				<td>
					<meter min="200" max="500" value="350">350 degrees</meter>
				</td>
				<td>The <code>meter</code> element&nbsp; represents either a scalar value within a known range or a fractional value.</td>
			</tr>
			<tr>
				<td><code>&lt;select&gt;</code></td>
				<td rowspan="3">
					<select>
						<optgroup label="Group 1">
							<option>Option 1.1</option>
						</optgroup> 
						<optgroup label="Group 2">
							<option>Option 2.1</option>
							<option>Option 2.2</option>
						</optgroup>
						<optgroup label="Group 3" disabled>
							<option>Option 3.1</option>
							<option>Option 3.2</option>
							<option>Option 3.3</option>
						</optgroup>
					</select>
				</td>
				<td>The <code>select</code> element represents a control that presents a menu of options.</td>
			</tr>
			<tr>
				<td><code>&lt;optgroup&gt;</code></td>
				<td>the <code>optgroup</code> element creates a group of options within a <code>&lt;select&gt;</code> element.</td>
			</tr>
			<tr>
				<td><code>&lt;option&gt;</code></td>
				<td>the HTML<em> </em><code>option<em> </em></code>element is used to create a control representing an item within a <code>&lt;select&gt;</code>, an <code>&lt;optgroup&gt;</code> or a <code>&lt;datalist&gt;</code> element.</td>
			</tr>
			<tr>
				<td><code>&lt;output&gt;</code></td>
				<td>
					<form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
						<input type="range" name="b" value="50" /> +
						<input type="number" name="a" value="10" /> =
						<output name="result"></output>
					</form>
				</td>
				<td>The <code>output</code> element represents the result of a calculation.</td>
			</tr>
			<tr>
				<td><code>&lt;progress&gt;</code></td>
				<td>
					<progress value="70" max="100">70 %</progress>
				</td>
				<td>The <code>progress</code> element is used to view the completion progress of a task.</td>
			</tr>
			<tr>
				<td><code>&lt;textarea&gt;</code></td>
				<td>
					<textarea name="textarea">Write something here</textarea>
				</td>
				<td>The <code>textarea</code> element represents a multi-line plain-text editing control.</td>
			</tr>
		</tbody>
	</table>
	
	<h3>Inputs</h3>
	<table>
		<tr>
			<th>type</th>
			<th>example</th>
		</tr>
		<tr>
			<td>button</td>
			<td><input type="button" value="input"/></td>
		</tr>
		<tr>
			<td>checkbox</td>
			<td><input type="checkbox" name="" value=""/></td>
		</tr>
		<tr>
			<td>file</td>
			<td><input type="file" name="" value=""/></td>
		</tr>
		<tr>
			<td>hidden</td>
			<td><input type="hidden" name="" value=""/></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" value="password"/></td>
		</tr>
		<tr>
			<td>radio</td>
			<td><input type="radio"/></td>
		</tr>
		<tr>
			<td>reset</td>
			<td><input type="reset" value="reset"/></td>
		</tr>
		<tr>
			<td>submit</td>
			<td><input type="submit" value="submit"/></td>
		</tr>
		<tr>
			<td>text</td>
			<td><input type="text" value="text"/></td>
		</tr>
	</table>
	
	<h3>HTML5 Inputs</h3>
	<table>
		<tr>
			<th>type</th>
			<th>example</th>
		</tr>
		<tr>
			<td>color</td>
			<td><input type="color" value="#000000"/></td>
		</tr>
		<tr>
			<td>date</td>
			<td><input type="date" value="1970-01-01"/></td>
		</tr>
		<tr>
			<td>datetime</td>
			<td><input type="datetime" value="1914-12-20 08:30:45.687"/></td>
		</tr>
		<tr>
			<td>datetime-local</td>
			<td><input type="datetime-local" value="1970-01-01T00:00"/></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="email" name="email"/></td>
		</tr>
		<tr>
			<td>month</td>
			<td><input type="month" value="1970-01"/></td>
		</tr>
		<tr>
			<td>number</td>
			<td><input type="number" value="5" max="10" min="0"/></td>
		</tr>
		<tr>
			<td>range</td>
			<td><input type="range" value="10"/></td>
		</tr>
		<tr>
			<td>search</td>
			<td><input type="search"/></td>
		</tr>
		<tr>
			<td>time</td>
			<td><input type="time"/></td>
		</tr>
		<tr>
			<td>url</td>
			<td><input type="url"/></td>
		</tr>
		<tr>
			<td>tel</td>
			<td><input type="tel"/></td>
		</tr>
		<tr>
			<td>week</td>
			<td><input type="week" value="1970-W01"/></td>
		</tr>
	</table>
	
	<hr/>
	
	<p>Bootstrap examples</p>
	
	<h3>Basic example</h3>
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"/>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">File input with help text</label>
			<input type="file" id="exampleInputFile"/>
			<p class="help-block">Example block-level help text here.</p>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"/> Check me out
			</label>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	
	<h3>Inline form</h3>
	<form class="form-inline">
		<div class="form-group">
			<label for="exampleInputName2">Name</label>
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe"/>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail2">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com"/>
		</div>
		<button type="submit" class="btn btn-default">Send invitation</button>
	</form>
	
	<hr/>
	
	<form class="form-inline">
		<div class="form-group">
			<label class="sr-only" for="exampleInputEmail3">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"/>
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputPassword3">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"/>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"/> Remember me
			</label>
		</div>
		<button type="submit" class="btn btn-default">Sign in</button>
	</form>
	
	<hr/>
	
	<form class="form-inline">
		<div class="form-group">
			<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			<div class="input-group">
				<div class="input-group-addon">$</div>
				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount"/>
				<div class="input-group-addon">.00</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Transfer cash</button>
	</form>
	
	<h3>Horizontal form</h3>
	<form class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email"/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox"/> Remember me
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>
	
	<h3>Checkboxes and radios</h3>
	<div class="checkbox">
		<label>
			<input type="checkbox" value=""/>
			Option one is this and that&mdash;be sure to include why it's great
		</label>
	</div>
	<div class="checkbox disabled">
		<label>
			<input type="checkbox" value="" disabled/>
			Option two is disabled
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked/>
			Option one is this and that&mdash;be sure to include why it's great
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>
			Option two can be something else and selecting it will deselect option one
		</label>
	</div>
	<div class="radio disabled">
		<label>
			<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
			Option three is disabled
		</label>
	</div>
	
	<hr/>
	
	<label class="checkbox-inline">
		<input type="checkbox" id="inlineCheckbox1" value="option1"/> 1
	</label>
	<label class="checkbox-inline">
		<input type="checkbox" id="inlineCheckbox2" value="option2"/> 2
	</label>
	<label class="checkbox-inline">
		<input type="checkbox" id="inlineCheckbox3" value="option3"/> 3
	</label>

	<label class="radio-inline">
		<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"/> 1
	</label>
	<label class="radio-inline">
		<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"/> 2
	</label>
	<label class="radio-inline">
		<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"/> 3
	</label>
	
	<h3>Selects</h3>
	<select class="form-control">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	</select>
	
	<hr/>
	
	<select multiple class="form-control">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	</select>
	
	<h3>Disabled state</h3>
	<form>
		<fieldset disabled>
			<div class="form-group">
				<label for="disabledTextInput">Disabled input</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
			</div>
			<div class="form-group">
				<label for="disabledSelect">Disabled select menu</label>
				<select id="disabledSelect" class="form-control">
					<option>Disabled select</option>
				</select>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"/> Can't check this
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</fieldset>
	</form>
	
	<h3>Readonly state</h3>
	<input class="form-control" type="text" placeholder="Readonly input here…" readonly/>
	
	<h3>Validation states</h3>
	<div class="form-group has-success">
		<label class="control-label" for="inputSuccess1">Input with success</label>
		<input type="text" class="form-control" value="myValue"/>
	</div>
	<div class="form-group has-warning">
		<label class="control-label" for="inputWarning1">Input with warning</label>
		<input type="text" class="form-control" value="myValue"/>
	</div>
	<div class="form-group has-error">
		<label class="control-label" for="inputError1">Input with error</label>
		<input type="text" class="form-control" value="myValue"/>
	</div>
	<div class="checkbox has-success">
		<label>
			<input type="checkbox" id="checkboxSuccess" value="option1"/>
			Checkbox with success
		</label>
	</div>
	<div class="checkbox has-warning">
		<label>
			<input type="checkbox" id="checkboxWarning" value="option1"/>
			Checkbox with warning
		</label>
	</div>
	<div class="checkbox has-error">
		<label>
			<input type="checkbox" id="checkboxError" value="option1"/>
			Checkbox with error
		</label>
	</div>
	
	<!--
	<h3>Contextual classes, .table</h3>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>class</th>
				<th>checkbox</th>
				<th>textInput</th>
				<th>fileInput</th>
				<th>textarea</th>
				<th>button</th>
			</tr>
		</thead>
		<tbody>
			<tr class="active">
				<th scope="row">1</th>
				<td>active</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>[none]</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr class="success">
				<th scope="row">3</th>
				<td>success</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>[none]</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr class="info">
				<th scope="row">5</th>
				<td>info</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>[none]</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr class="warning">
				<th scope="row">7</th>
				<td>warning</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>[none]</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
			<tr class="danger">
				<th scope="row">9</th>
				<td>danger</td>
				<td>
					<label>
						<input type="checkbox" value="option1"/>
						Checkbox
					</label>
				</td>
				<td>
					<input type="text" value="myValue"/>
				</td>
				<td>
					<input type="file" value="myValue"/>
				</td>
				<td>
					<textarea></textarea>
				</td>
				<td>
					<button name="button">Click me</button>
				</td>
			</tr>
		</tbody>
	</table>
	-->
	
<?php require_once('bottom.php'); ?>
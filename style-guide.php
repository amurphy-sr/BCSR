<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock Templates and Style Guide</title>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body>

  
<?php include '_inc/nav.php'; ?>
    
    <div class="container">
    <h1 class="header-page text-center">Style Guide</h1>
    <h2 class="text-center">Table of Contents</h2>
    	<div class="col-md-4">
    		<ul>
	    		<li><a href="#templates">Templates</a></li>
		    	<li><a href="#alert">Alert</a></li>
		    	<li><a href="#columns">Columns</a></li>
	    	</ul>
    	</div>
    	<div class="col-md-4">
    		<ul>
	    		<li><a href="#headings">Headings</a></li>
		    	<li><a href="#paragraph">Paragraph and Text</a></li>
		    	<li><a href="#lists">Lists</a></li>
	    		<li><a href="#forms">Forms</a></li>
    		</ul>
    	</div>
    	<div class="col-md-4">
			<ul>
	    		<li><a href="#accordion">Accordion</a></li>
		    	<li><a href="#pull">Pull Quote</a></li>
		    	<li><a href="#images">Images</a></li>
		    	<li><a href="#cta">CTA</a></li>
	    	</ul>
    	</div>
    	<a name="templates"></a>
		<div class="col-md-12">
			<h2 class="text-center">Templates &amp; Examples</h2>
			<p>View samples of distinct page layouts.</p>
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li><a href="academics.php">Academics</a></li>
						<li><a href="areas-of-study.php">Areas of Study</a></li>
						<li><a href="campus-landing.php">Campus Landing</a></li>
						<li><a href="campus-map.php">Map</a></li>
						<li><a href="student-life.php">Student Life</a></li>
						<li><a href="why-simons-rock.php">Why Simon's Rock</a></li>
						<li><a href="video.php">Video Modal</a></li>

					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="gateway.php">Gateway</a></li>
						<li><a href="giving-landing.php">Giving Landing</a></li>
						<li><a href="index2.php">Home</a></li>
						<li><a href="master-section-landing.php">Master Section Landing</a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="basic-profile.php">Profile (basic)</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="mixed-media.php">Mixed Media</a>
							<ul>
								<li><a href="search.php">Search</a></li>
								<li><a href="news-listings.php">News Listings</a></li>
								<li><a href="404.php">404</a></li>
							</ul>
						</li>
						<li>Forms
							<ul>
								<li><a href="contact-form-address-follow-no.php">RFI - Address Follow Up No</a></li>
								<li><a href="contact-form-rfi.php">RFI - Address Follow Up Yes</a></li>
								<li><a href="contact-form-thanks-address.php">Address Only Follow Up</a></li>
								<li><a href="contact-form-alumni-referral.php">Referral - Alumni</a></li>
								<li><a href="contact-form-counselor-referral.php">Referral - Counselor</a></li>
								<li><a href="contact-form-discovery.php">Discovery Day</a></li>


							</ul>
						</li>
						
						
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<a name="alert"></a>
			<h2 class="text-center">Alert System</h2>
			<div class="row">
				<p>
					Preview any page with a warning-level alert by adding <em>"?alert=warning"</em> to the end of 
					its url. Add <em>"?alert=danger"</em> to see level-2 warnings demonstrated; <em>"?alert=info"</em>
					to see an info alert, or use the sample links 
					that follow:
				</p>
				<div class="col-md-4">
					<ul>
						<li><a href="index.php?alert=warning">Home page with warning-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="mixed-media.php?alert=warning">Mixed Media with warning-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="campus-landing.php?alert=warning">Campus Landing with warning-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="areas-of-study.php?alert=warning">Areas of Study with warning-level alert <i class="fa fa-flag"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="index.php?alert=danger">Home page with danger-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="mixed-media.php?alert=danger">Mixed Media with danger-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="campus-landing.php?alert=danger">Campus Landing with danger-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="areas-of-study.php?alert=danger">Areas of Study with danger-level alert <i class="fa fa-flag"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="index.php?alert=info">Home page with info-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="mixed-media.php?alert=info">Mixed Media with info-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="campus-landing.php?alert=info">Campus Landing with info-level alert <i class="fa fa-flag"></i></a></li>
						<li><a href="areas-of-study.php?alert=info">Areas of Study with info-level alert <i class="fa fa-flag"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	<a name="columns"></a>
	<div class="col-md-12">
		<h2 class="text-center">Columns</h2>
		<div class="row">
			<div class="col-md-12">
				<h3>This is an h3 over a two-col layout</h3>
			</div>
			<div class="col-md-6">
				
				<p class="intro-paragraph">
				This is a p.intro-paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
				mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
				pulvinar efficitur. 
				</p>
			</div>
			
			<div class="col-md-6">
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
				mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
				pulvinar efficitur. Donec suscipit lacus felis, egestas commodo quam ultricies ac. Nam elementum sapien eu tellus
				ultrices, in mollis diam convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
				Curae;
				</p>

				<p><img src="//placehold.it/125/125" class="pull-left"><strong>img.pull-left</strong> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
				<p><img src="//placehold.it/125/125" class="pull-right"><strong>img.pull-right</strong> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
				
			<h3>This is an h3 over a three-col layout</h3>
			
		</div>


		<div class="col-md-4">
			<h2>This is an h2</h2>
			
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
			mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
			pulvinar efficitur. Donec suscipit lacus felis, egestas commodo quam ultricies ac. Nam elementum sapien eu tellus
			ultrices, in mollis diam convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
			Curae;
			</p>
			
			<p>
			Duis vel libero vel ante varius consequat vel vel orci. Maecenas cursus ac justo at tempus. Integer ac lectus libero.
			Cras eget ligula augue. Aenean dapibus consequat nibh vel tristique. Quisque vehicula sodales sapien et pulvinar.
			Vivamus rutrum lacus vel sollicitudin efficitur. Pellentesque at nulla vitae orci pulvinar aliquam nec in risus.
			Maecenas aliquam rutrum auctor. 
			</p>
		</div>
		
		<div class="col-md-4">
			<h3>This is an h3</h3>
			
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
			mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
			pulvinar efficitur. Donec suscipit lacus felis, egestas commodo quam ultricies ac. Nam elementum sapien eu tellus
			ultrices, in mollis diam convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
			Curae;
			</p>
			
			<p>
			Duis vel libero vel ante varius consequat vel vel orci. Maecenas cursus ac justo at tempus. Integer ac lectus libero.
			Cras eget ligula augue. Aenean dapibus consequat nibh vel tristique. Quisque vehicula sodales sapien et pulvinar.
			Vivamus rutrum lacus vel sollicitudin efficitur. Pellentesque at nulla vitae orci pulvinar aliquam nec in risus.
			Maecenas aliquam rutrum auctor. 
			</p>
		</div>

		<div class="col-md-4">
			<h4>This is an h4</h4>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus elementum sodales. Phasellus facilisis
			mattis est sed hendrerit. Quisque quam ligula, aliquam in dolor quis, iaculis viverra erat. Donec lacinia nisi sit amet
			pulvinar efficitur. Donec suscipit lacus felis, egestas commodo quam ultricies ac. Nam elementum sapien eu tellus
			ultrices, in mollis diam convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
			Curae;
			</p>
			
			<p>
			Duis vel libero vel ante varius consequat vel vel orci. Maecenas cursus ac justo at tempus. Integer ac lectus libero.
			Cras eget ligula augue. Aenean dapibus consequat nibh vel tristique. Quisque vehicula sodales sapien et pulvinar.
			Vivamus rutrum lacus vel sollicitudin efficitur. Pellentesque at nulla vitae orci pulvinar aliquam nec in risus.
			Maecenas aliquam rutrum auctor. 
			</p>
		</div>

	</div>
	
	<a name="headings"></a>	
	<div class="col-md-12">
	<h1 class="text-center">Heading 1</h1>
	<h2 class="text-center">Heading 2</h2>
	<h3>Heading 3</h3>
	<h3><strong>Heading 3</strong></h3>
	<h4>Heading 4</h4>

	<h5>Heading 5</h5>
	<h6>Heading 6</h6>

	<h1 class="text-center">Heading 1</h1>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	<h2 class="text-center">Heading 2</h2>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	<h3>Heading 3</h3>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	<h4>Heading 4</h4>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	<h5>Heading 5</h5>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	<h6>Heading 6</h6>
	<p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	</div>

	
	<a name="paragraph"></a>
	<div class="col-md-12">
	<h2 class="text-center" id="paragraph">Text Elements</h2>
	<h3>Intro paragraph and regular paragraph</h3>

	<p class="intro-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem.</p>
	<p>Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor.</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem.</p>
	

	<h3> Additional Text Elements</h3>
	<p>The <a href="#">a element</a> example</p>
	<!-- <p>The <abbr>abbr element</abbr> and an <abbr title="Abbreviation">abbr</abbr> element with title examples</p> -->
	<!-- <p>The <acronym title="A Cowboy Ran One New York Marathon">ACRONYM</acronym> element example -->
	<!-- <p>The <b>b element</b> example</p>
	<p>The <cite>cite element</cite> example</p> -->
	<!-- <p>The <code>code element</code> example</p> -->
	<p>The <em>em element</em> example</p>
	<!-- <p>The <del>del element</del> example</p> -->
	<!-- <p>The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples</p> 
	<p>The <i>i element</i> example</p> -->
	<!-- <p>The <ins>ins element</ins> example</p> -->
	<!-- <p>The <kbd>kbd element</kbd> example</p> -->
	<!-- <p>The <mark>mark element</mark> example</p> -->
	<!-- <p>The <q>q element</q> example</p> -->
	<!-- <p>The <q>q element <q>inside</q> a q element</q> example</p> -->
	<!-- <p>The <s>s element</s> example</p> -->
	<!-- <p>The <samp>samp element</samp> example</p> 
	<p>The <small>small element</small> example</p>
	<p>The <span>span element</span> example</p>-->
	<p>The <strong>strong element</strong> example</p>
	<!--<p>The <sub>sub element</sub> example</p>-->
	<p>The <sup>sup element</sup> example</p>
	<!--<p>The <u>u element</u> example</p>
	 <p>The <var>var element</var> example</p> -->
	</div>

	<!--
	<h1 id="monospace" class="sg-heading">Monospace / Preformatted</h1>
	<p>Code block wrapped in "pre" and "code" tags</p>
	<pre><code>// Loop through Divs using Javascript.
	var divs = document.querySelectorAll('div'), i;

	for (i = 0; i < divs.length; ++i) {
	  divs[i].style.color = "green";
	}</code></pre>
	<p>Monospace Text wrapped in "pre" tags</p>
	<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing
	  elit. Nullam dignissim convallis est. Quisque  aliquam.
	  Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet
	  sem. Aliquam libero nisi, imperdiet at, tincidunt nec,
	  gravida vehicula, nisl.</p></pre>

	<hr />
	-->
	<a name="lists"></a>
	<div class="col-md-12">
		<h2 id="list_types" class="text-center">List Types</h2>

		<h3>Custom Unordered (bullet) List</h3>

		<ul class="arrow-list">
		  <li><a href="#">Business Farm Supplement oncustodial Parent’s Statement Statement Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
			<ul class="arrow-list"> 
			  <li><a href="#">Financial Aid Handbook (2013/14) Business Farm Supplement oncustodial Parent’s Statement Statement Quis</a></li>
			  <li><a href="#">Financial Aid Handbook (2013/14)</a></li>
			</ul>
		  </li>
		  <li><a href="#">Financial Aid Handbook (2013/14)</a></li>
		</ul>

		<h3>Custom Ordered List</h3>

		<ol class="circle-list">
		  <li><a href="#">Use custom ordered list only one level deep.<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
		  <li><a href="#">International Student Financial Aid Application<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
		  <li><a href="#">International Student Certification of Finances<span class="dl-svg"><?php include("_inc/svg.php"); ?></span></a></li>
		</ol>

		<h3>Ordered List</h3>
		<ol>

		  <li>List Item 1
		  	<ol>
		  		<li>Sub list item 1</li>
		  		<li>Sub list item 2</li></li>
		  	</ol>
		  <li>List Item 2</li>
		  <li>List Item 3</li>
		</ol>
		<p>Followed by a paragraph</p>

		<h3>Unordered List</h3>
		<ul>
		  <li>List Item 1
		  	<ul>
		  		<li>Sub list item 1</li>
		  		<li>Sub list item 2</li></li>
		  	</ul>
		  <li>List Item 2</li>
		  <li>List Item 3</li>
		</ul>

		<h3>Definition List</h3>
		<dl>
		  <dt>Definition List Term 1</dt>
		  <dd>This is a definition list description.</dd>
		  <dt>Definition List Term 2</dt>
		  <dd>This is a definition list description.</dd>
		  <dt>Definition List Term 3</dt>
		  <dd>This is a definition list description.</dd>
		</dl>
		<h3>Custom Department list</h3>
			<div class="arrow-list-tight-small-wrapper">
				<h4>Information Technology Services</h4>
	               <ul>
	                	<li><a href="tel:4136444285">413-644-4285 or 413-528-7391</a></li>
	                	<li><a href="/why-simons-rock/contact-us/offices-and-departments/business-office.php">Department Page</a></li>
	               </ul>
	  			<h4>Department Alternate</h4>
	             <ul>
	                <li><a href="tel:4136444285">413-644-4285 or 413-528-7391</a></li>
	                <li><a href="/why-simons-rock/contact-us/offices-and-departments/business-office.php">Department Page</a></li>
	             </ul>
	        </div>
		<h3>Custom Bio List</h3>
			<div class="arrow-list-tight-small-wrapper">
				<h4>Ben Krupka</h4>
	             <p>Ceramics</p>
	             <ul>
		            <li><a href="mailto:jpitt@simons-rock.edu">jpitt@simons-rock.edu</a></li>
		            <li><a href="mailto:jpitt@simons-rock.edu">Faculty Bio</a></li>
		         </ul>

	  			<h4>Person Alternate</h4>
	             <p>French</p>
	             <ul>
		            <li><a href="mailto:jpitt@simons-rock.edu">jpitt@simons-rock.edu</a></li>
		            <li><a href="mailto:jpitt@simons-rock.edu">Faculty Bio</a></li>
		          </ul>
	        </div>
	</div>

	<a name="tables"></a>
	<div class="col-md-12">
	<h2 id="tables" class="text-center">Tables</h2>

		<table class="table table-striped">
		  <thead class="table__head">
			<tr>
			  <th>Expense Category</th>
			  <th>In-State and Reciprocity*</th>
			  <th>Non-Resident</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">Tuition/Fees</th>
			  <td>$XX,XXX</td>
			  <td><a href="">$XX,XXX</a></td>
			</tr>
			<tr>
			  <th scope="row">Books/Supplies</th>
			  <td>$XX,XXX</td>
			  <td>$XX,XXX</td>
			</tr>
			<tr>
			  <th scope="row">Room/Board</th>
			  <td>$XX,XXX</td>
			  <td>$XX,XXX</td>
			</tr>
			<tr>
			  <th scope="row">Transportation</th>
			  <td>$XX,XXX</td>
			  <td>$XX,XXX</td>
			</tr>
			<tr>
			  <th scope="row">Personal/Miscellaneous</th>
			  <td>$XX,XXX</td>
			  <td>$XX,XXX</td>
			</tr>
			<tr class="bold">
			  <th class="bold" scope="row">Total</th>
			  <td>$XX,XXX</td>
			  <td>$XX,XXX</td>
			</tr>
		  </tbody>
		</table>

	</div>
	<a name="forms"></a>
	<div class="col-md-12">
	<h2 id="form_elements" class="text-center">Form Elements</h2>

<!--	<h3>Media</h3>

	<p>The Audio Element:</p>
	<audio controls>
	  <source src="http://www.w3schools.com/tags/horse.ogg" type="audio/ogg">
	  <source src="http://www.w3schools.com/tags/horse.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio>

	<p>The Video Element:</p>
	<video width="320" height="240" controls>
	  <source src="http://www.w3schools.com/tags/movie.mp4" type="video/mp4">
	  <source src="http://www.w3schools.com/tags/movie.ogg" type="video/ogg">
	  Your browser does not support the video tag.
	</video> 

	<h3>Form Elements</h3>-->

	<div class="row">
	<form>
		<div class="col-md-6">
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			  </div>
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="">
					Option one is this and that&mdash;be sure to include why it's great
				  </label>
				</div>
				<div class="checkbox disabled">
				  <label>
					<input type="checkbox" value="" disabled>
					Option two is disabled
				  </label>
				</div>

				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Option one is this and that&mdash;be sure to include why it's great
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Option two can be something else and selecting it will deselect option one
				  </label>
				</div>
				<div class="radio disabled">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					Option three is disabled
				  </label>
				</div>

			  <button type="submit" class="btn btn-primary">Submit</button>

		
		</div>
		<div class="col-md-6">
			  <div class="form-group">
				<label for="text_field">Text Field:</label>
				<input type="text" class="form-control" id="text_field" />
			  </div>
			  <div class="form-group">
				<label for="text_area">Text Area:</label>
				<textarea id="text_area" class="form-control"></textarea>
			  </div>
			  <div class="form-group">
				<label for="select_element">Select Element:</label>
				<select name="select_element" class="form-control">
				  <optgroup label="Option Group 1">
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				  </optgroup>
				  <optgroup label="Option Group 2">
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				  </optgroup>
				</select>
			  </div>
			  <div class="row">
	                    <div class="form-group col-sm-6">
	                      <label for="birth_month">Date of Birth* <span class="sr-only">(Month)</span></label> 
	                      <select class="form-control" id="birth_month" name="birth_month" required>
	                        
	                        <option value="">
	                          Month
	                        </option>

	                        <option value="01">
	                          January
	                        </option>

	                        <option value="02">
	                          February
	                        </option>

	                        <option value="03">
	                          March
	                        </option>

	                        <option value="04">
	                          April
	                        </option>

	                        <option value="05">
	                          May
	                        </option>

	                        <option value="06">
	                          June
	                        </option>

	                        <option value="07">
	                          July
	                        </option>

	                        <option value="08">
	                          August
	                        </option>

	                        <option value="09">
	                          September
	                        </option>

	                        <option value="10">
	                          October
	                        </option>

	                        <option value="11">
	                          November
	                        </option>

	                        <option value="12">
	                          December
	                        </option>
	                      </select>
	                    </div>

	                    <div class="form-group col-sm-3">
	                      <label for="birth_day" class="hidden-xs"><span class="sr-only">Date of Birth (Day)</span>&nbsp;</label> 
	                      <select class="form-control" id="birth_day" name="birth_day" required>
	                        <option value="">
	                          Day
	                        </option>

	                        <option value="01">
	                          01
	                        </option>

	                        <option value="02">
	                          02
	                        </option>

	                        <option value="03">
	                          03
	                        </option>

	                        <option value="04">
	                          04
	                        </option>

	                        <option value="05">
	                          05
	                        </option>

	                        <option value="06">
	                          06
	                        </option>

	                        <option value="07">
	                          07
	                        </option>

	                        <option value="08">
	                          08
	                        </option>

	                        <option value="09">
	                          09
	                        </option>

	                        <option value="10">
	                          10
	                        </option>

	                        <option value="11">
	                          11
	                        </option>

	                        <option value="12">
	                          12
	                        </option>

	                        <option value="13">
	                          13
	                        </option>

	                        <option value="14">
	                          14
	                        </option>

	                        <option value="15">
	                          15
	                        </option>

	                        <option value="16">
	                          16
	                        </option>

	                        <option value="17">
	                          17
	                        </option>

	                        <option value="18">
	                          18
	                        </option>

	                        <option value="19">
	                          19
	                        </option>

	                        <option value="20">
	                          20
	                        </option>

	                        <option value="21">
	                          21
	                        </option>

	                        <option value="22">
	                          22
	                        </option>

	                        <option value="23">
	                          23
	                        </option>

	                        <option value="24">
	                          24
	                        </option>

	                        <option value="25">
	                          25
	                        </option>

	                        <option value="26">
	                          26
	                        </option>

	                        <option value="27">
	                          27
	                        </option>

	                        <option value="28">
	                          28
	                        </option>

	                        <option value="29">
	                          29
	                        </option>

	                        <option value="30">
	                          30
	                        </option>

	                        <option value="31">
	                          31
	                        </option>
	                      </select>
	                    </div>

	                    <div class="form-group col-sm-3">
	                      <label for="birth_year" class="hidden-xs"><span class="sr-only">Date of Birth (Year)</span>&nbsp;</label> 
	                      <select class="form-control" id="birth_year" name="birth_year" required>
	                        <option value="">
	                          Year
	                        </option>

	                        <option value="2005">
	                          2005
	                        </option>

	                        <option value="2004">
	                          2004
	                        </option>

	                        <option value="2003">
	                          2003
	                        </option>

	                        <option value="2002">
	                          2002
	                        </option>

	                        <option value="2001">
	                          2001
	                        </option>

	                        <option value="2000">
	                          2000
	                        </option>

	                        <option value="1999">
	                          1999
	                        </option>

	                        <option value="1998">
	                          1998
	                        </option>

	                        <option value="1997">
	                          1997
	                        </option>

	                        <option value="1996">
	                          1996
	                        </option>

	                        <option value="1995">
	                          1995
	                        </option>

	                        <option value="1994">
	                          1994
	                        </option>

	                        <option value="1993">
	                          1993
	                        </option>

	                        <option value="1992">
	                          1992
	                        </option>

	                        <option value="1991">
	                          1991
	                        </option>

	                        <option value="1990">
	                          1990
	                        </option>
							
	                      </select>
	                    </div>
	        	</div><!-- row -->         
		
		</div>
	</form>
	</div>


	</div>
	<a name="accordion"></a>

	<div clas="col-md-12"</div>
	


		<h2 class="text-center">Bootstrap Accordion</h2>

		<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Collapsible Group Item #1
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, <a href="">enim eiusmod</a> high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Collapsible Group Item #2
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
				<p>
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
				<ul>
				  <li>List item one</li>
				  <li>List item two</li>
				  <li>List item three</li>
				</ul>
		      </div>
		    </div>
		</div>
		  

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Collapsible Group Item #3
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingfour">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
		          Collapsible Group Item #4
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingfive">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
		          Collapsible Group Item #5
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingsix">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
		          Collapsible Group Item #6
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingseven">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
		          Collapsible Group Item #7
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingeight">
		    	<h4 class="panel-title">
		        	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
		          Collapsible Group Item #8
		        	</a>
		      	</h4>
		    </div>
		    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
		    	<div class="panel-body">
		        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      	</div>
		    </div>
		</div>





		</div>
	</div>


	<a name="pull"></a>
	<div class="col-md-12">
		<h2 class="text-center">Pullquotes</h2>
		<blockquote>
                     <p>It is not just about knowledge and learning to absorb information and then regurgitate
                        on a test, but actually being able to use one's brain in any situation, academic or
  otherwise. This skill is indispensable in any time or place.<span class="blockquote-mark">&rdquo;</span></p><cite>-Sarah&nbsp;'08&nbsp;</cite></blockquote>
		
		<ul>
			<li>This is a semantic blockquote, but used as a pull quote</li>
			<li>Put the quote in a p tag and the citation in a cite tag - all within a blockquote.</li>
			<li>The opening quote is added automatically, do not include in copy</li>
			<li>Add a large closing quote, by adding a class blockquote-last to the final p</li>
			<li>The blockquotes look clunky if they are long. They look best as short, pull quotes rather than an extended quote.</li>
			<li>Consider breaking up the citation onto two lines, one for the name and the other on the title. An unforced linebreak may look errant because of the right-align - and this is likely on small screens. Forcing a line break will give a more controlled design.</li>
		</ul>

		<blockquote class="blockquote-long">
                     <p class="blockquote-last">It is not just about knowledge and learning to absorb information and then regurgitate
                        on a test, but actually being able to use one's brain in any situation, academic or
  otherwise. This skill is indispensable in any time or place. It is not just about knowledge and learning to absorb information and then regurgitate on a test, but actually being able to use one's brain in any situation, academic or
  otherwise. This skill is indispensable in any time or place.</p><cite>&mdash;Sarah&nbsp;'08&nbsp;</cite></blockquote>
  <p> Consider applying .blockquote-long class to the blockquote element if the quote extends beyond a couple of lines.


		<p>Callouts are the boxes at the side on the Mixed Media and Profile pages. These are ephemeral content similar to a pull quote where information in the document is pulled out and displayed in a way that is easy-to-scan</p>
	</div>
	
	<h3>Pullquote with an image</h3>
	<div class="row">
		<div class="col-md-4">
			<img src="../_images/teacher-1.jpg" alt="teacher 1">
		</div>
		<div class="col-md-8">
			<blockquote class="no-margin">
        <p>Pair an image with a blockquote by setting them inside two columns. Add class 'no-margin' to the blockquote.<span class="blockquote-mark">&rdquo;</span></p>
        <cite>-Style Guide</cite>
      </blockquote>
		</div>
	</div>
	<a name="images"></a> 
	<div class="col-md-12">
	<h2 class="text-center">Images</h2>	
	<img alt="Placeholder Image and Some Alt Text" src="http://placehold.it/1170x600" title="A title element for this placeholder image.">
	<p>The standard image goes to the full width of the column</p>
	<p><img src="//placehold.it/325/325" class="pull-left-responsive-35">The pull-left-responsive-35 image changes width based on screen size. It floats to the left. The max-width is 325px. The pull-left-responsive-50 image floats a larger image (445px) to the left. 
	<p><img src="//placehold.it/325/325" class="pull-right-responsive">There is also an option for a pull-right-responsive image, which floats right for both 35% width and 50% width images.</p>
		<div class="col-md-12">
			<p><img src="//placehold.it/125/125" class="pull-left"><strong>img.pull-left </strong> is fixed width. ras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
			<p><img src="//placehold.it/125/125" class="pull-right">as is <strong>img.pull-right</strong> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		</div>
	</div>
<img alt="Placeholder Image and Some Alt Text" src="http://placehold.it/1170x600" title="A title element for this placeholder image.">
<div class="caption-small">Small Image Caption for photo attribution. Small Image Caption for photo attribution. Small Image Caption for photo attribution. Small Image Caption for photo attribution. Small Image Caption for photo attribution. Small Image Caption for photo attribution. Small Image Caption for photo attribution.</div> 

	<a name="cta"></a>
	<div class="col-md-12">
		<h2 class="text-center">CTA</h2>
		<p>The red button should be short, scannable. Verb Object (Visit Campus). If it is longer, consider the large red arrow link. Only use the small red arrow link in conjunction with the red button. 
		<div class="text-center">
			<a class="btn btn-primary" href="#">Red Button</a>
		</div>
		<div class="text-center page--link">
			<a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> small red arrow link</a>
		</div>
		<div class="col-md-12">
			<p>There is also a large red arrow link that can be used without the red button.</p>
			<div class="text-center page--link">
				<a class="right-arrow-primary" href="#"><i class="fa fa-angle-right bold"></i> Large Red Arrow Link</a>
			</div>
		</div>
		<div class="col-md-12">
	        <div class="row stacked-content">
	            <div class="col-sm-8">
		            <h3>Medium Red Arrow Link</h3>
		              <p>There is also a medium red arrow link that can be used in an aside or next to an image.</p>
		              	<p>Callouts are the boxes at the side on the Mixed Media and Profile pages. These are ephemeral content similar to a pull quote where information in the document is pulled out and displayed in a way that is easy-to-scan</p>
			<p>CTA links associated with H3’s and below match their alignment (left).</p>
	            </div>
	            <!-- <div class="col-sm-4" style="> -->
	            <div class="col-sm-4 aside">
	              <p>The admission process is just that - a process. We’ll work together to decide if the right time for college is now.</p>
	              <a class="right-arrow-aside" href="#"><i class="fa fa-angle-right bold"></i> Contact Us</a>
	              <p>Deciding if early college is right for your child? Listen to the stories of other Simon’s Rock families.</p>
	              <a class="right-arrow-aside" href="#"><i class="fa fa-angle-right bold"></i> Parent Stories</a>
	            </div>
	         </div>
		</div>
	
	</div>

		<div>&nbsp;</div>

	<div class="col-md-12">
		<h2 class="text-center">Captions</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="//placehold.it/330">
				<div class="image-name text-center">Caption</div>
			</div>
			<div class="col-md-4">
				<img src="//placehold.it/330">
				<div class="image-title text-center">Secondary description</div>			
			</div>
			<div class="col-md-4">
				<img src="//placehold.it/330">
				<div class="caption-small text-center">Photo attribution</div>			
			</div>
		</div>
	</div>
	<div>&nbsp;</div>

	<div class="row thumb-set">
	<h2 class="text-center">Thumbnails and Thumbnail Copy</h2>
		<div class="col-md-3">
			<div class="row no-margin">
				<div class="col-xs-3 col-md-12">
					<div class="image-thumb"><a href="/academics/faculty-bios/social-studies-faculty/index.php"><img class="fluid-img" src="http://placehold.it/190x190" alt="thumb photo"></a>
					</div>
				</div>
				<div class="col-xs-9 col-md-12">
					<div class="thumbnail-copy"><a href="/academics/faculty-bios/social-studies-faculty/index.php">Use div.image-thumb for picture</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row no-margin">
				<div class="col-xs-3 col-md-12">
					<div class="image-thumb"><a href="/academics/faculty-bios/languages-and-literature-faculty/index.php"><img class="fluid-img" src="http://placehold.it/190x190" alt="thumb photo"></a>
					</div>
				</div>
				<div class="col-xs-9 col-md-12">
					<div class="thumbnail-copy"><a href="/academics/faculty-bios/languages-and-literature-faculty/index.php">Use div.thumbnail-copy for caption</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row no-margin">
				<div class="col-xs-3 col-md-12">
					<div class="image-thumb"><a href="/academics/faculty-bios/arts-faculty/index.php"><img class="fluid-img" src="http://placehold.it/190x190" alt="thumb photo"></a>
					</div>
				</div>
				<div class="col-xs-9 col-md-12">
					<div class="thumbnail-copy"><a href="/academics/faculty-bios/arts-faculty/index.php">Link Underlined on hover</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row no-margin">
				<div class="col-xs-3 col-md-12">
					<div class="image-thumb"><a href="/academics/faculty-bios/science-mathematics-and-computing-faculty/index.php"><img class="fluid-img" src="http://placehold.it/190x190" alt="thumb photo"></a>
					</div>
				</div>
				<div class="col-xs-9 col-md-12">
					<div class="thumbnail-copy"><a href="/academics/faculty-bios/science-mathematics-and-computing-faculty/index.php">Use with multiple thumbs</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>&nbsp;</div>	
	</section>



	    </div><!-- /.container -->

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

  </body>
</html>
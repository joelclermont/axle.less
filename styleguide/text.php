<?php include 'shared/head.php'?>
	<?php include 'shared/banner.php'?>
	<header class="styleguide_header"><h1>| Axle | 'text'</h1></header>
	<article class="styleguide_body">
		<?php include 'shared/nav.php'?>
		<header><p>1. Heading text</p></header>
		<article class="h1s">
			<h1>H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>H2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>H3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>H4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>H5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
		</article>
		<footer></footer>
		
		<header>
			<p>1.1 Special Heading text</p>
			<article>
				<em>
					<p>For OOCSS application, apply the <code>.google_font_alpha</code> to a block element containing heading tags.  For a semantic .LESS approach, apply <code>.google_font_alpha</code> to a semantically named class.</p>
				</em>
			</article>
		</header>
		<article class="h1s google_font_alpha">
			<h1>H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h1>
			<h2>H2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h2>
			<h3>H3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h3>
			<h4>H4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h4>
			<h5>H5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.</h5>
			<p><b>OOCSS Example:</b></p>
			<pre>
&lt;div class=&quot;home_page_hero google_font_alpha&quot;&gt;
  &lt;h1&gt;H1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere malesuada adipiscing.&lt;/h1&gt;
&lt;/div&gt;
			</pre>
			<p><b>Semantic .LESS approach</b></p>
			<pre>
.LESS
.home_page_hero {
	.google_font_alpha;
}

HTML
&lt;div class=&quot;home_page_hero&quot; id=&quot;&quot;&gt;
	&lt;h1&gt;This .LESS stuff is pretty awesome!&lt;/h1&gt;
&lt;/div&gt;
			</pre>
		</article>
		<footer></footer>

		
		<header>
			<p>2. body text</p>
			<article>
				<em>
					<p>Applying a size class to the parent block element or the LESS mixin to a semantic class will adjust the font size in the appropriate em scale.</p>
				</em>
			</article>
		</header>
		<article class="body_text">
			<p class="extra_small"><span>class="extra_small"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="small"><span>class="small"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="medium"><span>class="medium" (default site style)</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<article class="body_text">
			<p class="large"><span>class="large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="extra_large"><span>class="extra_large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
			<p class="xx_large"><span>class="xx_large"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor diam, condimentum gravida ultricies non, sollicitudin eget nunc.</p>
		</article>
		<footer></footer>
		
		<header><p>3. Standard body links</p></header>
		<article>
			<p><em>Note: The following examples show that by simply using an &lt;a&gt; tag will produce the desired UI.  But also appending the font size classes as described in #2 will account for the appropriate font sizes.</em>  </p>
		</article>
		<article class="link_text">
			<p class="extra_small"><a href="#">&lt;p class=&quot;extra_small&quot;&gt;&lt;a href=&quot;#&quot;&gt;extra-small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p class="small"><a href="#">&lt;p class=&quot;small&quot;&gt;&lt;a href=&quot;#&quot;&gt;small&lt;/a&gt;&lt;/p&gt;</a></p>
			<p><a href="#">&lt;p&gt;&lt;a href=&quot;#&quot;&gt;medium (defult)&lt;/a&gt;&lt;/p&gt;</a></p>
		</article>
		<footer></footer>
		
		<header><p>3. blockquote</p></header>
		<article>
			<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</blockquote>
			<p><cite>-- Some guy</cite></p>
			<br>
			<pre>
&lt;blockquote&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/blockquote&gt;
&lt;p&gt;&lt;cite&gt;-- Some guy&lt;/cite&gt;&lt;/p&gt;
			</pre>
		</article>
		<footer></footer>
		
		
	</article>
<?php include 'shared/footer.php'?>
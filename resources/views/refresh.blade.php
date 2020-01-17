<!DOCTYPE html>

<html>

<head>

	<title>Page Reload </title>

</head>

<Body onLoad=" LoadOnce()" >


<h3>There are listed examples bellow </h3	>
	<ul>
	<li><p><strong class="step">Example 1(Using setTimeout)</strong></p></li>
	<pre class="prettyprint lang-html prettyprinted" style=""><p></p><p><span class="dec">&lt;!DOCTYPE html&gt;</span></p><p><span class="tag">&lt;html&gt;</span></p><p><span class="tag">&lt;head&gt;</span></p><p><span class="pln">	</span><span class="tag">&lt;title&gt;</span><span class="pln">Page Reload after 10 seconds</span><span class="tag">&lt;/title&gt;</span></p><p><span class="tag">&lt;/head&gt;</span></p><p><span class="tag">&lt;body&gt;</span></p><p><br></p><p><span class="tag">&lt;h2&gt;</span><span class="pln">Hi, I am Itsolutionstuff.com</span><span class="tag">&lt;/h2&gt;</span></p><p><br></p><p><span class="tag">&lt;/body&gt;</span></p><p><br></p><p><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span></p><p><span class="pln">   setTimeout</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(){</span></p><p><span class="pln">       location</span><span class="pun">.</span><span class="pln">reload</span><span class="pun">();</span></p><p><span class="pln">   </span><span class="pun">},</span><span class="lit">10000</span><span class="pun">);</span></p><p><span class="tag">&lt;/script&gt;</span></p><p><span class="tag">&lt;/html&gt;</span></p><p></p></pre>

	<li><p><strong class="step">Example 2(Using setInterval)</strong></p></li>
	<pre class="prettyprint lang-html prettyprinted" style=""><p></p><p><span class="dec">&lt;!DOCTYPE html&gt;</span></p><p><span class="tag">&lt;html&gt;</span></p><p><span class="tag">&lt;head&gt;</span></p><p><span class="pln">	</span><span class="tag">&lt;title&gt;</span><span class="pln">Page Reload after 10 seconds</span><span class="tag">&lt;/title&gt;</span></p><p><span class="tag">&lt;/head&gt;</span></p><p><span class="tag">&lt;body&gt;</span></p><p><br></p><p><span class="tag">&lt;h2&gt;</span><span class="pln">Hi, I am Itsolutionstuff.com</span><span class="tag">&lt;/h2&gt;</span></p><p><br></p><p><span class="tag">&lt;/body&gt;</span></p><p><br></p><p><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span></p><p><span class="pln">    </span><span class="kwd">function</span><span class="pln"> autoRefreshPage</span><span class="pun">()</span></p><p><span class="pln">    </span><span class="pun">{</span></p><p><span class="pln">        window</span><span class="pun">.</span><span class="pln">location </span><span class="pun">=</span><span class="pln"> window</span><span class="pun">.</span><span class="pln">location</span><span class="pun">.</span><span class="pln">href</span><span class="pun">;</span></p><p><span class="pln">    </span><span class="pun">}</span></p><p><span class="pln">    setInterval</span><span class="pun">(</span><span class="str">'autoRefreshPage()'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10000</span><span class="pun">);</span></p><p><span class="tag">&lt;/script&gt;</span></p><p><span class="tag">&lt;/html&gt;</span></p><p></p></pre>

	<li><p><strong class="step">Example 3(Using meta)</strong></p></li>
	<pre class="prettyprint lang-html prettyprinted" style=""><p></p><p><span class="dec">&lt;!DOCTYPE html&gt;</span></p><p><span class="tag">&lt;html&gt;</span></p><p><span class="tag">&lt;head&gt;</span></p><p><span class="pln">	</span><span class="tag">&lt;title&gt;</span><span class="pln">Page Reload after 10 seconds</span><span class="tag">&lt;/title&gt;</span></p><p><span class="pln">	</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"refresh"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"10"</span><span class="pln"> </span><span class="tag">/&gt;</span></p><p><span class="tag">&lt;/head&gt;</span></p><p><span class="tag">&lt;body&gt;</span></p><p><br></p><p><span class="tag">&lt;h2&gt;</span><span class="pln">Hi, I am Itsolutionstuff.com</span><span class="tag">&lt;/h2&gt;</span></p><p><br></p><p><span class="tag">&lt;/body&gt;</span></p><p><span class="tag">&lt;/html&gt;</span></p><p></p></pre>
</ul>

</body>



<script language=" JavaScript" >
<!-- 
function LoadOnce() 
{ 
window.location.reload(); 
} 
//-->
</script>

</html>









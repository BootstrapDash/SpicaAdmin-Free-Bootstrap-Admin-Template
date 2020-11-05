<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>jQuery Upload File Plugin Demo</title>
    <meta name="description" content="jQuery Upload File Plugin Demo- How to upload Multiple Files asynchronously(using jQuery Ajax) with progressbar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property='og:locale' content='en_US'/>    
	<link rel="author" href="https://plus.google.com/+RavishankerKusuma"/>    
    <link href="https://s3.amazonaws.com/hayageek/libs/jquery/bootstrap.min.css" rel="stylesheet">

	<link href="uploadfile.css" rel="stylesheet">
	<link href="uploadfile.custom.css" rel="stylesheet">
	
    <style>
    .highlight {
  display: none; /* hidden by default, until >480px */
  padding: 9px 14px;
  margin-bottom: 14px;
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
  border-radius: 4px;
}
.highlight pre {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  background-color: transparent;
  border: 0;
  white-space: nowrap;
}
.highlight pre code {
  font-size: inherit;
  color: #333; /* Effectively the base text color */
}
.highlight pre .lineno {
  display: inline-block;
  width: 22px;
  padding-right: 5px;
  margin-right: 10px;
  text-align: right;
  color: #bebec5;
}

/* Show code snippets when we have the space */
@media screen and (min-width: 481px) {
  .highlight {
    display: block;
  }
}
</style>
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
  </head>

  <body>
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a rel="tooltip" title="Github - jQuery Upload File" class="brand" target="__blank" href="https://github.com/hayageek/jquery-upload-file/">Github</a>
       <a rel="tooltip" title="Download Source &amp; Examples" class="brand" target="__blank" href="http://hayageek.com/examples/jquery/jquery-multiple-file-upload/zips/jQuery-File-Upload.zip">Download</a>       
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
          <li><a rel="tooltip" href="http://hayageek.com" title="Hayageek.com Home Page">Home</a></li>
        </ul>
        <ul class="nav pull-right" id="main-menu-right" >
        <li style="margin-top:15px;margin-right:5px;"><form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
 <input type="hidden" name="cmd" value="_xclick"> 
 <input type="hidden" name="business" value="rskusuma@yahoo.com"> 
 <input type="hidden" name="item_name" value="Support Hayageek.com"> 
 <input type="hidden" name="buyer_credit_promo_code" value=""> 
 <input type="hidden" name="buyer_credit_product_category" value=""> 
 <input type="hidden" name="buyer_credit_shipping_method" value=""> 
 <input type="hidden" name="buyer_credit_user_address_change" value=""> 
 <input type="hidden" name="no_shipping" value="0"> 
 <input type="hidden" name="no_note" value="1"> 
 <input type="hidden" name="currency_code" value="USD"> 
 <input type="hidden" name="tax" value="0"> 
 <input type="hidden" name="lc" value="US"> 
 <input type="hidden" name="bn" value="PP-DonationsBF"> 
 <div><input id="butt" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> </div>
</form>	</li>
        <li style="margin-top:15px;margin-right:5px;"><div data-href="http://hayageek.com/docs/jquery-upload-file.php" class="fb-like" data-layout="button_count" data-send="false" data-show-faces="false" data-width="120"></div></li>
        <li  style="margin-top:15px;"><a data-url="http://hayageek.com/docs/jquery-upload-file.php" href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"></a></li>
        <li style="margin-top:15px;"><div data-href="http://hayageek.com/docs/jquery-upload-file.php" class="g-plusone" data-annotation="inline" data-size="medium" data-width="120"></div></li>
        <form class="navbar-search pull-left" method="GET" action="http://hayageek.com/search.php">
            <input type="text" size="30" class="search-query" placeholder="Search" name="q" />
          </form>
 
        </ul>
 
       </div>
     </div>
   </div>
 </div>
 
  <div class="container">
<br/><br/>
<section id="typography">
  <div class="page-header">
    <h2>jQuery Upload File Plugin Demo</h2>
  </div>
<div style="width:728px;height:95px;">
<!-- <div id="bsap_1289820" class="bsarocks bsap_19097822778565d7c7d1cc1bcb8feb6a"></div> -->
</div>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
  
  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
		<li class="active"><a href="#start" data-toggle="tab">Getting Started</a></li>
		<li ><a href="#features" data-toggle="tab">Features</a></li>
        <li><a href="#doc" data-toggle="tab">API &amp; Options</a></li>
        <li><a href="#server" data-toggle="tab">Server Side</a></li>
        </ul>

<div id="tabcontent" class="tab-content">

              
<div class="tab-pane fade active in" id="start">
<p>
jQuery File UPload plugin provides Multiple file uploads with progress bar.
jQuery File Upload Plugin depends on <a href="http://malsup.com/jquery/form/">Ajax Form</a> Plugin, So Github contains source code with and without Form plugin.
</p>
1). Add the CSS and JS files in the <code>head</code> sections

<pre><code class="prettyprint">&lt;link href=&quot;http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;script src=&quot;http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js&quot;&gt;&lt;/script&gt;</code></pre>

<br/>

2). Add a div to <code>body</code> to handle file uploads
<pre><code class="prettyprint">&lt;div id=&quot;fileuploader&quot;&gt;Upload&lt;/div&gt;</code></pre>

<br>

3). Initialize the plugin when the <code>document</code> is ready.
<pre><code class="prettyprint">&lt;script&gt;
$(document).ready(function()
{
	$(&quot;#fileuploader&quot;).uploadFile({
	url:&quot;YOUR_FILE_UPLOAD_URL&quot;,
	fileName:&quot;myfile&quot;
	});
});
&lt;/script&gt;</code></pre>
<br/>
<b>Thats it.</b>
jQuery Ajax File uploader with progress bar is ready now.

</div>

<div class="tab-pane" id="features">
<p>
jQuery File upload plugin has the following features. <br>
<ul> 
<li ><a href="#single" >Single File Upload</a></li>

<li ><a href="#multi" >Multiple file Upload (Drag &amp; Drop)</a></li>
<li ><a href="#sequential" >Sequential file upload</a></li>
<li ><a href="#restrict" >File Restrictions</a></li>
<li ><a href="#local" >Localization (Multi-language)</a></li>

<li ><a href="#formdata" >Sending Form Data</a></li>
<li ><a href="#extrahtml" >Adding HTML elements to progressbar</a></li>
<li ><a href="#customui" >Custom UI</a></li>
<li ><a href="#events" >Upload Events</a></li>
<li ><a href="#deletedownload" >Delete / Download Uploaded files</a></li>
<li ><a href="#preview" >Image Preview</a></li>
<li ><a href="#showold" >Show previous uploads</a></li>

</ul>

<hr/>
<h4 id="single">1).Single File Upload</h4>
With the below configuration, plugin allows only single file upload (without drag &amp; drop). <br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#singleupload").uploadFile({
url:"upload.php",
multiple:false,
dragDrop:false,
maxFileCount:1,
fileName:"myfile"
});'); 
 ?> </code></pre><br/>
<div id="singleupload"></div>

<hr/>

<h4 id="multi">2).Multiple file Upload (Drag &amp;Drop)</h4>
With the below configuration, plugin supports multiple file upload with drag &amp; drop. <br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#multipleupload").uploadFile({
url:"upload.php",
multiple:true,
dragDrop:true,
fileName:"myfile"
});'); 
 ?> </code></pre><br/>
<div id="multipleupload"></div>
<hr/>

<h4 id="sequential">3).Sequential file Upload</h4>
With the below configuration, plugin uploads the file sequentially. 
you can control number of active uploads with <b>sequentialCount</b>. <br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#sequentialupload").uploadFile({
url:"upload.php",
fileName:"myfile",
sequential:true,
sequentialCount:1	
});'); 
 ?> </code></pre><br/>
<div id="sequentialupload"></div>

<hr/>

<h4 id="restrict">4).Upload with File Restrictions</h4>
With the below configuration, plugin allows only specific file types. <br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#restrictupload1").uploadFile({
url:"upload.php",
fileName:"myfile",
acceptFiles:"image/*"
});'); 
 ?> </code></pre><br/>
Output:
<div id="restrictupload1">Upload</div>
<br><br> <br>

With the below configuration, plugin allows only files lesser than the specified size/count. <br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#restrictupload2").uploadFile({
url:"upload.php",
fileName:"myfile",
maxFileCount:3,
maxFileSize:100*1024
});'); 
 ?> </code></pre><br/>
Output:
<div id="restrictupload2">Upload</div>


<hr>

<h4 id="local">5).Localization</h4>
With the below configuration, you can change all the plugin strings. <br>
Source: <pre><code class="prettyprint"> 
$(&quot;#localupload&quot;).uploadFile({
	url:&quot;upload.php&quot;,
	fileName:&quot;myfile&quot;,
	dragDropStr: &quot;&lt;span&gt;&lt;b&gt;Faites glisser et d&#233;posez les fichiers&lt;/b&gt;&lt;/span&gt;&quot;,
    abortStr:&quot;abandonner&quot;,
	cancelStr:&quot;r&#233;silier&quot;,
	doneStr:&quot;fait&quot;,
	multiDragErrorStr: &quot;Plusieurs Drag &amp;amp; Drop de fichiers ne sont pas autoris&#233;s.&quot;,
	extErrorStr:&quot;n&#39;est pas autoris&#233;. Extensions autoris&#233;es:&quot;,
	sizeErrorStr:&quot;n&#39;est pas autoris&#233;. Admis taille max:&quot;,
	uploadErrorStr:&quot;Upload n&#39;est pas autoris&#233;&quot;,
	uploadStr:&quot;T&#233;l&#233;chargez&quot;
	});
</code></pre><br/>
Output:
<div id="localupload"></div>

<hr>

<h4 id="formdata">6).Sending Form Data</h4>
With the below configuration, plugin sends the form data with every file uploaded. form data
can be accessed at server side using $_POST. <br>

Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#formdata1").uploadFile({
url:"upload.php",
fileName:"myfile",
formData: {"name":"Ravi","age":31}	
});'); 
 ?> </code></pre><br/>
Output:
<div id="formdata1">Upload</div>
<br> <br>
With the below configuration, plugin sends dynamic form data with every file upload. For example,
if you want to send updated 'input' value with the uploaded file. <br> 
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#formdata2").uploadFile({
url:"upload.php",
fileName:"myfile",
dynamicFormData: function()
{
	var data ={ location:"INDIA"}
	return data;
}
});'); 
 ?> </code></pre><br/>
Output:
<div id="formdata2">Upload</div>


<hr>

<h4 id="extrahtml">7).Add extra HTML Elements</h4>
With the below configuration,plugin allows to add extra HTML elements (input,textarea,select) to status bar.<br>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('var extraObj = $("#extraupload").uploadFile({
url:"upload.php",
fileName:"myfile",
extraHTML:function()
{
    	var html = "<div><b>File Tags:</b><input type=\'text\' name=\'tags\' value=\'\' /> <br/>";
		html += "<b>Category</b>:<select name=\'category\'><option value=\'1\'>ONE</option><option value=\'2\'>TWO</option></select>";
		html += "</div>";
		return html;    		
},
autoSubmit:false
});
$("#extrabutton").click(function()
{

	extraObj.startUpload();
});'); 
 ?> </code></pre><br/>
Output:
<div id="extraupload"></div>

<div id="extrabutton" class="ajax-file-upload-green">Start Upload</div>

<hr>

<h4 id="customui">8).Custom UI</h4>
Using the below configuration, you can design your own progress bar. <br/>
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('var count=0;
	$("#customupload1").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	showFileCounter:false,
	customProgressBar: function(obj,s)
		{
			this.statusbar = $("<div class=\'custom-statusbar\'></div>");
            this.preview = $("<img class=\'custom-preview\' />").width(s.previewWidth).height(s.previewHeight).appendTo(this.statusbar).hide();
            this.filename = $("<div class=\'custom-filename\'></div>").appendTo(this.statusbar);
            this.progressDiv = $("<div class=\'custom-progress\'>").appendTo(this.statusbar).hide();
            this.progressbar = $("<div class=\'custom-bar\'></div>").appendTo(this.progressDiv);
            this.abort = $("<div>" + s.abortStr + "</div>").appendTo(this.statusbar).hide();
            this.cancel = $("<div>" + s.cancelStr + "</div>").appendTo(this.statusbar).hide();
            this.done = $("<div>" + s.doneStr + "</div>").appendTo(this.statusbar).hide();
            this.download = $("<div>" + s.downloadStr + "</div>").appendTo(this.statusbar).hide();
            this.del = $("<div>" + s.deletelStr + "</div>").appendTo(this.statusbar).hide();
            
            this.abort.addClass("custom-red");
            this.done.addClass("custom-green");
			this.download.addClass("custom-green");            
            this.cancel.addClass("custom-red");
            this.del.addClass("custom-red");
            if(count++ %2 ==0)
	            this.statusbar.addClass("even");
            else
    			this.statusbar.addClass("odd"); 
			return this;
			
		}	
	});'); 
 ?> </code></pre><br/>
Output:
<div id="customupload1"></div>

<hr>


<h4 id="events">9).Upload Events</h4>
Below are the different callback events.
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#eventsupload").uploadFile({
url:"upload.php",
multiple:true,
fileName:"myfile",
returnType:"json",
onLoad:function(obj)
{
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Widget Loaded:");
},
onSubmit:function(files)
{
	$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Submitting:"+JSON.stringify(files));
	//return false;
},
onSuccess:function(files,data,xhr,pd)
{

	$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Success for: "+JSON.stringify(data));
	
},
afterUploadAll:function(obj)
{
	$("#eventsmessage").html($("#eventsmessage").html()+"<br/>All files are uploaded");
	

},
onError: function(files,status,errMsg,pd)
{
	$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Error for: "+JSON.stringify(files));
},
onCancel:function(files,pd)
{
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Canceled  files: "+JSON.stringify(files));
}
});'); 
 ?> </code></pre><br/>
Output:
<div id="eventsupload"></div>
<div id="eventsmessage"></div>
            
<hr>

<h4 id="deletedownload">10).Delete/Download Files</h4>
With the below configuration, plugin supports File download and File delete features. 
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#deleteupload").uploadFile({url: "upload.php",
dragDrop: true,
fileName: "myfile",
returnType: "json",
showDelete: true,
showDownload:true,
statusBarWidth:600,
dragdropWidth:600,
deleteCallback: function (data, pd) {
    for (var i = 0; i < data.length; i++) {
        $.post("delete.php", {op: "delete",name: data[i]},
            function (resp,textStatus, jqXHR) {
                //Show Message	
                alert("File Deleted");
            });
    }
    pd.statusbar.hide(); //You choice.

},
downloadCallback:function(filename,pd)
	{
		location.href="download.php?filename="+filename;
	}
});'); 
 ?> </code></pre><br/>
Output:
<div id="deleteupload"></div>

<hr>
<h4 id="preview">11).Image Preview</h4>
To enable image preview, use the below configuration.
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#previewupload").uploadFile({
url:"upload.php",
fileName:"myfile",
acceptFiles:"image/*",
showPreview:true,
 previewHeight: "100px",
 previewWidth: "100px",
});'); 
 ?> </code></pre><br/>
Output:
<div id="previewupload"></div>


<hr>
<h4 id="showold">12).Show already uploaded files</h4>
With the below configuration,plugin loads the previousily uploaded files.
Source: <pre><code class="prettyprint"> <?php  
 echo htmlentities('$("#showoldupload").uploadFile({url: "upload.php",
dragDrop: true,
fileName: "myfile",
returnType: "json",
showDelete: true,
showDownload:true,
statusBarWidth:600,
dragdropWidth:600,
maxFileSize:200*1024,
showPreview:true,
previewHeight: "100px",
previewWidth: "100px",

onLoad:function(obj)
   {
   	$.ajax({
	    	cache: false,
		    url: "load.php",
	    	dataType: "json",
		    success: function(data) 
		    {
			    for(var i=0;i<data.length;i++)
   	    	{ 
       			obj.createProgress(data[i]["name"],data[i]["path"],data[i]["size"]);
       		}
	        }
		});
  },
deleteCallback: function (data, pd) {
    for (var i = 0; i < data.length; i++) {
        $.post("delete.php", {op: "delete",name: data[i]},
            function (resp,textStatus, jqXHR) {
                //Show Message	
                alert("File Deleted");
            });
    }
    pd.statusbar.hide(); //You choice.

},
downloadCallback:function(filename,pd)
	{
		location.href="download.php?filename="+filename;
	}
});'); 
 ?> </code></pre><br/>
Output:
<div id="showoldupload"></div>        
            
 </div>
 
 <div class="tab-pane fade" id="single">
<p> 
<h4>Jquery File Upload </h4>
Source:
<pre><code class="prettyprint">$(&quot;#singleupload1&quot;).uploadFile({
	url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;
	});</code></pre>
Output:
<div id="singleupload1">Upload</div>

<br/><br/><br/>

<h4>Jquery File Upload with File Restrictions</h4>
Source:
<pre><code class="prettyprint">$(&quot;#singleupload2&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
allowedTypes:&quot;png,gif,jpg,jpeg&quot;,
fileName:&quot;myfile&quot;
});</code></pre>
Output:
<div id="singleupload2">Upload</div>

</p>
</div>
<div class="tab-pane fade" id="advanced">
<p>
<h4>Jquery Advanced File Upload </h4>
Source:
<pre><code class="prettyprint">var uploadObj = $(&quot;#advancedUpload&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
multiple:true,
autoSubmit:false,
fileName:&quot;myfile&quot;,
formData: {&quot;name&quot;:&quot;Ravi&quot;,&quot;age&quot;:31},
maxFileSize:1024*100,
maxFileCount:1,
dynamicFormData: function()
{
	var data ={ location:&quot;INDIA&quot;}
	return data;
},
showStatusAfterSuccess:false,
dragDropStr: &quot;&lt;span>&lt;b&gt;Faites glisser et déposez les fichiers&lt;/b&gt;&lt;/span&gt;&quot;,
abortStr:&quot;abandonner&quot;,
cancelStr:&quot;résilier&quot;,
doneStr:&quot;fait&quot;,
multiDragErrorStr: &quot;Plusieurs Drag &amp; Drop de fichiers ne sont pas autorisés.&quot;,
extErrorStr:&quot;n'est pas autorisé. Extensions autorisées:&quot;,
sizeErrorStr:&quot;n'est pas autorisé. Admis taille max:&quot;,
uploadErrorStr:&quot;Upload n'est pas autorisé&quot;

});
$(&quot;#startUpload&quot;).click(function()
{
	uploadObj.startUpload();
});</code></pre><br/>
Output:
<div id="advancedUpload">Téléchargez</div>

<br/><br/>
<div id="startUpload" class="ajax-file-upload-green">Start Upload</div>   
         
</p>
<br/>
<hr>
<p>
<h4>Jquery Delete File Option</h4>
<pre><code class="prettyprint">$(&quot;#deleteFileUpload&quot;).uploadFile({
 url: &quot;upload.php&quot;,
 dragDrop: true,
 fileName: &quot;myfile&quot;,
 returnType: &quot;json&quot;,
 showDelete: true,
 deleteCallback: function (data, pd) {
     for (var i = 0; i &lt; data.length; i++) {
         $.post(&quot;delete.php&quot;, {op: &quot;delete&quot;,name: data[i]},
             function (resp,textStatus, jqXHR) {
                 //Show Message	
                 alert(&quot;File Deleted&quot;);
             });
     }
     pd.statusbar.hide(); //You choice.
}
 });</code></pre>
Output: <div id="deleteFileUpload">File Upload (Delete)</div>

</p>

</div>
 
<div class="tab-pane fade" id="multi">
<p>                
<h4>Jquery Multiple File Upload </h4>

Source:
<pre><code class="prettyprint">$(&quot;#multipleupload&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
multiple:true,
fileName:&quot;myfile&quot;
});</code></pre><br/>
Output:
<div id="multipleupload">Upload</div>
</p>
</div>

<div class="tab-pane fade" id="events">
<p>
<h4>Jquery Upload File Events </h4>
Source:
<pre><code class="prettyprint">$(&quot;#eventsupload&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
multiple:true,
fileName:&quot;myfile&quot;,
onSubmit:function(files)
{
	$(&quot;#eventsmessage&quot;).html($(&quot;#eventsmessage&quot;).html()+&quot;&lt;br/&gt;Submitting:&quot;+JSON.stringify(files));
},
onSuccess:function(files,data,xhr)
{
	$(&quot;#eventsmessage&quot;).html($(&quot;#eventsmessage&quot;).html()+&quot;&lt;br/&gt;Success for: &quot;+JSON.stringify(data));
	
},
afterUploadAll:function()
{
	$(&quot;#eventsmessage&quot;).html($(&quot;#eventsmessage&quot;).html()+&quot;&lt;br/&gt;All files are uploaded&quot;);
	
},
onError: function(files,status,errMsg)
{
	$(&quot;#eventsmessage&quot;).html($(&quot;#eventsmessage&quot;).html()+&quot;&lt;br/&gt;Error for: &quot;+JSON.stringify(files));
}
});</code></pre><br/>
Output:
<div id="eventsupload">Upload</div>
<div id="eventsmessage"><b>Events:</b></div>
</p>
</div>

<div class="tab-pane fade" id="others">
<p>
<h4>Hide Cancel,Abort,Done Buttons</h4>
Source:
<pre><code class="prettyprint">$(&quot;#stylingupload1&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
multiple:true,
fileName:&quot;myfile&quot;,
showStatusAfterSuccess:false,
showAbort:false,
showDone:false,
});</code></pre><br/>
Output:
<div id="stylingupload1">Upload</div>

<br/><br/><br/>


<h4>Changing Upload Button style</h4>
Source:
<pre><code class="prettyprint">$(&quot;#stylingupload2&quot;).uploadFile({
url:&quot;http://hayageek.com/examples/jquery/ajax-multiple-file-upload/upload.php&quot;,
multiple:true,
fileName:&quot;myfile&quot;,
showStatusAfterSuccess:false,
showAbort:false,
showDone:false,
uploadButtonClass:&quot;ajax-file-upload-green&quot;
});</code></pre><br/>
Output:
<div id="stylingupload2">Upload</div>

</p>
</div>
 
 
<div class="tab-pane fade" id="doc">
<h4>jQuery Upload File API</h4> <br/>

<div id="preview" preview=""><h2 id="methods">Methods</h2>
<h3 id="uploadfile-options-">uploadFile( options )</h3>
<p> Creates Ajax form and uploads the files to server. </p>
<pre><code class="lang-javascript"><span class="hljs-keyword">var</span> uploadObj = $(<span class="hljs-string">"#uploadDivId"</span>).uploadFile(options);
</code></pre>
<h3 id="startupload-">startUpload()</h3>
<p> uploads all the selected files. This function is used when <code>autoSubmit</code> option is set to <code>false</code>.</p>
<pre><code class="lang-javascript">uploadObj.startUpload<span class="hljs-comment">()</span>;
</code></pre>
<h3 id="stopupload-">stopUpload()</h3>
<p>Aborts all the uploads</p>
<pre><code class="lang-javascript">uploadObj.stopUpload<span class="hljs-comment">()</span>;
</code></pre>
<h3 id="cancelall-">cancelAll()</h3>
<p>Cancel all the selected files ( when autoSubmit:false)</p>
<pre><code class="lang-javascript"><span class="hljs-attribute">uploadObj</span>.<span class="hljs-function">cancelAll</span>();
</code></pre>
<h3 id="remove-">remove()</h3>
<p>remove the widget from the document.</p>
<pre><code class="lang-javascript">uploadObj.<span class="hljs-keyword">remove</span>();
</code></pre>
<h3 id="reset-">reset()</h3>
<p>resets the widget properities</p>
<pre><code class="lang-javascript">uploadObj.reset<span class="hljs-comment">()</span>;
uploadObj.reset<span class="hljs-comment">(false)</span>;<span class="hljs-comment">//if you dont want remove the existing progress bars</span>
</code></pre>
<h3 id="getresponses-">getResponses()</h3>
<p>Responses from the server are collected  and returned.</p>
<pre><code class="lang-javascript">uploadObj.<span class="hljs-function"><span class="hljs-title">getResponses</span><span class="hljs-params">()</span></span>
</code></pre>
<hr>
<h2 id="options">Options</h2>
<h3 id="url">url</h3>
<p>Server URL which handles File uploads </p>
<h3 id="method">method</h3>
<p>Upload Form method type  <code>POST</code> or <code>GET</code>. Default is <code>POST</code></p>
<h3 id="enctype">enctype</h3>
<p>Upload Form enctype. Default is <code>multipart/form-data</code>.</p>
<h3 id="formdata">formData</h3>
<p>An object that should be send with file upload. </p>
<pre><code class="lang-javascript"><span class="hljs-string">formData:</span> { <span class="hljs-string">key1:</span> <span class="hljs-string">'value1'</span>, <span class="hljs-string">key2:</span> <span class="hljs-string">'value2'</span> }
</code></pre>
<h3 id="dynamicformdata">dynamicFormData</h3>
<p>To provide form data dynamically</p>
<pre><code class="lang-javascript"><span class="hljs-title">dynamicFormData</span>: function()
{
    //var <span class="hljs-typedef"><span class="hljs-keyword">data</span> ="<span class="hljs-type">XYZ</span>=1&amp;<span class="hljs-type">ABCD</span>=2";</span>
    var <span class="hljs-typedef"><span class="hljs-keyword">data</span> =<span class="hljs-container">{"<span class="hljs-type">XYZ</span>":1,"<span class="hljs-type">ABCD</span>":2}</span>;</span>
    return <span class="hljs-typedef"><span class="hljs-keyword">data</span>;        </span>
}
</code></pre>
<h3 id="extrahtml">extraHTML</h3>
<p>You can extra div elements to each statusbar.  This is useful only when you set <code>autoSubmit</code> to <code>false</code>. </p>
<pre><code class="lang-javascript">extraHTML:function()
    {
            var html = "<span class="hljs-tag">&lt;<span class="hljs-title">div</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">b</span>&gt;</span>File tags:<span class="hljs-tag">&lt;/<span class="hljs-title">b</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">input</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">'text'</span> <span class="hljs-attribute">name</span>=<span class="hljs-value">'tags'</span> <span class="hljs-attribute">value</span>=<span class="hljs-value">''</span> /&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-title">br</span>/&gt;</span>";
            html += "<span class="hljs-tag">&lt;<span class="hljs-title">b</span>&gt;</span>Directory<span class="hljs-tag">&lt;/<span class="hljs-title">b</span>&gt;</span>:<span class="hljs-tag">&lt;<span class="hljs-title">select</span> <span class="hljs-attribute">name</span>=<span class="hljs-value">'values'</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">option</span> <span class="hljs-attribute">value</span>=<span class="hljs-value">'1'</span>&gt;</span>ONE<span class="hljs-tag">&lt;/<span class="hljs-title">option</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">option</span> <span class="hljs-attribute">value</span>=<span class="hljs-value">'2'</span>&gt;</span>TWO<span class="hljs-tag">&lt;/<span class="hljs-title">option</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">select</span>&gt;</span>";
            html += "<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>";
            return html;            
    }
</code></pre>
<h3 id="customprogressbar">customProgressBar</h3>
<p>Using this you can add your own custom progress bar.</p>
<pre><code>    customProgressBar: <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(obj,s)</span>
        </span>{
            <span class="hljs-keyword">this</span>.statusbar = $(<span class="hljs-string">"&lt;div class='ajax-file-upload-statusbar'&gt;&lt;/div&gt;"</span>);
            <span class="hljs-keyword">this</span>.preview = $(<span class="hljs-string">"&lt;img class='ajax-file-upload-preview' /&gt;"</span>).width(s.previewWidth).height(s.previewHeight).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.filename = $(<span class="hljs-string">"&lt;div class='ajax-file-upload-filename'&gt;&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar);
            <span class="hljs-keyword">this</span>.progressDiv = $(<span class="hljs-string">"&lt;div class='ajax-file-upload-progress'&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.progressbar = $(<span class="hljs-string">"&lt;div class='ajax-file-upload-bar'&gt;&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.progressDiv);
            <span class="hljs-keyword">this</span>.abort = $(<span class="hljs-string">"&lt;div&gt;"</span> + s.abortStr + <span class="hljs-string">"&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.cancel = $(<span class="hljs-string">"&lt;div&gt;"</span> + s.cancelStr + <span class="hljs-string">"&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.done = $(<span class="hljs-string">"&lt;div&gt;"</span> + s.doneStr + <span class="hljs-string">"&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.download = $(<span class="hljs-string">"&lt;div&gt;"</span> + s.downloadStr + <span class="hljs-string">"&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();
            <span class="hljs-keyword">this</span>.del = $(<span class="hljs-string">"&lt;div&gt;"</span> + s.deletelStr + <span class="hljs-string">"&lt;/div&gt;"</span>).appendTo(<span class="hljs-keyword">this</span>.statusbar).hide();

            <span class="hljs-keyword">this</span>.abort.addClass(<span class="hljs-string">"ajax-file-upload-red"</span>);
            <span class="hljs-keyword">this</span>.done.addClass(<span class="hljs-string">"ajax-file-upload-green"</span>);
            <span class="hljs-keyword">this</span>.download.addClass(<span class="hljs-string">"ajax-file-upload-green"</span>);            
            <span class="hljs-keyword">this</span>.cancel.addClass(<span class="hljs-string">"ajax-file-upload-red"</span>);
            <span class="hljs-keyword">this</span>.del.addClass(<span class="hljs-string">"ajax-file-upload-red"</span>);
            <span class="hljs-keyword">if</span>(count++ %<span class="hljs-number">2</span> ==<span class="hljs-number">0</span>)
                <span class="hljs-keyword">this</span>.statusbar.addClass(<span class="hljs-string">"even"</span>);
            <span class="hljs-keyword">else</span>
                <span class="hljs-keyword">this</span>.statusbar.addClass(<span class="hljs-string">"odd"</span>); 
            <span class="hljs-keyword">return</span> <span class="hljs-keyword">this</span>;
        }
</code></pre><h3 id="sequential">sequential</h3>
<p>Enables sequential upload. You can limit the number of uploads by sequentialCount</p>
<pre><code class="lang-javascript"><span class="hljs-string">sequential:</span><span class="hljs-literal">true</span>,
<span class="hljs-string">sequentialCount:</span><span class="hljs-number">1</span>
</code></pre>
<p>With the above configuration, only one file is uploaded at a time.</p>
<h3 id="maxfilesize">maxFileSize</h3>
<p>Allowed Maximum file Size in bytes.</p>
<h3 id="maxfilecount">maxFileCount</h3>
<p>Allowed Maximum number of files to be uploaded </p>
<h3 id="returntype">returnType</h3>
<p>Expected data type of the response. One of: null, 'xml', 'script', or 'json'. The dataType option provides a means for specifying how the server response should be handled. This maps directly to jQuery's dataType method. The following values are supported:</p>
<ul>
<li>'xml': server response is treated as XML and the 'success' callback method, if specified, will be passed the responseXML value</li>
<li>'json': server response will be evaluted and passed to the 'success' callback, if specified</li>
<li>'script': server response is evaluated in the global context</li>
</ul>
<h3 id="allowedtypes">allowedTypes</h3>
<p>List of comma separated file extensions: Default is <code>"*"</code>. Example: <code>"jpg,png,gif"</code> </p>
<h3 id="acceptfiles">acceptFiles</h3>
<p>accept MIME type for file browse dialog. Default is <code>"<em>"</em></code><em>. Example: <code>"image/</code></em><code>"</code><br>check this for full list : <a href="http://stackoverflow.com/questions/11832930/html-input-file-accept-attribute-file-type-csv">http://stackoverflow.com/questions/11832930/html-input-file-accept-attribute-file-type-csv</a></p>
<h3 id="filename">fileName</h3>
<p>Name of the file input field. Default is <code>file</code></p>
<h3 id="multiple">multiple</h3>
<p>If it is set to <code>true</code>, multiple file selection is allowed. Default is<code>false</code></p>
<h3 id="dragdrop">dragDrop</h3>
<p>Drag drop is enabled if it is set to <cod>true</cod></p>
<h3 id="autosubmit">autoSubmit</h3>
<p>If it is set to <code>true</code>, files are uploaded automatically. Otherwise you need to call <code>.startUpload</code> function. Default is<code>true</code></p>
<h3 id="showcancel">showCancel</h3>
<p>If it is set to <code>false</code>, Cancel button is hidden when <code>autoSubmit</code> is false. Default is<code>true</code> </p>
<h3 id="showabort">showAbort</h3>
<p>If it is set to <code>false</code>, Abort button is hidden when the upload is in progress. Default is<code>true</code></p>
<h3 id="showdone">showDone</h3>
<p>If it is set to <code>false</code>, Done button is hidden when the upload is completed. Default is<code>true</code></p>
<h3 id="showdelete">showDelete</h3>
<p>If it is set to <code>true</code>, Delete button is shown when the upload is completed. Default is<code>false</code>,You need to 
implement deleteCallback() function.</p>
<h3 id="showdownload">showDownload</h3>
<p>If it is set to <code>true</code>, Download button is shown when the upload is completed. Default is<code>false</code>,You need to 
implement downloadCallback() function.</p>
<h3 id="showstatusaftersuccess">showStatusAfterSuccess</h3>
<p>If it is set to <code>false</code>, status box will be hidden after the upload is done. Default is<code>true</code> </p>
<h3 id="showerror">showError</h3>
<p>If it is set to <code>false</code>, Errors are not shown to user. Default is<code>true</code> </p>
<h3 id="showfilecounter">showFileCounter</h3>
<p>If it is set to <code>true</code>, File counter is shown with name. Default is<code>true</code>
File Counter style can be changed using <code>fileCounterStyle</code>. Default is <code>). </code></p>
<h3 id="showprogress">showProgress</h3>
<p>If it is set to <code>true</code>, Progress precent is shown to user. Default is<code>false</code> </p>
<h3 id="showfilesize">showFileSize</h3>
<p>If it is set to <code>true</code>, File size is shown </p>
<h3 id="showpreview">showPreview</h3>
<p>If it is set to <code>true</code>, preview is shown to images. Default is<code>false</code> </p>
<h3 id="previewheight">previewHeight</h3>
<p>is used to set preview height. Default is : "auto"</p>
<h3 id="previewwidth">previewWidth</h3>
<p>is used to set preview width. Default :"100%"</p>
<h3 id="showqueuediv">showQueueDiv</h3>
<p>Using this you can place the progressbar wherever you want. </p>
<pre><code class="lang-javascript"><span class="hljs-label">showQueueDiv:</span> <span class="hljs-string">"output"</span>
</code></pre>
<p>progress bar is added to a div with id <code>output</code></p>
<h3 id="statusbarwidth">statusBarWidth</h3>
<p>Using this you can set status bar width</p>
<h3 id="dragdropwidth">dragdropWidth</h3>
<p>Using this you can set drag and drop div width</p>
<h3 id="update">update</h3>
<p>update plugin options runtime.</p>
<pre><code class="lang-javascript">uploadObj.update({<span class="hljs-string">autoSubmit:</span><span class="hljs-literal">true</span>,<span class="hljs-string">maxFileCount:</span><span class="hljs-number">3</span>,<span class="hljs-string">showDownload:</span><span class="hljs-literal">false</span>});
</code></pre>
<h3 id="onload">onLoad</h3>
<p>callback back to be invoked when the plugin is initialized. This can be used to show existing files..   </p>
<pre><code class="lang-javascript">    onLoad:<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(obj)</span>
    </span>{
        $.ajax({
            cache: <span class="hljs-literal">false</span>,
            url: <span class="hljs-string">"load.php"</span>,
            dataType: <span class="hljs-string">"json"</span>,
            success: <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(data)</span> 
            </span>{
                <span class="hljs-keyword">for</span>(<span class="hljs-keyword">var</span> i=<span class="hljs-number">0</span>;i&lt;data.length;i++)
                {
                    obj.createProgress(data[i]);
                }
            }
        });
   },
</code></pre>
<h3 id="onselect">onSelect</h3>
<p>callback back to be invoked when the file selected.   </p>
<pre><code class="lang-javascript"><span class="hljs-tag">onSelect</span><span class="hljs-pseudo">:function</span>(files)
{
    <span class="hljs-attribute">files</span>[<span class="hljs-number">0</span>].name;
    <span class="hljs-attribute">files</span>[<span class="hljs-number">0</span>].size;
    <span class="hljs-attribute">return</span> true; <span class="hljs-comment">//to allow file submission.</span>
}
</code></pre>
<h3 id="onsubmit">onSubmit</h3>
<p>callback back to be invoked before the file upload.   </p>
<pre><code class="lang-javascript">onSubmit:<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(files)</span>
</span>{
    <span class="hljs-comment">//files : List of files to be uploaded</span>
    <span class="hljs-comment">//return flase;   to stop upload</span>
}
</code></pre>
<h3 id="onsuccess">onSuccess</h3>
<p>callback to be invoked when the upload is successful. </p>
<pre><code class="lang-javascript">onSuccess:<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(files,data,xhr,pd)</span>
</span>{
    <span class="hljs-comment">//files: list of files</span>
    <span class="hljs-comment">//data: response from server</span>
    <span class="hljs-comment">//xhr : jquer xhr object</span>
}
</code></pre>
<h3 id="afteruploadall">afterUploadAll</h3>
<p>callback to be invoked when all the files are uploaded.</p>
<pre><code class="lang-javascript">afterUploadAll:<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(obj)</span>
</span>{
    <span class="hljs-comment">//You can get data of the plugin using obj</span>
}
</code></pre>
<h3 id="onerror">onError</h3>
<p>callback  to be invoked when the upload is failed. </p>
<pre><code class="lang-javascript">onError: <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(files,status,errMsg,pd)</span>
</span>{
    <span class="hljs-comment">//files: list of files</span>
    <span class="hljs-comment">//status: error status</span>
    <span class="hljs-comment">//errMsg: error message</span>
}
</code></pre>
<h3 id="oncancel">onCancel</h3>
<p>callback  to be invoked when user cancel the file ( when autosubmit:false)</p>
<pre><code class="lang-javascript">onCancel: <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(files,pd)</span>
</span>{
    <span class="hljs-comment">//files: list of files</span>
    <span class="hljs-comment">//pd:  progress div</span>
}
</code></pre>
<h3 id="deletecallback">deleteCallback</h3>
<p>callback  to be invoked when the user clicks on Delete button.</p>
<pre><code class="lang-javascript">deleteCallback: <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(data,pd)</span>
</span>{
    <span class="hljs-keyword">for</span>(<span class="hljs-keyword">var</span> i=<span class="hljs-number">0</span>;i&lt;data.length;i++)
    {
         $.post(<span class="hljs-string">"delete.php"</span>,{op:<span class="hljs-string">"delete"</span>,name:data[i]},
        <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(resp, textStatus, jqXHR)</span>
        </span>{
            <span class="hljs-comment">//Show Message    </span>
            alert(<span class="hljs-string">"File Deleted"</span>);        
        });
     }        
    pd.statusbar.hide(); <span class="hljs-comment">//You choice to hide/not.</span>

}
</code></pre>
<h3 id="downloadcallback">downloadCallback</h3>
<p>callback  to be invoked when the user clicks on Download button.</p>
<pre><code class="lang-javascript">downloadCallback:<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">(files,pd)</span>
</span>{
    location.href=<span class="hljs-string">"download.php?filename="</span>+files[<span class="hljs-number">0</span>];
}
</code></pre>
<hr>
<h1 id="custom-errors">Custom Errors</h1>
<p>you can send custom errors from server. like "File exists".
for custom errors,expected json object from server is:</p>
<pre><code class="lang-javascript">
{"<span class="hljs-attribute">jquery-upload-file-error</span>":<span class="hljs-value"><span class="hljs-string">"File already exists"</span></span>}
</code></pre>
</div>

</div>

<div class="tab-pane fade" id="server">
<p>
<h3> PHP code for handling Multiple file uploads </h3>
upload.php Source:
<pre><code class="prettyprint">&lt;?php
$output_dir = &quot;uploads/&quot;;
if(isset($_FILES[&quot;myfile&quot;]))
{
	$ret = array();

	$error =$_FILES[&quot;myfile&quot;][&quot;error&quot;];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES[&quot;myfile&quot;][&quot;name&quot;])) //single file
	{
 	 	$fileName = $_FILES[&quot;myfile&quot;][&quot;name&quot;];
 		move_uploaded_file($_FILES[&quot;myfile&quot;][&quot;tmp_name&quot;],$output_dir.$fileName);
    	$ret[]= $fileName;
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES[&quot;myfile&quot;][&quot;name&quot;]);
	  for($i=0; $i &lt; $fileCount; $i++)
	  {
	  	$fileName = $_FILES[&quot;myfile&quot;][&quot;name&quot;][$i];
		move_uploaded_file($_FILES[&quot;myfile&quot;][&quot;tmp_name&quot;][$i],$output_dir.$fileName);
	  	$ret[]= $fileName;
	  }
	
	}
    echo json_encode($ret);
 }
 ?&gt;</code></pre><br/>


</p>
<br/>
delete.php Source code:
<pre><code class="prettyprint">&lt;?php
$output_dir = &quot;uploads/&quot;;
if(isset($_POST[&quot;op&quot;]) &amp;&amp; $_POST[&quot;op&quot;] == &quot;delete&quot; &amp;&amp; isset($_POST[&#39;name&#39;]))
{
	$fileName =$_POST[&#39;name&#39;];
	$filePath = $output_dir. $fileName;
	if (file_exists($filePath)) 
	{
        unlink($filePath);
    }
	echo &quot;Deleted File &quot;.$fileName.&quot;&lt;br&gt;&quot;;
}
?&gt;</code></pre>

<h3> Server settings for Large file uploads</h3>
<b>php.ini settings </b>
<pre><code class="prettyprint">max_file_uploads = 2000
upload_max_filesize = 40000M
max_input_vars = 10000
post_max_size = 40000M
</code></pre>
<br>
<b>httpd.conf settings</b>   
 <pre><code class="prettyprint">php_value suhosin.post.max_vars 10000
php_value suhosin.request.max_vars 10000
php_value suhosin.get.max_array_depth 2000
php_value suhosin.get.max_vars 10000
php_value suhosin.upload.max_uploads 2000
</code></pre>   
</div>
 
 
</section>




<br/>
<!-- <ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-0923466578214929"
     data-ad-slot="6444020521"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
 -- >

<div class="row">
<div class="well">
<b>Please Share it with your friends if you like the plugin:</b><br/><br/>
<a data-url="http://hayageek.com/docs/jquery-upload-file.php" href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"></a>
<div data-href="http://hayageek.com/docs/jquery-upload-file.php" class="g-plusone" data-annotation="inline" data-size="medium" data-width="120"></div>
<div data-href="http://hayageek.com/docs/jquery-upload-file.php" class="fb-like" data-layout="button_count" data-send="false" data-show-faces="false" data-width="120"></div>

<br/> <br/>

<div class="g-person" data-width="450" data-href="//plus.google.com/118255177648356108079" data-layout="landscape" data-rel="author"></div>
<form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
 <input type="hidden" name="cmd" value="_xclick"> 
 <input type="hidden" name="business" value="rskusuma@yahoo.com"> 
 <input type="hidden" name="item_name" value="Support Hayageek.com"> 
 <input type="hidden" name="buyer_credit_promo_code" value=""> 
 <input type="hidden" name="buyer_credit_product_category" value=""> 
 <input type="hidden" name="buyer_credit_shipping_method" value=""> 
 <input type="hidden" name="buyer_credit_user_address_change" value=""> 
 <input type="hidden" name="no_shipping" value="0"> 
 <input type="hidden" name="no_note" value="1"> 
 <input type="hidden" name="currency_code" value="USD"> 
 <input type="hidden" name="tax" value="0"> 
 <input type="hidden" name="lc" value="US"> 
 <input type="hidden" name="bn" value="PP-DonationsBF"> 
 <div><input id="butt" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> </div>
</form>	
</div>
</div>
<div class="row">
<div id="disqus_thread">Loading Comments...</div>
</div>

     <!-- Footer
      ================================================== -->
      <hr>

      <footer id="footer">
        <p class="pull-right"><a href="#top">Back to top</a></p>
        <div class="links">
          <a href="http://hayageek.com" >Blog</a>
        </div>
      </footer>

    </div><!-- /container -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<script src="jquery.uploadfile.js"></script>

<script>	

function loadSocial(){
	
		$.getScript('http://platform.twitter.com/widgets.js');
		 $.getScript("http://connect.facebook.net/en_US/all.js#xfbml=1", function () {
            FB.init({ status: true, cookie: true, xfbml: true });
        });
        $.getScript('https://apis.google.com/js/plusone.js',function()
        {
         	$(".g-plusone").each(function () {
        		    gapi.plusone.render($(this).get(0));
		        });
        });
	
}
	$(document).ready(function()
	{

		$('a[rel=tooltip]').tooltip({'placement': 'bottom'});
	});
	
$(document).ready(function()
{
	$("#singleupload").uploadFile({
	url:"upload.php",
	multiple:false,
	dragDrop:false,
	maxFileCount:1,
	fileName:"myfile"
	});

	

	$("#multipleupload").uploadFile({
	url:"upload.php",
	multiple:true,
	dragDrop:true,
	fileName:"myfile"
	});
	
	
	$("#sequentialupload").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	sequential:true,
	sequentialCount:1	
	});

	$("#restrictupload1").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	acceptFiles:"image/*"
	});
	
	$("#restrictupload2").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	maxFileCount:3,
	maxFileSize:100*1024
	});
	
	
	$("#localupload").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	dragDropStr: "<span><b>Faites glisser et déposez les fichiers</b></span>",
    abortStr:"abandonner",
	cancelStr:"résilier",
	doneStr:"fait",
	multiDragErrorStr: "Plusieurs Drag &amp; Drop de fichiers ne sont pas autorisés.",
	extErrorStr:"n'est pas autorisé. Extensions autorisées:",
	sizeErrorStr:"n'est pas autorisé. Admis taille max:",
	uploadErrorStr:"Upload n'est pas autorisé",
	uploadStr:"Téléchargez"
	});
	
	
	$("#formdata1").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	formData: {"name":"Ravi","age":31}	
	});
	
	$("#formdata2").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	dynamicFormData: function()
	{
		var data ={ location:"INDIA"}
		return data;
	}
	});
	
	var extraObj = $("#extraupload").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	extraHTML:function()
    {
	    	var html = "<div><b>File Tags:</b><input type='text' name='tags' value='' /> <br/>";
    		html += "<b>Category</b>:<select name='values'><option value='1'>ONE</option><option value='2'>TWO</option></select>";
			html += "</div>";
			return html;    		
    },
    autoSubmit:false
	});
	
	$("#extrabutton").click(function()
	{
	
		extraObj.startUpload();
	});
	
	
	var count=0;
	$("#customupload1").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	showFileCounter:false,
	customProgressBar: function(obj,s)
		{
			this.statusbar = $("<div class='custom-statusbar'></div>");
            this.preview = $("<img class='custom-preview' />").width(s.previewWidth).height(s.previewHeight).appendTo(this.statusbar).hide();
            this.filename = $("<div class='custom-filename'></div>").appendTo(this.statusbar);
            this.progressDiv = $("<div class='custom-progress'>").appendTo(this.statusbar).hide();
            this.progressbar = $("<div class='custom-bar'></div>").appendTo(this.progressDiv);
            this.abort = $("<div>" + s.abortStr + "</div>").appendTo(this.statusbar).hide();
            this.cancel = $("<div>" + s.cancelStr + "</div>").appendTo(this.statusbar).hide();
            this.done = $("<div>" + s.doneStr + "</div>").appendTo(this.statusbar).hide();
            this.download = $("<div>" + s.downloadStr + "</div>").appendTo(this.statusbar).hide();
            this.del = $("<div>" + s.deletelStr + "</div>").appendTo(this.statusbar).hide();
            
            this.abort.addClass("custom-red");
            this.done.addClass("custom-green");
			this.download.addClass("custom-green");            
            this.cancel.addClass("custom-red");
            this.del.addClass("custom-red");
            if(count++ %2 ==0)
	            this.statusbar.addClass("even");
            else
    			this.statusbar.addClass("odd"); 
			return this;
			
		}	
	});
	
	
	

	
	$("#eventsupload").uploadFile({
	url:"upload.php",
	multiple:true,
	fileName:"myfile",
	returnType:"json",
	onLoad:function(obj)
	{
			$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Widget Loaded:");
	},
	onSubmit:function(files)
	{
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Submitting:"+JSON.stringify(files));
		//return false;
	},
	onSuccess:function(files,data,xhr,pd)
	{
	
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Success for: "+JSON.stringify(data));
		
	},
	afterUploadAll:function(obj)
	{
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>All files are uploaded");
		
	
	},
	onError: function(files,status,errMsg,pd)
	{
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Error for: "+JSON.stringify(files));
	},
	onCancel:function(files,pd)
	{
			$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Canceled  files: "+JSON.stringify(files));
	}
	});
	
	
	
	
var deleteuploadObj = $("#deleteupload").uploadFile({url: "upload.php",
 dragDrop: true,
 fileName: "myfile",
 returnType: "json",
 showDelete: true,
 showDownload:true,
 statusBarWidth:600,
 dragdropWidth:600,
 deleteCallback: function (data, pd) {
     for (var i = 0; i < data.length; i++) {
         $.post("delete.php", {op: "delete",name: data[i]},
             function (resp,textStatus, jqXHR) {
                 //Show Message	
                 alert("File Deleted");
             });
     }
     pd.statusbar.hide(); //You choice.

 },
 downloadCallback:function(filename,pd)
	{
		location.href="download.php?filename="+filename;
	}
 });
	
	
	$("#previewupload").uploadFile({
	url:"upload.php",
	fileName:"myfile",
	acceptFiles:"image/*",
	showPreview:true,
	 previewHeight: "100px",
     previewWidth: "100px",
	});
	
	
$("#showoldupload").uploadFile({url: "upload.php",
 dragDrop: true,
 fileName: "myfile",
 returnType: "json",
 showDelete: true,
 showDownload:true,
 statusBarWidth:600,
 dragdropWidth:600,
 maxFileSize:200*1024,
 showPreview:true,
 previewHeight: "100px",
 previewWidth: "100px",

 onLoad:function(obj)
    {
    	$.ajax({
	    	cache: false,
		    url: "load.php",
	    	dataType: "json",
		    success: function(data) 
		    {
			    for(var i=0;i<data.length;i++)
    	    	{
        			obj.createProgress(data[i]['name'],data[i]['path'],data[i]['size']);
        		}
	        }
		});
   },
 deleteCallback: function (data, pd) {
     for (var i = 0; i < data.length; i++) {
         $.post("delete.php", {op: "delete",name: data[i]},
             function (resp,textStatus, jqXHR) {
                 //Show Message	
                 alert("File Deleted");
             });
     }
     pd.statusbar.hide(); //You choice.

 },
 downloadCallback:function(filename,pd)
	{
		location.href="download.php?filename="+filename;
	}
 });
	
	
	$("#stylingupload1").uploadFile({
	url:"upload.php",
	multiple:true,
	fileName:"myfile",
	showStatusAfterSuccess:false,
	showAbort:false,
	showDone:false,
	});

	$("#stylingupload2").uploadFile({
	url:"upload.php",
	multiple:true,
	fileName:"myfile",
	showStatusAfterSuccess:false,
	showAbort:false,
	showDone:false,
	uploadButtonClass:"ajax-file-upload-green"
	});
	
});
</script>	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37706919-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
jQuery(document).ready(function($) {
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'hayageek'; // required: replace example with your forum shortname
		var disqus_loaded=false;
		if($("#disqus_thread").length > 0)
		{
			$(window).scroll(function () 
			{
				if(!disqus_loaded)
				{
//				loadSocial();
				/* * * DON'T EDIT BELOW THIS LINE * * */
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					disqus_loaded = true;
				}
			});
		}
});
</script>
  </body>
</html>

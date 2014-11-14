Single Upload Image
===================

jQuery plugin for upload a image, simple and elegant.

#### What is it?

upload a image return image url and custom data. click image button upload, display progress percent, finish display this image into image button.

Demo http://www.chengxufan.com/codes/jquery.singleuploadimage.js/example

#### How do I use it?

1. Include [jQuery](http://jquery.com/ "jQuery") follwed by `jQuery.singleuploadimage.js`. There is also a minified script include.

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jQuery.singleuploadimage.js"></script>
```

2. Add `div` and `input` in your html.

```html
<div id="uploadbox" onClick="singleupload_input.click();" class="singleupload"></div>
<input type="file" id="singleupload_input" style="display:none;" name="img" value=""/>
```

3. Add `css style` a class of `.singleupload`.

```css
.singleupload {
	background: url(empty_bg.png);
	border:1px solid #ccc;
	text-align: center;
	width: 92px;
	height: 92px;
	line-height: 92px;
}
```

4. Add `script`.

```javascript
$(function() {
	$('#uploadbox').singleupload({
		action: 'do_upload.php', //action: 'do_upload.php'
		inputId: 'singleupload_input',
		onError: function(code) {
			console.debug('error code '+res.code);
		}
		/* ,onSucess: function(url, data) {} */
		/*,onProgress: function(loaded, total) {} */
	});
});
```

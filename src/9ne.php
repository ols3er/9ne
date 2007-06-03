<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>9ne</title>
	<meta name="author" content="Rob Rohan">
	
	<!-- just include all of Sortie -->
	<script type="text/javascript" src="http://thoth.robrohan.com/projects/sortie/Sortie_0.6.6.js" encoding="utf-8"></script>
	<script type="text/javascript">
		Sortie.Core.$({
			include:new Array(
				<?php
					$user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']) : "";
					if(stristr($user_agent, "Mac")) {
						print('"bindings/MacBindings.js",');
					} else {
						print('"bindings/WindowsBindings.js",');
					}
				?>
				
				//"modes/css/Mode.js",
				//"modes/javascript/Mode.js",
				//"modes/release/Mode.js",
				//"modes/text/Mode.js",
				//"modes/xml/Mode.js",
				
				//"thirdparty/yahoo-min.js",
				//"thirdparty/event-min.js",
				//"thirdparty/animation-min.js",
				//"thirdparty/container-min.js",
				//"thirdparty/dom-min.js",
				
				"src/9neMain.js",
				"src/Keys.js",
				"src/Modes.js",
				"src/Functions.js",
				"src/Undo.js"
			)
		});
		Sortie.Core.Include();
	</script>
	
	<script type="text/javascript">
		INSTALL_LOCATION = "http://192.168.1.3/9ne";
		MAIN_FILE = "9ne.php";
	</script>
	
	<link rel="stylesheet" type="text/css" href="style/Editor.css" encoding="utf-8">
	<link rel="stylesheet" type="text/css" href="style/theme/Default.css" encoding="utf-8">
	
	<?php
		//$user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']) : "";
		//if(stristr($user_agent, "Mac")) {
		//	print('<script type="text/javascript" src="bindings/MacBindings.js" encoding="utf-8"></script>');
		//} else {
		//	print('<script type="text/javascript" src="bindings/WindowsBindings.js" encoding="utf-8"></script>');
		//}
	?>
	<!-- <script type="text/javascript" src="src/Keys.js" encoding="utf-8"></script>
	<script type="text/javascript" src="src/Modes.js" encoding="utf-8"></script>
	<script type="text/javascript" src="src/Functions.js" encoding="utf-8"></script>
	<script type="text/javascript" src="src/9neMain.js" encoding="utf-8"></script>
	<script type="text/javascript" src="src/Undo.js" encoding="utf-8"></script> -->
	
	<!-- Supported Modes
	<script type="text/javascript" src="modes/css/Mode.js" encoding="utf-8"></script>
	<script type="text/javascript" src="modes/javascript/Mode.js" encoding="utf-8"></script>
	<script type="text/javascript" src="modes/release/Mode.js" encoding="utf-8"></script>
	<script type="text/javascript" src="modes/text/Mode.js" encoding="utf-8"></script>
	<script type="text/javascript" src="modes/xml/Mode.js" encoding="utf-8"></script> -->
</head>
<body onload="initEditor(); editor_focus();" onbeforeunload="return kill_9ne(); false; editor_focus();" onfocus="editor_focus();" onblur="editor_focus();">
	<div id="editor" onmousedown="editor_focus()" onfocus="editor_focus();" onblur="editor_focus();">
		<div onmousedown="editor_focus()" id="editorgutter" onfocus="editor_focus();" onblur="editor_focus();"></div>
		<div onmousedown="editor_focus()" id="editortext" onfocus="editor_focus();" onblur="editor_focus();"></div>
	</div>
	<div id="statusbar">-u:-- *scratch* (1,0) (Text)</div>
	<input type="text" id="minibuffer" onblur="editor_focus();" onfocus="editor_focus();" disabled>
	<span id="editorCaret">W</span>
	<span id="editorSecondCaret">W</span>
	<span id="editorMessages"></span>
	
	<div id="offscreen" style="position: absolute; top: -10000px; left: -10000px;">
	<form>
	<textarea id="fakefocus" onchange="if(this.value.length > 1){ alert(this.value); this.value = ''; editor_focus(); }"></textarea>
	<textarea id="fakefocus2" onfocus="editor_focus();"></textarea>
	</form>
	</div>
	<div id="dialog" 
		style="position: absolute; top: -100000px; left: -100000px; max-height: 300px; max-width: 300px; z-index: 2000; color: red; background: white; overflow: auto;"
		onblur="editor_focus()"
	>TEST!</div>
</body>
</html>
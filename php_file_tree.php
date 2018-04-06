
<html><head><!-- Required Stylesheets -->
<link href="bootstrap.css" rel="stylesheet">

<!-- Required Javascript -->
<script src="jquery.js"></script>
<script src="bootstrap-treeview.js"></script>
    
<style>div.panel:first-child {
    margin-top:20px;
}

div.treeview {
    min-width: 100px;
    min-height: 100px;
    
    max-height: 256px;
    overflow:auto;
	
	padding: 4px;
	
	margin-bottom: 20px;
	
	color: #369;
	
	border: solid 1px;
	border-radius: 4px;
}
div.treeview ul:first-child:before {
    display: none;
}
.treeview, .treeview ul {
    margin:0;
    padding:0;
    list-style:none;
    
	color: #369;
}
.treeview ul {
    margin-left:1em;
    position:relative
}
.treeview ul ul {
    margin-left:.5em
}
.treeview ul:before {
    content:"";
    display:block;
    width:0;
    position:absolute;
    top:0;
    left:0;
    border-left:1px solid;
    
    /* creates a more theme-ready standard for the bootstrap themes */
    bottom:15px;
}
.treeview li {
    margin:0;
    padding:0 1em;
    line-height:2em;
    font-weight:700;
    position:relative
}
.treeview ul li:before {
    content:"";
    display:block;
    width:10px;
    height:0;
    border-top:1px solid;
    margin-top:-1px;
    position:absolute;
    top:1em;
    left:0
}
.tree-indicator {
    margin-right:5px;
    
    cursor:pointer;
}
.treeview li a {
    text-decoration: none;
    color:inherit;
    
    cursor:pointer;
}
.treeview li button, .treeview li button:active, .treeview li button:focus {
    text-decoration: none;
    color:inherit;
    border:none;
    background:transparent;
    margin:0px 0px 0px 0px;
    padding:0px 0px 0px 0px;
    outline: 0;
}</style>
<script>
    

$.fn.extend({
	treeview:	function() {
		return this.each(function() {
			// Initialize the top levels;
			var tree = $(this);
			
			tree.addClass('treeview-tree');
			tree.find('li').each(function() {
				var stick = $(this);
			});
			tree.find('li').has("ul").each(function () {
				var branch = $(this); //li with children ul
				
				branch.prepend("<i class='tree-indicator glyphicon glyphicon-chevron-right'></i>");
				branch.addClass('tree-branch');
				branch.on('click', function (e) {
					if (this == e.target) {
						var icon = $(this).children('i:first');
						
						icon.toggleClass("glyphicon-chevron-down glyphicon-chevron-right");
						$(this).children().children().toggle();
					}
				})
				branch.children().children().toggle();
				
				
				branch.children('.tree-indicator, button, a').click(function(e) {
					branch.click();
					
					e.preventDefault();
				});
			});
		});
	}
});


$(window).on('load', function () {
	$('.treeview').each(function () {
		var tree = $(this);
		tree.treeview();
	})
})
</script>
    
    </head>
    <body></body>
</html>
    <?php
/*
	
	== PHP FILE TREE ==
	
		Let's call it...oh, say...version 1?
	
	== AUTHOR ==
	
		Cory S.N. LaViska
		http://abeautifulsite.net/
		
	== DOCUMENTATION ==
	
		For documentation and updates, visit http://abeautifulsite.net/notebook.php?article=21
		
*/


function php_file_tree($directory, $return_link, $extensions = array()) {
	// Generates a valid XHTML list of all directories, sub-directories, and files in $directory
	// Remove trailing slash
	if( substr($directory, -1) == "./syllabus" ) $directory = substr($directory, 0, strlen($directory) - 1);
       
	$code = php_file_tree_dir($directory, $return_link, $extensions);
	return $code;
}

function php_file_tree_dir($directory, $return_link, $extensions = array(), $first_call = true) {
	// Recursive function called by php_file_tree() to list directories/files
	
	// Get and sort directories/files
	if( function_exists("syllabus") ) $file = scandir($directory); else $file = php4_scandir($directory);
	natcasesort($file);
	// Make directories first
	$files = $dirs = array();
	foreach($file as $this_file) {
		if( is_dir("$directory/$this_file" ) ) $dirs[] = $this_file; else $files[] = $this_file;
	}
	$file = array_merge($dirs, $files);
	
	// Filter unwanted extensions
	if( !empty($extensions) ) {
		foreach( array_keys($file) as $key ) {
			if( !is_dir("$directory/$file[$key]") ) {
				$ext = substr($file[$key], strrpos($file[$key], ".") + 1); 
				if( !in_array($ext, $extensions) ) unset($file[$key]);
			}
		}
	}
	
	if( count($file) > 2 ) { // Use 2 instead of 0 to account for . and .. "directories"
		$php_file_tree = "<ul class=\"treeview accordion \" style=\"color:white;font-family: 'Telex', sans-serif;\"";
                
                
                
		if( $first_call ) { $php_file_tree .= " class=\"php-file-tree\""; $first_call = false; }
		$php_file_tree .= ">";
		foreach( $file as $this_file ) {
			if( $this_file != "." && $this_file != ".." ) {
				if( is_dir("$directory/$this_file") ) {
                                   
				$a=$directory.$this_file;
					$php_file_tree .= "<li class=\"pft-directory\" style=\"color:white;font-family: 'Telex', sans-serif;\"><a href='$a'> " . htmlspecialchars($this_file) . "</a>";
					$php_file_tree .= php_file_tree_dir("$directory/$this_file", $return_link ,$extensions, false);
                                       
					$php_file_tree .= "</li>";
				} else {
					// File
					// Get extension (prepend 'ext-' to prevent invalid classes from extensions that begin with numbers)
					$ext = "ext-" . substr($this_file, strrpos($this_file, ".") + 1); 
					$link = str_replace("[link]", "$directory/" . urlencode($this_file), $return_link);
                                      
				    
                                        $php_file_tree .= "<li class=\"pft-file style=\"color:white;font-family: 'Telex', sans-serif;\" " . strtolower($ext) . "\"><a href='submit.php?file=".$link."'>" . htmlspecialchars($this_file). "</a></li>";
				       
                                }
			}
		}
		$php_file_tree .= "</ul>";
	}
	return $php_file_tree;
}

// For PHP4 compatibility
function php4_scandir($dir) {
	$dh  = opendir($dir);
	while( false !== ($filename = readdir($dh)) ) {
	    $files[] = $filename;
	}
	sort($files);
	return($files);
}

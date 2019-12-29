/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
    return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

$(function () {
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	ClassicEditor
	  .create(document.querySelector('#editor1'), {
	    toolbar: [ 
	   	'Heading', 
		'bold', 
		'italic', 
		'bulletedList', 
		'numberedList', 
		'blockQuote', 
		'Link',
		'undo',
		'redo' ]
	            })
	  .then(function (editor) {
	    // The editor instance
	  })
	  .catch(function (error) {
	    console.error(error)
	  })
            
	// bootstrap WYSIHTML5 - text editor
            
	$('.textarea').wysihtml5({
	  toolbar: { fa: true }
	})
              });

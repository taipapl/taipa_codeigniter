/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

  config.toolbar_Full =
[
  { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
  { name: 'editing', items : [ 'Find','Replace','-','SelectAll' ] },
  { name: 'links', items : [ 'Link','Unlink' ] },
  { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
  '/',
  { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote',
  '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
  { name: 'colors', items : [ 'TextColor','BGColor' ] },
  { name: 'insert', items : [ 'Image','Table','HorizontalRule'] },
  '/',
  { name: 'styles', items : [ 'Styles','Format','Font','FontSize', 'Source', 'About' ] }

];


config.filebrowserBrowseUrl = '../../../assets/elFinder/elfinder.html'; 

config.filebrowserUploadUrl= '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

	
config.filebrowserWindowWidth = '800';
config.filebrowserWindowHeight = '450';



};

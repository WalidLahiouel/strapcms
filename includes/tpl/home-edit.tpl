<script src="%www%/web-gallery/static/js/homeedit.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
document.observe("dom:loaded", function() { initView(%qryId%, <?php echo USER_ID; ?>); });
function isElementLimitReached() {
	if (getElementCount() >= 200) {
		showHabboHomeMessageBox("You've used the max amount of widgets for your homepage. Please remove some to add some more. ", "Error", "Close");
		return true;
	}
	return false;
}

function cancelEditing(expired) {
	location.replace("/myhabbo/cancel/%qryId%" + (expired ? "?expired=true" : ""));
}

function getSaveEditingActionName(){
	return '/myhabbo/save';
}

function showEditErrorDialog() {
	var closeEditErrorDialog = function(e) { if (e) { Event.stop(e); } Element.remove($("myhabbo-error")); Overlay.hide(); };
	var dialog = Dialog.createDialog("myhabbo-error", "", false, false, false, closeEditErrorDialog);
	Dialog.setDialogBody(dialog, '<p>Error, please try again in a few minutes.</p><p><a href="#" class="new-button" id="myhabbo-error-close"><b>Close</b><i></i></a></p><div class="clear"></div>');
	Event.observe($("myhabbo-error-close"), "click", closeEditErrorDialog);
	Dialog.moveDialogToCenter(dialog);
	Dialog.makeDialogDraggable(dialog);
}


function showSaveOverlay() {
	var invalidPos = getElementsInInvalidPositions();
	if (invalidPos.length > 0) {
	    $A(invalidPos).each(function(el) { Element.scrollTo(el);  Effect.Pulsate(el); });
	    showHabboHomeMessageBox("¡Ehhh! ¡No puedes hacer eso!", "Lo sentimos, pero no puedes colocar notas, etiquetas o elementos aquí. Cierra la ventana para continuar editando tu página.", "Cerrar");
		return false;
	} else {
		Overlay.show(null,'Guardando');
		return true;
	}
}
</script><script type="text/javascript" src="%www%/web-gallery/js/myhabbo-store.js"></script>
function anti_right()
{
	alert('Right Clic not authorized!');
	return(false);
}
document.oncontextmenu = anti_right;
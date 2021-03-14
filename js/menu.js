function showMenu(action)
{
	if (action == 'show')
	{
		document.getElementById('nav').className = 'header-nav active';
	}
	else
	{
		document.getElementById('nav').className = 'header-nav';
	}

}


var i = 0;
var cookies = document.cookie;
if (document.cookie && document.cookie != "")
{
	var splitCookies = document.cookie.split(';');
	var len = splitCookies.length;
	var i = 0;
	var maxnum = 0;
	while (i < len)
	{
		var element = splitCookies[i].split("=");
		var parentElement = document.getElementById("ft_list");
		if (parentElement)
		{
			var firstChild = parentElement.firstChild;
			var oneToDo = document.createElement("div");
			oneToDo.setAttribute("id", element[0].trim());
			oneToDo.setAttribute("onclick", "deletetask('" + element[0].trim() + "');");
			var text = document.createTextNode(element[1]);
			oneToDo.appendChild(text);
			parentElement.insertBefore(oneToDo, firstChild);
			var num = element[0].split('o');
			//var num = element[0].substr(5, element[0].length)
			if (num[2] > maxnum)
				var maxnum = parseInt(num[2]);
		}
		i++;
	}
}

if (maxnum > 0)
	i = maxnum + 1;

function deletetask(id)
{
	if (confirm("Delete task?"))
	{
		var list = document.getElementById("ft_list");
		var div = document.getElementById(id);
		list.removeChild(div);
		document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	}
}
function add()
{
	if (todo = prompt("Enter new task"))
	{
		var parentElement = document.getElementById("ft_list");
		var firstChild = parentElement.firstChild;
		var oneToDo = document.createElement("div");
		oneToDo.setAttribute("id", "todo" + i);
		oneToDo.setAttribute("onclick", "deletetask('todo" + i + "');");
		var text = document.createTextNode(todo);
		oneToDo.appendChild(text);
		parentElement.insertBefore(oneToDo, firstChild);
		document.cookie = "todo" + i + "=" + todo + ";";
		i++;
	}
}



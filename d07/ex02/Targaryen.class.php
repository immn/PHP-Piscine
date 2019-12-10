<?php
	class Targaryen
	{
		function resistsFire()
		{
			return false;
		}
		function getBurned()
		{
			$fire = $this->resistsFire();
			if ($fire)
			{
				return("emerges naked but unharmed");
			}
			else
			{
				return("burns alive");
			}
		}
	}
?>

<?php
	class NightsWatch implements IFighter
	{
		private $recruit = array();
		public function recruit($m){$this->recruit[] = $m;}
		function fight()
		{
			foreach ($this->recruit as $m)
			{
				if (method_exists(get_class($m), 'fight'))
					$m->fight();
			}
		}
	}
?>
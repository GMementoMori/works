<?php

use App\Controller\News\News;

$block = new News();

require __DIR__."/../../public/html/headAbout.html"; //require tag head

$fullInfo = $block -> getInfoById($id_news);

foreach ($fullInfo as $key => $value) {
		switch ($key) {
			case 1:
				$title = $value;
				break;
			case 3:
				$full_descriptions = $value;
				break;
			case 4:
				$publication_date = $value;
				break;

		}
}
require __DIR__."/frontend/templates/full_descriptions.html"; //require template with div news

require __DIR__."/../../public/html/foot.html"; //require footer html
?>

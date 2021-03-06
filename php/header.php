<?php
class Header
{
	public static function menuContent($items, $currentUrl) {
		$output = '';
		foreach ($items as $item) {
			if (property_exists($item, 'skipMenuEntry') &&  $item->skipMenuEntry) {
				continue;
			}
			$label = ucfirst($item->title);
			if (empty($label)) {
				continue;
			}
			$url = Utils::getBaseUrl() . $item->url;
			$class = $currentUrl == $item->url ? 'selected' : '';
			$output .= <<<HTML
				<li class="{$class}">
					<a href="{$url}">{$label}</a>
				</li>

HTML;
		}
		return $output;
	}

}

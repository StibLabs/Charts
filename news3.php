 <?php
    	$rss = new DOMDocument();
    	$rss->load('http://feeds.feedburner.com/CoinDesk?format=xml');
    	$feed = array();
    	foreach ($rss->getElementsByTagName('item') as $node) {
    		$item = array ( 
    			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    			);
    		array_push($feed, $item);
    	}
    	$limit = 3;
    	for($x=0;$x<$limit;$x++) {
    		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    		$link = $feed[$x]['link'];
    		$description = $feed[$x]['desc'];
    		$date = date('l F d, Y', strtotime($feed[$x]['date']));
                                echo "<div class=\"nbox\" >";
    		echo '<strong><a href="'.$link.'" target="_blank" title="'.$title.'">'.$title.'</a></strong><br />';
    		echo '<small><em>Posted on '.$date.'</em></small>';
    		
                                echo "</div>";
    	}
    ?>














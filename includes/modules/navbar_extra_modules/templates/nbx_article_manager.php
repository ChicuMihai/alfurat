<?php

////
// Return true if the topic has subtopics
// TABLES: topics
  function tep_in_has_topic_subtopics($topic_id) {
    $child_topic_query = tep_db_query("SELECT COUNT(*) as count from topics where parent_id = '" . (int)$topic_id . "'");
    $child_topic = tep_db_fetch_array($child_topic_query);

    if ($child_topic['count'] > 0) {
      return true;
    } else {
      return false;
    }
  }

    ////
    // Get the topics from the database and load them into a tree array
    function get_subtopics( $parent_id ) {
      if( tep_in_has_topic_subtopics( $parent_id ) ) {
        global $languages_id;

        $topics_data = array ();
        // Retrieve the data on the subtopics
        $topics_query_raw = "select c.topics_id, c.parent_id, cd.topics_name
          from topics_description cd
            join topics c on (c.topics_id = cd.topics_id)
          where
            c.parent_id = '" . ( int ) $parent_id . "'
            and cd.language_id = '" . ( int ) $languages_id . "'
		  order by c.sort_order, cd.topics_name";

        //print 'topics Query: ' . $topics_query_raw . '<br />';
        $topics_query = tep_db_query( $topics_query_raw );

        // Load the subcategory data into an array
        $index = 0;
        while( $topics = tep_db_fetch_array( $topics_query ) ) {
          $topics_id = ( int )$topics['topics_id'];
          //$path_string = $this->get_category_path( $topics_id );
		  $path_string = get_topic_path( $topics_id );

          if ($topics_id != 0) {
            $topics_data[$index] = array (
              'id' => $topics_id,
              'name' => $topics['topics_name'],
              'parent_id' => $topics['parent_id'],
              'path' => $path_string
            );

            // If the category has subcats, add them to the array
            if( tep_in_has_topic_subtopics( $topics_id ) ) {
              //$topics_data[$index]['subcat'] = $this->get_subtopics( $topics_id );
			  $topics_data[$index]['subcat'] = get_subtopics( $topics_id );
            } else {
              $topics_data[$index]['subcat'] = false;
            }
          } // if( $topics_id
          
          $index++;
        } //while ($topics

        return $topics_data;
      } else {
        return false;
      }
    }

	////
    // Format the category tree with the correct HTML
    function format_data( $data_array, $pass = false ) {
      if( is_array( $data_array ) && count( $data_array ) > 0 ) {
        if( $pass == false ) {
          $output = '<ul class="dropdown-menu">' . PHP_EOL;
        } else {
          //$output = '    <ul>' . PHP_EOL;
		  //$output = '    <ul class="dropdown-menu">' . PHP_EOL;
        }
        
        foreach( $data_array as $category ) {
		  
          if( $category['subcat'] !== false ) {
			$output .= '<li class="dropdown-submenu">' . PHP_EOL;
			$output .= '<a data-toggle="dropdown"><i class="fa fa-file-text-o"></i> ' . $category['name'] . '</a>' . PHP_EOL;
			$output .= '<ul class="dropdown-menu">' . PHP_EOL;
			$output .= '<li class="dropdown-header"> ' . $category['name'] . '</li>' . PHP_EOL;
			$output .= format_data( $category['subcat'], true ) . PHP_EOL;
			$output .= '</ul>' . PHP_EOL;
			$output .= '</li>' . PHP_EOL;
          } else {
			$output .= '<li>';
			$output .= '<a href="' . tep_href_link( 'articles.php', $category['path'], 'NONSSL' ) . '">';
			$output .= '<i class="fa fa-file-text-o"></i> ' . $category['name'] . '</a></li>' . PHP_EOL;
		  }
        }
		
		if( $pass == false ) {
			$output .= '			</ul>' . PHP_EOL;
        }
        return $output;

      } else {
        return false;
      }
    } //private function format_data
	
	    ////
    // Generate a path to categories
    function get_topic_path( $topic_id ) {
      if( tep_not_null( $topic_id ) ) {
        $cPath_new = '';
        $topic = array (); // Initialize the array so the function doesn't complain
        tep_get_parent_categories($topic, $topic_id);

        $topic = array_reverse($topic);

        $cPath_new .= implode('_', $topic);
        if (tep_not_null($cPath_new))
          $cPath_new .= '_';
        $cPath_new .= $topic_id;

        return 'tPath=' . $cPath_new;
      }

      return false;
    } // private function get_category_path(
	
?>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i><span class="hidden-sm"> <?php echo MODULE_NAVBAR_EXTRA_ARTICLE_MANAGER_PUBLIC_TEXT; ?></span> <span class="caret"></span></a>
<?php
global $languages_id;

      // Get the category tree array
      $topic_tree = get_subtopics(0);

      // feed the tree array to the formatting method
      $formatted_data = format_data( $topic_tree );

	  echo $formatted_data;

?>
          </li>
 
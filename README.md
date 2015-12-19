#WP Configuration Notes -- New projects

####1) Set Front-Page to `Home` and Posts to `Blog` Pages 
in wp-adming panel: *Settings > Reading : 'Front Page Displays'*

####2) Get the boilerplate project plugins
1 - Copy boilerplate wp-plugins to folder .`/wp-content/plugins/`
2 - activate the plugins in wp-admin area

####3) Import the Pages, Field Groups, Portfolio


####4) Importing Custom Post types
####Import the Post Type
1-- Inside **wp_admin panel** , copy and paste the text below into the *Import* dialogue box contained in: `CPT UI  >  Import/Export ` and select 'Import' button

2-- Go to `CPT UI > Add/Edit Post Types` and save the post 

```
{"portfolio":{"name":"portfolio","label":"Portfolio","singular_label":"Portfolio Piece","description":"post type for displaying portfolio items","public":"true","show_ui":"true","has_archive":"false","has_archive_string":"","exclude_from_search":"false","capability_type":"post","hierarchical":"false","rewrite":"true","rewrite_slug":"","rewrite_withfront":"true","query_var":"true","menu_position":"","show_in_menu":"true","show_in_menu_string":"","menu_icon":"","supports":["title","editor","excerpt","trackbacks","custom-fields","revisions","thumbnail"],"taxonomies":[],"labels":{"menu_name":"","all_items":"","add_new":"","add_new_item":"","edit":"","edit_item":"","new_item":"","view":"","view_item":"","search_items":"","not_found":"","not_found_in_trash":"","parent":""},"custom_supports":""}}
```

3-- Configure Custom Field
- **Field Label** : Link
- **Field name**: link
- **Field Type**: text

##MiSC NOTEs
####To get image from template directory 
Directory: `img src="<?php bloginfo('template_directory'); ?> «rel-file-path»"`

####Note, custom widgets are created in `function.php`
```
function create_widget($name, $id, $description){

    $widget_options = [
      'name' => __($name),
      'id' => $id,
      'description' => __($description),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ];

    register_sidebar($widget_options);
  }

  create_widget('Front Page Left', 'front-left', 'Displays on left of hompage');
  create_widget('Front Page Center', 'front-center', 'Displays on center of hompage');
  create_widget('Front Page Right', 'front-right', 'Displays on right of hompage');

  create_widget('Page Sidebar', 'page', 'Displays on pages w sidebar');
  create_widget('Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section');


```

####To fix 

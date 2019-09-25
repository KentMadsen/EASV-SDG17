<?php 
// How to retrieve all posts
    $all_posts = get_posts();

    $i = 0;

    for( $i = 0; 
         $i < count( $all_posts ); 
         $i ++ )
    {
        $post = get_post( $all_posts[$i] -> ID );

        echo "<p>";
        echo $post->post_title;
        echo "</p>";
                    
        echo "<p>";
        echo $post->post_type;
        echo "</p>";

        echo "<p>";
        echo $post->post_status;
        echo "</p>";

        echo "<p>";
        echo $post->post_content;
        echo "</p>";

    }
?> 


<?php 
    $pages = get_pages();
    $i = 0;
        
    for( $i = 0; 
         $i < count($pages); 
         $i++)
    {
        $page = $pages[$i];
        echo $page -> post_title;
        echo $page -> post_content;
    }
?>
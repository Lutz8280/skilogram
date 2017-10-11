<?php
require('header.php');
require('const_var.php');
?>
<div class="content">
    <?php
    foreach ($posts as $value) {
    '<div class="post">
        <div class="post-author-container">
            <div class="avatar">
                <img src=' .
                    echo $value['author']['avatar'] .
                    'height="40px"; width="40px">    
            </div>
            <div class="post-author-id">
                <div class="post-author">' .
                    echo $value['author']['user_name'] .
                '</div>
                <div class="post-date">' .
                    echo $value['author']['post_time'] .
                '</div>
            </div>
        </div>
        <div class="post-foto">
            <img src=' .                    
                echo $value['photo'] .
                'width="400px" height="250px">
        </div>
        <div class="post-comments">
            <div class="post-comments-like">
                <img src=' .                  
                    echo heart_img; .
                    'height="40px"; width="40px"> 
            </div>
            <div class="post-comments-like-number">' .
                echo $value['like_number'] .
            '</div> 
        </div>     
        <div class="post-tegs">' .
                echo $value['comments'] 
                /*for ($i = 0; $i < count($post['tags']); $i++) {                //классический for
                    echo ' <a href="Мемасик1.html">' . $post['tags'][$i] . '</a>';
                }*/     
                foreach ($value['tags'] as $value1) {
                    echo ' <a href="Мемасик1.html">' . $value1 . '</a>';
                } .              
                /*<a href="Мемасик1.html">#еда </a>
                <a href="Мемасик1.html">#жизнь </a>
                <a href="Мемасик1.html">#доволен </a>*/
        '</div>
    </div>'
    }
    ?>
<!-- Начало второго блока -->



</div>
<?php
require('footer.php')
?>
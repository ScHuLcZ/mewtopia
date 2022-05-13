<!-- 4. Excercise: Create a page for an image gallery. Make possible uploading new images
megoldás: The image gallery can be found at the Gallery menu, and you can upload images under the Upload a Photo menu.
--> 


<section>
    <div id="images">
        <h1 class="center">Photos</h1>
        <?php
        arsort($images);
        foreach($images as $file => $date)
        {
        ?>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="<?php echo $FOLDER.$file ?>">
                    <img src="<?php echo $FOLDER.$file ?>">
                </a>             
            </div>
            <div class="clearfix"></div>
        </div>
        
        <?php
        }
        ?>
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br>






  
    
      
    
    
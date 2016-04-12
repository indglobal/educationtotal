<?php
                       foreach($cat as $cut){
                     ?>
                     <div class="header-serch-wrp">
                            <select style="font-family: 'FontAwesome'">
                                <option>&#xf036; All Categories</option>
                                <option>
                                <?php echo $cut->subcat_second_name;?>
                                </option>
                                </select>
                     <?php
} ?>
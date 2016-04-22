<div id="search_result">
                        <?php   
                         if(count($result)){
                        foreach($result as $res)
                        {   ?>
                        <div class="col-sm-8 postdata">
                                <ul class="result">
                                    <li style="height: auto;"><div style="float:left;">
                                    <a href="edu.html">
                                        <img src="<?php echo  base_url().$res->logo; ?>" alt="Demo other" height="150" width="98">
                                    </a>
                                </div>
                                <div class="search_content">
                                <h3><a href="<?php echo base_url();?>service/search_result_service/<?php echo $res->service_id;?>"><?php echo  $res->school_name; ?></a></h3>
                                <p><?php echo  $res->state; ?>, <?php echo  $res->district; ?></p>
                                <p class="rating"></p>
                                <div id="post-ratings-163" class="post-ratings">
                                    <img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
                                    <img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
                                    <img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
                                    <img src="<?php echo base_url();?>images/rating_off.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
                                    <img src="<?php echo base_url();?>images/rating_off.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
                                    <em>2 Reviews</em>
                                </div>
                                <div id="post-ratings-163-loading" class="post-ratings-loading">
                                    <img src="<?php echo base_url();?>images/loading.gif" alt="Loading..." title="Loading..." class="post-ratings-image" height="16" width="16">Loading...
                                </div><p></p>

                                <small>Established in: <?php echo  $res->year_established; ?></small>
                                <small>Avaliable Facility:</small>
                                <ul>
                                    <li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/books.jpg"> </li>
                                <li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/bad.jpg">  </li>
                                <li> <img class="tooltip tooltipstered" src="<?php echo base_url();?>images/lemp.jpg"> </li>
                                <li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/food.jpg">  </li>
                                </ul>
                                </div>
                          
                            </li></ul>  
                        </div>
                        <?php  }
                        }
                        else{ ?>
                            <div class="col-sm-8 top_header">
                                <span class="foundcount">No Results found</span>                
                        </div>
                    <?php   }  ?>  
                </div>












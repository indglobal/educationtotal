<!DOCTYPE html>
<html class="ng-scope" ng-app="">
           <style type="text/css">.main { 
                width: 900px; 
                margin: 0 auto; 
                height: 700px;
                border: 1px solid #ccc;
                padding: 20px;
            }

            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }

            #dv1, #dv0{
                width: 408px;
                border: 1px #ccc solid;
                padding: 15px;
                margin: auto;

            }
           
            /*downloaded from http://devzone.co.in*/
        </style>
        <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    </head>
    <center.<body>
                <div class="heading">Fourm Discussion</div>
                <h5>RATINGS:</h5>
                <h1>Showing avrage rating</h1>

<?php 
foreach ($cat as $getAvgRating) 
{
?>
<?php echo $getAvgRating=$getAvgRating['rate'];?> 
<?php } ?>


<?php $j=round($getAvgRating); ?>
In Round=> <?php echo $j; ?>
<h2>
<fieldset id='demo2' disabled class="rating">


<input class="stars" type="radio" id="star5" name="rating" value="5"
<?php if($j==5){?>checked<?php }?> />
<label class = "full" for="star5" title="Awesome - 5 stars"></label>


<input class="stars" type="radio" id="star4half" name="rating" value="4.5" 
<?php if($j==4.5){?>checked<?php }?> />
<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>


<input class="stars" type="radio" id="star4" name="rating" value="4" 
<?php if($j==4){?>checked<?php }?> />
<label class = "full" for="star4" title="Pretty good - 4 stars"></label>


<input class="stars" type="radio" id="star3half" name="rating" value="3.5"
 <?php if($j==3.5){?>checked<?php }?>/>
<label class="half" for="star3half" title="Meh - 3.5 stars"></label>


<input class="stars" type="radio" id="star3" name="rating" value="3" 
<?php if($j==3){?>checked<?php }?> />
<label class = "full" for="star3" title="Meh - 3 stars"></label>


<input class="stars" type="radio" id="star2half" name="rating" value="2.5" 
<?php if($j==2.5){?>checked<?php }?>/>
<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>


<input class="stars" type="radio" id="star2" name="rating" value="2" 
<?php if($j==2){?>checked<?php }?>/>
<label class = "full" for="star2" title="Kinda bad - 2 stars"></label>


<input class="stars" type="radio" id="star1half" name="rating" value="1.5" 
<?php if($j==1.5){?>checked<?php }?>/>
<label class="half" for="star1half" title="Meh - 1.5 stars"></label>


<input class="stars" type="radio" id="star1" name="rating" value="1" 
<?php if($j==1){?>checked<?php }?>/>
<label class = "full" for="star1" title="Sucks big time - 1 star"></label>


<input class="stars" type="radio" id="starhalf" name="rating" value="0.5" 
<?php if($j==0.5){?>checked<?php }?>/>
<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset></center>



<div class="container">
<aside id="categ">
    <ul>
        <li>Cars</li>
        <li>Flowers</li>
        <li>Bridges</li>
        <li>Sunsets</li>
    </ul>
</aside>

<div id="content">
    <div>
        <ul>
            <?php $count=sizeof($photoArr); for($i=0; $i<$count;$i++){?>
            <li><p class="photog"><img src="<?php echo base_url();echo 'assets/'.$photoArr[$i]['src']?>"></p>
    	        <ul class="desc">
    		        <li><h1 class="descItem"><?php echo $photoArr[$i]['pTitle']?></h1></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['pDesc']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['camera']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['ISO']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['focal']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['exposure']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['flash']?></h2></li>
    		        <li><h2 class="descItem"><?php echo $photoArr[$i]['modified']?></h2></li>
    		    </ul>
    	    </li>
        <div class="clearfix"></div>
        <?}?>

        </ul>
    </div>
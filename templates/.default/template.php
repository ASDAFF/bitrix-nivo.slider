<!-- HTML шаблон компонента -->
    <div id="wrapper">
        <div id="slider-wrapper">
            <div id="slider" class="nivoSlider">
            <?php foreach ($arResult["ELEMENTS"] as $element):?>
            	<a href="<?php echo $element["URL"];?>">
                	<img src="<?php echo $element["IMAGE"];?>" alt="<?php echo $element["TITLE"];?>" />
                </a>
            <?php endforeach;?>
            </div>           
        </div>
    </div>
<?php $this->layout = 'column3';?>
<!-- <div class="view span-8" style="height:300px;" >
    <h3>
		<?php // echo CHtml::link(CHtml::encode($data->title), array('products/view', 'id' => $data->product_id)); ?>
    </h3>
    
    <div class="product-overview-image">	
          	<?php 
		  	/* if($data->images){
		   		//$this->renderPartial('/image/view', array('thumb' =>true, 'model' => $data->images[0]));
			}else {
				//echo CHtml::image(Yep::register('no-pic.jpg'));
			} */?>
	</div>
    
     <div class="product-overview-description">
        <p> <?php //echo CHtml::encode($data->description); ?> </p>
        <p><strong> <?php //echo Yep::priceFormat($data->price); ?></strong> <br />
        <p><?php //echo Yep::pricingInfo(); ?></p>
      
        <p><?php //echo CHtml::link(Yep::t('View Details'), array('products/view', 'id' => $data->product_id), array('class' =>'show-product')); ?></p>
    </div>
    
    <div class="clear"></div>
</div><div class="view-bottom"></div> -->



<ul class="products_display">
          <li class="span-4" style="border:0px solid red;"> <?php 
		  	if($data->images){
		   		$this->renderPartial('/image/view', array('thumb' =>true, 'model' => $data->images[0]));
			}else {
				echo CHtml::image(Yep::register('no-pic.jpg'));
				
			}
			//Yep::out(ProductDescription::model()->findByAttributes(array('language_id'=>Yii::app()->user->getstate('languageId'),'product_id'=>$data->product_id)));exit;
			?>
			<!-- <p> <?php //echo CHtml::encode($data->description); ?> </p> -->
			<?php $des = ProductDescription::model()->findByAttributes(array('language_id'=>Yii::app()->user->getstate('languageId'),'product_id'=>$data->product_id));?>
            <h3><strong><?php echo CHtml::link(CHtml::encode(is_null($des)?$data->title:$des->title), array('products/view', 'id' => $data->product_id)); ?></strong></h3>
            
            <div class="price"><?php echo Yep::priceFormat($data->price); ?></div>
            <?php echo CHtml::link(Yep::t('View Details'), array('products/view', 'id' => $data->product_id), array('class' =>'add_to_cart')); ?>
            <!-- <input type="button" class="add_to_cart" value="Add To Cart"/><br /> -->
            <?php 
            echo CHtml::beginForm(array('/shoppingcart/create/'));
            echo CHtml::hiddenField('product_id', $data->product_id);
            echo CHtml::hiddenField('amount', 1);
            echo CHtml::submitButton(Yep::t('Add to Cart'), array( 'class' => 'add_to_cart'));
            echo CHtml::endForm();
            ?>
          </li>
          </ul>

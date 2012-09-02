<div class="view span-8" style="height:300px;" >
    <h3>
		<?php echo CHtml::link(CHtml::encode($data->title), array('products/view', 'id' => $data->product_id)); ?>
    </h3>
    
    <div class="product-overview-image">	
          	<?php 
		  	if($data->images){
		   		$this->renderPartial('/image/view', array('thumb' =>true, 'model' => $data->images[0]));
			}else {
				echo CHtml::image(Yep::register('no-pic.jpg'));
			}?>
	</div>
    
     <div class="product-overview-description">
        <p> <?php echo CHtml::encode($data->description); ?> </p>
        <p><strong> <?php echo Yep::priceFormat($data->price); ?></strong> <br />
        <p><?php echo Yep::pricingInfo(); ?></p>
      
        <p><?php echo CHtml::link(Yep::t('View Details'), array('products/view', 'id' => $data->product_id), array('class' =>'show-product')); ?></p>
    </div>
    
    <div class="clear"></div>
</div>
<div class="view-bottom"></div>

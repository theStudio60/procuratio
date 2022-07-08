<div id="popupFrame" class="popup" style=" ">
  <div class="h-100 w-100 d-flex">
    <div class="col-10 col-md-9 col-lg-6 m-auto">  
      <div class="modal-content bg-light">
        <div class="popup__header p-4"> 
          <h4 class="ml-0 mr-auto my-auto modal-title"> <?= the_sub_field('popup_title'); ?></h4>
          <?php /*<img class="img-fluid"  src="<?php echo $logotype[0];?>" alt="<?= get_bloginfo() ?>"> //*/ ?>
          <span id="" class="fa fa-lg fa-times" onclick="closePopup();"></span>

        </div>
        <hr class="bg-dark">
        <div class="modal-body">
          <?= the_sub_field('popup_content'); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="button" onclick="closePopup();" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div> 
</div> 
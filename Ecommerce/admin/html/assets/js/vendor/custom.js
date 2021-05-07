var total_image =1;
function add_more_images(){
    total_image++;
   var html = `<div class ="col-lg-6">
   <label class="form-control-label">add image </label> <input type="file" name="image" class ="form-control" /> 
   <button id="payment-button" name="" class="mt-4 btn btn-lg btn-danger btn-block" value="submit" onclick=remove_images("'+total_image+'") >
   <span id="payment-button-amount">remove</span>
</button>
   </div>
</button>
   `;
   $('#image_box').after(html);
}
function remove_images(){
  
}
<div class="store box" data-type="store" data-latitude="{$vjfStore.latitude}" data-longitude="{$vjfStore.longitude}">
 <p>
   <span class="title" data-type="title">{$vjfStore.name}</span>
   <br>
   <span class="scope" data-type="scope">-{$vjfStore.type}-</span>
   <br>
   <span data-type="address">{$vjfStore.street}</span>,
   <br>
   <span data-type="zipcode">{$vjfStore.zip}</span>&nbsp;<span data-type="city">{$vjfStore.city}</span>,
   <br>
   <span data-type="country">{$vjfStore.country}</span>
   <br>
   <span class="contact" style="display: none;">
     <br>
     <br>
     <br>
     <br>
     <br>
   </span>
   <span class="directions" data-type="directions">
     <label data-type="directions-label">##retailer_route##</label>
     <input class="hidden" type="text" data-type="directions-input">
   </span>
 </p>
</div>

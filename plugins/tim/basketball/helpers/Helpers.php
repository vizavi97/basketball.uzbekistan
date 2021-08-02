<?php


function saveFile($fileFromRequest) {
   return (new System\Models\File)->fromData($fileFromRequest, time().'.'.$fileFromRequest->getClientOriginalExtension());
}
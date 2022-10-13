Route::get('/', function ($persons=10, $pieces=100){

 $menu_array[0] = array(
   "type" => '5 inch', 
    "price" => 3, 
    "pieces_for_size" => 4, 
);

 $menu_array[1] = array(
  "type" => '7 inch',
    "price" => 5, 
    "pieces_for_size" => 6, 
);

 $menu_array[2] = array(
   "type" => '10 inch',
    "price" => 8, 
    "pieces_for_size" => 10, 
);

 $menu_array[3] = array(
   "type" => '15 inch',
    "price" => 12, 
    "pieces_for_size" => 15, 
);

 $menu_array[4] = array(
   "type" => '24 inch',
    "price" => 18, 
    "pieces_for_size" => 24, 
);

 $total_pieces = ($persons*$pieces);
 
 foreach($menu_array as  $key => $array ){
   $costs[]['price'] = ($total_pieces/ $array['pieces_for_size'])*$array['price'];
   $costs[$key]['type'] = $array['type'];
 } 

  dd($costs, min($costs));

});

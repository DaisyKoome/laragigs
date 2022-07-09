<?php

    namespace App\Models;

    class Listing {
        public static function all(){
            return [
                    [
                        'id' => 1,
                        'title' => 'Listing One',
                        'description' => 'Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Aliquam rhoncus ante ac lectus tempor, 
                        eu sollicitudin lacus feugiat. Nullam et laoreet purus. 
                        Donec maximus augue sed justo suscipit, 
                        a condimentum tellus tincidunt.'
                    ],
        
                    [
                        'id' => 2,
                        'title' => 'Listing Two',
                        'description' => 'Sed auctor pulvinar ex. Aliquam mi sapien, 
                        commodo eu nunc et, viverra lobortis nunc. 
                        Pellentesque dui eros, accumsan et euismod eu, 
                        imperdiet vitae enim. Vivamus sed nisi non nisl hendrerit vulputate.'
                    ]
                ];
        }

        public static function find($id){
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }

?>
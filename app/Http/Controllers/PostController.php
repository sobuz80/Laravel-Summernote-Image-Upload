<?php

   

namespace App\Http\Controllers;

   

use Illuminate\Http\Request;

use App\Models\Post;

   

class PostController extends Controller

{

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create()

    {

        return view('postsCreate');

    }

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $this->validate($request, [

             'title' => 'required',

             'body' => 'required'

        ]);

 

       $content = $request->body;

       $dom = new \DomDocument();

       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('img');

 

       foreach($imageFile as $item => $image){

           $data = $image->getAttribute('src');

           list($type, $data) = explode(';', $data);

           list(, $data)      = explode(',', $data);

           $imgeData = base64_decode($data);

           $image_name= "/upload/" . time().$item.'.png';

           $path = public_path() . $image_name;

           file_put_contents($path, $imgeData);

           

           $image->removeAttribute('src');

           $image->setAttribute('src', $image_name);

        }

 

       $content = $dom->saveHTML();

       $post = Post::create([

            'title' => $request->title,

            'body' => $content

       ]);

 

       dd($post->toArray());

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    
        $title = '';
        /*$pages_title ="home";*/
        /**return view('pages.index, compact'title'); isa nother way of sending title data from the pages controller to any page here it is the index page */
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        /*Also in the About us page the same as above
        But there is another way by echoing this title from the about page */
        $title = 'About Us';
        return view('pages.about')-> with('title', $title);
    }

    public function services(){
        /*Also in the About us page the same as above
        But there is another way by echoing this title from the about page */
                    $data = array(
                        'title' => 'services',
                        'services' => ['web Design', 'programming', 'SEO']
                    );
                return view('pages.services')-> with($data);
    }

    public function user(){
        /*Also in the About us page the same as above
        But there is another way by echoing this title from the about page */
        $usrdata = array(
            'usr' => 'posts',

            'posts' => ['Post::all()'],
        );
    
    return view('blog.user')-> with($usrdata);
}

    public function download(){
        /*Also in the About us page the same as above
        But there is another way by echoing this title from the about page */
        $title = 'download';
        return view('pages.download');
    }

    public function blog(){
        /*Also in the About us page the same as above
        But there is another way by echoing this title from the about page */
        $title = 'download';
        return view('blog.welcome');
    }

  

}
